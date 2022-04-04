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
                                    <div class="h-0 aspect-w-3 aspect-h-2 sm:aspect-w-2 sm:aspect-h-1 relative">
                                        <img class="object-cover shadow-lg rounded-lg hover:opacity-30" :src="album.gallery_image[0]" alt="">
                                    </div>
                                <div class="sm:col-span-2">
                                    <div class="space-y-4">
                                        <div class="text-lg leading-6 font-medium space-y-1">
                                            <h3>{{ album.title }}</h3>
                                            <p class="text-indigo-600">{{ album.date }}</p>
                                        </div>
                                        <div class="text-lg">
                                            <p class="text-gray-500">{{
                                                    filterDescription(album.description)
                                                }}</p>
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

</style>
