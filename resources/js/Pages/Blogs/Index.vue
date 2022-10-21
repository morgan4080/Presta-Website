<template>
    <Head title="Blogs | Presta Capital" />

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />

    <div class="min-h-screen bg-white">
        <!--Blogs-->
        <Blog :blogs="posts" :context="'group'" />
    </div>

    <MainFooter />
</template>

<script>
    import NavigationHome from '@/Components/NavigationHome.vue';
    import MainFooter from '@/Components/MainFooter.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import Blog from '@/Components/Blog.vue';

    export default {
        components: {
            NavigationHome,
            MainFooter,
            Head,
            Link,
            Blog
        },
        props: {
            posts: Array
        },
        setup({ posts }) {
            console.log(posts)
        }
    }
</script>

<style scoped>

</style>
