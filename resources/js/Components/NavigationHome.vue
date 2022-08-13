<template>
    <div class="relative">
        <div class="absolute inset-0 z-20">
            <Popover :class="incomingNavClass" class="relative">
                <div class="max-w-8xl flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10 mx-auto">
                    <div class="flex justify-center items-center lg:w-0 lg:flex-1">
                        <Link :href="route('homepage')">
                            <span class="sr-only">Presta Capital</span>
                            <img class="h-8 md:mr-4 lg:mr-6 w-auto sm:h-12" :src="checkPage() === '/' ? '/images/logos/landingHeader.svg' : '/images/logos/Group 18.svg' " alt="" />
                        </Link>

                        <PopoverGroup as="nav" class="hidden md:flex justify-center space-x-10">
                            <Link :href="route('homepage')" :class="checkPage() === '/' ? 'nav-text' : 'text-white' "  class="text-base font-medium hover:text-gray-200">
                                Home
                            </Link>
                            <Popover class="relative" v-slot="{ open }">
                                <PopoverButton :class="[open ? 'text-white' : 'text-white',  'group bg-transparent rounded-md inline-flex items-center text-base font-medium hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-presta0']">
                                    <span :class="checkPage() === '/' ? 'nav-text' : 'text-white' ">Solutions</span>
                                    <ChevronDownIcon :class="[open ? 'text-white' : 'text-white', checkPage() === '/' ? 'nav-text' : 'text-white', 'ml-2 h-5 w-5 group-hover:text-white']" aria-hidden="true" />
                                </PopoverButton>

                                <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                                    <PopoverPanel class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-xs sm:px-0">
                                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                                <Link v-for="item in solutions" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50" :key="item.name" :href="route('solutions.show', item.href)">
                                                    <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-presta2 text-white sm:h-12 sm:w-12">
                                                        <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                                                    </div>
                                                    <div class="ml-4">
                                                        <p class="text-base font-medium text-gray-900">{{ item.name }}</p>
                                                        <p class="mt-1 text-sm text-gray-500">{{ item.description }}</p>
                                                    </div>
                                                </Link>
                                            </div>
                                        </div>
                                    </PopoverPanel>
                                </transition>
                            </Popover>

                            <Link :href="route('pricing')" :class="checkPage() === '/' ? 'nav-text' : 'text-white' " class="text-base font-medium hover:text-gray-200">
                                Pricing
                            </Link>
                            <Link href="#" class="text-base font-medium nav-text hover:text-gray-200 hidden">
                                Customers
                            </Link>

                            <Popover class="relative" v-slot="{ open }">
                                <PopoverButton :class="[open ? 'text-white' : 'text-white', 'group bg-transparent rounded-md inline-flex items-center text-base font-medium hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-presta0']">
                                    <span :class="checkPage() === '/' ? 'nav-text' : 'text-white' " >Resources</span>
                                    <ChevronDownIcon :class="[open ? 'nav-text' : 'nav-text', 'ml-2 h-5 w-5 group-hover:text-white']" aria-hidden="true" />
                                </PopoverButton>

                                <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                                    <PopoverPanel class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-xs sm:px-0">
                                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                                <Link v-for="item in resources" :key="item.name" :href="item.href" class="-m-3 p-3 block rounded-md hover:bg-gray-50">
                                                    <p class="text-base font-medium text-gray-900">
                                                        {{ item.name }}
                                                    </p>
                                                    <p class="mt-1 text-sm text-gray-500">
                                                        {{ item.description }}
                                                    </p>
                                                </Link>
                                            </div>
                                        </div>
                                    </PopoverPanel>
                                </transition>
                            </Popover>

                            <Link :href="route('contact')" :class="checkPage() === '/' ? 'nav-text' : 'text-white' "  class="text-base font-medium hover:text-gray-200">
                                Contact Us
                            </Link>
                        </PopoverGroup>
                    </div>
                    <div class="-mr-2 -my-2 md:hidden">
                        <PopoverButton class="rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-presta4">
                            <span class="sr-only">Open menu</span>
                            <MenuIcon class="h-6 w-6" aria-hidden="true" />
                        </PopoverButton>
                    </div>
                    <div class="flex justify-between items-center lg:w-0 lg:flex-1">
                        <div class="flex justify-center space-x-6 ml-12">
                            <a v-for="item in navigation" :key="item.name" :href="item.href" target="_blank" class="text-white hover:text-gray-500">
                                <span class="sr-only">{{ item.name }}</span>
                                <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                            </a>
                        </div>

                        <a href="#" class="text-sm flex items-center font-medium text-white hover:text-gray-200 mr-8">
                            <phone-icon class="flex-none w-5 h-5 text-white mr-1" aria-hidden="true" />
                            +254711082442
                        </a>
                </div>
                </div>

                <transition enter-active-class="duration-200 ease-out" enter-from-class="opacity-0 scale-95" enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in" leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
                    <PopoverPanel focus class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                            <div class="pt-5 pb-6 px-5">
                                <div class="flex items-center justify-between">
                                    <Link :href="route('homepage')">
                                        <img class="h-8 w-auto" src="/images/logos/blue logo.svg" alt="Presta Capital" />
                                    </Link>
                                    <div class="-mr-2">
                                        <PopoverButton class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-presta4">
                                            <span class="sr-only">Close menu</span>
                                            <XIcon class="h-6 w-6" aria-hidden="true" />
                                        </PopoverButton>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <nav class="grid grid-cols-1 gap-7">
                                        <Link v-for="item in solutions" :key="item.name" :href="route('solutions.show', item.href)" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                                            <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-blue-presta2 text-white">
                                                <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                                            </div>
                                            <div class="ml-4 text-base font-medium text-gray-900">
                                                {{ item.name }}
                                            </div>
                                        </Link>
                                    </nav>
                                </div>
                            </div>
                            <div class="py-6 px-5">
                                <div class="grid grid-cols-2 gap-4">
                                    <Link :href="route('pricing')" class="text-base font-medium text-gray-900 hover:text-gray-700">
                                        Pricing
                                    </Link>

                                    <Link v-for="item in resources" :key="resources.name" :href="item.href" class="text-base font-medium text-gray-900 hover:text-gray-700">
                                        {{ item.name }}
                                    </Link>
                                </div>
                                <div class="mt-6">
                                    <Link href="#" class="w-full hidden flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-presta1 hover:bg-blue-presta2">
                                        Sign up
                                    </Link>
                                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                                        Existing customer?
                                        <!-- space -->
                                        <a href="https://presta.co.ke/kopesha" class="text-blue-presta4 hover:text-blue-presta3">
                                            Sign in
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </PopoverPanel>
                </transition>
            </Popover>
        </div>
    </div>
</template>

<script>
import { Popover, PopoverButton, PopoverGroup, PopoverPanel } from '@headlessui/vue'
import {
    ChartBarIcon,
    CursorClickIcon,
    DocumentReportIcon,
    MenuIcon,
    RefreshIcon,
    ShieldCheckIcon,
    ViewGridIcon,
    XIcon,
    ChatAlt2Icon,
    PhoneIcon,
    MailIcon
} from '@heroicons/vue/outline'
import { ChevronDownIcon } from '@heroicons/vue/solid'
import { Link } from '@inertiajs/inertia-vue3'

const solutions = [
    {
        name: 'Microfinance',
        description: 'Get a better understanding of your customers financial needs.',
        href: 'micro-finance',
        icon: ChartBarIcon,
    },
    {
        name: 'Saccos',
        description: 'Speak directly to your customers in a more meaningful way.',
        href: 'saccos',
        icon: CursorClickIcon,
    },
    {
        name: 'Investment Groups',
        description: "Your customers' data will be safe and secure.",
        href: 'investment-groups',
        icon: ShieldCheckIcon
    },
];

const resources = [
    { name: 'About Presta', description: 'Learn how to maximize our platform to get the most out of it.', href: route('about') },
    { name: 'Blogs', description: 'Understand how we work to streamline credit services.', href: route('blogs.index') },
    { name: 'Gallery', description: 'Understand how we work to streamline credit services.', href: route('gallery.index') },
    { name: 'CaseStudy', description: 'Understand how we work to streamline credit services.', href: route('case-study.index') },
    { name: 'Videos', description: 'Understand how we work to deliver platform specific credit solutions.', href: '/blogs/videos' },
    {
        name: 'Help Center',
        description: 'Get all of your questions answered in our forums or contact support.',
        href: route('blogs.index'),
    },
];

import {defineComponent, h, onMounted} from 'vue'

const navigation = [
    {
        name: 'Twitter',
        href: 'https://twitter.com/prestaafrica',
        icon: defineComponent({
            render: () =>
                h('svg', { fill: 'currentColor', viewBox: '0 0 24 24' }, [
                    h('path', {
                        d: 'M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84',
                    }),
                ]),
        }),
    },
    {
        name: 'Instagram',
        href: 'https://instagram.com/prestaafrica?igshid=YmMyMTA2M2Y=',
        icon: defineComponent({
            render: () =>
                h('svg', { fill: 'currentColor', viewBox: '0 0 24 24' }, [
                    h('path', {
                        'fill-rule': 'evenodd',
                        d: 'M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z',
                        'clip-rule': 'evenodd',
                    }),
                ]),
        }),
    },
    {
        name: 'Facebook',
        href: 'https://www.facebook.com/prestaafrica',
        icon: defineComponent({
            render: () =>
                h('svg', { fill: 'currentColor', viewBox: '0 0 24 24' }, [
                    h('path', {
                        'fill-rule': 'evenodd',
                        d: 'M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z',
                        'clip-rule': 'evenodd',
                    }),
                ]),
        }),
    },
    {
        name: 'LinkedIn',
        href: 'https://www.linkedin.com/company/prestaafrica',
        icon: defineComponent({
            render: () =>
                h('svg', { fill: 'currentColor', viewBox: '0 0 18 13' }, [
                    h('path', {
                        'fill-rule': 'evenodd',
                        d: 'M6.4661 1.1171V12.2445H9.92102V6.74177C9.92102 5.28977 10.1942 3.8836 11.9945 3.8836C13.7701 3.8836 13.7921 5.54368 13.7921 6.83343V12.2454H17.2489V6.14319C17.2489 3.14569 16.6035 0.842102 13.1 0.842102C11.4179 0.842102 10.2904 1.76519 9.82935 2.63877H9.7826V1.1171H6.4661V1.1171ZM0.835938 1.1171H4.29635V12.2445H0.835938V1.1171Z" fill="#2B2B39',
                        'clip-rule': 'evenodd',
                    }),
                ]),
        }),
    },
]

const checkPage = () => {
  let pth = window.location.pathname
    return pth
}
checkPage()
onMounted(()=>{
    checkPage()
})
export default {
    components: {
        Popover,
        PopoverButton,
        PopoverGroup,
        PopoverPanel,
        ChevronDownIcon,
        MenuIcon,
        XIcon,
        ChatAlt2Icon,
        PhoneIcon,
        MailIcon,
        Link
    },
    props: {
        incomingNavClass: {
            type: String,
            default() {
                return 'bg-transparent'
            }
        }
    },
    setup() {
        return {
            solutions,
            resources,
            navigation,
            checkPage,
        }
    },
}
</script>
