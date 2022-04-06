<template>

    <Head title="Gallery Create | Presta Capital" />
    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />
    <div class="relative bg-indigo-800 pt-32 px-4 sm:px-6 lg:px-8 lg:pt-40">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" :src="CaseStudy.caseStudy_image[0]" alt="" />
            <div class="absolute inset-0 bg-indigo-800 mix-blend-multiply" aria-hidden="true" />
        </div>
        <div class="relative max-w-7xl mx-auto pt-6 pb-8 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight pb-4 text-white sm:text-5xl lg:text-6xl">{{ CaseStudy.title }}</h1>
            <p class="text-white"><span class="text-white uppercase">Category : </span>{{ CaseStudy.category }}</p>
            <p class="text-white"><span class="text-white uppercase">Date : </span>{{ CaseStudy.date }}</p>
        </div>
    </div>
    <div class="hidden sm:block mx-auto max-w-7xl pt-4 pb-2">
        <div  class="mt-1 sm:mt-0 sm:col-span-2 prose prose-sm sm:prose lg:prose-lg xl:prose-2xl m-5 focus:outline-none" v-html="CaseStudy.description">

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
