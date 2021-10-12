<template>
    <Head title="Blogs | Presta Capital" />

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />

    <div class="min-h-screen bg-white">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start pt-32 md:pb-12 lg:pt-56 relative">
            <svg class="hidden lg:block absolute right-full top-1/2 transform translate-x-1/2 -translate-y-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                <defs>
                    <pattern id="56409614-3d62-4985-9a10-7ca758a8f4f0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#56409614-3d62-4985-9a10-7ca758a8f4f0)"></rect>
            </svg>
            <div class="relative px-4 sm:px-6 lg:px-0">
                <div class="space-y-5 sm:space-y-4 px-4 bg-white lg:pt-5">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                        <span class="block text-sm tracking-wide font-bold text-blue-presta1">{{ blog.post_sub_category.name }}</span>
                        {{ blog.title }}
                    </h2>
                    <p class="prose-indigo prose-lg text-gray-500">{{ blog.excerpt }}</p>
                </div>
            </div>
            <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                <div class="space-y-6 sm:grid sm:grid-cols-1 sm:gap-x-0 sm:gap-y-6 sm:space-y-0 lg:gap-x-0">
                    <div class="space-y-4 px-4 pb-4">
                        <div v-html="blog.featured_images[0]"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:items-start pt-6 pb-16 relative">
            <div class="relative bg-white px-4 sm:px-6 lg:px-0">
                <div class="px-4 prose-indigo prose-lg text-gray-500">
                    <span v-html="blog.description"></span>
                </div>
            </div>
        </div>
        <!--Blogs-->
        <Blog v-if="posts.length > 0" :blogs="posts" :context="'single'" />
    </div>

    <MainFooter :showDemo="false" />
</template>

<script>
import NavigationHome from '@/Components/NavigationHome.vue';
import MainFooter from '@/Components/MainFooter.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Blog from '@/Components/Blog.vue';
import '@/Modules/NewStringSplicer'

export default {
    components: {
        NavigationHome,
        MainFooter,
        Head,
        Link,
        Blog
    },
    props: {
        post: Array,
        posts: Array
    },
    setup({ post, posts }) {
        const blog = post[0];
        console.log(posts.length)
        return {
            blog
        }
    }
}
</script>

<style scoped>

</style>
