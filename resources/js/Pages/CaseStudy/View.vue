<template>

    <Head title="Gallery Create | Presta Capital" />
    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />
    <div class="relative bg-indigo-800 pt-32 px-4 sm:px-6 lg:px-8 lg:pt-40">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="" />
            <div class="absolute inset-0 bg-indigo-800 mix-blend-multiply" aria-hidden="true" />
        </div>
        <div class="relative max-w-7xl mx-auto pt-6 pb-8 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight pb-4 text-white sm:text-5xl lg:text-6xl">{{ CaseStudy.title }}</h1>
            <p class="text-gray-800"><span class="text-blue-400">Category :</span>{{ CaseStudy.category }}</p>
            <p class="text-gray-800"><span class="text-blue-400">Date :</span>{{ CaseStudy.date }}</p>
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
        <div class="pt-5 lg:px-8 ">
            <div class="flex justify-end">
                <Link href="/case-study/create">
                    <button  type="button" class="ml-3 inline-flex justify-center py-2 px-4  border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-presta4 hover:bg-blue-presta4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">create Gallery Album</button>
                </Link>
            </div>
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
    </div>
    <MainFooter/>
</template>

<script>
import NavigationHome from '@/Components/NavigationHome.vue';
import imgModal from '@/Components/ImageModal';
import MainFooter from '@/Components/MainFooter.vue';
import {Link} from "@inertiajs/inertia-vue3";
import { onMounted } from "vue";
export default {
    name: "View",
    components:{
        NavigationHome,
        MainFooter,
        Link,
        imgModal,
    },
    props: {
        CaseStudy: Array
    },
    setup({CaseStudy}){
        onMounted(()=>{
            console.log('case study',CaseStudy)
        })
        return{
            CaseStudy
        }
    }
}
</script>

<style scoped>

</style>
