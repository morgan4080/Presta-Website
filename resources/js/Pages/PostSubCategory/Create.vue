<template>
    <app-layout title="Create | Post Categories">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <Link :href="route('post-category.edit', postCategoryId)" class="text-blue-presta3 hover:text-blue-presta4">Post Sub-Categories </Link>
                <span class="text-blue-presta3 font-medium">/</span>
                Create
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="bg-white rounded-md shadow overflow-hidden max-w-3xl">
                        <form @submit.prevent="form.post(route('post-sub-category.store'))">
                            <div class="p-8 -mr-6 -mb-8 flex flex-col">
                                <input type="hidden" v-model="form.post_category_id">
                                <text-input @change="genSlug" v-model="form.name" :error="form.errors.name" label="Name" />
                                <text-input v-model="form.slug" :error="form.errors.slug" label="Slug" />
                                <textarea-input v-model="form.description" :error="form.errors.description" label="Description" />
                            </div>
                            <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex justify-between items-center">
                                <button type="button" @click="form.reset()" class="bg-blue-presta4 text-white rounded px-3 py-3 hover:bg-blue-presta3">Reset</button>
                                <loading-button :loading="form.processing" class="bg-blue-presta4 text-white rounded px-3 py-3 hover:bg-blue-presta3" type="submit">Create Sub-Category</loading-button>
                            </div>
                        </form>
                    </div>
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
export default {
    components: {
        AppLayout,
        Link,
        TextInput,
        LoadingButton,
        TextareaInput
    },
    props: {
        postCategoryId: Number
    },
    setup({ postCategoryId }) {
        const form = useForm({
            post_category_id: postCategoryId,
            name: null,
            slug: null,
            description: null
        })
        function genSlug() {
            if (form.name) {
                form.slug = form.name.toLocaleLowerCase().replace(/ /g,"-");
            }
        }

        return {
            form,
            genSlug
        }
    }
}
</script>

<style scoped>

</style>
