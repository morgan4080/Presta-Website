<template>
    <Head title="About | Presta Capital" />

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />

    <div class="min-h-screen bg-white">
        <main>
            <div>
                <div id="about" class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start pt-32 pb-16 lg:pt-56 lg:pb-12 relative">
                    <svg class="hidden lg:block absolute right-full top-1/2 transform translate-x-1/2 -translate-y-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                        <defs>
                            <pattern id="56409614-3d62-4985-9a10-7ca758a8f4f0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#56409614-3d62-4985-9a10-7ca758a8f4f0)"></rect>
                    </svg>
                    <div class="relative px-4 py-6 sm:px-6 lg:px-0">
                        <div class="space-y-5 sm:space-y-4 px-4 bg-white">
<!--                            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Meet Our <span class="block text-blue-presta1">Team</span></h2>-->
                            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">About <span class="block text-blue-presta1">Presta Capital</span></h2>
                            <p class="text-xl text-gray-500">We offer secure, simple and affordable digital banking platforms for SACCOs and their members, who are often excluded by traditional banks.</p>
                        </div>

                        <nav class="max-w-sm py-16 px-4" aria-label="Sidebar">
                            <div class="space-y-6 bg-white">
                                <a @click="setActiveNav(index)" v-for="(item, index) in navigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900', 'group flex items-center px-3 py-2 text-sm font-medium rounded-md']" :aria-current="item.current ? 'page' : undefined">
                                    <component :is="item.icon" :class="[item.current ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'flex-shrink-0 -ml-1 mr-3 h-6 w-6']" aria-hidden="true" />
                                    <span class="truncate">
                                      {{ item.name }}
                                    </span>
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                        <div class="space-y-6 sm:grid sm:grid-cols-1 sm:gap-x-0 sm:gap-y-6 sm:space-y-0 lg:gap-x-0">
                            <div class="space-y-4 px-4">
                                <h2 class="text-xl font-extrabold text-gray-900">Our Story</h2>
                                <p class="text-lg text-gray-500">At Presta, we believe there is a better way to do lending. A more valuable, pocket friendly and less invasive way where our customers are earned rather than bought. We’re obsessively passionate about seeing a future where communities, regardless of their financial muscle, can be empowered to support and grow each member of the community.</p>
                            </div>
                            <div class="space-y-4 px-4">
                                <h2 class="text-xl font-extrabold text-gray-900">Our Founding</h2>
                                <p class="text-lg text-gray-500">Presta Limited was established in 2017, as a subsidiary of Workpoint Limited, a 5 year old software development house. Presta exists to open up the mobile lending market to many more players in the Mid and low-level lending sector including; Saccos, MFI’s and other community lending organizations.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <OurTeam id="team"/>
            </div>
        </main>
    </div>

    <MainFooter :showDemo="true" />

</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import MainFooter from '@/Components/MainFooter.vue';
import NavigationHome from '@/Components/NavigationHome.vue';
import OurTeam from '@/Components/OurTeam.vue';
import { ChartBarIcon, FolderIcon, HomeIcon, UsersIcon } from '@heroicons/vue/outline';
import { reactive, toRefs } from 'vue';
const navigationData = [
    { name: 'About Us', href: '#about', icon: HomeIcon, current: true },
    { name: 'Our Team', href: '#team', icon: UsersIcon, current: false },
    { name: 'Our Values', href: '#values', icon: ChartBarIcon, current: false },
    { name: 'Customers', href: '#customers', icon: FolderIcon, current: false },
];

export default {
    components: {
        MainFooter,
        NavigationHome,
        OurTeam,
        Head,
        Link
    },
    setup() {
        const navigation = reactive(navigationData)
        function setActiveNav(index) {
            navigation.map((item, i) => item.current = index === i)
        }
        return {
            navigation,
            setActiveNav
        }
    },
}
</script>

<style scoped>

</style>
