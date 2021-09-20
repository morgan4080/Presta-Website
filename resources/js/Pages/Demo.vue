<template>
    <Head title="Request Demo | Presta Capital" />

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />

    <div class="min-h-screen bg-white">
        <main>
            <div>
                <div class="bg-gray-100">
                    <div class="max-w-7xl mx-auto pt-32 pb-16 px-4 sm:pt-48 sm:pb-24 sm:px-6 lg:px-8">
                        <div class="relative bg-white shadow-xl">
                            <h2 class="sr-only">Request Demo</h2>

                            <div class="grid grid-cols-1 lg:grid-cols-3">
                                <!-- Contact information -->
                                <div class="relative overflow-hidden py-10 px-6 bg-blue-presta4 sm:px-10 xl:p-12">
                                    <div class="absolute inset-0 pointer-events-none sm:hidden" aria-hidden="true">
                                        <svg class="absolute inset-0 w-full h-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
                                            <defs>
                                                <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#fff" />
                                                    <stop offset="1" stop-color="#fff" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none sm:block lg:hidden" aria-hidden="true">
                                        <svg class="absolute inset-0 w-full h-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
                                            <defs>
                                                <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#fff" />
                                                    <stop offset="1" stop-color="#fff" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none lg:block" aria-hidden="true">
                                        <svg class="absolute inset-0 w-full h-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
                                            <defs>
                                                <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#fff" />
                                                    <stop offset="1" stop-color="#fff" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-medium text-white">Request Demo</h3>
                                    <p class="mt-6 text-base text-blue-50 max-w-3xl">What Happens Next after you fill the form:</p>
                                    <dl class="mt-8 space-y-6">
                                        <dt></dt>
                                        <dd class="flex text-base text-blue-50">
                                            <PhoneIcon class="flex-shrink-0 w-6 h-6 text-blue-200" aria-hidden="true" />
                                            <span class="ml-3">1:1 call with a professional BD Team</span>
                                        </dd>
                                        <dt></dt>
                                        <dd class="flex text-base text-blue-50">
                                            <chat-alt2-icon class="flex-shrink-0 w-6 h-6 text-blue-200" aria-hidden="true" />
                                            <span class="ml-3">Needs Assessment and solution alignment.</span>
                                        </dd>
                                        <dt></dt>
                                        <dd class="flex text-base text-blue-50">
                                            <chat-alt2-icon class="flex-shrink-0 w-6 h-6 text-blue-200" aria-hidden="true" />
                                            <span class="ml-3">Sales Pitch or Product Demo.</span>
                                        </dd>
                                        <dt></dt>
                                        <dd class="flex text-base text-blue-50">
                                            <chat-alt2-icon class="flex-shrink-0 w-6 h-6 text-blue-200" aria-hidden="true" />
                                            <span class="ml-3">Proposal and Handling Objections.</span>
                                        </dd>
                                        <dt></dt>
                                        <dd class="flex text-base text-blue-50">
                                            <chat-alt2-icon class="flex-shrink-0 w-6 h-6 text-blue-200" aria-hidden="true" />
                                            <span class="ml-3">Closing and project on-boarding.</span>
                                        </dd>
                                        <dt></dt>
                                        <dd class="flex text-base text-blue-50">
                                            <chat-alt2-icon class="flex-shrink-0 w-6 h-6 text-blue-200" aria-hidden="true" />
                                            <span class="ml-3">Following Up & Customer Service.</span>
                                        </dd>
                                    </dl>
                                </div>

                                <!-- Contact form -->
                                <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                                    <form action="#" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                                        <div>
                                            <label for="first-name" class="block text-sm font-medium text-gray-900">First name</label>
                                            <div class="mt-1">
                                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-blue-presta3 focus:border-blue-presta3 border-gray-300 rounded-md" />
                                            </div>
                                        </div>
                                        <div>
                                            <label for="last-name" class="block text-sm font-medium text-gray-900">Last name</label>
                                            <div class="mt-1">
                                                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-blue-presta3 focus:border-blue-presta3 border-gray-300 rounded-md" />
                                            </div>
                                        </div>
                                        <div>
                                            <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                                            <div class="mt-1">
                                                <input id="email" name="email" type="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-blue-presta3 focus:border-blue-presta3 border-gray-300 rounded-md" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between">
                                                <label for="phone" class="block text-sm font-medium text-gray-900">Phone</label>
                                                <span id="phone-optional" class="text-sm text-gray-500">Optional</span>
                                            </div>
                                            <div class="mt-1">
                                                <input type="text" name="phone" id="phone" autocomplete="tel" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-blue-presta3 focus:border-blue-presta3 border-gray-300 rounded-md" aria-describedby="phone-optional" />
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="subject" class="block text-sm font-medium text-gray-900">Type of organisation</label>
                                            <div class="mt-1">
                                                <select id="organisation" name="organisation" autocomplete="organisation" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-blue-presta3 focus:border-blue-presta3 border-gray-300 rounded-md">
                                                    <option>Sacco</option>
                                                    <option>Investment Group</option>
                                                    <option>Microfinance</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="subject" class="block text-sm font-medium text-gray-900">Organisation size</label>
                                            <div class="mt-1">
                                                <select id="organisation_size" name="organisation_size" autocomplete="organisation_size" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-blue-presta3 focus:border-blue-presta3 border-gray-300 rounded-md">
                                                    <option>0 - 100</option>
                                                    <option>100 - 500</option>
                                                    <option>500 +</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2 sm:flex sm:justify-end">
                                            <button type="submit" class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-prestaR hover:bg-blue-presta4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-presta3 sm:w-auto">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
import { ChatAlt2Icon, PhoneIcon } from '@heroicons/vue/outline'
import NavigationHome from '@/Components/NavigationHome.vue';
import MainFooter from '@/Components/MainFooter.vue';
export default {
    components: {
        PhoneIcon,
        NavigationHome,
        MainFooter,
        Head,
        Link,
        ChatAlt2Icon
    },
}
</script>
