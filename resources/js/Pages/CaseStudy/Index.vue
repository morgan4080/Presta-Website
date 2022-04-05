<template>
    <Head title="Gallery Create | Presta Capital" />

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />
    <div class="relative bg-indigo-800 pt-32 px-4 sm:px-6 lg:px-8 lg:pt-40">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="" />
            <div class="absolute inset-0 bg-indigo-800 mix-blend-multiply" aria-hidden="true" />
        </div>
        <div class="relative max-w-7xl mx-auto py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Case Study</h1>
        </div>
    </div>
    <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select a tab</label>
        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
        <select id="tabs" name="tabs" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option v-for="tab in tabs" :key="tab.name" :selected="tab.current">{{ tab.name }}</option>
        </select>
    </div>
    <div class="hidden sm:block mx-auto max-w-7xl">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                <a v-for="tab in tabs" :key="tab.name" :href="tab.href" :class="[tab.current ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300', 'whitespace-nowrap uppercase py-4 px-1 border-b-2 font-medium text-sm']" :aria-current="tab.current ? 'page' : undefined">
                    {{ tab.name }}
                </a>
            </nav>
        </div>
    </div>
    <MainFooter/>

</template>

<script>
import NavigationHome from '@/Components/NavigationHome.vue';
import imgModal from '@/Components/ImageModal';
import MainFooter from '@/Components/MainFooter.vue';
import {Link} from "@inertiajs/inertia-vue3";

const tabs = [
    { name: 'All', href: '#', current: false },
    { name: 'Sacco', href: '#', current: false },
    { name: 'Microfinance', href: '#', current: true },
    { name: 'investment groups', href: '#', current: false },
]

export default {
    name: "index",
    components:{
        NavigationHome,
        MainFooter,
        Link,
        imgModal,
    },
    setup() {
        return {
            tabs,
        }
    },
}
</script>

<style scoped>

</style>
