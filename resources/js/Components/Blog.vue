<template>
    <div class="relative bg-gray-50 pt-12 pb-16 px-4 sm:px-6 lg:pt-20 lg:pb-16 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3" />
        </div>
        <div class="relative max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="text-center" v-if="context === 'homepage'">
                <h2 class="text-3xl tracking-tight font-extrabold text-blue-presta3 sm:text-4xl">
                    From the blog
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Our success stories
                </p>
            </div>
            <div class="text-center" v-else-if="context === 'single'">
                <h2 class="text-3xl tracking-tight font-extrabold text-blue-presta3 sm:text-4xl">
                    Related Blogs
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    {{ posts[0].sub_category.name }}
                </p>
            </div>
            <div class="text-center mt-24 md:mt-32" v-else-if="context === 'group'">
                <h2 class="text-3xl tracking-tight font-extrabold text-blue-presta3 sm:text-4xl">

                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">

                </p>
            </div>

            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                <div v-for="post in posts" :key="post.title" class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0 doApplyImgHtml" v-html="post.imageUrl">

                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-blue-presta3">
                                <Link :href="route(post.sub_category.route, post.sub_category.slug)" class="hover:underline">
                                    {{ post.sub_category.name }}
                                </Link>
                            </p>
                            <Link :href="route(post.route, [ post.sub_category.slug, post.slug])" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">
                                    {{ post.title }}
                                </p>
                                <p class="mt-3 text-base text-gray-500 line-clamp-4">
                                    {{ post.excerpt }}
                                </p>
                            </Link>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <span>
                                    <span class="sr-only">{{ post.author.name }}</span>
                                    <img class="h-10 w-10 rounded-full" :src="post.author.imageUrl" alt="" />
                                </span>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <span>
                                        {{ post.author.name }}
                                    </span>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <span>
                                        {{ post.created_at }}
                                    </span>
                                    <span aria-hidden="true">
                                        &middot;
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import '@/Modules/NewStringSplicer'

export default {
    components: {
      Link
    },
    props: {
        blogs: Array,
        context: {
            type: String,
            default() {
                return 'homepage'
            }
        }
    },
    setup({ blogs }) {
        const posts = blogs.reduce((accumulator, blog) => {
            accumulator.push({
                title: blog.title,
                slug: blog.slug,
                route: 'blogs.view',
                sub_category: {
                    id: blog.post_sub_category.id,
                    name:  blog.post_sub_category.name,
                    slug: blog.post_sub_category.slug,
                    route: 'blog_sub_category.index'
                },
                excerpt: blog.excerpt,
                created_at: blog.created_at,
                imageUrl: blog.featured_images[0].splice(4, 0, ` style="height: 12rem;width: 100%;object-fit: cover;"`),
                author: {
                    name: blog.author_name,
                    imageUrl:
                        'https://dummyimage.com/256x256',
                },
            });

            return accumulator
        }, []);

        return {
            posts
        }
    }
}
</script>
<style scoped>

</style>
