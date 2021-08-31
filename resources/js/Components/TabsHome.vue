<template>
    <div class="w-full px-2 py-4 sm:px-0">
        <TabGroup>
            <TabList class="flex flex-wrap md:flex-nowrap p-1 space-x-1 rounded-xl">
                <Tab
                    v-for="category in Object.keys(categories)"
                    as="template"
                    :key="category"
                    v-slot="{ selected }"
                >
                    <button
                        :class="[
              'w-full py-2.5 text-sm leading-5 font-medium text-blue-presta3 rounded-lg relative',
              'focus:outline-none focus:ring-2 ring-offset-2 ring-offset-blue-presta2 ring-gray-200 ring-opacity-60',
              selected
                ? 'bg-white shadow'
                : 'text-blue-presta2 hover:bg-gray-500/20 hover:text-blue-presta1',
            ]"
                    >
                        {{ category }}
                        <span class="absolute top-0 right-0 text-xs mr-1.5 mt-1">{{ categories[category][0].excerpt }}</span>
                    </button>
                </Tab>
            </TabList>

            <TabPanels class="mt-2">
                <TabPanel
                    v-for="(posts, idx) in Object.values(categories)"
                    :key="idx"
                    :class="[
            'p-3',
            'focus:outline-none',
          ]"
                >
                    <ul>
                        <li
                            v-for="post in posts"
                            key="post.id"
                            class="relative p-3 rounded-md hover:bg-coolGray-100"
                        >
                            <div class="mt-12 md:grid md:grid-cols-2 md:gap-8">
                                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                    <img :src="post.featured_image" class="w-80" alt="features presta capital">
                                </div>
                                <div class="col-span-1 flex flex-col justify-center md:col-span-2 lg:col-span-1">
                                    <ul v-if="post.featured_points" role="list" class="mt-6 md:mt-0 space-y-4 flex flex-col justify-center">

                                        <li v-for="point in post.featured_points" class="flex space-x-3">
                                            <check-circle-icon class="flex-shrink-0 h-5 w-5 md:h-8 md:w-8 text-blue-presta3" aria-hidden="true" />
                                            <span class="text-base md:text-lg font-medium text-gray-500" v-html="point"></span>
                                        </li>

                                    </ul>
                                    <div v-else class="block mt-6 md:mt-0">
                                        <p class="text-xl font-semibold text-gray-900">{{ post.title }}</p>
                                        <p class="mt-3 text-base text-gray-500">{{ post.description }}</p>
                                    </div>

                                    <a v-if="post.featured_link" class="text-sm font-medium text-blue-presta4 py-3" :href="post.featured_link"> See more → </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </TabPanel>
            </TabPanels>
        </TabGroup>
    </div>
</template>

<script>
import { ref } from 'vue'
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue'
import {
    CheckCircleIcon
} from '@heroicons/vue/outline';

export default {
    components: {
        TabGroup,
        TabList,
        Tab,
        TabPanels,
        TabPanel,
        CheckCircleIcon
    },
    setup() {
        let categories = ref({
            'Mobile Access' : [
                {
                    id: 1,
                    title: null,
                    excerpt: '',
                    description: '',
                    featured_link: null,
                    featured_image: '/images/USSD and App.svg',
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
                    featured_image: '/images/PHONE 2.svg',
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
                    featured_image: '/images/CollectionsSVG.svg',
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
                    featured_image: '/images/MonitoringSVG.svg',
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
                    featured_image: '/images/AppraisalSVG.svg',
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
                    featured_image: '/images/DisbursementSVG.svg',
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
                    featured_image: '/images/SuperlenderSVG.svg',
                    featured_points: null,
                    created_at: new Date().toISOString()
                }
            ],
        })

        return { categories }
    },
}
</script>
