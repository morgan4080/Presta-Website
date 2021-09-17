<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Carbon;
use Inertia\Inertia;
use Analytics;
use Spatie\Analytics\Period;

class DashboardController extends Controller
{
    protected $topReferrers;
    protected $visitorsAndPageViews;
    protected $userTypes;
    protected $topBrowsers;

    public function index(): \Inertia\Response
    {
        $this->topBrowsers = function () {
            $maxResults = 10;

            $response = Analytics::performQuery(
                Period::months(1),
                'ga:sessions',
                [
                    'dimensions' => 'ga:browser',
                    'sort' => '-ga:sessions',
                ]
            );

            $topBrowsers = collect($response['rows'] ?? [])->map(function (array $browserRow) {
                return [
                    'browser' => $browserRow[0],
                    'sessions' => (int) $browserRow[1],
                ];
            });

            if ($topBrowsers->count() <= $maxResults) {
                return $topBrowsers;
            }

            return $this->summarizeTopBrowsers($topBrowsers, $maxResults);
        };

        // fetch user types

        $this->userTypes = function () {
            $response = Analytics::performQuery(
                Period::months(1),
                'ga:sessions',
                [
                    'dimensions' => 'ga:userType',
                ]
            );

            return collect($response->rows ?? [])->map(function (array $userRow) {
                return [
                    'type' => $userRow[0],
                    'sessions' => (int) $userRow[1],
                ];
            });
        };

        //fetch top referer s for today and the past week

        $this->topReferers = function () {
            $maxResults = 20;
            $response = Analytics::performQuery(
                Period::months(1),
                'ga:pageviews',
                [
                    'dimensions' => 'ga:fullReferrer',
                    'sort' => '-ga:pageviews',
                    'max-results' => $maxResults,
                ]
            );

            return collect($response['rows'] ?? [])->map(function (array $pageRow) {
                return [
                    'url' => $pageRow[0],
                    'pageViews' => (int) $pageRow[1],
                ];
            });
        };

        //fetch visitors and page views for the past week

        $this->visitorsAndPageViews = function () {
            $response = Analytics::performQuery(
                Period::days(7),
                'ga:users,ga:pageviews',
                ['dimensions' => 'ga:date,ga:pageTitle']
            );
            // Carbon::createFromFormat('Ymd', $dateRow[0])
            return collect($response['rows'] ?? [])->map(function (array $dateRow) {
                return [
                    'date' => Carbon::createFromFormat('Ymd', $dateRow[0]),
                    'pageTitle' => $dateRow[1],
                    'visitors' => (int) $dateRow[2],
                    'pageViews' => (int) $dateRow[3],
                ];
            });
        };

        $visitorsAndPageViews = $this->visitorsAndPageViews;

        $userTypes = $this->userTypes;

        $topReferrers = $this->topReferers;

        $topBrowsers = $this->topBrowsers;

        return Inertia::render('Dashboard/Index',
            [
                'analytics' => [
                    'visitorsPerPage' => $visitorsAndPageViews,
                    'topReferers' => $topReferrers,
                    'userTypes' => $userTypes,
                    'topBrowsers' => $topBrowsers,
                ],
                'chartJsCss' => 'css/Chart.min.css'
            ]
        );

    }

    protected function summarizeTopBrowsers(Collection $topBrowsers, int $maxResults): Collection
    {
        return $topBrowsers
            ->take($maxResults - 1)
            ->push([
                'browser' => 'Others',
                'sessions' => $topBrowsers->splice($maxResults - 1)->sum('sessions'),
            ]);
    }
}
