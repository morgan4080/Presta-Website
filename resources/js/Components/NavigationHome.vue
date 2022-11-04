<template>
    <div class="relative">
        <div class="absolute inset-0 z-20">
            <Popover  class="relative bg-transparent ">
                <div class="max-w-8xl flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10 mx-auto">
                    <div class="flex justify-center items-center lg:w-0 lg:flex-1">


                        <Link :href="route('homepage')">
                            <span class="sr-only">Presta Capital</span>
                        </Link>


                        <PopoverGroup as="nav" class="hidden md:flex justify-center items-center space-x-6">
                            <svg class="my-auto"  width="141" height="41" viewBox="0 0 141 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.2174 0.00051553C27.1211 7.08468 31.0225 14.1699 34.9214 21.2562C35.5951 22.4791 36.1951 23.7421 36.9812 25.2844H31.0349C28.9285 21.5415 26.7857 17.8247 24.729 14.0561C22.1862 9.39321 19.717 4.6875 17.2151 -1.52588e-05L23.2174 0.00051553Z" fill="#27627E"/>
                                <path d="M0 40.1251C6.11477 29.1836 12.0839 18.4471 18.3625 7.21614L21.2836 12.099C16.1109 21.3895 10.9506 30.5269 5.60694 40.1251" fill="#829DA9"/>
                                <path d="M54.9995 27.6364L52.2447 32.5444H21.1467L23.7864 27.6364H54.9995Z" fill="#489AAB"/>
                                <path d="M45.6594 25.2678H39.5134L27.033 2.80157H33.1478L45.6594 25.2678Z" fill="#27627E"/>
                                <path d="M22.6414 14.7834L25.4992 19.8214C21.7837 26.4735 18.0138 33.3226 14.2144 40.1251H8.65405C13.3655 31.6208 17.8444 23.4375 22.6414 14.7834Z" fill="#829DA9"/>
                                <path d="M19.375 35.4675H44.0539L41.4701 40.1235H16.9229L19.375 35.4675Z" fill="#489AAB"/>
                                <path d="M61 8.47809C63.0424 8.13466 65.11 7.97574 67.1791 8.00299C70.1375 8.00299 72.2736 8.648 73.6872 9.87031C74.3889 10.4949 74.9475 11.2726 75.3226 12.1473C75.6978 13.022 75.8802 13.972 75.8566 14.9283C75.9005 15.8747 75.7569 16.8202 75.4347 17.7073C75.1126 18.5944 74.6185 19.4042 73.9829 20.0874C72.0503 21.8222 69.5391 22.7111 66.9824 22.5654C66.3211 22.5851 65.6598 22.5281 65.0108 22.3954V31.0516H61.001L61 8.47809ZM65.0098 19.1068C65.6535 19.2761 66.3178 19.3464 66.9814 19.3152C70.0084 19.3152 71.8458 17.7521 71.8458 15.1064C71.8458 12.5607 70.1366 11.2373 67.3426 11.2373C66.5598 11.2221 65.7775 11.2921 65.0088 11.4458L65.0098 19.1068Z" fill="#27627E"/>
                                <path d="M77.9918 19.8447C77.9918 17.6044 77.9585 15.9746 77.8606 14.5158H81.3447L81.5091 17.6419H81.6101C81.9012 16.6586 82.4818 15.7935 83.2712 15.1669C84.0606 14.5403 85.0195 14.1835 86.0144 14.1459C86.335 14.1433 86.6549 14.1782 86.9679 14.25V18.1535C86.5667 18.0794 86.1596 18.0445 85.752 18.0493C84.8794 18.0263 84.029 18.3351 83.3624 18.9172C82.6959 19.4993 82.2597 20.3142 82.1368 21.2067C82.0679 21.6214 82.0341 22.0415 82.0359 22.4623V31.0497H77.9928L77.9918 19.8447Z" fill="#27627E"/>
                                <path d="M91.432 23.9566C91.5329 26.9441 93.7658 28.2289 96.362 28.2289C97.8728 28.2505 99.3756 27.9977 100.802 27.4818L101.393 30.3328C99.6166 31.064 97.7169 31.4218 95.805 31.3853C90.6117 31.3853 87.5554 28.0925 87.5554 23.0355C87.5554 18.4506 90.2505 14.1417 95.3782 14.1417C100.572 14.1417 102.281 18.5547 102.281 22.1862C102.286 22.7774 102.242 23.3679 102.15 23.9514L91.432 23.9566ZM98.4658 21.0389C98.4991 19.5113 97.8412 16.9999 95.1462 16.9999C92.6479 16.9999 91.5965 19.3425 91.432 21.0389H98.4658Z" fill="#27627E"/>
                                <path d="M104.549 27.1816C105.79 27.9277 107.189 28.3475 108.624 28.404C110.399 28.404 111.188 27.6235 111.188 26.5367C111.188 25.4165 110.531 24.8694 108.559 24.1275C105.436 23.0417 104.154 21.2755 104.154 19.3071C104.154 16.3894 106.488 14.1479 110.202 14.1479C111.683 14.1178 113.148 14.4554 114.475 15.1326L113.654 18.0503C112.621 17.4449 111.457 17.1181 110.269 17.1C108.823 17.1 108.034 17.8471 108.034 18.8652C108.034 19.9176 108.79 20.3927 110.828 21.1732C113.754 22.2257 115.066 23.7534 115.101 26.1969C115.101 29.2188 112.833 31.3904 108.593 31.3904C106.905 31.4224 105.234 31.0263 103.729 30.2368L104.549 27.1816Z" fill="#27627E"/>
                                <path d="M122.232 10.2778V14.521H126.077V17.6471H122.232V24.9413C122.232 26.9775 122.757 27.9966 124.302 27.9966C124.833 28.0226 125.365 27.9654 125.88 27.8268L125.946 30.984C125.001 31.299 124.012 31.4481 123.02 31.4249C122.38 31.4604 121.74 31.3584 121.14 31.1252C120.54 30.892 119.994 30.5327 119.536 30.0702C118.649 29.1199 118.254 27.5922 118.254 25.4196V17.6471H115.986V14.521H118.254V11.4324L122.232 10.2778Z" fill="#27627E"/>
                                <path d="M140.736 27.0796C140.709 28.4088 140.798 29.7377 141 31.0507H137.351L137.056 29.2178H136.955C136.383 29.9369 135.659 30.5101 134.838 30.8927C134.017 31.2753 133.122 31.457 132.222 31.4238C131.573 31.4629 130.924 31.3645 130.315 31.1346C129.705 30.9047 129.147 30.5482 128.676 30.087C128.205 29.6258 127.83 29.0698 127.575 28.4532C127.32 27.8367 127.19 27.1727 127.193 26.5022C127.193 22.3612 130.776 20.2229 136.691 20.2562V19.9843C136.691 18.8985 136.265 17.099 133.437 17.099C131.922 17.1013 130.436 17.5231 129.132 18.3202L128.343 15.6046C130.114 14.6035 132.109 14.1005 134.128 14.1459C139.255 14.1459 140.734 17.5064 140.734 21.1379L140.736 27.0796ZM136.792 22.9729C133.933 22.9385 131.205 23.5502 131.205 26.0615C131.177 26.3807 131.217 26.7023 131.323 27.0036C131.429 27.3049 131.597 27.5786 131.817 27.8053C132.036 28.0319 132.301 28.2059 132.593 28.3151C132.885 28.4243 133.196 28.4661 133.505 28.4373C134.2 28.4508 134.882 28.2385 135.454 27.8303C136.026 27.4222 136.46 26.8388 136.693 26.1626C136.776 25.8651 136.81 25.5556 136.794 25.2466L136.792 22.9729Z" fill="#27627E"/>
                            </svg>
                            <Link :href="route('homepage')" :class="checkPage() === '/' ? 'nav-text' : 'nav-text' "  class="text-base font-medium hover:text-gray-200">
                                Home
                            </Link>
                            <Popover class="relative" v-slot="{ open }">
                                <PopoverButton :class="[open ? 'text-white' : 'text-white',  'group bg-transparent rounded-md inline-flex items-center text-base font-medium hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-presta0']">
                                    <span :class="checkPage() === '/' ? 'nav-text' : 'nav-text' ">Solutions</span>
                                    <ChevronDownIcon :class="[open ? 'nav-text' : 'nav-text', 'ml-2 h-5 w-5 group-hover:text-gray-200']" aria-hidden="true" />
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

                            <Link :href="route('pricing')" :class="checkPage() === '/' ? 'nav-text' : 'nav-text' " class="text-base font-medium hover:text-gray-200">
                                Pricing
                            </Link>
                            <Link href="#" class="text-base font-medium nav-text hover:text-gray-200 hidden">
                                Customers
                            </Link>

                            <Popover class="relative" v-slot="{ open }">
                                <PopoverButton :class="[open ? 'text-white' : 'text-white', 'group bg-transparent rounded-md inline-flex items-center text-base font-medium hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-presta0']">
                                    <span :class="checkPage() === '/' ? 'nav-text' : ' nav-text',' group-hover:nav-blue'" >Resources</span>
                                    <ChevronDownIcon :class="[open ? 'nav-text' : 'nav-text', 'ml-2 h-5 w-5 group-hover:text-gray-200']" aria-hidden="true" />
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

                            <!--                            <Link :href="route('contact')" :class="checkPage() === '/' ? 'nav-text' : 'text-white' "  class="text-base font-medium hover:text-gray-200">-->
                            <!--                                Contact Us-->
                            <!--                            </Link>-->
                            <a href="https://presta.co.ke/kopesha" :class="checkPage() === '/' ? 'text-white' : 'text-white' "
                               class="-ml-2 whitespace-nowrap px-4 py-2  border border-transparent rounded-md shadow-sm text-base text-white hover:bg-blue-presta2 bg-blue-presta1 font-medium hover:text-white bg-white text-white">
                                Sign In
                            </a>
                        </PopoverGroup>
                    </div>
                    <div class="-mr-2 -my-2 md:hidden">
                        <PopoverButton class="rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-presta4">
                            <span class="sr-only">Open menu</span>
                            <MenuIcon class="h-6 w-6" aria-hidden="true" />
                        </PopoverButton>
                    </div>
                    <div class="hidden md:flex justify-between items-center lg:w-0 lg:flex-1">
                        <div class="flex justify-center space-x-6 ml-12">
                            <a v-for="item in navigation" :key="item.name" :href="item.href" target="_blank" :class="checkPage() === '/' ? 'text-white' : 'nav-text' " class=" hover:text-gray-500">
                                <span class="sr-only">{{ item.name }}</span>
                                <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                            </a>
                        </div>

                        <a href="#" :class="checkPage() === '/' ? 'text-white' : 'nav-text' " class="text-sm flex items-center font-medium text-white hover:text-gray-200 mr-8">
                            <phone-icon  class="flex-none w-5 h-5  mr-1" aria-hidden="true" />
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
import {Popover, PopoverButton, PopoverGroup, PopoverPanel} from '@headlessui/vue'
import {
    ChartBarIcon,
    ChatAlt2Icon,
    CursorClickIcon,
    MailIcon,
    MenuIcon,
    PhoneIcon,
    ShieldCheckIcon,
    ViewGridIcon,
    XIcon
} from '@heroicons/vue/outline'
import {ChevronDownIcon} from '@heroicons/vue/solid'
import {Link} from '@inertiajs/inertia-vue3'
import {defineComponent, h, onMounted} from 'vue'

const solutions = [
    {
        name: 'Enterprise',
        description: "Your customers' data will be safe and secure.",
        href: 'Enterprise',
        icon: ViewGridIcon
    },
    {
        name: 'Saccos',
        description: 'Speak directly to your customers in a more meaningful way.',
        href: 'saccos',
        icon: CursorClickIcon,
    },
    {
        name: 'Digital Onboarding',
        description: 'Get a better understanding of your customers financial needs.',
        href: 'Digital Onboarding',
        icon: ChartBarIcon,
    },

    {
        name: 'Loan Origination',
        description: "Your customers' data will be safe and secure.",
        href: 'LoanOrigination',
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
    return window.location.pathname
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
        Link,
        ViewGridIcon
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
