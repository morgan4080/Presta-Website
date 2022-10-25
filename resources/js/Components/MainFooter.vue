<template>

    <footer class="custom-bg-blue" aria-labelledby="footer-heading">
<!--        class="bg-footer-texture"-->
        <div>
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <div class="pb-8 xl:grid xl:grid-cols-5 xl:gap-8">
                    <div class="grid grid-cols-2 gap-8 xl:col-span-4">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-base font-semibold text-white tracking-wider uppercase">
                                    For Business
                                </h3>
                                <ul role="list" class="mt-4 sm:text-sm space-y-4">
                                    <li v-for="item in navigation.Business" :key="item.name">
                                        <Link :href="item.href" class="text-sm text-blue-200 hover:text-white">
                                            {{ item.name }}
                                        </Link>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-base font-semibold text-white tracking-wider uppercase">
                                   For SACCO
                                </h3>
                                <ul role="list" class="mt-4 sm:text-sm space-y-4">
                                    <li v-for="item in navigation.SACCO" :key="item.name">
                                        <Link :href="item.href" class="text-sm text-blue-200 hover:text-white">
                                            {{ item.name }}
                                        </Link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-base font-semibold text-white tracking-wider uppercase">
                                   About Us
                                </h3>
                                <ul role="list" class="mt-4 sm:text-sm space-y-4">
                                    <li v-for="item in navigation.About" :key="item.name">
                                        <Link :href="item.href" class="sm:text-sm text-blue-200 hover:text-white">
                                            {{ item.name }}
                                        </Link>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-base font-semibold text-white tracking-wider uppercase">
                                    Resources
                                </h3>
                                <ul role="list" class="mt-4 sm:text-sm space-y-4">
                                    <li v-for="(item,idx) in navigation.Resources" :key="item.name">
                                        <Link v-if="idx === 2" v-on:click="goTomaps(item.href)" class="text-sm underline text-blue-200 hover:text-white">
                                            {{ item.name }}
                                        </Link>
                                        <Link v-else :href="item.href" class="text-sm text-blue-200 hover:text-white">
                                            {{ item.name }}
                                        </Link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 xl:mt-0">
                        <div class="mt-4 sm:flex sm:flex-col sm:justify-start sm:max-w-md lg:mt-0">
                        <h3 class="text-base font-semibold text-white tracking-wider sm:pb-6 ">
                            Stay Updated on Our New Products
                        </h3>
                        <p class="text-sm tracking-wider text-blue-200 hover:text-white sm:pb-6 ">Subscribe to be the first one to know about updates. Enter your email</p>
                        <p class="text-base tracking-wider text-blue-200 hover:text-white sm:pb-6 ">+254711082442</p>
                        <form class="mt-2 sm:flex flex-col hidden sm:max-w-md">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input type="email" name="email-address" id="email-address" autocomplete="email" required=""
                                   class="appearance-none border-2 border-blue-presta4 min-w-0 w-full bg-white border border-transparent rounded-md py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white focus:border-white focus:placeholder-gray-400 sm:max-w-xs" placeholder="Email Address" />
                            <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                                <button type="submit" class="w-full bg-blue-presta4 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-blue-presta3 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-800 focus:ring-indigo-500">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="mt-8  pt-8 md:flex md:items-center md:justify-between">
                    <div class="flex space-x-6  md:order-3">
                        <a v-for="item in navigation.social" :key="item.name" :href="item.href" class="text-blue-200 hover:text-blue-300">
                            <span class="sr-only">{{ item.name }}</span>
                            <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
                        </a>
                    </div>
                    <div class=" md:order-2">
                        <svg width="55" height="59" viewBox="0 0 55 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_534_674)">
                                <path d="M23.2175 -0.000413539C27.1213 7.51398 31.0226 15.0295 34.9215 22.5462C35.5952 23.8433 36.1953 25.183 36.9814 26.819H31.0351C28.9286 22.8487 26.7858 18.9063 24.7291 14.9088C22.1863 9.96271 19.7171 4.97121 17.2152 -0.000976562L23.2175 -0.000413539Z" fill="white"/>
                                <path d="M0 42.5608C6.11477 30.9549 12.0839 19.5664 18.3625 7.65332L21.2836 12.8327C16.1109 22.6874 10.9506 32.3797 5.60694 42.5608" fill="white"/>
                                <path d="M54.9995 29.3135L52.2447 34.5196H21.1467L23.7864 29.3135H54.9995Z" fill="white"/>
                                <path d="M45.6595 26.8013H39.5136L27.0331 2.9707H33.1479L45.6595 26.8013Z" fill="white"/>
                                <path d="M22.6412 15.6797L25.4991 21.0237C21.7836 28.0798 18.0137 35.3448 14.2142 42.5604H8.65393C13.3654 33.5396 17.8442 24.8594 22.6412 15.6797Z" fill="white"/>
                                <path d="M19.375 37.6201H44.0539L41.4701 42.5589H16.9229L19.375 37.6201Z" fill="white"/>
                                <path d="M6.9574 45.8395C8.00635 45.6525 9.06818 45.5659 10.1309 45.5807C11.6502 45.5807 12.7473 45.9321 13.4733 46.598C13.8336 46.9383 14.1205 47.3619 14.3132 47.8384C14.5059 48.3149 14.5995 48.8324 14.5874 49.3534C14.6099 49.869 14.5362 50.3841 14.3707 50.8673C14.2053 51.3506 13.9516 51.7918 13.6251 52.1639C12.6326 53.109 11.3429 53.5932 10.0298 53.5138C9.69019 53.5246 9.35055 53.4935 9.01725 53.4213V58.1368H6.95792L6.9574 45.8395ZM9.01673 51.6297C9.34731 51.7219 9.68852 51.7602 10.0293 51.7433C11.5839 51.7433 12.5275 50.8917 12.5275 49.4504C12.5275 48.0636 11.6497 47.3427 10.2148 47.3427C9.81276 47.3344 9.41101 47.3725 9.01621 47.4563L9.01673 51.6297Z" fill="white"/>
                                <path d="M15.6839 52.0314C15.6839 50.8109 15.6668 49.9231 15.6166 49.1283H17.4059L17.4904 50.8313H17.5422C17.6917 50.2957 17.9899 49.8244 18.3953 49.4831C18.8008 49.1417 19.2932 48.9473 19.8042 48.9268C19.9689 48.9254 20.1331 48.9445 20.2939 48.9836V51.11C20.0878 51.0697 19.8788 51.0507 19.6694 51.0533C19.2213 51.0407 18.7845 51.209 18.4422 51.5261C18.0999 51.8432 17.8759 52.2871 17.8127 52.7733C17.7773 52.9993 17.76 53.2281 17.7609 53.4573V58.1355H15.6845L15.6839 52.0314Z" fill="white"/>
                                <path d="M22.5864 54.2716C22.6382 55.8991 23.785 56.599 25.1183 56.599C25.8942 56.6108 26.666 56.4731 27.3984 56.1921L27.7021 57.7452C26.7898 58.1435 25.8142 58.3384 24.8323 58.3185C22.1651 58.3185 20.5955 56.5247 20.5955 53.7699C20.5955 51.2721 21.9796 48.9248 24.6131 48.9248C27.2803 48.9248 28.1581 51.3289 28.1581 53.3072C28.1609 53.6292 28.1384 53.951 28.0907 54.2688L22.5864 54.2716ZM26.1988 52.6822C26.2159 51.85 25.878 50.4819 24.4939 50.4819C23.2108 50.4819 22.6709 51.758 22.5864 52.6822H26.1988Z" fill="white"/>
                                <path d="M29.323 56.0291C29.9604 56.4355 30.6791 56.6642 31.4161 56.695C32.3276 56.695 32.7328 56.2698 32.7328 55.6777C32.7328 55.0675 32.3954 54.7695 31.3824 54.3653C29.7785 53.7738 29.1204 52.8116 29.1204 51.7393C29.1204 50.1498 30.319 48.9287 32.2265 48.9287C32.9867 48.9123 33.7394 49.0963 34.4211 49.4652L33.9993 51.0547C33.4687 50.7249 32.8708 50.5468 32.2607 50.5369C31.5182 50.5369 31.1129 50.9439 31.1129 51.4986C31.1129 52.0719 31.501 52.3307 32.5478 52.7559C34.0506 53.3293 34.7242 54.1615 34.7424 55.4927C34.7424 57.1389 33.5775 58.3219 31.4 58.3219C30.5329 58.3393 29.6751 58.1235 28.9017 57.6935L29.323 56.0291Z" fill="white"/>
                                <path d="M38.4046 46.8203V49.1319H40.3795V50.8349H38.4046V54.8085C38.4046 55.9177 38.6746 56.4729 39.468 56.4729C39.7408 56.4871 40.0141 56.4559 40.2784 56.3804L40.3121 58.1004C39.827 58.272 39.319 58.3532 38.8093 58.3406C38.4807 58.3599 38.152 58.3043 37.844 58.1773C37.5359 58.0503 37.2554 57.8545 37.02 57.6026C36.5645 57.0848 36.3618 56.2526 36.3618 55.0691V50.8349H35.1969V49.1319H36.3618V47.4493L38.4046 46.8203Z" fill="white"/>
                                <path d="M47.9085 55.9732C47.8945 56.6973 47.9398 57.4212 48.0437 58.1365H46.1699L46.0181 57.138H45.9663C45.6728 57.5298 45.3008 57.842 44.8791 58.0504C44.4575 58.2589 43.9977 58.3579 43.5354 58.3397C43.2025 58.3611 42.8692 58.3075 42.556 58.1822C42.2428 58.057 41.9564 57.8628 41.7143 57.6115C41.4723 57.3603 41.2799 57.0574 41.1489 56.7215C41.0179 56.3856 40.9511 56.0239 40.9527 55.6586C40.9527 53.4027 42.7928 52.2379 45.831 52.256V52.1079C45.831 51.5164 45.6118 50.5361 44.1598 50.5361C43.3817 50.5374 42.6182 50.7671 41.9486 51.2014L41.5434 49.722C42.4531 49.1766 43.4776 48.9026 44.5143 48.9273C47.1478 48.9273 47.9069 50.758 47.9069 52.7363L47.9085 55.9732ZM45.8828 53.736C44.4143 53.7173 43.0131 54.0505 43.0131 55.4185C42.9988 55.5924 43.0195 55.7677 43.0738 55.9318C43.1281 56.096 43.2147 56.245 43.3274 56.3685C43.4401 56.492 43.5762 56.5867 43.726 56.6462C43.8759 56.7057 44.0358 56.7285 44.1945 56.7128C44.5516 56.7202 44.9017 56.6045 45.1955 56.3822C45.4893 56.1598 45.712 55.842 45.832 55.4736C45.8742 55.3116 45.8917 55.143 45.8839 54.9746L45.8828 53.736Z" fill="white"/>
                                <path d="M23.2175 -0.000413539C27.1213 7.51398 31.0226 15.0295 34.9215 22.5462C35.5952 23.8433 36.1953 25.183 36.9814 26.819H31.0351C28.9286 22.8487 26.7858 18.9063 24.7291 14.9088C22.1863 9.96271 19.7171 4.97121 17.2152 -0.000976562L23.2175 -0.000413539Z" fill="white"/>
                                <path d="M0 42.5608C6.11477 30.9549 12.0839 19.5664 18.3625 7.65332L21.2836 12.8327C16.1109 22.6874 10.9506 32.3797 5.60694 42.5608" fill="white"/>
                                <path d="M54.9995 29.3135L52.2447 34.5196H21.1467L23.7864 29.3135H54.9995Z" fill="white"/>
                                <path d="M45.6595 26.8013H39.5136L27.0331 2.9707H33.1479L45.6595 26.8013Z" fill="white"/>
                                <path d="M22.6412 15.6797L25.4991 21.0237C21.7836 28.0798 18.0137 35.3448 14.2142 42.5604H8.65393C13.3654 33.5396 17.8442 24.8594 22.6412 15.6797Z" fill="white"/>
                                <path d="M19.375 37.6201H44.0539L41.4701 42.5589H16.9229L19.375 37.6201Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_534_674">
                                    <rect width="55" height="58.3402" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <p class="mt-8 text-base text-blue-200 font-semibold hover:text-white md:mt-0 md:order-1">
                        &copy; Copyright Presta 2022.
                    </p>

                </div>
            </div>
        </div>
    </footer>
</template>

<script>
import { defineComponent, h } from 'vue';
import { ArrowCircleRightIcon } from '@heroicons/vue/solid';
import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';

const navigation = {
    Business: [
        { name: 'Loan Management', href: '#' },
        { name: 'Loan Origination', href: '#' },
        { name: 'Lead Generation', href: '#' },
        { name: 'Accounting with ASSRA reports', href: '#' },
        { name: 'Customer Revenue Management', href: '#' },
        { name: 'Payroll', href: '#' },
    ],
    SACCO: [
        { name: 'Digital Guarantorship ', href: '#' },
        { name: 'Loan Management', href: '#' },
        { name: 'Online Registration' , href: '#'},
        { name: 'Accounting with ASSRA Reports' , href: '#'},
        { name: 'Customer Revenue Management' , href: '#'},
        { name: 'Savings Management' , href: '#'},
    ],
    About: [
        { name: 'Our Dedicated Team', href: '#' },

    ],
    Resources: [
        { name: 'Our Blogs', href: '#' },
        { name: 'Our Video Resources', href: '#' },

    ],
    social: [
        {
            name: 'Facebook',
            href: '#',
            icon: defineComponent({
                render: () =>
                    h('svg', { fill: 'currentColor', viewBox: '0 0 24 24' }, [
                        h('path', {
                            'fill-rule': 'evenodd',
                            d:
                                'M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z',
                            'clip-rule': 'evenodd',
                        }),
                    ]),
            }),
        },
        {
            name: 'Instagram',
            href: '#',
            icon: defineComponent({
                render: () =>
                    h('svg', { fill: 'currentColor', viewBox: '0 0 24 24' }, [
                        h('path', {
                            'fill-rule': 'evenodd',
                            d:
                                'M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z',
                            'clip-rule': 'evenodd',
                        }),
                    ]),
            }),
        },
        {
            name: 'Twitter',
            href: '#',
            icon: defineComponent({
                render: () =>
                    h('svg', { fill: 'currentColor', viewBox: '0 0 24 24' }, [
                        h('path', {
                            d:
                                'M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84',
                        }),
                    ]),
            }),
        },
        {
            name: 'YouTube',
            href: '#',
            icon: defineComponent({
                render: () =>
                    h('svg', { viewBox: '0 0 24 24' }, [
                        h('g', { id: 'Group_48', dataName: 'Group 48' }, [
                            h('g', { id: 'Ellipse_2', dataName: 'Ellipse 2', fill : 'currentColor', stroke: 'currentColor', strokeWidth: '3' }, [
                                h('circle', { cx: '12', cy: '12', r: '12', stroke: 'none' }),
                                h('circle', { cx: '12', cy: '12', r: '10.5', stroke: 'none' })
                            ]),
                            h('path', {
                                'id': 'youtube',
                                d:
                                'M6,3.68C.1,3.68,0,4.2,0,8.3s.1,4.62,6,4.62,6-.524,6-4.62-.1-4.62-6-4.62ZM7.923,8.5,5.229,9.758A.279.279,0,0,1,4.8,9.484V7.115a.279.279,0,0,1,.429-.274L7.923,8.1c.236.11.236.29,0,.4Z',
                                'transform': 'translate(5.8 3.8)',
                                'fill': '#27627e'
                            })  ,
                        ]),
                ]),
            }),
        },
        {
            name: 'Linkedin',
            href: '#',
            icon: defineComponent({
                render: () =>
                    h('svg', { viewBox: '0 0 24 24' }, [
                        h('g', { id: 'Group_48', dataName: 'Group 48' }, [
                            h('g', { id: 'Ellipse_2', dataName: 'Ellipse 2', fill : 'currentColor', stroke: 'currentColor', strokeWidth: '3' }, [
                                h('circle', { cx: '12', cy: '12', r: '12', stroke: 'none' }),
                                h('circle', { cx: '12', cy: '12', r: '10.5', stroke: 'none' })
                            ]),
                            h('path', {
                                'id': 'linkedin',
                                d:
                                    'M10674-1885v-7.223h2.219V-1885Zm7.773,0v-3.812c0-.885-.328-1.561-1.1-1.561a1.17,1.17,0,0,0-1.047.871,1.586,1.586,0,0,0-.07.537V-1885h-2.219v-4.752c0-.859-.031-1.576-.062-2.2h2l.1.959h.039a2.478,2.478,0,0,1,2.125-1.113c1.406,0,2.461.943,2.461,2.969V-1885Zm-7.773-8.859a1.1,1.1,0,0,1,1.117-1.141,1.073,1.073,0,0,1,1.1,1.111,1.052,1.052,0,0,1-1.117,1.1A1.047,1.047,0,0,1,10674-1893.859Z',
                                'transform': 'translate(-10667.001 1902)',
                                'fill': '#27627e'
                            })  ,
                        ]),
                ]),
            }),
        },
    ],
}

export default {
    props: {
      showDemo: {
          type: Boolean,
          default() {
              return true
          }
      }
    },
    components: {
        ArrowCircleRightIcon,
        JetApplicationLogo,
        Link
    },
    setup() {
        function goTomaps(url) {
            window.open(url, '_blank').focus();
        }
        return {
            navigation,
            goTomaps,

        }
    },
}
</script>
<style scoped>
.custom-bg-blue{
    background-color: #00637F;
}
</style>
