<template>
    <Head>
        <title>Blogs | Presta Capital</title>
        <meta :name="blog.title" :content="blog.excerpt">
        <meta property="og:type" content="article"/>
        <meta property="og:title" :content="blog.title"/>
        <meta property="og:description" content="Presta Capital Publication"/>
        <meta property="article:published_time" :content="blog.created_at">
        <meta property="article:modified_time" :content="blog.created_at">
        <meta name="description" :content="blog.title"/>
        <meta property="og:site_name" content="Presta Capital"/>
        <meta property="og:image" :content="getAnImageLink"/>
        <meta property="og:image:width" content="1200"/>
        <meta property="og:image:height" content="800"/>
        <meta property="og:locale" content="en_GB"/>
        <meta property="og:url" :content="getLocation"/>
        <meta name="shareaholic:url" :content="getLocation"/>
        <meta name="twitter:text:title" :content="blog.title">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@presta_africa"/>
        <meta name="robots" content="noarchive,noodp">
    </Head>

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />

    <div class="min-h-screen bg-white relative">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start pt-32 md:pb-12 lg:pt-56 relative overflow-hidden">
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
        <div class="relative">
            <div class="sticky top-8 ml-auto">
                <div class="absolute right-0 flex flex-col items-center px-2 text-xs">
                    <p class="text-blue-300">Share</p>
                    <a :href="`https://twitter.com/intent/tweet?url=${getLocation}`" rel="nofollow noopener noreferrer" target="_blank" title="Click to share on Twitter" class="text-blue-500 text-xs mt-4">
                        <svg width="20" height="20" fill="currentColor">
                            <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <template v-html='`<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>`'></template>
                    <a @click.prevent="linkedinShare" :href="linkedInHREF" rel="nofollow noopener noreferrer" aria-label="Share on LinkedIn" title="LinkedIn" target="_blank" class="text-gray-200 text-xs mt-3">
                        <svg viewBox="0 0 24 24" width="24" height="24" aria-hidden="true">
                            <g>
                                <g fill="currentColor" stroke="currentColor" strokeWidth="3">
                                    <circle cx="12" cy="12" r="12" stroke="none">
                                    </circle>
                                    <circle cx="12" cy="12" r="10.5" stroke="none">
                                    </circle>
                                </g>
                                <path d="M10674-1885v-7.223h2.219V-1885Zm7.773,0v-3.812c0-.885-.328-1.561-1.1-1.561a1.17,1.17,0,0,0-1.047.871,1.586,1.586,0,0,0-.07.537V-1885h-2.219v-4.752c0-.859-.031-1.576-.062-2.2h2l.1.959h.039a2.478,2.478,0,0,1,2.125-1.113c1.406,0,2.461.943,2.461,2.969V-1885Zm-7.773-8.859a1.1,1.1,0,0,1,1.117-1.141,1.073,1.073,0,0,1,1.1,1.111,1.052,1.052,0,0,1-1.117,1.1A1.047,1.047,0,0,1,10674-1893.859Z" transform="translate(-10667.001 1902)" fill="#27627e">
                                </path>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:items-start pt-6 pb-16">
                <div class="relative px-4 sm:px-6 lg:px-0">
                    <div class="px-4 prose-indigo prose-lg text-gray-500">
                        <span v-html="blog.description"></span>
                    </div>
                </div>
            </div>
        </div>
        <!--Blogs-->
        <Blog v-if="posts.length > 0" :blogs="posts" :context="'single'" />
    </div>

    <MainFooter :showDemo="false" />
</template>

<script>
import { computed } from 'vue'
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
        post: Array,
        posts: Array
    },
    setup({ post, posts }) {
        const blog = post[0];
        const getLocation = computed(() => {
            return document.location
        });
        const getAnImageLink = computed(() => {
            let customStr = blog.featured_images[0];
            console.log(customStr.split(" ")[customStr.split(" ").length-3].split('"')[1])
            return customStr
        });
        const linkedInHREF = computed(() => {
            return encodeURI(`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURI(document.location)}&title=${blog.title}`)
        })
        function linkedinShare() {
            window.open(encodeURI(`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURI(document.location)}&title=${encodeURI(blog.title)}`),"myWindow","height=600,width=450,menubar=no,status=no");
        }
        return {
            blog,
            linkedinShare,
            getLocation,
            getAnImageLink,
            linkedInHREF
        }
    }
}
</script>

<style scoped>

</style>
