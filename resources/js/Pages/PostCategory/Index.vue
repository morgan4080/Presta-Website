<template>
    <app-layout title="Index | Post Categories">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Post Categories
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="mb-6 flex justify-between items-center">
                        <search-filter v-model="form.search" class="w-full max-w-md mr-4" @reset="reset">
                            <label class="block text-gray-700">Trashed:</label>
                            <select v-model="form.trashed" class="mt-1 w-full pr-2 shadow border-0.5 border-gray-200 focus:ring-4 focus:ring-blue-presta4 focus:ring-opacity-50 rounded">
                                <option :value="null" />
                                <option value="with">With Trashed</option>
                                <option value="only">Only Trashed</option>
                            </select>
                        </search-filter>
                        <Link class="bg-blue-presta4 text-white rounded px-3 py-3 hover:bg-blue-presta3" :href="route('post-category.create')">
                            <span>Create </span>
                            <span class="hidden md:inline">Category</span>
                        </Link>
                    </div>
                    <div class="bg-white rounded-md shadow overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <tr class="text-left font-bold">
                                <th class="px-6 pt-6 pb-4">Name</th>
                                <th class="px-6 pt-6 pb-4">Slug</th>
                                <th class="px-6 pt-6 pb-4" colspan="2">Date</th>
                            </tr>
                            <tr v-for="category in postCategories.data" :key="category.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
                                <td class="border-t">
                                    <Link class="px-6 py-4 flex items-center focus:text-indigo-500" :href="route('post-category.edit', category.id)">
                                        {{ category.name }}
                                        <icon v-if="category.deleted_at" name="trash" class="flex-shrink-0 w-3 h-3 fill-gray-400 ml-2" />
                                    </Link>
                                </td>
                                <td class="border-t">
                                    <Link class="px-6 py-4 flex items-center" :href="route('post-category.edit', category.id)" tabindex="-1">
                                        <div v-if="category.slug">
                                            {{ category.slug }}
                                        </div>
                                    </Link>
                                </td>
                                <td class="border-t">
                                    <Link class="px-6 py-4 flex items-center" :href="route('post-category.edit', category.id)" tabindex="-1">
                                        {{ category.created_at }}
                                    </Link>
                                </td>
                            </tr>
                            <tr v-if="postCategories.data.length === 0">
                                <td class="border-t px-6 py-4" colspan="4">No post categories found.</td>
                            </tr>
                        </table>
                    </div>
                    <pagination class="mt-6" :links="postCategories.links" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Icon from '@/Shared/Icon'
import pickBy from 'lodash/pickBy'
import throttle from 'lodash/throttle'
import mapValues from 'lodash/mapValues'
import Pagination from '@/Shared/Pagination'
import SearchFilter from '@/Shared/SearchFilter'
import AppLayout from '@/Layouts/AppLayout.vue'
export default {
    components: {
        Icon,
        Pagination,
        SearchFilter,
        Link,
        AppLayout
    },
    props: {
        filters: Object,
        postCategories: Object,
    },
    data() {
        return {
            form: {
                search: this.filters.search,
                trashed: this.filters.trashed,
            },
        }
    },
    watch: {
        form: {
            deep: true,
            handler: throttle(function() {
                this.$inertia.get(this.route('post-categories'), pickBy(this.form), { preserveState: true })
            }, 150),
        },
    },
    methods: {
        reset() {
            this.form = mapValues(this.form, () => null)
        },
    },
}
</script>
