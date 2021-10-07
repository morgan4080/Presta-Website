<template>
    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">
        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Weekly Page Views</div>
            </div>

            <div>
                <canvas id="analyticsChart" class="h-96 w-full"></canvas>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Top browsers monthly</div>
            </div>

            <div class="h-full">
                <div class="mt-4 text-sm text-gray-500 h-96">
                    <canvas id="topbrowsers" class=""></canvas>
                </div>
            </div>
        </div>

        <div class="p-6">
            <div class="flex items-center">
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">User types</div>
            </div>

            <div class="h-full">
                <div class="mt-4 text-sm text-gray-500 h-96">
                    <canvas id="usertypes" class=""></canvas>
                </div>
            </div>
        </div>

        <div class="p-6">
        <div class="flex items-center">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Top referer websites monthly</div>
        </div>

        <div class="h-full">
            <div class="mt-2 text-sm text-gray-500 h-full">
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="px-4 py-2 text-left">Referer</th>
                        <th class="px-4 py-2 text-left">Views</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="topReferers in analytics.topReferers">
                        <td class="border px-4 py-2">{{ topReferers.url }}</td>
                        <td class="border px-4 py-2">{{ topReferers.pageViews }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    import forEach from 'lodash/forEach'
    import { reactive, toRefs, onMounted } from "vue"
    import { Chart, registerables } from 'chart.js'
    Chart.register(...registerables);

    export default {
        props: {
            analytics: Object,
        },
        setup(props) {

            const { analytics } = toRefs(props)

            const state = reactive({
                forEach: forEach,
                analyticsChart: null,
                months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                dateObs: null,
                pageData: null,
                colors: ['#13ed9a', '#0daf71', '#7ca882', '#a1b995', '#69d496', '#ddddc8', '#aeaba1', '#ead9bf', '#e4bf9b'].sort(() => Math.random() - 0.5),
                maxy: null,
                miny: null,
                viewTotals: [],
            })

            const datesObjects = (arrayObjects) => {
                // calculate days from date objects
                return arrayObjects.reduce((groups, obj) => {

                    let date = obj.date.split('T')[0];

                    if (!groups[date]) {
                        groups[date] = [];
                    }

                    groups[date].push(obj);

                    return groups;
                }, {});
            }

            const labelNames = () => {
                let names = [];
                for (const property in state.dateObs) {
                    if (state.dateObs.hasOwnProperty(property)) {
                        names.push(property)
                    }
                }
                return names
            }

            const generateDatasets = (raw) => {
                let datasets = [];
                let count = 0;
                for (const property in raw) {
                    if (raw.hasOwnProperty(property)) {
                        let arr1 = [];

                        for(const or in raw[property]) {
                            if (raw[property].hasOwnProperty(or)) {
                                arr1[or] = raw[property][or][0].visitors;
                            }
                        }

                        let dataArr = [];

                        forEach(labelNames(), (label, index) => {
                            if (arr1.hasOwnProperty(label)){
                                dataArr.push(arr1[label])
                            } else {
                                dataArr.push(0)
                            }
                        });

                        console.log(property, dataArr);
                        state.viewTotals.push({
                            name: property,
                            totalViews: dataArr.reduce((a, b) => a + b, 0),
                            color: state.colors[count],
                        });

                        datasets.push({
                            label: property,
                            backgroundColor: state.colors[count],
                            borderColor: state.colors[count],
                            data: dataArr,
                            // borderDash: [5, 5],
                            fill: false,
                        });

                        count++
                    }
                }

                return datasets
            }

            const chartOptions = () => {
                return {
                    type: 'line',
                    data: {
                        labels: labelNames(),
                        datasets: generateDatasets(state.pageData)
                    },
                    options: {
                        maintainAspectRatio: false,
                        title: {
                            display: false,
                            text: ''
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: false,
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: ''
                                }
                            }],
                            yAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Views Per Page'
                                },
                                ticks: {
                                    // the data minimum used for determining the ticks is Math.min(dataMin, suggestedMin)
                                    suggestedMin: state.miny * -1,

                                    // the data maximum used for determining the ticks is Math.max(dataMax, suggestedMax)
                                    suggestedMax: state.maxy + 2
                                }
                            }]
                        }
                    }
                }
            }

            let browserLabels = [];

            let browserDataset = [];

            let backgroundColor = [];

            forEach(analytics.value.topBrowsers, (brow, index) => {
                browserLabels.push(brow.browser);
                browserDataset.push(brow.sessions);
                backgroundColor.push(state.colors[index])
            });


            let donut1Config = {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: browserDataset,
                        backgroundColor: backgroundColor,
                        label: 'Dataset 1'
                    }],
                    labels: browserLabels
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: ''
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            }

            let userTypeLabels = []

            let userTypeDataset = []

            let backgroundColor1 = []

            forEach(analytics.value.userTypes, (user, index) => {
                userTypeLabels.push(user.type);
                userTypeDataset.push(user.sessions);
                backgroundColor1.push(state.colors[index])
            })

            let donut2Config = {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: userTypeDataset,
                        backgroundColor: backgroundColor1,
                        label: 'Dataset 1'
                    }],
                    labels: userTypeLabels
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: ''
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            }

            onMounted(() => {

                let donutChart1 = new Chart(document.getElementById('topbrowsers').getContext('2d'), donut1Config)

                let donutChart2 = new Chart(document.getElementById('usertypes').getContext('2d'), donut2Config)
            })

            state.miny = analytics.value.visitorsPerPage.reduce((min, p) => p.visitors < min ? p.visitors : min, analytics.value.visitorsPerPage[0] ? analytics.value.visitorsPerPage[0].visitors : analytics.value.visitorsPerPage[0]);

            state.maxy = analytics.value.visitorsPerPage.reduce((max, p) => p.visitors > max ? p.visitors : max, analytics.value.visitorsPerPage[0] ? analytics.value.visitorsPerPage[0].visitors : analytics.value.visitorsPerPage[0]);

            console.log(state.maxy, state.miny);

            state.dateObs = datesObjects(analytics.value.visitorsPerPage)

            // evaluate page names

            let allPages = () => {
                let pages = [];
                forEach(analytics.value.visitorsPerPage, (obj) => {
                    let page = obj.pageTitle;
                    let pos = pages.indexOf(page);
                    if (pos === -1) {
                        pages[page] = page;
                    }
                });

                return pages;
            };

            const pages = allPages(); // page names

            state.pageData = analytics.value.visitorsPerPage.reduce((groups, obj) => {
                let page = obj.pageTitle;
                page = pages[page];
                if (!groups[page]) {
                    groups[page] = [];
                }

                groups[page].push(obj);

                return groups
            }, []);

            let pageDataWithDays = () => {
                let pages = [];

                for ( const property in state.pageData) {
                    if (state.pageData.hasOwnProperty(property)) {
                        pages[property] = datesObjects(state.pageData[property]);
                    }
                }

                return pages;
            };


            state.pageData = pageDataWithDays();

            onMounted(() => {
                let ctx = document.getElementById('analyticsChart').getContext('2d');

                state.analyticsChart = new Chart(ctx, chartOptions());
            })

            return {
                analytics
            }

        }
    }
</script>
