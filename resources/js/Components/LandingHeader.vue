<template>
    <div class="relative bg-white">
        <main style="height: 45rem" class="lg:relative">
            <div class="mx-auto lg:h-full lg:flex lg:justify-start lg:items-center max-w-7xl w-full my-auto  text-center lg:text-left">
                <div class="px-4 pt-24 md:pt-0 lg:flex-col lg:justify-start lg:items-center lg:w-1/2 sm:px-8">
                    <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-5xl sm:tracking-tight md:text-6xl md:tracking-tight lg:text-5xl lg:tracking-tight xl:text-6xl xl:tracking-tight">
                        <span style="color: #489AAB" class="block xl:inline">Supercharge</span>
                        <span style="color:#27627E" class="block xl:inline"> Your</span>
                        {{ ' ' }}
                        <span style="color:#27627E"  class="block text-indigo-600 xl:inline">Lending</span>
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">Grow your business, unlock new efficiencies and create happier & more loyal customers with Presta.</p>
                    <div class="mt-10 mb-10 sm:mb-0 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <Link :href="route('demo')" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-presta2 hover:bg-blue-presta3 md:py-4 md:text-lg md:px-10"> START 1 MONTH FREE TRIAL </Link>
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a @click="openDemoDialogue" href="#"
                               class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-presta3 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">EXPLORE DEMO </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative w-full h-80 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full shadow-2xl">
                <img class="absolute inset-0 h-full object-cover w-full object-centre" src="/images/landing1.png" alt="" />
                <div v-if="!showVideo" class="relative col-span-2 h-full flex justify-center items-center">
                    <svg width="84" @click="playVideo('play')" height="94" class="hover:scale-110 sm:scale-90 lg:scale-100" viewBox="0 0 84 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_912_545)">
                            <path d="M67.5 35.6699C70.8333 37.5944 70.8333 42.4056 67.5 44.3301L7.5 78.9711C4.16667 80.8956 0 78.49 0 74.641V5.35899C0 1.50998 4.16666 -0.895643 7.5 1.02886L67.5 35.6699Z" fill="white"/>
                        </g>
                        <defs>
                            <filter id="filter0_d_912_545" x="0" y="0.351526" width="84" height="93.297" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dx="10" dy="10"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.45 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_912_545"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_912_545" result="shape"/>
                            </filter>
                        </defs>
                    </svg>

                </div>

            </div>

            <YoutubeModal @closeModal="playVideo('ee')" class="z-40" v-if="showVideo"/>


            <DemoDialogue v-if="openDemoModal" />
        </main>
        <ActiveMembers></ActiveMembers>
        <Information></Information>
        <MfiBenefits></MfiBenefits>
        <SaccoBenefit></SaccoBenefit>
        <OurServices></OurServices>
        <HappyClients></HappyClients>
        <LatestNews></LatestNews>
        <SignLoanform></SignLoanform>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import YoutubeModal from '@/Components/YoutubeModal';
import ActiveMembers from '@/Components/ActiveMembers';
import DemoDialogue from '@/Components/DemoDialogue';
import Information from '@/Components/Information';
import MfiBenefits from '@/Components/MfiBenefits';
import SaccoBenefit from '@/Components/SaccoBenefit';
import OurServices from '@/Components/OurServices';
import HappyClients from '@/Components/HappyClients';
import LatestNews from '@/Components/LatestNews.vue';
import SignLoanform from '@/Components/SignLoanform';
import {
    BookmarkAltIcon,
    CalendarIcon,
    ChartBarIcon,
    CursorClickIcon,
    PhoneIcon,
    PlayIcon,
    RefreshIcon,
    ShieldCheckIcon,
    SupportIcon,
    ViewGridIcon,
} from '@heroicons/vue/outline'

import {ref} from "vue";

const showVideo = ref(false);

const openDemoModal = ref(false);

const openDemoDialogue = () => {
    openDemoModal.value = !openDemoModal.value;
}

const playVideo = (param) => {
    showVideo.value = !showVideo.value;
}

const features = [
    {
        name: 'Analytics',
        href: '#',
        description: 'Get a better understanding of where your traffic is coming from.',
        icon: ChartBarIcon,
    },
    {
        name: 'Engagement',
        href: '#',
        description: 'Speak directly to your customers in a more meaningful way.',
        icon: CursorClickIcon,
    },
    { name: 'Security', href: '#', description: "Your customers' data will be safe and secure.", icon: ShieldCheckIcon },
    {
        name: 'Integrations',
        href: '#',
        description: "Connect with third-party tools that you're already using.",
        icon: ViewGridIcon,
    },
    {
        name: 'Automations',
        href: '#',
        description: 'Build strategic funnels that will drive your customers to convert',
        icon: RefreshIcon,
    },
]

const callsToAction = [
    { name: 'Watch Demo', href: '#', icon: PlayIcon },
    { name: 'Contact Sales', href: '#', icon: PhoneIcon },
]

const resources = [
    {
        name: 'Help Center',
        description: 'Get all of your questions answered in our forums or contact support.',
        href: '#',
        icon: SupportIcon,
    },
    {
        name: 'Guides',
        description: 'Learn how to maximize our platform to get the most out of it.',
        href: '#',
        icon: BookmarkAltIcon,
    },
    {
        name: 'Events',
        description: 'See what meet-ups and other events we might be planning near you.',
        href: '#',
        icon: CalendarIcon,
    },
    { name: 'Security', description: 'Understand how we take your privacy seriously.', href: '#', icon: ShieldCheckIcon },
]

const recentPosts = [
    { id: 1, name: 'Boost your conversion rate', href: '#' },
    { id: 2, name: 'How to use search engine optimization to drive traffic to your site', href: '#' },
    { id: 3, name: 'Improve your customer experience', href: '#' },
]

</script>
<style scoped>
@media (min-width: 1024px) {
    .pik{
        border-top-left-radius: 3.5rem;
    }
}
</style>
