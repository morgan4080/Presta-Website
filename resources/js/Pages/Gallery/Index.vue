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
            <div class="mx-auto pt-32 px-4 max-w-7xl sm:px-6 lg:px-8 lg:pt-52">
                <div class="py-1">
                    <div class="flex justify-end">
                        <Link href="/gallery/create">
                         <button  type="button" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-presta4 hover:bg-blue-presta4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">create Gallery Album</button>
                        </Link>
                         </div>
                </div>
                <div class="space-y-12">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Gallery</h2>

                    <ul role="list" class="space-y-12 lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8 lg:gap-y-12 lg:space-y-0">
                        <li v-for="album in gallery">
                            <Link :href="route('gallery.show',[album.id])">
                                <div class="space-y-4 sm:flex-col">
                                    <div class="relative aspect-w-3 aspect-h-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute icon-color top-0 p-2 rounded hover:icon-color h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <img class="object-cover shadow-lg rounded-lg hover:opacity-30" :src="album.gallery_image[0]" alt="">
                                    </div>
                                    <div class="sm:col-span-2">
                                        <div class="space-y-4">
                                            <div class="text-lg leading-6 font-medium space-y-1">
                                                <h3>{{ album.title }}</h3>
                                                <p class="text-indigo-600">{{ album.date }}</p>
                                            </div>
                                            <div class="text-lg">
                                                <p class="text-gray-500">
                                                    {{
                                                        filterDescription(album.description)
                                                    }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </Link>
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
        gallery: Array
    },
    setup({ gallery }) {
        console.log(gallery)
        function filterDescription(value) {
            if (value && value.length > 20) {
                value = value.substring(0, 187) + '...';
            }
            return value
        }
        return{
            filterDescription
        }
    }
}
</script>

<style scoped>
 .icon-color{
     background-color: #479aab;
 }
</style>
