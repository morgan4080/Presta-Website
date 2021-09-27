<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <div class="relative">
        <div class="absolute inset-0 z-10">
            <Popover :class="incomingNavClass" class="relative">
                <div class="hidden md:flex justify-between items-center max-w-7xl mx-auto px-2 py-3 md:justify-start md:space-x-10 md:border-white md:border-b">
                    <div class="flex items-center lg:w-0 lg:flex-1">
                        <a href="#" class="text-sm flex items-center font-medium text-white hover:text-gray-200 mr-8">
                            <phone-icon class="flex-none w-5 h-5 text-white mr-1" aria-hidden="true" />
                            +254798217067
                        </a>
                        <a href="#" class="text-sm flex items-center font-medium text-white hover:text-gray-200">
                            <mail-icon class="flex-none w-5 h-5 text-white mr-1" aria-hidden="true" />
                            support@presta.co.ke
                        </a>
                    </div>
                    <div class="hidden md:flex items-center justify-end flex-1 lg:w-0">
                        <a href="#" class="whitespace-nowrap hidden hidden text-base font-medium text-white hover:text-gray-200">
                            Sign in
                        </a>
                        <a href="https://presta.co.ke/kopesha" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base text-blue-presta2 hover:bg-blue-presta1 font-medium hover:text-white bg-white">
                            Sign In
                        </a>
                    </div>
                </div>
                <div class="max-w-7xl flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10 mx-auto">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <Link :href="route('homepage')">
                            <span class="sr-only">Presta Capital</span>
                            <img class="h-8 w-auto md:ml-4 lg:ml-6 sm:h-12" src="/images/logos/Group 18.svg" alt="" />
                        </Link>
                    </div>
                    <div class="-mr-2 -my-2 md:hidden">
                        <PopoverButton class="rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-presta4">
                            <span class="sr-only">Open menu</span>
                            <MenuIcon class="h-6 w-6" aria-hidden="true" />
                        </PopoverButton>
                    </div>
                    <PopoverGroup as="nav" class="hidden md:flex space-x-10">
                        <Link :href="route('homepage')" class="text-base font-medium text-white hover:text-gray-200">
                            Home
                        </Link>
                        <Popover class="relative" v-slot="{ open }">
                            <PopoverButton :class="[open ? 'text-white' : 'text-white', 'group bg-transparent rounded-md inline-flex items-center text-base font-medium hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-presta0']">
                                <span>Solutions</span>
                                <ChevronDownIcon :class="[open ? 'text-white' : 'text-white', 'ml-2 h-5 w-5 group-hover:text-white']" aria-hidden="true" />
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

                        <Link :href="route('pricing')" class="text-base font-medium text-white hover:text-gray-200">
                            Pricing
                        </Link>
                        <Link href="#" class="text-base font-medium text-white hover:text-gray-200 hidden">
                            Customers
                        </Link>

                        <Popover class="relative" v-slot="{ open }">
                            <PopoverButton :class="[open ? 'text-white' : 'text-white', 'group bg-transparent rounded-md inline-flex items-center text-base font-medium hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-presta0']">
                                <span>Resources</span>
                                <ChevronDownIcon :class="[open ? 'text-white' : 'text-white', 'ml-2 h-5 w-5 group-hover:text-white']" aria-hidden="true" />
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

                        <Link :href="route('contact')" class="text-base font-medium text-white hover:text-gray-200">
                            Contact Us
                        </Link>
                    </PopoverGroup>
                    <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                        <Link :href="route('demo')" class="ml-8 mr-4 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-white rounded-md shadow-sm text-base font-medium text-white bg-opacity-25 bg-gray-900 backdrop-filter backdrop-blur hover:bg-blue-presta1">
<!--                            <chat-alt2-icon class="flex-none w-5 h-5 text-white mr-1" aria-hidden="true" />-->
                            Explore Demo
                        </Link>
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
    { name: 'About Presta', description: 'Learn how to maximize our platform to get the most out of it.', href: '/about-us' },
    { name: 'Blogs', description: 'Understand how we work to streamline credit services.', href: '#' },
    { name: 'Videos', description: 'Understand how we work to deliver platform specific credit solutions.', href: '#' },
    {
        name: 'Help Center',
        description: 'Get all of your questions answered in our forums or contact support.',
        href: '#',
    },
];

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
        }
    },
}
</script>
