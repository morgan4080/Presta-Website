<template>
    <Head title="Pricing | Presta Capital" />

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />

    <div class="min-h-screen bg-white">
        <main>
            <div>
                <div class="bg-blue-prestaX">
                    <div class="max-w-7xl mx-auto px-4 pt-32 pb-6 sm:px-6 sm:py-24 lg:pt-64 lg:pb-12 lg:px-8">
                        <h2 class="text-3xl text-center font-extrabold text-blue-presta3 sm:text-5xl sm:leading-none sm:tracking-tight lg:text-6xl">
                            Our Mobile Lending Plans!
                        </h2>
                        <div class="mt-6 flex flex-col md:flex-row justify-center items-center md:space-x-12">
                            <a @click="topTab = 1" :class="{'text-blue-presta3 font-semibold md:font-bold border-b-2 border-blue-presta3' : topTab === 1, 'text-blue-presta3 font-medium' : topTab !== 1, }" class="cursor-pointer py-2" href="#subscription">Subscription Model</a>
                            <a @click="topTab = 2" :class="{'text-blue-presta3 font-semibold md:font-bold border-b-2 border-blue-presta3' : topTab === 2, 'text-blue-presta3 font-medium' : topTab !== 2, }" class="cursor-pointer py-2"  href="#revenue-share">Revenue Share Model</a>
                            <a @click="topTab = 3" :class="{'text-blue-presta3 font-semibold md:font-bold border-b-2 border-blue-presta3' : topTab === 3, 'text-blue-presta3 font-medium' : topTab !== 3, }" class="cursor-pointer py-2"  href="#transactions">Transactions</a>
                            <a @click="topTab = 4" :class="{'text-blue-presta3 font-semibold md:font-bold border-b-2 border-blue-presta3' : topTab === 4, 'text-blue-presta3 font-medium' : topTab !== 4, }" class="cursor-pointer py-2"  href="#faq">Faqs</a>
                        </div>
                    </div>
                </div>

                <div id="subscription" class="max-w-7xl mx-auto py-24 px-4 bg-white sm:px-6 lg:px-8">
                    <p class="max-w-2xl text-center mx-auto text-xl text-gray-500">Subscription model is for microfinance organisations, Investment groups and Bosa Saccos.</p>

                    <!-- Tiers -->
                    <div class="mt-24 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-6 lg:gap-x-2">
                        <div v-for="tier in pricing.tiers" :key="tier.title" :class="{'bg-blue-presta4 text-white': tier.mostPopular, 'bg-white': !tier.mostPopular, }" class="relative p-8 md:py-4 md:px-2 border border-gray-200 rounded-2xl shadow flex flex-col">
                            <div class="flex-1">
                                <div class="flex justify-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29.593" height="30.968" viewBox="0 0 29.593 30.968">
                                        <g id="Group_6638" data-name="Group 6638" transform="translate(0 0)">
                                            <path id="Path_7551" data-name="Path 7551" d="M133.112,409.8l7.407-5.824-7.407-5.775,7.369-5.827,7.407,5.827-7.407,5.824,7.407,5.823-7.407,5.824Z" transform="translate(-118.295 -392.378)" :fill="tier.icon" fill-rule="evenodd"/>
                                            <path id="Path_7552" data-name="Path 7552" d="M129.245,406.287l7.408-5.824,7.41,5.824-7.41,5.824Z" transform="translate(-121.878 -381.144)" :fill="tier.icon" fill-rule="evenodd"/>
                                            <path id="Path_7553" data-name="Path 7553" d="M140.239,398.2l-7.41,5.824,7.41,5.823-7.41,5.824-7.407-5.872,7.407-5.824-7.407-5.775,7.407-5.827Z" transform="translate(-125.421 -392.378)" :fill="tier.icon" fill-rule="evenodd"/>
                                        </g>
                                    </svg>


                                    <p :class="{'text-white' : tier.mostPopular, 'text-gray-900' : !tier.mostPopular}" class="flex flex-col text-right">
                                        <span class="text-lg font-extrabold tracking-tight">KES {{ tier.price }}</span>
                                        <span class="ml-1 text-sm font-semibold">{{ tier.frequency }}</span>
                                    </p>
                                </div>
                                <h3 :class="{'text-white' : tier.mostPopular, 'text-gray-900' : !tier.mostPopular}" class="text-lg mt-2 font-semibold">{{ tier.title }}</h3>
                                <p v-if="tier.mostPopular" class="absolute top-0 left-10 py-0.5 px-3 bg-blue-prestaY rounded-full text-xs font-semibold uppercase tracking-wide text-white transform -translate-y-1/2">Most popular</p>

<!--                                <p class="mt-6 text-gray-500">{{ tier.description }}</p>-->

                                <!-- Feature list -->
                                <ul role="list" class="mt-6 space-y-3">
                                    <li v-for="feature in tier.features" :key="feature" class="flex">
                                        <CheckIcon :class="{'text-white' : tier.mostPopular, 'text-blue-presta3' : !tier.mostPopular}" class="flex-shrink-0 w-4 h-4" aria-hidden="true" />
                                        <span :class="{'text-white' : tier.mostPopular, 'text-gray-500' : !tier.mostPopular}" class="ml-3 text-sm">{{ feature }}</span>
                                    </li>
                                </ul>
                            </div>

<!--                            <a href="#" :class="[tier.mostPopular ? 'bg-blue-presta3 text-white hover:bg-blue-600' : 'bg-blue-50 text-blue-presta3 hover:bg-indigo-100', 'mt-8 block w-full py-3 px-6 border border-transparent rounded-md text-center font-medium']">{{ tier.cta }}</a>-->
                        </div>
                    </div>
                </div>

                <div class="bg-white">
                    <div class="relative sm:py-16">
                        <div aria-hidden="true" class="hidden sm:block">
                            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50 rounded-r-3xl" />
                            <svg class="absolute top-8 left-1/2 -ml-3" width="404" height="392" fill="none" viewBox="0 0 404 392">
                                <defs>
                                    <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)" />
                            </svg>
                        </div>
                        <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                            <div class="relative rounded-2xl px-6 py-10 bg-blue-presta4 overflow-hidden shadow-xl sm:px-12 sm:py-20">
                                <div class="relative">
                                    <div class="sm:text-center">
                                        <p class="mt-6 mx-auto max-w-2xl text-lg text-white">
                                            You can count on us: We're here to help from day one, with 24/7 outstanding support.
                                            This is the beginning of a beautiful friendship.
                                        </p>
                                    </div>
                                    <div class="mt-12 mx-auto sm:max-w-lg sm:flex justify-center">
                                        <div class="mt-4 sm:mt-0 sm:ml-3">
                                            <button type="button" class="block w-full rounded-md border border-transparent px-5 py-3 bg-blue-prestaW text-base font-medium text-white shadow hover:bg-blue-presta3 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-600 sm:px-10">Get Presta Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <TransactionFees id="transactions" />

                <RevenueDistribution id="revenue-share" />

                <div class="bg-white">
                    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
                        <h2 class="text-3xl text-center font-extrabold text-blue-presta4">
                            <span class="block">Join Over 100 Businesses Who Trust Presta</span>
                        </h2>
                        <div class="mt-8 grid grid-cols-2 gap-8 md:grid-cols-5 lg:grid-cols-10">
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-36 md:h-32" src="/images/unga-Sacco.png" alt="Tuple" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-36 md:h-32" src="/images/Rubani-Sacco.png" alt="Mirage" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-36 md:h-32" src="/images/Jawabu-Biashara.png" alt="StaticKit" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-3 lg:col-span-1">
                                <img class="h-36 md:h-32" src="/images/Ketepa-Sacco.png" alt="Transistor" />
                            </div>
                            <div class="col-span-2 flex justify-center md:col-span-3 lg:col-span-1">
                                <img class="h-36 md:h-32" src="/images/Resolution-Insurance.png" alt="Workcation" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-36 md:h-32" src="/images/izwe-loans.png" alt="Tuple" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-36 md:h-32" src="/images/I-choose-life.png" alt="Mirage" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                <img class="h-36 md:h-32" src="/images/Bat-Sacco.png" alt="StaticKit" />
                            </div>
                            <div class="col-span-1 flex justify-center md:col-span-3 lg:col-span-1">
                                <img class="h-36 md:h-32" src="/images/Britam.png" alt="Transistor" />
                            </div>
                            <div class="col-span-2 flex justify-center md:col-span-3 lg:col-span-1">
                                <img class="h-36 md:h-32" src="/images/Imarisha Sacco.png" alt="Workcation" />
                            </div>
                        </div>
                    </div>
                </div>

                <section class="bg-white overflow-hidden">
                    <div class="relative max-w-7xl mx-auto pt-20 pb-12 px-4 sm:px-6 lg:px-8 lg:py-20">

                        <svg class="absolute left-full top-full right-0 transform -translate-x-40 -translate-y-56" id="Group_10702" data-name="Group 10702" xmlns="http://www.w3.org/2000/svg" width="209" height="305" viewBox="0 0 209 305">
                            <path id="Rectangle_1988" data-name="Rectangle 1988" d="M30,0H192a0,0,0,0,1,0,0V60a0,0,0,0,1,0,0H30A30,30,0,0,1,0,30v0A30,30,0,0,1,30,0Z" transform="translate(17)" fill="#bad5db"/>
                            <path id="Rectangle_1989" data-name="Rectangle 1989" d="M30,0H151a0,0,0,0,1,0,0V60a0,0,0,0,1,0,0H30A30,30,0,0,1,0,30v0A30,30,0,0,1,30,0Z" transform="translate(58 88)" fill="#bad5db"/>
                            <rect id="Rectangle_1990" data-name="Rectangle 1990" width="184" height="72" rx="36" transform="translate(0 176)" fill="#bad5db"/>
                            <rect id="Rectangle_1991" data-name="Rectangle 1991" width="154" height="40" rx="20" transform="translate(0 265)" fill="#bad5db"/>
                        </svg>

                        <svg class="hidden lg:block absolute right-full top-1/2 transform translate-x-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="209" height="305" viewBox="0 0 209 305">
                            <g id="Group_10701" data-name="Group 10701" transform="translate(0 -3813)">
                                <path id="Rectangle_1988" data-name="Rectangle 1988" d="M0,0H162a30,30,0,0,1,30,30v0a30,30,0,0,1-30,30H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(0 3813)" fill="#bad5db"/>
                                <path id="Rectangle_1989" data-name="Rectangle 1989" d="M0,0H121a30,30,0,0,1,30,30v0a30,30,0,0,1-30,30H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(0 3901)" fill="#bad5db"/>
                                <rect id="Rectangle_1990" data-name="Rectangle 1990" width="184" height="72" rx="36" transform="translate(25 3989)" fill="#bad5db"/>
                                <rect id="Rectangle_1991" data-name="Rectangle 1991" width="154" height="40" rx="20" transform="translate(55 4078)" fill="#bad5db"/>
                            </g>
                        </svg>

                        <div class="relative max-w-4xl lg:flex lg:items-center mx-auto">

                            <div class="relative lg:ml-10">
                                <svg class="absolute top-0 left-0 transform -translate-x-8 -translate-y-24 h-36 w-36 text-blue-presta1 opacity-25" stroke="currentColor" fill="none" viewBox="0 0 144 144" aria-hidden="true">
                                    <path stroke-width="2" d="M41.485 15C17.753 31.753 1 59.208 1 89.455c0 24.664 14.891 39.09 32.109 39.09 16.287 0 28.386-13.03 28.386-28.387 0-15.356-10.703-26.524-24.663-26.524-2.792 0-6.515.465-7.446.93 2.327-15.821 17.218-34.435 32.11-43.742L41.485 15zm80.04 0c-23.268 16.753-40.02 44.208-40.02 74.455 0 24.664 14.891 39.09 32.109 39.09 15.822 0 28.386-13.03 28.386-28.387 0-15.356-11.168-26.524-25.129-26.524-2.792 0-6.049.465-6.98.93 2.327-15.821 16.753-34.435 31.644-43.742L121.525 15z" />
                                </svg>
                                <blockquote class="relative">
                                    <div class="text-2xl leading-9 font-medium text-gray-900">
                                        <p>
                                            We needed a mobile lending solution and didn't want to build it ourselves because it needs to be really great. The Presta team is laser-focused on customer-facing solutions, and we're focused on building a great lending business.
                                        </p>
                                    </div>
                                    <footer class="mt-8">
                                        <div class="flex">
                                            <div class="flex-shrink-0 lg:hidden">
                                                <img class="h-12 w-12 rounded-full" src="/images/QuentinAfande.png" alt="" />
                                            </div>
                                            <div class="ml-4 lg:ml-0">
                                                <div class="text-base font-medium text-gray-900">Quentin Afande</div>
                                                <div class="text-base font-medium text-blue-presta4">MD. Feezy Mobile Credit Ltd.</div>
                                            </div>
                                        </div>
                                    </footer>
                                </blockquote>
                            </div>

                            <div class="hidden lg:block lg:flex-shrink-0">
                                <img class="h-56 w-56 rounded-full xl:h-80 xl:w-80" src="/images/QuentinAfande.png" alt="Quentin Afande Testimonial" />
                            </div>
                        </div>
                    </div>
                </section>

                <FAQ id="faq" />

                <div class="bg-white">
                    <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                        <h2 class="text-3xl font-extrabold text-blue-presta4 sm:text-4xl">
                            <span class="block">Ready to get started?</span>
                        </h2>
                        <p class="mt-4 text-lg leading-6 text-gray-500">A better experience for your customers, fewer headaches for your team.</p>
                        <Link :href="route('demo')" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 bg-blue-50 text-blue-presta3 hover:bg-indigo-100 border border-transparent rounded-md text-center font-medium sm:w-auto">
                            Request Plan
                        </Link>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <MainFooter :showDemo="false" />
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import NavigationHome from '@/Components/NavigationHome.vue';
import FAQ from '@/Components/FAQ.vue';
import RevenueDistribution from '@/Components/RevenueDistribution.vue';
import MainFooter from '@/Components/MainFooter.vue';
import {CheckCircleIcon, CheckIcon} from "@heroicons/vue/outline";
import TransactionFees from "@/Components/TransactionFees";
import {ref} from "vue";

const pricing = {
    tiers: [
        {
            title: 'Basic',
            icon: `#F8B0A3`,
            price: '4,000',
            frequency: '/month',
            description: 'The essentials to provide your best work for clients.',
            features: ['USSD Access', 'Mpesa C2B and B2C', 'Records Management', 'Loan Reminders'],
            cta: 'Monthly billing',
            mostPopular: false,
        },
        {
            title: 'Basic+penalties',
            icon: `#D0F8A3`,
            price: '6,000',
            frequency: '/month',
            description: 'A plan that scales with your rapidly growing business.',
            features: [
                'USSD Access',
                'Mpesa C2B and B2C',
                'Records Management',
                'Loan Reminders',
                'Loan Penalties',
            ],
            cta: 'Monthly billing',
            mostPopular: false,
        },
        {
            title: 'Basic+appraisal',
            icon: `#D8A5F6`,
            price: '6,500',
            frequency: '/month',
            description: 'Dedicated support and infrastructure for your company.',
            features: [
                'USSD Access',
                'Mpesa C2B and B2C',
                'Records Management',
                'Loan Reminders',
                'Loan Penalties',
                'Appraisals',
            ],
            cta: 'Monthly billing',
            mostPopular: false,
        },
        {
            title: 'Intermediate',
            icon: `#608BFF`,
            price: '11,000',
            frequency: '/month',
            description: 'The essentials to provide your best work for clients.',
            features: [
                'All in Basic',
                'Guarantors',
                'Approval workflow',
            ],
            cta: 'Monthly billing',
            mostPopular: false,
        },
        {
            title: 'Business',
            icon: `#ffffff`,
            price: '20,000',
            frequency: '/month',
            description: 'A plan that scales with your rapidly growing business.',
            features: [
                'All in Intermediate',
                'Customer Scoring',
                'Graduation Rules',
                '24/7 Support Line & Email',
                'Branded SMS',
                'Mpesa KYC',
                'Custom Paybills',
            ],
            cta: 'Monthly billing',
            mostPopular: true,
        },
        {
            title: 'Enterprise',
            icon: `#79DB0B`,
            price: '35,000',
            frequency: '/month',
            description: 'Dedicated support and infrastructure for your company.',
            features: [
                'All in Professional',
                'Reconciliation Engine',
            ],
            cta: 'Monthly billing',
            mostPopular: false,
        },
    ],
}
export default {
    components: {
        TransactionFees,
        Head,
        Link,
        NavigationHome,
        MainFooter,
        CheckCircleIcon,
        CheckIcon,
        FAQ,
        RevenueDistribution
    },
    name: "Pricing",
    setup() {
        const topTab = ref(1)
        return {
            pricing,
            topTab
        }
    },
}
</script>

<style scoped>

</style>
