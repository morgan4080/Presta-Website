<template>
    <app-layout title="Create | Post Categories">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <Link :href="route('post-categories')" class="text-blue-presta3 hover:text-blue-presta4">Post Categories </Link>
                <span class="text-blue-presta3 font-medium">/</span>
                Edit
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
                <div class="overflow-hidden">
                    <trashed-message v-if="postCategory.deleted_at" class="mb-6" @restore="restore">
                        This category has been deleted.
                    </trashed-message>
                    <div class="bg-white rounded-md shadow overflow-hidden max-w-3xl">
                        <form @submit.prevent="doUpdate">
                            <div class="p-8 -mr-6 -mb-8 flex flex-col">
                                <text-input @change="genSlug" v-model="form.name" :error="form.errors.name" label="Name" />
                                <text-input v-model="form.slug" :error="form.errors.slug" label="Slug" />
                                <textarea-input v-model="form.description" :error="form.errors.description" label="Description" />
                            </div>
                            <div class="px-8 py-4 bg-gray-100 border-t border-gray-200 flex justify-between items-center overflow-hidden">
                                <button v-if="postCategory.deleted_at" type="button" @click="restore" class="bg-yellow-300 font-medium text-yellow-800 rounded px-3 py-3 hover:bg-yellow-400">Restore Category</button>
                                <button v-else type="button" @click="destroy" class="bg-red-200 text-red-900 font-medium rounded px-3 py-3 hover:bg-red-300">Delete Category</button>
                                <loading-button :loading="form.processing" class="bg-blue-presta4 text-white font-medium rounded px-3 py-3 hover:bg-blue-presta3" type="submit">Update Category</loading-button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="overflow-hidden">
                    <div class="mb-6 flex justify-between items-center">
                        <search-filter v-model="formSearch.search" class="w-full max-w-md mr-4" @reset="reset">
                            <label class="block text-gray-700">Trashed:</label>
                            <select v-model="formSearch.trashed" class="mt-1 w-full pr-2 shadow border-0.5 border-gray-200 focus:ring-4 focus:ring-blue-presta4 focus:ring-opacity-50 rounded">
                                <option :value="null" />
                                <option value="with">With Trashed</option>
                                <option value="only">Only Trashed</option>
                            </select>
                        </search-filter>
                        <Link class="bg-blue-presta4 text-white rounded px-3 py-3 hover:bg-blue-presta3" :href="route('post-sub-category.create')">
                            <span>Create </span>
                            <span class="hidden md:inline">Sub-Category</span>
                        </Link>
                    </div>
                    <div class="bg-white rounded-md shadow overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <tr class="text-left font-bold">
                                <th class="px-6 pt-6 pb-4">Name</th>
                                <th class="px-6 pt-6 pb-4">Slug</th>
                                <th class="px-6 pt-6 pb-4" colspan="2">Date</th>
                            </tr>
                            <tr v-for="sub_category in postSubCategories.data" :key="sub_category.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
                                <td class="border-t">
                                    <Link class="px-6 py-4 flex items-center focus:text-indigo-500" :href="route('post-sub-category.edit', sub_category.id)">
                                        {{ sub_category.name }}
                                        <icon v-if="sub_category.deleted_at" name="trash" class="flex-shrink-0 w-3 h-3 fill-gray-400 ml-2" />
                                    </Link>
                                </td>
                                <td class="border-t">
                                    <Link class="px-6 py-4 flex items-center" :href="route('post-sub-category.edit', sub_category.id)" tabindex="-1">
                                        <div v-if="sub_category.slug">
                                            {{ sub_category.slug }}
                                        </div>
                                    </Link>
                                </td>
                                <td class="border-t">
                                    <Link class="px-6 py-4 flex items-center" :href="route('post-sub-category.edit', sub_category.id)" tabindex="-1">
                                        {{ sub_category.created_at }}
                                    </Link>
                                </td>
                            </tr>
                            <tr v-if="postSubCategories.data.length === 0">
                                <td class="border-t px-6 py-4" colspan="4">No post sub-categories found.</td>
                            </tr>
                        </table>
                    </div>
                    <pagination class="mt-6" :links="postSubCategories.links" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { useForm } from '@inertiajs/inertia-vue3'
import TextInput from '@/Shared/TextInput'
import LoadingButton from '@/Shared/LoadingButton'
import TextareaInput from "@/Shared/TextareaInput";
import TrashedMessage from "@/Shared/TrashedMessage"
import Pagination from '@/Shared/Pagination'
import Icon from '@/Shared/Icon'
import SearchFilter from '@/Shared/SearchFilter'
import throttle from "lodash/throttle";
import pickBy from "lodash/pickBy";
import mapValues from "lodash/mapValues";

export default {
    components: {
        AppLayout,
        Link,
        TextInput,
        LoadingButton,
        TextareaInput,
        TrashedMessage,
        Pagination,
        Icon,
        SearchFilter
    },
    props: {
        postCategory: Object,
        filters: Object,
        postSubCategories: Object,
    },
    data() {
        return {
            formSearch: {
                search: this.filters.search,
                trashed: this.filters.trashed,
            },
        }
    },
    watch: {
        formSearch: {
            deep: true,
            handler: throttle(function() {
                this.$inertia.get(this.route('post-category.edit', this.postCategory.id), pickBy(this.formSearch), { preserveState: true })
            }, 150),
        },
    },
    methods: {
        reset() {
            this.formSearch = mapValues(this.formSearch, () => null)
        },
    },
    setup({ postCategory }) {
        const form = useForm({
            id: postCategory.id,
            name: postCategory.name,
            slug: postCategory.slug,
            description: postCategory.description
        })

        function genSlug() {
            if (form.name) {
                form.slug = form.name.toLocaleLowerCase().replace(/ /g,"-");
            }
        }

        function doUpdate() {
            form.put(route('post-category.update', form.id),{
                preserveScroll: true,
                onSuccess: () => {

                },
            })
        }

        function destroy() {
            if (confirm('Are you sure you want to delete this category?')) {
                form.delete(route('post-category.destroy', form.id))
            }
        }

        function restore() {
            if (confirm('Are you sure you want to restore this category?')) {
                form.put(route('post-category.restore', form.id))
            }
        }

        return {
            form,
            genSlug,
            doUpdate,
            destroy,
            restore,
        }
    }
}
</script>

<style scoped>

</style>
