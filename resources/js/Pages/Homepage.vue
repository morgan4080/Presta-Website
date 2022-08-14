<template>
    <Head title="Home | Presta Capital" />

    <NavigationHome />

    <div class="min-h-screen bg-white">
        <!-- Plug appropriate version of navigation... -->

        <main>
            <div>
                <!-- Carousel -->
<!--                <Carousel :sliders="sliders" :context="'homepage'" />-->
                <LandingHeader></LandingHeader>

                <!-- Logos -->
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-blue-presta3 sm:text-4xl">
                            Featured Customers
                        </h3>
                        <p class="mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
                            Trusted by over 80 Lenders and 70,000 Customers
                        </p>
                        <div class="mt-6 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img src="/images/logos/Bat-Sacco.svg" alt="Tuple" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img src="/images/logos/Ketepa-Sacco.svg" alt="Mirage" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img src="/images/logos/unga-Sacco.svg" alt="StaticKit" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
                                <img src="/images/logos/Rubani-Sacco.svg" alt="Transistor" />
                            </div>
                            <div class="col-span-2 flex justify-center md:col-span-2 md:col-start-4 lg:col-span-1">
                                <img src="/images/logos/Resolution-Insurance.svg" alt="Workcation" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The Platform -->
                <div class="bg-gray-100 overflow-hidden">
                    <div class="relative">
                        <div class="absolute inset-y-0 h-full w-full" aria-hidden="true">
                            <div class="relative h-full">
                                <svg class="absolute right-full transform translate-y-1/3 translate-x-1/4 md:translate-y-1/2 sm:translate-x-1/2 lg:translate-x-full" width="404" height="784" fill="none" viewBox="0 0 404 784">
                                    <defs>
                                        <pattern id="e229dbec-10e9-49ee-8ec3-0286ca089edf" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                        </pattern>
                                    </defs>
                                    <rect width="404" height="784" fill="url(#e229dbec-10e9-49ee-8ec3-0286ca089edf)" />
                                </svg>
                                <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 sm:-translate-x-1/2 md:-translate-y-1/2 lg:-translate-x-3/4" width="404" height="784" fill="none" viewBox="0 0 404 784">
                                    <defs>
                                        <pattern id="d2a68204-c383-44b1-b99f-42ccff4e5365" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                        </pattern>
                                    </defs>
                                    <rect width="404" height="784" fill="url(#d2a68204-c383-44b1-b99f-42ccff4e5365)" />
                                </svg>
                            </div>
                        </div>
                        <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                            <h3 class="mt-2 text-center text-3xl leading-8 font-extrabold tracking-tight text-blue-presta3 sm:text-4xl">
                                The Presta Platform
                            </h3>
                            <div class="mt-12 md:grid md:grid-cols-2 md:gap-8">
                                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                    <img src="/images/phones n laptop.svg" alt="Tuple">
                                </div>
                                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                    <ul role="list" class="mt-6 md:mt-0 space-y-4 flex flex-col justify-center">

                                        <li class="flex space-x-3 items-center">
                                            <check-circle-icon class="flex-shrink-0 h-5 w-5 md:h-8 md:w-8 text-blue-presta3" aria-hidden="true" />
                                            <span class="text-base md:text-lg font-semibold text-gray-500 tracking-wide">End-to-end lending platform that is available on both USSD and App.</span>
                                        </li>

                                        <li class="flex space-x-3 items-center">
                                            <check-circle-icon class="flex-shrink-0 h-5 w-5 md:h-8 md:w-8 text-blue-presta3" aria-hidden="true" />
                                            <span class="text-base md:text-lg font-semibold text-gray-500 tracking-wide">A customizable appraisal engine and an in-built fraud mitigation algorithm.</span>
                                        </li>

                                        <li class="flex space-x-3 items-center">
                                            <check-circle-icon class="flex-shrink-0 h-5 w-5 md:h-8 md:w-8 text-blue-presta3" aria-hidden="true" />
                                            <span class="text-base md:text-lg font-semibold text-gray-500 tracking-wide">Dashboards for analysis & performance monitoring.</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- What we Do -->
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                        <h3 class="mt-2 text-center text-3xl leading-8 font-extrabold tracking-tight text-blue-presta3 sm:text-4xl">
                            What can you do with Presta
                        </h3>
                        <p class="mt-3 mx-auto text-center text-xl text-gray-500 sm:mt-4">
                            We offer different options to fit your business, with various levels of customization.
                            Our Platform is highly suitable for SACCOs, Microfinance Institutions and Investment groups
                        </p>
                        <div class="my-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
                            <div class="col-span-1 flex flex-col justify-center py-8 px-8 bg-blue-presta3">
                                <img class="max-h-12" src="/images/icons/Group 350.svg" alt="Asset finance" />
                                <p class="mt-3 max-w-3xl text-lg text-white text-center">
                                    Asset finance
                                </p>
                                <a href="#" class="text-sm font-medium py-3 text-center text-blue-prestaS">
                                    See more <span class="inline-block transform transition ease-in-out duration-150 hover:translate-x-2">→</span>
                                </a>
                            </div>
                            <div class="col-span-1 flex flex-col justify-center py-8 px-8 bg-blue-presta3">
                                <img class="max-h-12" src="/images/icons/Group 351.svg" alt="Emergency loans" />
                                <p class="mt-3 max-w-3xl text-lg text-white text-center">
                                    Emergency loans
                                </p>
                                <a href="#" class="text-sm font-medium py-3 text-center text-blue-prestaS">
                                    See more <span class="inline-block transform transition ease-in-out duration-150 hover:translate-x-2">→</span>
                                </a>
                            </div>
                            <div class="col-span-1 flex flex-col justify-center py-8 px-8 bg-blue-presta3">
                                <img class="max-h-12" src="/images/icons/Group 357.svg" alt="Group loans" />
                                <p class="mt-3 max-w-3xl text-lg text-white text-center">
                                    Group loans
                                </p>
                                <a href="#" class="text-sm font-medium py-3 text-center text-blue-prestaS">
                                    See more <span class="inline-block transform transition ease-in-out duration-150 hover:translate-x-2">→</span>
                                </a>
                            </div>
                            <div class="col-span-1 flex flex-col justify-center py-8 px-8 bg-blue-presta3">
                                <img class="max-h-12" src="/images/icons/Group 361.svg" alt="Higher purchase loans" />
                                <p class="mt-3 max-w-3xl text-lg text-white text-center">
                                    Higher purchase loans
                                </p>
                                <a href="#" class="text-sm font-medium py-3 text-center text-blue-prestaS">
                                    See more <span class="inline-block transform transition ease-in-out duration-150 hover:translate-x-2">→</span>
                                </a>
                            </div>
                            <div class="col-span-1 flex flex-col justify-center py-8 px-8 bg-blue-presta3">
                                <img class="max-h-12" src="/images/icons/Group 363.svg" alt="Logbook loans" />
                                <p class="mt-3 max-w-3xl text-lg text-white text-center">
                                    Logbook loans
                                </p>
                                <a href="#" class="text-sm font-medium py-3 text-center text-blue-prestaS">
                                    See more <span class="inline-block transform transition ease-in-out duration-150 hover:translate-x-2">→</span>
                                </a>
                            </div>
                            <div class="col-span-1 flex flex-col justify-center py-8 px-8 bg-blue-presta3">
                                <img class="max-h-12" src="/images/icons/Group 365.svg" alt="Payroll loans" />
                                <p class="mt-3 max-w-3xl text-lg text-white text-center">
                                    Payroll loans
                                </p>
                                <a href="#" class="text-sm font-medium py-3 text-center text-blue-prestaS">
                                    See more <span class="inline-block transform transition ease-in-out duration-150 hover:translate-x-2">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The Features -->
                <div class="bg-gray-100">
                    <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <h3 class="mt-2 text-center text-3xl leading-8 font-extrabold tracking-tight text-blue-presta3 sm:text-4xl">
                            Features at a glance
                        </h3>

                        <tabs-home :tabs="tabs" />
                    </div>
                </div>

                <!--Blogs-->
                <Blog v-if="blogs.length > 0" :blogs="blogs" />

                <!--Track Record-->
                <div class="bg-gray-50 pt-12 sm:pt-16">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-4xl mx-auto text-center">
                            <h2 class="text-3xl font-extrabold text-blue-presta3 sm:text-4xl">
                                Our Track record
                            </h2>
                            <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                                You are in good company.
                            </p>
                        </div>
                    </div>
                    <div class="mt-10 pb-10 bg-white sm:pb-12">
                        <div class="relative">
                            <div class="absolute inset-0 h-1/2 bg-gray-50" />
                            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="max-w-4xl mx-auto">
                                    <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                                        <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                                Loans Disbursed
                                            </dt>
                                            <dd class="order-1 text-5xl font-extrabold text-blue-presta3 flex flex-col justify-center items-center">
                                                <svg class="w-16" xmlns="http://www.w3.org/2000/svg" width="98.098" height="81.03" viewBox="0 0 98.098 81.03">
                                                    <g id="Group_41" data-name="Group 41" transform="translate(-206.003 -157.661)">
                                                        <path id="Path_42" data-name="Path 42" d="M304.1,268.51a14.176,14.176,0,0,1-1.448,1.054c-1.279.689-2.594,1.315-3.879,1.993-9.007,4.758-17.993,9.546-27.009,14.267a61.752,61.752,0,0,1-6.079,2.723,22.6,22.6,0,0,1-15.03.819c-6.781-2.024-13.469-4.361-20.2-6.568-.952-.313-1.893-.663-3.224-1.132-.184,1.8-.322,3.146-.476,4.653H206.534c-.077-.089-.138-.146-.194-.214s-.133-.125-.148-.2a4.989,4.989,0,0,1-.179-1.017q-.015-17.082-.005-34.163a10.775,10.775,0,0,1,.148-1.247c1.755-.647,16.836-.845,20.6-.25.133,1.09.271,2.259.445,3.7,1.013.063,2,.13,2.989.177,3.224.146,6.463.125,9.667.469,4.37.464,8.06,2.739,11.453,5.389a10.076,10.076,0,0,0,7.241,2.525c3.055-.214,6.141.057,9.206-.078,2.641-.12,4.457.829,5.4,3.391a8,8,0,0,0,.635,1.1c1.187-.318,2.415-.589,3.6-.975,3.5-1.132,6.965-2.316,10.455-3.464a11.516,11.516,0,0,1,10.255,1.586A24.607,24.607,0,0,1,304.1,268.51Z" transform="translate(0 -51.593)" fill="currentColor"/>
                                                        <path id="Path_43" data-name="Path 43" d="M281.09,148.949c-11.3-.459-21.194,9.915-21.321,20.842a21.332,21.332,0,1,0,42.66.624C302.521,158.682,292.262,148.487,281.09,148.949Zm5.028,29.339a22.443,22.443,0,0,1-2.348.7c-.047.675-.106,1.363-.132,2.051a2.151,2.151,0,0,1-1.592,2.03,1.652,1.652,0,0,1-2.212-1.554c-.089-.824-.093-1.665-.153-2.832-1.189,0-2.1.051-3.007-.013a1.9,1.9,0,1,1,.047-3.8c1.907-.068,3.818-.021,5.728-.025.565,0,1.134.013,1.7-.038a1.13,1.13,0,0,0,1.142-1.261,1.155,1.155,0,0,0-1.219-1.193c-.425-.034-.849-.025-1.274-.03-1.274,0-2.548.047-3.822-.017a4.912,4.912,0,0,1-4.616-3.975,5.154,5.154,0,0,1,2.548-5.38,5.636,5.636,0,0,1,1.18-.463,1.6,1.6,0,0,0,1.316-1.873,2.443,2.443,0,0,1,.972-2.234,1.786,1.786,0,0,1,3.036.824,18.458,18.458,0,0,1,.429,2.752c.769.059,1.588.085,2.4.2,1.563.208,2.217.981,2.076,2.374-.11,1.1-.777,1.716-2.229,1.8-1.478.085-2.968.03-4.454.034-.565,0-1.134-.009-1.7.008-.79.025-1.711.017-1.673,1.117.034.943.866.981,1.592.989,1.486.013,2.973-.021,4.459.017a4.762,4.762,0,0,1,3.979,2.06A4.949,4.949,0,0,1,286.117,178.288Z" transform="translate(-20.773 8.727)" fill="currentColor"/>
                                                    </g>
                                                </svg>
                                                300M +
                                            </dd>
                                        </div>
                                        <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                                Customers
                                            </dt>
                                            <dd class="order-1 text-5xl font-extrabold text-blue-presta3 flex flex-col justify-center items-center">
                                                <svg class="w-16" xmlns="http://www.w3.org/2000/svg" width="126" height="81.028" viewBox="0 0 126 81.028">
                                                    <g id="Group_38" data-name="Group 38" transform="translate(-253 -5428)">
                                                        <path id="users" d="M63.711,54.365s-26.88,0-36.956,23.521A111.156,111.156,0,0,0,63.711,84.6a111.156,111.156,0,0,0,36.956-6.718C90.587,54.365,63.711,54.365,63.711,54.365Zm0-3.352c10.08,0,16.8-10.08,16.8-26.883s-16.8-16.8-16.8-16.8-16.8,0-16.8,16.8S53.631,51.013,63.711,51.013ZM31.1,39.547A11.109,11.109,0,0,0,39.515,35.7,48.324,48.324,0,0,1,38.22,24.13c0-6.457,2.482-10.419,5.54-12.861C40.431,3.6,31.1,3.576,31.1,3.576s-13.836,0-13.836,13.836S22.8,39.547,31.1,39.547ZM44.145,50.39l-.47-5.469A39.332,39.332,0,0,0,31.1,42.313s-22.135,0-30.434,19.37a92.057,92.057,0,0,0,24.545,5.306C37.268,54.365,44.148,50.393,44.148,50.393Z" transform="translate(252.333 5424.424)" fill="currentColor"/>
                                                        <path id="users-2" data-name="users" d="M37.623,54.365s26.88,0,36.956,23.521A111.156,111.156,0,0,1,37.623,84.6,111.156,111.156,0,0,1,.667,77.886C10.747,54.365,37.623,54.365,37.623,54.365Zm0-3.352c-10.08,0-16.8-10.08-16.8-26.883s16.8-16.8,16.8-16.8,16.8,0,16.8,16.8S47.7,51.013,37.623,51.013ZM70.233,39.547A11.109,11.109,0,0,1,61.819,35.7a48.324,48.324,0,0,0,1.295-11.57c0-6.457-2.482-10.419-5.54-12.861C60.9,3.6,70.229,3.576,70.229,3.576s13.836,0,13.836,13.836S78.532,39.547,70.229,39.547ZM57.189,50.39l.47-5.469a39.332,39.332,0,0,1,12.574-2.609s22.135,0,30.434,19.37a92.057,92.057,0,0,1-24.545,5.306C64.066,54.365,57.186,50.393,57.186,50.393Z" transform="translate(278.333 5424.424)" fill="currentColor"/>
                                                    </g>
                                                </svg>
                                                70K
                                            </dd>
                                        </div>
                                        <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                                Active Lenders
                                            </dt>
                                            <dd class="order-1 text-5xl font-extrabold text-blue-presta3 flex flex-col justify-center items-center">
                                                <svg class="w-16" xmlns="http://www.w3.org/2000/svg" width="100" height="81.028" viewBox="0 0 100 81.028">
                                                    <path id="users" d="M63.711,54.365s-26.88,0-36.956,23.521A111.156,111.156,0,0,0,63.711,84.6a111.156,111.156,0,0,0,36.956-6.718C90.587,54.365,63.711,54.365,63.711,54.365Zm0-3.352c10.08,0,16.8-10.08,16.8-26.883s-16.8-16.8-16.8-16.8-16.8,0-16.8,16.8S53.631,51.013,63.711,51.013ZM31.1,39.547A11.109,11.109,0,0,0,39.515,35.7,48.324,48.324,0,0,1,38.22,24.13c0-6.457,2.482-10.419,5.54-12.861C40.431,3.6,31.1,3.576,31.1,3.576s-13.836,0-13.836,13.836S22.8,39.547,31.1,39.547ZM44.145,50.39l-.47-5.469A39.332,39.332,0,0,0,31.1,42.313s-22.135,0-30.434,19.37a92.057,92.057,0,0,0,24.545,5.306C37.268,54.365,44.148,50.393,44.148,50.393Z" transform="translate(-0.667 -3.576)" fill="currentColor"/>
                                                </svg>
                                                85
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More main page content here... -->
        </main>
    </div>
    <MainFooter />
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import {
    CheckCircleIcon
} from '@heroicons/vue/outline';
import {} from '@heroicons/vue/solid';
import NavigationHome from '@/Components/NavigationHome.vue';
import MainFooter from '@/Components/MainFooter.vue';
import Blog from '@/Components/Blog.vue';
import TabsHome from '@/Components/TabsHome.vue';
import Carousel from '@/Components/Carousel.vue';
import LandingHeader from '@/Components/LandingHeader.vue';
import {reactive} from "vue";

const tabs = {
    'Mobile Access' : [
        {
            id: 1,
            title: null,
            excerpt: '',
            description: '',
            featured_link: null,
            featured_image: '/images/ussdandapp.png',
            featured_points: ['USSD / App Access to your loan facilities.', 'Realtime disbursement to Mpesa or Bank.', '24/7 access to your services.'],
            created_at: new Date().toISOString()
        }
    ],
    'Guarantorship' : [
        {
            id: 1,
            title: null,
            excerpt: '',
            description: '',
            featured_link: null,
            featured_image: '/images/PHONE 2.png',
            featured_points: ['Digital Signatures.', 'Real-time loan approvals.', 'Tracking of guarantors approvals.', 'Realtime acknowledgement of \n approvals via SMS & Email.'],
            created_at: new Date().toISOString()
        }
    ],
    'Collections' : [
        {
            id: 1,
            title: null,
            excerpt: '',
            description: '',
            featured_link: null,
            featured_image: '/images/Group 7421.png',
            featured_points: ['Payment of savings, shares, registration fees & loans via Mpesa.', 'Realtime acknowledgement of payments via SMS.', 'Support for Check-off.'],
            created_at: new Date().toISOString()
        }
    ],
    'Monitoring' : [
        {
            id: 1,
            title: null,
            excerpt: '',
            description: '',
            featured_link: null,
            featured_image: '/images/Layer 4.png',
            featured_points: ['Tracking of member contributions.', 'Loan payments scheduling and tracking.', 'Automatic reminders for due payments.','Member statements.', 'Advanced analysis and reporting.'],
            created_at: new Date().toISOString()
        }
    ],
    'Appraisal' : [
        {
            id: 1,
            title: null,
            excerpt: '',
            description: '',
            featured_link: null,
            featured_image: '/images/Group 7732.png',
            featured_points: ['Group loaning with group voting.', 'Review & Approval of each loan by\n' +
            'back-office staff\n.', 'M-PESA statements importation & analysis\n' +
            'Savings Based (automatic) approval\n.', 'Approval limit matrix (Graduated borrowing\n' + 'limit based on customer behavior and\n' + ' number of loans)',
                'CRB integration', 'IPRS (Immigration) - confirmation of\n' + ' member details'],
            created_at: new Date().toISOString()
        }
    ],
    'Disbursement' : [
        {
            id: 1,
            title: null,
            excerpt: '',
            description: '',
            featured_link: null,
            featured_image: '/images/Group 7687.png',
            featured_points: ['Real-time disbursements to Mpesa.', 'Real-time disbursements to Bank\n' +
            '(via M-PESA/ PesaLink).'],
            created_at: new Date().toISOString()
        }
    ],
    'SuperLender' : [
        {
            id: 1,
            title: 'Never run out of loaning capital',
            excerpt: 'new',
            description: 'Work with superlenders to fund customers when cash runs out.',
            featured_link: '#',
            featured_image: '/images/Group 55.png',
            featured_points: null,
            created_at: new Date().toISOString()
        }
    ],
}

export default {
    components: {
        Head,
        Link,
        NavigationHome,
        MainFooter,
        CheckCircleIcon,
        Blog,
        TabsHome,
        Carousel,
        LandingHeader,
    },

    props: {
        blogs: Array,
        homepageData: Array,
    },

    setup({ homepageData }) {

        const sliders = homepageData.filter(obj => obj.post_sub_category.slug === "carousel-homepage").reduce((accumulator, item) => {
            accumulator.push({
                id: item.id,
                title: item.title,
                sub_title: item.sub_title,
                excerpt: item.excerpt,
                image: item.featured_images[0],
                videoId: item.metadata[0].video_id
            })
            return accumulator
        }, []);

        return {
            sliders,
            tabs
        }
    },
}
</script>

<style scoped>

</style>
