<template>
    <Head title="Gallery | Presta Capital" />
    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />
    <div class="min-h-screen bg-white">
        <!--Blogs-->
        <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
        <div class="bg-white relative">
            <div class="mx-auto pt-32 px-4 max-w-7xl sm:px-6 lg:px-8 lg:pt-56">
                <div class="space-y-12">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Gallery</h2>

                    <ul role="list" class="space-y-12 lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8 lg:gap-y-12 lg:space-y-0">
                        <li>
                            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
                                <div class="h-0 aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                    <img class="object-cover shadow-lg rounded-lg" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="space-y-4">
                                        <div class="text-lg leading-6 font-medium space-y-1">
                                            <h3>Whitney Francis</h3>
                                            <p class="text-indigo-600">developer</p>
                                        </div>
                                        <div class="text-lg">
                                            <p class="text-gray-500">Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
                                <div class="h-0 aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                    <img class="object-cover shadow-lg rounded-lg" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="space-y-4">
                                        <div class="text-lg leading-6 font-medium space-y-1">
                                            <h3>Whitney Francis</h3>
                                            <p class="text-indigo-600">developer</p>
                                        </div>
                                        <div class="text-lg">
                                            <p class="text-gray-500">Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
                                <div class="h-0 aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                    <img class="object-cover shadow-lg rounded-lg" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="space-y-4">
                                        <div class="text-lg leading-6 font-medium space-y-1">
                                            <h3>Whitney Francis</h3>
                                            <p class="text-indigo-600">developer</p>
                                        </div>
                                        <div class="text-lg">
                                            <p class="text-gray-500">Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:gap-6 sm:space-y-0 lg:gap-8">
                                <div class="h-0 aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                    <img class="object-cover shadow-lg rounded-lg" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="space-y-4">
                                        <div class="text-lg leading-6 font-medium space-y-1">
                                            <h3>Whitney Francis</h3>
                                            <p class="text-indigo-600">developer</p>
                                        </div>
                                        <div class="text-lg">
                                            <p class="text-gray-500">Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <MainFooter />
</template>

<script>
import NavigationHome from '@/Components/NavigationHome.vue';
import MainFooter from '@/Components/MainFooter.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        NavigationHome,
        MainFooter,
        Head,
        Link,
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
