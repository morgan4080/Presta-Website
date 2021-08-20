<template>
    <Head title="Home | Presta Capital" />

    <NavigationHome />

    <div class="min-h-screen bg-white">
        <!-- Plug appropriate version of navigation... -->

        <main>
            <div>
                <!-- Hero card -->
                <div class="relative">
                    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-white" />
                    <div class="w-full mx-auto">
                        <div class="relative min-h-screen sm:overflow-hidden">
                            <div class="absolute inset-0">
                                <img class="h-full w-full object-cover" src="/images/scroll-image-2.jpg" alt="Show Casing Presta Capital" />
                                <div class="absolute inset-0">
                                    <img class="h-full w-full object-cover" src="/images/Path 33.png" alt="Show Casing Presta Capital" />
                                </div>
                            </div>
                            <div class="relative max-w-7xl mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                                <h1 class="text-left mt-32 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                                    <span class="block text-white">Digital Guarantorship</span>
                                    <span class="block text-blue-presta1">For SACCOs</span>
                                </h1>
                                <p class="text-left mt-6 max-w-lg text-xl text-blue-presta1 sm:max-w-3xl">
                                    Booting customer experience with digital signatures.
                                </p>
                                <div class="mt-10 max-w-sm sm:max-w-none sm:flex sm:justify-start">
                                    <div class="space-y-4 sm:space-y-0 sm:mr-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                                        <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-blue-presta2 bg-white hover:bg-indigo-50 sm:px-8">
                                            Request demo
                                        </a>
                                        <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-presta1 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                                            <PlayIcon class="flex-none w-5 h-5 text-white mr-1" aria-hidden="true" />
                                            Watch video
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logos -->
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-blue-presta3 sm:text-4xl">
                            Featured Customers
                        </h3>
                        <p class="text-left text-sm font-semibold text-gray-500 tracking-wide">
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
                <div class="bg-gray-100">
                    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                        <h3 class="mt-2 text-center text-3xl leading-8 font-extrabold tracking-tight text-blue-presta3 sm:text-4xl">
                            The Presta Platform
                        </h3>
                        <div class="mt-6 grid grid-cols-2 gap-8">
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img src="/images/phones n laptop.svg" alt="Tuple">
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <ul role="list" class="mt-6 space-y-4">

                                    <li class="flex space-x-3">
                                        <check-circle-icon class="flex-shrink-0 h-5 w-5 text-green-500" aria-hidden="true" />
                                        <span class="text-base font-semibold text-gray-500 tracking-wide">End-to-end lending platform that is available on both USSD and App.</span>
                                    </li>

                                    <li class="flex space-x-3">
                                        <check-circle-icon class="flex-shrink-0 h-5 w-5 text-green-500" aria-hidden="true" />
                                        <span class="text-base font-semibold text-gray-500 tracking-wide">A customizable appraisal engine and an in-built fraud mitigation algorithm.</span>
                                    </li>

                                    <li class="flex space-x-3">
                                        <check-circle-icon class="flex-shrink-0 h-5 w-5 text-green-500" aria-hidden="true" />
                                        <span class="text-base font-semibold text-gray-500 tracking-wide">Dashboards for analysis & performance monitoring.</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More main page content here... -->
        </main>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import {} from '@headlessui/vue';
import {
    PlayIcon,
    CheckCircleIcon
} from '@heroicons/vue/outline';
import {} from '@heroicons/vue/solid';
import NavigationHome from '@/Components/NavigationHome.vue';

export default {
    components: {
        Head,
        Link,
        PlayIcon,
        NavigationHome,
        CheckCircleIcon
    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    }
}
</script>

<style scoped>

</style>
