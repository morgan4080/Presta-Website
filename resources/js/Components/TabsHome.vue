<template>
    <div class="w-full px-2 sm:px-0">
        <TabGroup>
            <TabList class="flex flex-wrap md:flex-nowrap p-1 space-x-1 rounded-xl">
                <Tab
                    v-for="category in Object.keys(categories)"
                    as="template"
                    :key="category"
                    v-slot="{ selected }"
                >
                    <button
                        :class="[
              !microFinance ? 'w-full py-2.5 text-sm leading-5 font-medium text-blue-presta3 rounded-lg relative' : selected ? 'w-full py-2.5 text-sm leading-5 font-medium text-blue-presta2 rounded-lg relative' : 'w-full py-2.5 text-sm leading-5 font-medium text-white rounded-lg relative',
              'focus:outline-none focus:ring-2 ring-offset-2 ring-offset-blue-presta2 ring-gray-200 ring-opacity-60',
              selected
                ? 'bg-white shadow'
                : !microFinance ? 'text-blue-presta2 hover:bg-gray-500/20 hover:text-blue-presta1' : 'text-white hover:bg-gray-500/20 hover:text-blue-presta1',
            ]"
                    >
                        {{ category }}
                        <span class="absolute top-0 right-0 text-xs mr-1.5 mt-1">{{ categories[category][0].excerpt }}</span>
                    </button>
                </Tab>
            </TabList>

            <TabPanels class="mt-2">
                <TabPanel
                    v-for="(posts, idx) in Object.values(categories)"
                    :key="idx"
                    :class="[
            'focus:outline-none',
          ]"
                >
                    <ul>
                        <li
                            v-for="post in posts"
                            key="post.id"
                            class="relative rounded-md hover:bg-coolGray-100"
                        >
                            <div v-if="!microFinance" class="mt-12 md:grid md:grid-cols-2 md:gap-8">
                                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                    <img :src="post.featured_image" class="w-80" alt="features presta capital">
                                </div>
                                <div class="col-span-1 flex flex-col justify-center md:col-span-2 lg:col-span-1">
                                    <ul v-if="post.featured_points" role="list" class="mt-6 md:mt-0 space-y-4 flex flex-col justify-center">

                                        <li v-for="point in post.featured_points" class="flex space-x-3">
                                            <check-circle-icon class="flex-shrink-0 h-5 w-5 md:h-8 md:w-8 text-blue-presta3" aria-hidden="true" />
                                            <span class="text-base md:text-lg font-medium text-gray-500" v-html="point"></span>
                                        </li>

                                    </ul>
                                    <div v-else class="block mt-6 md:mt-0">
                                        <p :class="{ 'text-white' : microFinance, 'text-gray-900' : !microFinance }" class="text-2xl font-semibold">{{ post.title }}</p>
                                        <p :class="{ 'text-gray-200' : microFinance, 'text-gray-500' : !microFinance }" class="mt-3 text-base">{{ post.description }}</p>
                                    </div>

                                    <a v-if="post.featured_link" class="text-sm font-medium text-blue-presta4 py-3" :href="post.featured_link"> See more → </a>
                                </div>
                            </div>

                            <div v-else class="mt-12 md:grid md:grid-cols-2 md:gap-12">

                                <div class="col-span-1 flex flex-col justify-center md:col-span-2 lg:col-span-1 pb-20">
                                    <ul v-if="post.featured_points" role="list" class="mt-6 md:mt-0 space-y-4 flex flex-col justify-center">

                                        <li v-for="point in post.featured_points" class="flex space-x-3">
                                            <check-circle-icon class="flex-shrink-0 h-5 w-5 md:h-8 md:w-8 text-blue-presta3" aria-hidden="true" />
                                            <span class="text-base md:text-lg font-medium text-gray-500" v-html="point"></span>
                                        </li>

                                    </ul>
                                    <div v-else class="block mt-6 md:mt-0">
                                        <p :class="{ 'text-white' : microFinance, 'text-gray-900' : !microFinance }" class="text-2xl font-semibold">{{ post.title }}</p>
                                        <p :class="{ 'text-gray-200' : microFinance, 'text-gray-500' : !microFinance }" class="mt-3 text-base" v-html="post.description"></p>
                                    </div>

                                    <a v-if="post.featured_link" class="text-sm font-medium text-white py-3 underline" :href="post.featured_link"> See more → </a>
                                </div>

                                <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                                    <img :src="post.featured_image" class="w-full object-center object-contain" alt="features presta capital">
                                </div>
                            </div>
                        </li>
                    </ul>
                </TabPanel>
            </TabPanels>
        </TabGroup>
    </div>
</template>

<script>
import { ref } from 'vue'
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue'
import {
    CheckCircleIcon
} from '@heroicons/vue/outline';

export default {
    components: {
        TabGroup,
        TabList,
        Tab,
        TabPanels,
        TabPanel,
        CheckCircleIcon
    },
    props: {
        tabs: Object,
        microFinance: {
            type: Boolean,
            default() {
                return false
            }
        }
    },
    setup({ tabs }) {
        let categories = ref(tabs)

        return { categories }
    },
}
</script>
