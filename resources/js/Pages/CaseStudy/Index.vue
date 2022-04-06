<template>
    <Head title="Case Study Create | Presta Capital" />
    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />
    <div class="relative bg-indigo-800 pt-32 px-4 sm:px-6 lg:px-8 lg:pt-40">
        <div class="absolute inset-0">
            <img class="aspect-h-1 aspect-w-3 w-full object-cover" src="/images/CaseStudy.png" alt="" />
            <div class="absolute inset-0  mix-blend-multiply" aria-hidden="true" />
        </div>
        <div class="relative max-w-7xl mx-auto py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-blue-presta3 sm:text-5xl lg:text-6xl">Case Studies</h1>
        </div>
    </div>
    <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select a tab</label>
        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
        <select id="tabs" name="tabs" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option v-for="tab in tabs" :key="tab.name" :selected="tab.current">{{ tab.name }}</option>
        </select>
    </div>
    <div class="hidden sm:block mx-auto max-w-7xl py-2">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                <a v-for="tab in tabs" :key="tab.name" :href="tab.href" :class="[tab.current ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300', 'whitespace-nowrap uppercase py-4 px-1 border-b-2 font-medium text-sm']" :aria-current="tab.current ? 'page' : undefined">
                    {{ tab.name }}
                </a>
            </nav>
        </div>
        <div class="mx-auto py-6 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-6">
            <div class="space-y-12">
                <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-2 lg:gap-x-8">
                    <li v-for="item in caseStudy" :key="item.id">
                        <Link :href="route('case-study.show',[item.id])">
                            <div class="space-y-4">
                            <div class="aspect-w-3 aspect-h-1">
                                <img class="object-cover shadow-lg rounded-lg" :src="item.caseStudy_image[0]" alt="" />
                            </div>

                            <div class="space-y-2">
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3>{{ item.title }}</h3>
                                    <p class="text-gray-800"><span class="text-blue-400">Client :</span>{{ item.client }}</p>
                                    <p class="text-gray-800"><span class="text-blue-400">Category :</span>{{ item.category }}</p>
                                    <p class="text-gray-800"><span class="text-blue-400">Date :</span>{{ item.date }}</p>
                                </div>
                            </div>
                        </div>
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pt-5 lg:px-8 ">
            <div class="flex justify-end">
                <Link href="/case-study/create">
                    <button  type="button" class="ml-3 inline-flex justify-center py-2 px-4  border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-presta4 hover:bg-blue-presta4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">create</button>
                </Link>
            </div>
        </div>
    </div>
    <MainFooter/>

</template>

<script>
import NavigationHome from '@/Components/NavigationHome.vue';
import imgModal from '@/Components/ImageModal';
import MainFooter from '@/Components/MainFooter.vue';
import {Link} from "@inertiajs/inertia-vue3";
import { onMounted } from "vue";

const tabs = [
    { name: 'All', href: '#', current: false },
    { name: 'Sacco', href: '#', current: false },
    { name: 'Microfinance', href: '#', current: true },
    { name: 'investment groups', href: '#', current: false },
]
const people = [
    {
        name: 'Lindsay Walton',
        role: 'Front-end Developer',
        imageUrl:
            'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
        twitterUrl: '#',
        linkedinUrl: '#',
    },
    {
        name: 'Lindsay Walton',
        role: 'Front-end Developer',
        imageUrl:
            'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
        twitterUrl: '#',
        linkedinUrl: '#',
    },
    {
        name: 'Lindsay Walton',
        role: 'Front-end Developer',
        imageUrl:
            'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
        twitterUrl: '#',
        linkedinUrl: '#',
    },
    // More people...
]

export default {
    name: "index",
    components:{
        NavigationHome,
        MainFooter,
        Link,
        imgModal,
    },
    props: {
        caseStudy: Array
    },
    setup({caseStudy}) {
        onMounted(()=>{
            console.log('caseStudy',caseStudy)
        })
        return {
            tabs,
            people,
            caseStudy
        }
    },
}
</script>

<style scoped>

</style>
