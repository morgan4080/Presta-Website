<template>
    <Head title="Microfinance | Presta Capital" />

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />

    <div class="min-h-screen bg-white overflow-x-hidden">
        <main>
            <div>
                <Carousel :sliders="sliders" :context="'microfinance'" />

                <!-- platform -->
                <div class="bg-white relative">
                    <div aria-hidden="true" class="hidden sm:block">
                        <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
                        <svg class="absolute top-8 left-1/2 -ml-3" width="404" height="392" fill="none" viewBox="0 0 404 392">
                            <defs>
                                <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                                </pattern>
                            </defs>
                            <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)"></rect>
                        </svg>
                    </div>
                    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-blue-presta3 sm:text-4xl relative">
                            Everything In One Platform
                        </h3>
                        <div class="mt-14 space-y-12 lg:space-y-0 lg:grid lg:gap-8 lg:grid-cols-4">
                            <div class="col-span-1 bg-white relative p-8 md:py-10 md:px-5 border border-gray-200 rounded-2xl shadow flex flex-col lg:col-span-1">
                                <dt class="order-2 mt-4 text-lg leading-6 font-medium text-gray-500">
                                    <div class="flex items-center justify-center ">
                                        <ul class="list-disc space-y-2">
                                            <li class="flex items-start">
                                                <p class="ml-2 text-base text-center">
                                                    When it comes to onboarding your customers, time is of the essence. That’s why we keep speed in mind, so you can welcome newcomers in 5 minutes or less.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </dt>
                                <dd class="order-1 text-lg font-bold text-blue-presta3 flex flex-col justify-center items-center text-center px-6">
                                    <svg class="w-14 h-14 pb-3" xmlns="http://www.w3.org/2000/svg" width="49.617" height="74" viewBox="0 0 49.617 74">
                                        <path id="XMLID_498_" d="M96.46,42.222h-.922V39.23a20.476,20.476,0,1,0-16.428,0v2.992h-.922A15.69,15.69,0,0,0,62.515,57.895V74h49.617v-16.1A15.69,15.69,0,0,0,96.46,42.222ZM87.324,68.087S75.67,61.774,75.67,53.734a6.5,6.5,0,0,1,11.654-3.951,6.5,6.5,0,0,1,11.654,3.951C98.977,61.847,87.324,68.087,87.324,68.087Z" transform="translate(-62.515 0.001)" fill="#489aab"/>
                                    </svg>
                                    Digital Onboarding
                                    In under 5 min or less
                                </dd>
                            </div>
                            <div class="col-span-1 bg-white relative p-8 md:py-10 md:px-5 border border-gray-200 rounded-2xl shadow flex flex-col lg:col-span-1">
                                <dt class="order-2 mt-4 text-lg leading-6 font-medium text-gray-500">
                                    <div class="flex items-center justify-center ">
                                        <ul class="list-disc space-y-2">
                                            <li class="flex items-start">
                                                <p class="ml-2 text-base text-center">
                                                    Reduce labor costs and operating expenditures. Accelerate the speed of loan application handling from first engagement with a borrower to the final acceptance.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </dt>
                                <dd class="order-1 text-lg font-bold text-blue-presta3 flex flex-col justify-center items-center text-center px-6">
                                    <svg class="w-14 h-14 pb-3" id="money" xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74">
                                        <path id="Path_11848" data-name="Path 11848" d="M161.827,291.579l-8.2,10.724a8.672,8.672,0,0,1-6.889,3.4H131.512a2.168,2.168,0,0,1,0-4.336h13.2a5.138,5.138,0,0,0,5.158-5.157,5.059,5.059,0,0,0-5.058-4.96H129.633a12.555,12.555,0,0,0-16-1.166L112,291.253v24.57h37.7a13.008,13.008,0,0,0,10.942-5.974l8.461-13.161a4.45,4.45,0,0,0-7.279-5.11Z" transform="translate(-95.812 -246.16)" fill="#489aab"/>
                                        <path id="Path_11849" data-name="Path 11849" d="M9.684,282H2.168A2.168,2.168,0,0,0,0,284.168v28.906a2.168,2.168,0,0,0,2.168,2.168H9.684a2.168,2.168,0,0,0,2.168-2.168V284.168A2.168,2.168,0,0,0,9.684,282Z" transform="translate(0 -241.242)" fill="#489aab"/>
                                        <path id="Path_11850" data-name="Path 11850" d="M281.535,82.9a2.152,2.152,0,0,0-.768,1.294,1.5,1.5,0,0,0,.372,1.45c.12.094.253.187.4.278Z" transform="translate(-240.154 -70.923)" fill="#489aab"/>
                                        <path id="Path_11851" data-name="Path 11851" d="M190.066,36.133A18.066,18.066,0,1,0,172,18.066,18.087,18.087,0,0,0,190.066,36.133ZM184.6,23.973a1.445,1.445,0,0,1,2-.418,4.377,4.377,0,0,0,1.923.824v-6.1A10.66,10.66,0,0,1,186.342,17a4.325,4.325,0,0,1-1.429-4.26,4.869,4.869,0,0,1,3.339-3.817c.091-.027.181-.052.27-.076v-.9a1.445,1.445,0,0,1,2.891,0V8.69a5.019,5.019,0,0,1,2.875,1.485,1.445,1.445,0,0,1-2.171,1.908,1.991,1.991,0,0,0-.7-.417v4.67c.257.1.513.188.765.277a5.172,5.172,0,0,1,3.516,5.852,5.878,5.878,0,0,1-4.281,4.683v1.035a1.445,1.445,0,0,1-2.891,0v-.9a7,7,0,0,1-3.506-1.313,1.445,1.445,0,0,1-.418-2Z" transform="translate(-147.141)" fill="#489aab"/>
                                        <path id="Path_11852" data-name="Path 11852" d="M307.739,136.909a2.236,2.236,0,0,0-1.43-2.57v4.643A2.987,2.987,0,0,0,307.739,136.909Z" transform="translate(-262.038 -114.923)" fill="#489aab"/>
                                    </svg>
                                    Loan Origination
                                </dd>
                            </div>
                            <div class="col-span-1 bg-white relative p-8 md:py-10 md:px-5 border border-gray-200 rounded-2xl shadow flex flex-col lg:col-span-1">
                                <dt class="order-2 mt-4 text-lg leading-6 font-medium text-gray-500">
                                    <div class="flex items-center justify-center ">
                                        <ul class="list-disc space-y-2">
                                            <li class="flex items-start">
                                                <p class="ml-2 text-base text-center">
                                                    Automate every single step of microfinance services after disbursing the funds until the loan is fully paid off.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </dt>
                                <dd class="order-1 text-lg font-bold text-blue-presta3 flex flex-col justify-center items-center text-center px-6">
                                    <svg class="w-14 h-14 pb-3" xmlns="http://www.w3.org/2000/svg" width="75.117" height="75.117" viewBox="0 0 75.117 75.117">
                                        <g id="asset" transform="translate(-6.556 -6.556)">
                                            <path id="Path_11854" data-name="Path 11854" d="M35,5.095v5.56A31.665,31.665,0,0,1,62.314,37.969h5.56A37.393,37.393,0,0,0,35,5.095Z" transform="translate(13.24 2.02)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11855" data-name="Path 11855" d="M26.33,18.286l3.25,8.667h9.057L41.98,16.924l-3.174-.793-4.53,6.039-4.7-4.7Z" transform="translate(9.987 6.161)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11856" data-name="Path 11856" d="M51.255,41.548A14.705,14.705,0,0,0,46.232,30.48L41.112,26H31.144l-5.121,4.48a14.706,14.706,0,0,0,9.684,25.774h.842A14.723,14.723,0,0,0,51.255,41.548Zm-9.626-3.171h-2.75V37H34.752a1.375,1.375,0,1,0,0,2.75H37.5A4.126,4.126,0,0,1,37.5,48v2.75h-2.75V48H30.626V43.878h2.75v1.375H37.5a1.375,1.375,0,0,0,0-2.75h-2.75a4.126,4.126,0,1,1,0-8.251V31.5H37.5v2.75h4.126Z" transform="translate(7.987 9.864)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11857" data-name="Path 11857" d="M19.554,14.983l-3.042-4.552a37.669,37.669,0,0,0-2.895,2.437l3.862,3.862q1-.918,2.075-1.747Z" transform="translate(5.217 4.022)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11858" data-name="Path 11858" d="M22.766,12.974,20.659,7.89a37.571,37.571,0,0,0-3.3,1.917L20.4,14.352q1.153-.738,2.368-1.378Z" transform="translate(6.622 3.068)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11859" data-name="Path 11859" d="M26.3,11.513l-1.08-5.431a36.48,36.48,0,0,0-3.64,1.331l2.1,5.065c.855-.358,1.729-.683,2.621-.965Z" transform="translate(8.204 2.39)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11860" data-name="Path 11860" d="M30.064,10.655V5.095a36.562,36.562,0,0,0-3.9.672l1.073,5.394C28.165,10.953,29.106,10.78,30.064,10.655Z" transform="translate(9.925 2.02)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11861" data-name="Path 11861" d="M11.161,27.236,5.766,26.163a36.909,36.909,0,0,0-.671,3.9h5.56C10.78,29.106,10.953,28.164,11.161,27.236Z" transform="translate(2.02 9.925)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11862" data-name="Path 11862" d="M12.478,23.675l-5.065-2.1a36.826,36.826,0,0,0-1.331,3.64l5.431,1.08C11.795,25.4,12.121,24.53,12.478,23.675Z" transform="translate(2.39 8.204)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11863" data-name="Path 11863" d="M16.729,17.479l-3.862-3.862a37.652,37.652,0,0,0-2.435,2.895l4.552,3.042q.827-1.077,1.745-2.075Z" transform="translate(4.022 5.217)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11864" data-name="Path 11864" d="M14.352,20.4,9.807,17.361a37.241,37.241,0,0,0-1.918,3.3l5.084,2.105Q13.613,21.547,14.352,20.4Z" transform="translate(3.068 6.622)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11865" data-name="Path 11865" d="M35,62.314v5.56A37.393,37.393,0,0,0,67.874,35h-5.56A31.665,31.665,0,0,1,35,62.314Z" transform="translate(13.24 13.24)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                            <path id="Path_11866" data-name="Path 11866" d="M10.655,35H5.095A37.393,37.393,0,0,0,37.969,67.874v-5.56A31.665,31.665,0,0,1,10.655,35Z" transform="translate(2.02 13.24)" fill="#489aab" stroke="#489aab" stroke-width="1"/>
                                        </g>
                                    </svg>

                                    Flexibility
                                </dd>
                            </div>
                            <div class="col-span-1 bg-white relative p-8 md:py-10 md:px-5 border border-gray-200 rounded-2xl shadow flex flex-col lg:col-span-1">
                                <dt class="order-2 mt-4 text-lg leading-6 font-medium text-gray-500">
                                    <div class="flex items-center justify-center ">
                                        <ul class="list-disc space-y-2">
                                            <li class="flex items-start">
                                                <p class="ml-2 text-base text-center">
                                                    From quick short-term loans to decades-long mortgages we keep things in order. Notifications triggered by events and more.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </dt>
                                <dd class="order-1 text-lg font-bold text-blue-presta3 flex flex-col justify-center items-center text-center px-6">
                                    <svg class="w-14 h-14 pb-3" id="Group_350" data-name="Group 350" xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74">
                                        <g id="Group_349" data-name="Group 349">
                                            <g id="Group_348" data-name="Group 348">
                                                <path id="Path_311" data-name="Path 311" d="M284.606,256.742a2.242,2.242,0,0,0-2.242-2.242h-8.97a2.242,2.242,0,0,0-2.242,2.242v31.394h13.455Zm19.061,4.485a2.242,2.242,0,0,0-2.242-2.242h-8.97a2.242,2.242,0,0,0-2.242,2.242v26.909h13.455Zm8.97,32.515H245.364a3.364,3.364,0,0,0,0,6.727h67.273a3.364,3.364,0,0,0,0-6.727Zm-47.091-25.788a2.242,2.242,0,0,0-2.242-2.242h-8.97a2.242,2.242,0,0,0-2.242,2.242v20.182h13.455Z" transform="translate(-242 -226.47)" fill="#489aab"/>
                                                <path id="Path_312" data-name="Path 312" d="M302.57,242.02l-10.082,1.44a1.992,1.992,0,0,0-1.126,3.379l2.33,2.33-8.133,8.131L272.2,247.169a3.366,3.366,0,0,0-4.166.081l-21.3,17.509a3.364,3.364,0,1,0,4.27,5.2l19.251-15.825,13.582,10.3a3.361,3.361,0,0,0,4.409-.3l10.208-10.205L300,255.479a1.99,1.99,0,0,0,3.377-1.126l1.44-10.082A1.991,1.991,0,0,0,302.57,242.02Z" transform="translate(-237.652 -242)" fill="#489aab"/>
                                            </g>
                                        </g>
                                    </svg>
                                    Reporting
                                </dd>
                            </div>
                        </div>
                    </div>
                </div>

                <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                    <defs>
                        <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                </svg>

                <div class="relative mt-12 sm:mt-16 lg:mt-24">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-blue-presta3 sm:text-4xl relative bg-white">
                            Our Technology
                        </h3>
                    </div>
                    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                        <div class="lg:col-start-2 px-4 sm:px-6 lg:px-0">
                            <p class="mt-3 text-lg text-gray-500 hidden">
                                Define requirements so you meet your “Know Your Customer” (KYC) obligations.
                            </p>

                            <dl class="mt-10 space-y-6 divide-y divide-gray-200 max-w-xl">
                                <Disclosure as="div" v-for="faq in faqs" :key="faq.question" class="pt-6" v-slot="{ open }">
                                    <dt class="text-lg">
                                        <DisclosureButton class="text-left w-full flex justify-between items-start text-gray-400">
                                                <span class="font-medium text-gray-900">
                                                  {{ faq.question }}
                                                </span>
                                            <span class="ml-6 h-7 flex items-center">
                                                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" />
                                                </span>
                                        </DisclosureButton>
                                    </dt>
                                    <DisclosurePanel as="dd" class="mt-2 pr-12">
                                        <p class="text-base text-gray-500">
                                            {{ faq.answer }}
                                        </p>
                                    </DisclosurePanel>
                                </Disclosure>
                            </dl>
                        </div>

                        <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                            <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
                                <defs>
                                    <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)" />
                            </svg>
                            <img class="relative mx-auto" width="490" src="/images/intelligent-processing.png" alt="intelligent processing" />
                        </div>
                    </div>
                </div>

                <div class="relative overflow-hidden">

                    <div class="bg-white relative">
                        <svg class="absolute left-full top-full right-0 transform -translate-x-40 -translate-y-56" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                            <defs>
                                <pattern id="56409614-3d62-4985-9a10-7ca758a8f4f0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                                </pattern>
                            </defs>
                            <rect width="404" height="784" fill="url(#56409614-3d62-4985-9a10-7ca758a8f4f0)"></rect>
                        </svg>
                        <div aria-hidden="true" class="hidden sm:block">
                            <div class="absolute bottom-0 top-12 right-0 w-1/2 bg-gray-50"></div>
                        </div>
                        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                            <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-blue-presta3 sm:text-4xl relative">
                                Customers we are serving
                            </h3>
                            <div class="mt-14 space-y-12 lg:space-y-0 lg:grid lg:gap-8 lg:grid-cols-3">
                                <div class="col-span-1 bg-white relative p-8 md:py-10 md:px-5 border border-gray-200 rounded-2xl shadow flex flex-col lg:col-span-1">
                                    <dt class="order-2 mt-4 text-lg leading-6 font-medium text-gray-500">
                                        <div class="flex items-center justify-center px-6">
                                            <ul class="list-disc space-y-2">
                                                <li class="flex items-start">
                                                <span class="h-6 flex items-center sm:h-7">
                                                  <check-circle-icon class="flex-shrink-0 h-5 w-5 text-blue-presta3"/>
                                                </span>
                                                    <p class="ml-2 text-base">
                                                        Increase customers’ lifetime value.
                                                    </p>
                                                </li>
                                                <li class="flex items-start">
                                                <span class="h-6 flex items-center sm:h-7">
                                                  <check-circle-icon class="flex-shrink-0 h-5 w-5 text-blue-presta3"/>
                                                </span>
                                                    <p class="ml-2 text-base">
                                                        Reduce human error at each step.
                                                    </p>
                                                </li>
                                                <li class="flex items-start">
                                                <span class="h-6 flex items-center sm:h-7">
                                                  <check-circle-icon class="flex-shrink-0 h-5 w-5 text-blue-presta3"/>
                                                </span>
                                                    <p class="ml-2 text-base">
                                                        Automation that’s easy and affordable.
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </dt>
                                    <dd class="order-1 text-lg font-bold text-blue-presta3 flex flex-col justify-center items-center text-center px-6">
                                        <svg class="w-16 pb-2" xmlns="http://www.w3.org/2000/svg" width="92.58" height="92.58" viewBox="0 0 92.58 92.58">
                                            <g id="vechicle" transform="translate(-22 -22)">
                                                <path id="Path_11867" data-name="Path 11867" d="M102.894,74.076h-.52l-.868-3.471a25.856,25.856,0,1,0-5.379,2.341l.282,1.13H40.171l3.676-14.706a3.5,3.5,0,0,1,3.4-2.653H55.52a2.893,2.893,0,1,0,0-5.786H47.245a9.275,9.275,0,0,0-9.011,7.036L34.207,74.076h-.52A11.7,11.7,0,0,0,22,85.762v5.559a11.706,11.706,0,0,0,8.679,11.292v4.556a7.419,7.419,0,0,0,7.411,7.411h8.324a7.419,7.419,0,0,0,7.411-7.411v-4.162H82.756v4.162a7.419,7.419,0,0,0,7.411,7.411H98.49a7.419,7.419,0,0,0,7.411-7.411v-4.556a11.706,11.706,0,0,0,8.679-11.292V85.762A11.7,11.7,0,0,0,102.894,74.076ZM88.542,68.29a20.252,20.252,0,1,1,20.252-20.252A20.275,20.275,0,0,1,88.542,68.29Zm-40.5,38.879a1.626,1.626,0,0,1-1.624,1.624H38.09a1.627,1.627,0,0,1-1.624-1.624v-4.162H48.038Zm52.076,0a1.626,1.626,0,0,1-1.624,1.624H90.166a1.627,1.627,0,0,1-1.624-1.624v-4.162h11.573Zm8.679-15.848a5.907,5.907,0,0,1-5.9,5.9H33.686a5.907,5.907,0,0,1-5.9-5.9V85.763a5.907,5.907,0,0,1,5.9-5.9h69.208a5.906,5.906,0,0,1,5.9,5.9Z" fill="#489aab"/>
                                                <circle id="Ellipse_47" data-name="Ellipse 47" cx="5.786" cy="5.786" r="5.786" transform="translate(30.679 82.756)" fill="#489aab"/>
                                                <circle id="Ellipse_48" data-name="Ellipse 48" cx="5.786" cy="5.786" r="5.786" transform="translate(94.328 82.756)" fill="#489aab"/>
                                                <path id="Path_11868" data-name="Path 11868" d="M194.252,57.573a2.893,2.893,0,0,0,0-5.786h-5.786V48.893a2.893,2.893,0,1,0-5.786,0v2.893h-5.786A2.893,2.893,0,0,0,174,54.679v8.679a2.893,2.893,0,0,0,2.893,2.893h5.786v2.893h-5.786a2.893,2.893,0,0,0,0,5.786h5.786v2.893a2.893,2.893,0,0,0,5.786,0V74.931h5.786a2.893,2.893,0,0,0,2.893-2.893V63.359a2.893,2.893,0,0,0-2.893-2.893h-5.786V57.573Zm-11.572,2.893h-2.893V57.573h2.893Zm8.679,5.786v2.893h-2.893V66.252Z" transform="translate(-97.031 -15.321)" fill="#489aab"/>
                                            </g>
                                        </svg>
                                        Logbook Loans
                                    </dd>
                                </div>
                                <div class="col-span-1 bg-white relative p-8 md:py-10 md:px-5 border border-gray-200 rounded-2xl shadow flex flex-col lg:col-span-1">
                                    <dt class="order-2 mt-4 text-lg leading-6 font-medium text-gray-500">
                                        <div class="flex items-center justify-center px-6">
                                            <ul class="list-disc space-y-2">
                                                <li class="flex items-start">
                                                <span class="h-6 flex items-center sm:h-7">
                                                  <check-circle-icon class="flex-shrink-0 h-5 w-5 text-blue-presta3"/>
                                                </span>
                                                    <p class="ml-2 text-base">
                                                        Custom processes with rules and permissions.
                                                    </p>
                                                </li>
                                                <li class="flex items-start">
                                                <span class="h-6 flex items-center sm:h-7">
                                                  <check-circle-icon class="flex-shrink-0 h-5 w-5 text-blue-presta3"/>
                                                </span>
                                                    <p class="ml-2 text-base">
                                                        Automate processing and decisioning.
                                                    </p>
                                                </li>
                                                <li class="flex items-start">
                                                <span class="h-6 flex items-center sm:h-7">
                                                  <check-circle-icon class="flex-shrink-0 h-5 w-5 text-blue-presta3"/>
                                                </span>
                                                    <p class="ml-2 text-base">
                                                        Reduce time to decision.
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </dt>
                                    <dd class="order-1 text-lg font-bold text-blue-presta3 flex flex-col justify-center items-center text-center px-6">
                                        <svg class="w-16 pb-2" xmlns="http://www.w3.org/2000/svg" width="81.65" height="92.58" viewBox="0 0 81.65 92.58">
                                            <g id="timer" transform="translate(-30.231)">
                                                <path id="Path_11872" data-name="Path 11872" d="M101.777,24.869l4.087-4.087-3.835-3.835-4.087,4.087a40.446,40.446,0,0,0-18.2-9.18V5.423h3.869V0H58.5V5.423h3.869v6.431a40.449,40.449,0,0,0-18.2,9.18l-4.087-4.087-3.835,3.835,4.087,4.087a40.825,40.825,0,1,0,61.442,0ZM67.789,5.423h6.535V11.06q-1.622-.128-3.267-.13t-3.268.13Zm3.268,81.734a35.4,35.4,0,1,1,35.4-35.4A35.442,35.442,0,0,1,71.056,87.157Z" fill="#489aab"/>
                                                <path id="Path_11873" data-name="Path 11873" d="M119.2,119.229a30.2,30.2,0,1,0,30.2,30.2,30.236,30.236,0,0,0-30.2-30.2Zm2.712,54.832v-4.493h-5.423v4.493A24.825,24.825,0,0,1,94.57,152.143h4.493v-5.423H94.57A24.825,24.825,0,0,1,116.489,124.8v4.493h5.423V124.8a24.825,24.825,0,0,1,21.918,21.918h-4.492v5.423h4.493A24.825,24.825,0,0,1,121.912,174.061Z" transform="translate(-48.144 -97.676)" fill="#489aab"/>
                                                <g id="Group_10333" data-name="Group 10333" transform="translate(63.931 37.284)">
                                                    <g id="Group_10324" data-name="Group 10324">
                                                        <path id="Path_11870" data-name="Path 11870" d="M253.406,184.767a6.494,6.494,0,0,0-3.309-3.886l-4.451-2.226a1.95,1.95,0,0,1,.87-3.695h.667a1.955,1.955,0,0,1,1.95,1.95v.333H253.7v-.333a6.506,6.506,0,0,0-4.567-6.186V168.11h-4.567v2.615a6.494,6.494,0,0,0-.964,12.016l4.451,2.226a1.95,1.95,0,0,1-.87,3.695h-.667a1.955,1.955,0,0,1-1.95-1.95v-.333H240v.333a6.506,6.506,0,0,0,4.567,6.186v2.615h4.567V192.9A6.494,6.494,0,0,0,253.406,184.767Z" transform="translate(-239.999 -168.11)" fill="#489aab"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        Emergency Loans
                                    </dd>
                                </div>
                                <div class="col-span-1 bg-white relative p-8 md:py-10 md:px-5 border border-gray-200 rounded-2xl shadow flex flex-col lg:col-span-1">
                                    <dt class="order-2 mt-4 text-lg leading-6 font-medium text-gray-500">
                                        <div class="flex items-center justify-center px-6">
                                            <ul class="list-disc space-y-2">
                                                <li class="flex items-start">
                                                <span class="h-6 flex items-center sm:h-7">
                                                  <check-circle-icon class="flex-shrink-0 h-5 w-5 text-blue-presta3"/>
                                                </span>
                                                    <p class="ml-2 text-base">
                                                        Efficient and flexible automated workflows.
                                                    </p>
                                                </li>
                                                <li class="flex items-start">
                                                <span class="h-6 flex items-center sm:h-7">
                                                  <check-circle-icon class="flex-shrink-0 h-5 w-5 text-blue-presta3"/>
                                                </span>
                                                    <p class="ml-2 text-base">
                                                        No human-error and low operational costs.
                                                    </p>
                                                </li>
                                                <li class="flex items-start">
                                                <span class="h-6 flex items-center sm:h-7">
                                                  <check-circle-icon class="flex-shrink-0 h-5 w-5 text-blue-presta3"/>
                                                </span>
                                                    <p class="ml-2 text-base">
                                                        Regulatory compliance.
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </dt>
                                    <dd class="order-1 text-lg font-bold text-blue-presta3 flex flex-col justify-center items-center text-center px-6">
                                        <svg class="w-16 pb-2" xmlns="http://www.w3.org/2000/svg" width="97.931" height="94.703" viewBox="0 0 97.931 94.703">
                                            <g id="loan" transform="translate(1 -7.039)">
                                                <g id="Group_10321" data-name="Group 10321" transform="translate(0 8.085)">
                                                    <g id="Group_10320" data-name="Group 10320" transform="translate(0 0)">
                                                        <path id="Path_11869" data-name="Path 11869" d="M93.7,33.855,93.61,33.8,82.323,26.273h.331V14.7A1.653,1.653,0,0,0,81,13.049H72.735A1.653,1.653,0,0,0,71.082,14.7v4.075L55.469,8.363a1.653,1.653,0,0,0-1.835,0L15.493,33.8a5.091,5.091,0,0,0,5.56,8.531l.088-.059,5.308-3.539V70.906H23.143a1.653,1.653,0,0,0-1.653-1.653H8.265a1.653,1.653,0,0,0-1.653,1.653H0v3.306H6.612V90.743H0v3.306H6.612A1.653,1.653,0,0,0,8.265,95.7H21.49a1.653,1.653,0,0,0,1.653-1.653v-.63l12.342,5.124a28.616,28.616,0,0,0,21.037.231L82.058,89.04a6.014,6.014,0,0,0,3.376-3.219,6.116,6.116,0,0,0,.1-4.746,6,6,0,0,0-2.878-3.152V38.729l5.308,3.539A5.091,5.091,0,1,0,93.7,33.855ZM19.837,92.4H9.918V72.559h9.918ZM74.388,16.355h4.959V24.29l-4.959-3.306ZM82.41,84.486a2.738,2.738,0,0,1-1.531,1.465L55.343,95.687a25.292,25.292,0,0,1-18.6-.2l-13.6-5.649V74.212h4.191a35.473,35.473,0,0,1,15.792,3.729,11.735,11.735,0,0,0,5.215,1.23H61.163a2.48,2.48,0,0,1,.547,4.895c-.217.02-.43.064-.65.064H41.327v3.306H61.163c.033,0,.064-.01.1-.01a10.225,10.225,0,0,0,3.815-.807L78.9,80.752a2.626,2.626,0,0,1,2.061,0,2.742,2.742,0,0,1,1.488,1.541A2.842,2.842,0,0,1,82.41,84.486ZM61.163,75.865H48.341a8.43,8.43,0,0,1-3.738-.881,38.812,38.812,0,0,0-14.848-4V36.522l24.8-16.531,24.8,16.531V77.29a5.975,5.975,0,0,0-1.741.417L66.888,82.259a5.717,5.717,0,0,0,.061-.608A5.786,5.786,0,0,0,61.163,75.865Zm30.466-36.26v0a1.77,1.77,0,0,1-1.835-.088L55.469,16.633a1.653,1.653,0,0,0-1.835,0L19.308,39.518a1.788,1.788,0,0,1-1.982-2.976L54.551,11.727,91.776,36.547a1.784,1.784,0,0,1,.8,1.488A1.757,1.757,0,0,1,91.629,39.605Z" transform="translate(0 -8.085)" fill="#489aab" stroke="#489aab" stroke-width="2"/>
                                                    </g>
                                                </g>
                                                <g id="Group_10323" data-name="Group 10323" transform="translate(13.225 85.784)">
                                                    <g id="Group_10322" data-name="Group 10322">
                                                        <rect id="Rectangle_1958" data-name="Rectangle 1958" width="3.306" height="3.306" fill="#489aab" stroke="#489aab" stroke-width="2"/>
                                                    </g>
                                                </g>
                                                <g id="Group_10325" data-name="Group 10325" transform="translate(49.592 41.151)">
                                                    <g id="Group_10324" data-name="Group 10324">
                                                        <path id="Path_11870" data-name="Path 11870" d="M249.7,180.168a4.7,4.7,0,0,0-2.4-2.813l-3.222-1.612a1.412,1.412,0,0,1,.63-2.675h.483a1.415,1.415,0,0,1,1.412,1.412v.241h3.306v-.241A4.709,4.709,0,0,0,246.612,170V168.11h-3.306V170a4.7,4.7,0,0,0-.7,8.7l3.222,1.612a1.412,1.412,0,0,1-.63,2.675h-.483a1.415,1.415,0,0,1-1.412-1.412v-.241H240v.241a4.71,4.71,0,0,0,3.306,4.478v1.893h3.306v-1.893A4.7,4.7,0,0,0,249.7,180.168Z" transform="translate(-239.999 -168.11)" fill="#489aab"/>
                                                    </g>
                                                </g>
                                                <g id="Group_10327" data-name="Group 10327" transform="translate(38.02 34.539)">
                                                    <g id="Group_10326" data-name="Group 10326">
                                                        <path id="Path_11871" data-name="Path 11871" d="M200.531,136.11a16.531,16.531,0,1,0,16.531,16.531A16.549,16.549,0,0,0,200.531,136.11Zm0,29.755a13.225,13.225,0,1,1,13.225-13.225A13.225,13.225,0,0,1,200.531,165.865Z" transform="translate(-184 -136.11)" fill="#489aab" stroke="#489aab" stroke-width="2"/>
                                                    </g>
                                                </g>
                                                <g id="Group_10329" data-name="Group 10329" transform="translate(61.163 49.416)">
                                                    <g id="Group_10328" data-name="Group 10328">
                                                        <rect id="Rectangle_1959" data-name="Rectangle 1959" width="3.306" height="3.306" fill="#489aab" stroke="#489aab" stroke-width="2"/>
                                                    </g>
                                                </g>
                                                <g id="Group_10331" data-name="Group 10331" transform="translate(44.633 49.416)">
                                                    <g id="Group_10330" data-name="Group 10330">
                                                        <rect id="Rectangle_1960" data-name="Rectangle 1960" width="3.306" height="3.306" fill="#489aab" stroke="#489aab" stroke-width="2"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>

                                        Asset Finance
                                    </dd>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white">
                        <div class="max-w-4xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                            <h2 class="text-3xl font-extrabold text-blue-presta4 sm:text-4xl relative">
                                <span class="block">Works As Good As It Looks.</span>
                            </h2>
                            <p class="mt-4 text-lg leading-6 text-gray-500 relative">Inject your Process into Presta. Build Custom Process Rules. Penalty and Fees Management. Event-driven email and SMS communications. Custom Report Builder. One-Click to Send Loan Statements.</p>

                            <blockquote class="mt-10 relative">
                                <div class="max-w-3xl mx-auto text-center text-2xl font-bold leading-9 font-medium text-blue-presta3">
                                    <p class="italic">
                                        ” Ditch the Spreadsheets;
                                        Usually difficult tasks, made brilliantly easy.“
                                    </p>
                                </div>
                                <footer class="mt-8">
                                    <Link :href="route('demo')" class="w-full inline-flex items-center justify-center px-5 py-3 bg-blue-50 text-blue-presta3 hover:bg-indigo-100 border border-transparent rounded-md text-center font-medium sm:w-auto">
                                        Request Plan
                                    </Link>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <MainFooter :showDemo="false" />
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue';
import MainFooter from '@/Components/MainFooter.vue';
import NavigationHome from '@/Components/NavigationHome.vue';
import Carousel from "@/Components/Carousel";
import { ChevronDownIcon, CheckCircleIcon } from '@heroicons/vue/outline'

const faqs = [
    {
        question: "Onboarding in 5 minutes or less",
        answer:
            "Give Users permission to create Customers. Define requirements so you meet “Know Your Customer” (KYC) obligations. Add as much non-standard information as you need with our Custom Field feature. Extend and integrate with other solutions and bring in customers from 3rd party sources.",
    },
    {
        question: "Self On-boarding",
        answer:
            "Replace outdated technology with intuitive online workflows. Bring borrowers aboard faster with fewer manual processes. Offer a fully digital onboarding process to meet and exceed the expectations of new customer groups and compete successfully in the digital age.",
    },
    {
        question: "Build Lending Products",
        answer:
            "Flexible and powerful. Tons of options – multiple amortization engines. Solve for installment amount, tenure or interest rate. Every option allows you to customize and define how a lending product should function. You can even define the message a borrower should receive based on the product they have with you.",
    },
    {
        question: "Process Controls",
        answer:
            "‘Set it and forget it’ process controls for each role on your team. Define permissions, notifications and triggers for each step in your process. Now, that’s control.",
    },
    {
        question: "Reporting & Tracking",
        answer:
            "Track performance, analyze reports, and simplify compliance. The Presta system is GDPR-ready, and thanks to advanced reporting and intelligent origination, it turns the process of regulatory compliance for lenders into a virtual walk in the park. Make your lending program more efficient to operate and its contributions more visible internally.",
    },
]

const sliders = [
    {
        id: 1 ,
        title: 'Automating MFIs',
        sub_title: 'Lending Processes.',
        excerpt: 'Digital transformation through mobile of all microfinance credit processes.',
        image: '/images/microfin1.png',
        videoId: '0gvPT1SAGko'
    },
    {
        id: 2,
        title: 'Looking for an easy',
        sub_title: 'Customer-Facing mobile solution?',
        excerpt: 'Automate every step of micro lending process from onboarding to repayment. Trusted by 65 microfinance lenders in Kenya. Get a fully configurable microfinance system ready to go in 12 days.',
        image: '/images/microfin0.png',
        videoId: '0gvPT1SAGko'
    },
    {
        id: 3,
        title: 'Complete Microfinance',
        sub_title: 'Software',
        excerpt: 'Automate every step of micro lending process from onboarding to repayment. Trusted by 65 microfinance lenders in Kenya.\n' +
            '\n' +
            'Get a fully configurable microfinance system ready to go in 12 days.',
        image: '/images/microfinbanner.jpg',
        videoId: '0gvPT1SAGko'
    }
]

export default {
    components: {
        Carousel,
        MainFooter,
        NavigationHome,
        Head,
        Link,
        Disclosure,
        DisclosureButton,
        DisclosurePanel,
        ChevronDownIcon,
        CheckCircleIcon
    },
    setup() {
        return {
            sliders,
            faqs
        }
    }
}
</script>
