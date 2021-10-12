<template>
    <app-layout title="Edit | Posts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <Link :href="route('post-sub-category.edit', post.post_sub_category_id)" class="text-blue-presta3 hover:text-blue-presta4">Post </Link>
                <span class="text-blue-presta3 font-medium">/</span>
                Edit <span class="text-sm text-gray-700"> - {{ postSubCategoryName }}</span>
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <trashed-message v-if="post.deleted_at" class="mb-6" @restore="restore">
                    This post has been deleted.
                </trashed-message>
                <div class="overflow-hidden">
                    <div class="bg-white rounded-md shadow overflow-hidden">
                        <form @submit.prevent="doUpdate">
                            <div class="md:flex :justify-between">
                                <div class="p-8 -mr-6 -mb-8 flex flex-col w-2/3">
                                    <input type="hidden" v-model="form.post_category_id">
                                    <input type="hidden" v-model="form.post_sub_category_id">
                                    <text-input @change="genSlug" v-model="form.title" :error="form.errors.title" label="Title" />
                                    <text-input v-model="form.sub_title" :error="form.errors.sub_title" label="Sub Title" />
                                    <text-input v-model="form.slug" :error="form.errors.slug" label="Slug" />
                                    <textarea-input v-model="form.excerpt" :error="form.errors.excerpt" label="Excerpt" />
                                    <textarea-input :cms="true" v-model="form.description" :error="form.errors.description" label="Description" />
                                </div>
                                <div class="p-8 -mr-6 -mb-8 flex flex-col w-1/3">
                                    <span class="block text-sm font-medium text-gray-700">
                                        Featured Image
                                    </span>
                                    <div id="dragBox" @drop="dropHandler" @dragover="handleDragOver" @dragleave="handleDragLeave" @dragenter="handleDragEnter" class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-presta3 hover:text-blue-presta4 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input @change="change" id="file-upload" multiple="" accept="image/jpeg,image/png,image/gif" type="file" class="sr-only" />
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG, GIF up to 1MB
                                            </p>
                                        </div>
                                    </div>
                                    <ul class="mt-2 mb-6 previewImgTab">
                                        <li class="text-xs font-medium text-gray-700 flex items-center justify-center" v-for="upload in form.featured_image"><span class="truncated">{{ upload.name }}</span> - {{ filesize(upload.size) }} bytes<svg @click="removeFile(upload)" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="cursor-pointer ml-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z"></path></svg></li>
                                    </ul>
                                    <span class="block text-sm font-medium text-gray-700">
                                        Meta Data
                                    </span>
                                    <table class="min-w-full divide-y divide-gray-200 mt-1">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Key
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Value
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        <tr v-for="(metaSlot, i) in metaSlots" :key="i+1">
                                            <td class="px-1 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                <text-input :modelValue="Object.keys(form.metadata[i])[0] ? Object.keys(form.metadata[i])[0] : form.metadataKeys[i]" v-model="form.metadataKeys[i]" :do-bottom-pad="false"/>
                                            </td>
                                            <td :class="{'opacity-50': !form.metadataKeys[i] || form.metadataKeys[i] === undefined }" class="px-1 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <text-input :modelValue="form.metadata[i][`${Object.keys(form.metadata[i])[0]}`]" :disabled="!form.metadataKeys[i] || form.metadataKeys[i] === undefined" v-model="form.metadata[i][`${form.metadataKeys[i]}`]" :do-bottom-pad="false" />
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="flex flex-col justify-center items-center mb-6 cYEHpg">
                                        <button @click="incrementMetaSlot" type="button">
                                            <svg class="text-gray-700 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16pt" height="16pt" viewBox="0 0 50 50" version="1.1">
                                                <g id="surface4628842">
                                                    <path d="M 25 2 C 12.316406 2 2 12.316406 2 25 C 2 37.683594 12.316406 48 25 48 C 37.683594 48 48 37.683594 48 25 C 48 12.316406 37.683594 2 25 2 Z M 37 26 L 26 26 L 26 37 L 24 37 L 24 26 L 13 26 L 13 24 L 24 24 L 24 13 L 26 13 L 26 24 L 37 24 Z M 37 26 " class="fill-current" style="stroke: none; fill-rule: nonzero; fill-opacity: 1;"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <div class="cYEHpg">
                                            <div aria-hidden="false" class="sc-fznKkj hHqvvg">
                                                <div class="sc-fzqBZW dfTklK">
                                                    <div class="sc-fzqNJr dxpDLC">
                                                        <svg width="20" height="9" viewBox="0 0 20 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.185 6H0v3h20V6h-1.185a4 4 0 0 1-3.01-1.366L13.01 1.44a4 4 0 0 0-6.02 0L4.195 4.634A4 4 0 0 1 1.185 6z"></path>
                                                            <path d="M1.185 6H0v3h20V6h-1.185a4 4 0 0 1-3.01-1.366L13.01 1.44a4 4 0 0 0-6.02 0L4.195 4.634A4 4 0 0 1 1.185 6z"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="sc-fzokOt gsjsOz">
                                                        <div class="sc-fzokOt hmCcFs">
                                                            <div class="sc-fznyAO cWBCJS text-xs">Add metadata</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex justify-between items-center">
                                <button v-if="post.deleted_at" type="button" @click="restore" class="bg-yellow-300 font-medium text-yellow-800 rounded px-3 py-3 hover:bg-yellow-400">Restore Category</button>
                                <button v-else type="button" @click="destroy" class="bg-red-200 text-red-900 font-medium rounded px-3 py-3 hover:bg-red-300">Delete Post</button>
                                <loading-button :loading="form.processing" class="bg-blue-presta4 text-white rounded px-3 py-3 hover:bg-blue-presta3" type="submit">Update Post</loading-button>
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
import TrashedMessage from "@/Shared/TrashedMessage"
import TextareaInput from "@/Shared/TextareaInput"
import {ref, watchEffect} from "vue";

export default {
    components: {
        AppLayout,
        Link,
        TextInput,
        LoadingButton,
        TextareaInput,
        TrashedMessage
    },
    props: {
        post: Object,
        postSubCategoryName: String
    },
    setup({ post }) {
        const form = useForm({
            post_category_id: post.post_category_id,
            post_sub_category_id: post.post_sub_category_id,
            id: post.id,
            title: post.title,
            sub_title: post.sub_title,
            slug: post.slug,
            excerpt: post.excerpt,
            description: post.description,
            metadata: post.metadata,
            metadataKeys: [],
            featured_image: [],
            _method: 'put',
        })

        /*watchEffect(() => {
            console.log(`metadata: ` + JSON.stringify(form.metadata))
            console.log(`featured_image: ` + form.featured_image, post.featured_image)
        })*/

        const metaSlots = ref([])

        if (form.metadata && form.metadata.length > 0) {
            metaSlots.value.push('')
        }


        if (post.featured_image) {
            for (const i in post.featured_image) {
                const MY_URL = post.featured_image[i];
                const xhr = new XMLHttpRequest();
                xhr.open('GET', MY_URL, true);
                xhr.withCredentials = true;
                xhr.responseType = 'blob';
                xhr.onload = () => {
                    const blob = xhr.response;
                    const splitString = MY_URL.split('/');
                    const file = new File([blob], splitString[splitString.length - 1], {type: blob.type});
                    form.featured_image.push(file);
                }
                xhr.send(null);
            }
        }

        function incrementMetaSlot(e) {
            metaSlots.value.push(e)
            form.metadata.push({})
        }

        function genSlug() {
            if (form.title) {
                form.slug = form.title.toLocaleLowerCase().replace(/ /g,"-");
            }
        }

        function dropHandler(ev) {
            ev.preventDefault();
            if (ev.dataTransfer.items) {
                for (let i = 0; i < ev.dataTransfer.items.length; i++) {
                    if (ev.dataTransfer.items[i].kind === 'file') {
                        form.featured_image.push(ev.dataTransfer.items[i].getAsFile());
                        document.querySelector('#dragBox > span > span').innerText = 'Drop files here or click';
                        document.querySelector('#dragBox').style.borderColor = '2px dashed var(--inputBorderColor)';
                    }
                }
            } else {
                for (let i = 0; i < ev.dataTransfer.files.length; i++) {
                    form.featured_image.push(ev.dataTransfer.files[i]);
                    document.querySelector('#dragBox > span > span').innerText = 'Drop files here or click';
                    document.querySelector('#dragBox').style.borderColor = '2px dashed var(--inputBorderColor)';
                }
            }
        }

        function handleDragOver(ev) {
            ev.preventDefault();
            console.log('File(s) in drop zone');
            document.querySelector('#dragBox').style.borderColor = 'rgb(66, 251, 183)';
            document.querySelector('#dragBox > span > span').innerText = 'Drop it like its hot';
        }

        function handleDragEnter(ev) {
            ev.preventDefault();
        }

        function handleDragLeave(ev) {
            ev.preventDefault();
            document.querySelector('#dragBox > span > span').innerText = 'Drop files here or click';
            document.querySelector('#dragBox').style.borderColor = '2px dashed var(--inputBorderColor)';
        }

        async function change(e) {
            await readFileUrl(e.target);
        }

        async function readFileUrl(input) {
            if (input.files && input.files[0]) {
                for (let i = 0; i < input.files.length; i++) {
                    form.featured_image.push(input.files[i]);
                }
            }
        }

        function removeFile(file) {
            form.featured_image.splice(form.featured_image.findIndex(file0 => file0 === file), 1);
        }

        function filesize(size) {
            let i = Math.floor(Math.log(size) / Math.log(1024))
            return (size / Math.pow(1024, i)).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i]
        }

        function destroy() {
            if (confirm('Are you sure you want to delete this post?')) {
                form.delete(route('post.destroy', post.id))
            }
        }

        function restore() {
            if (confirm('Are you sure you want to restore this post?')) {
                form.put(route('post.restore', post.id))
            }
        }

        function doUpdate() {
            form.post(route('post.update', form.id))
        }

        return {
            form,
            genSlug,
            dropHandler,
            handleDragOver,
            handleDragEnter,
            handleDragLeave,
            change,
            removeFile,
            filesize,
            metaSlots,
            incrementMetaSlot,
            destroy,
            restore,
            doUpdate
        }
    }
}
</script>

<style scoped>
.cYEHpg {
    vertical-align: middle;
    position: relative;
}

.cYEHpg > :focus-visible + .sc-fznKkj, .cYEHpg:hover .sc-fznKkj {
    opacity: 1;
    transform: translate(-50%, 5px);
    transition: opacity 200ms ease 200ms, transform 200ms ease 200ms;
}

.hHqvvg {
    position: absolute;
    left: 50%;
    margin-top: 8px;
    margin-bottom: 8px;
    width: 100vh;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    pointer-events: none;
    z-index: 1;
    opacity: 0;
    transform: translate(-50%, 0px);
    transition: opacity 150ms ease 0s, transform 150ms ease 0s;
    bottom: auto;
}

.dfTklK {
    position: relative;
    transform: translate(0px, 0px);
}
.dxpDLC {
    position: absolute;
    top: 3px;
    left: 50%;
    transform: translate(-50%, -100%);
    width: 18px;
    color: rgb(18, 18, 18);
}
.gsjsOz {
    position: relative;
    top: auto;
    left: auto;
}
.hmCcFs {
    position: relative;
    top: 0px;
    left: 12.875px;
}
.cWBCJS {
    color: rgba(255, 255, 255, 0.95);
    background: rgb(18, 18, 18);
    padding: 8px;
    border-radius: 10px;
    max-width: 175px;
    text-align: center;
    line-height: 1.3;
    @apply font-light;
    @apply text-xs;
}
.dxpDLC > svg {
    fill: currentcolor;
}
.truncated {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 200px;
}
</style>
