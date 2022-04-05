<template>
    <Head title="Gallery Create | Presta Capital" />

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />
    <div class="relative bg-indigo-800">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="" />
            <div class="absolute inset-0 bg-indigo-800 mix-blend-multiply" aria-hidden="true" />
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Case Study</h1>
        </div>
    </div>
    <MainFooter/>

</template>

<script>
import NavigationHome from '@/Components/NavigationHome.vue';
import imgModal from '@/Components/ImageModal';
import MainFooter from '@/Components/MainFooter.vue';
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "index",
    components:{
        NavigationHome,
        MainFooter,
        Link,
        imgModal,
    },
}
</script>

<style scoped>

</style>
