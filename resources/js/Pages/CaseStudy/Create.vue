<template>
    <Head title="Gallery Create | Presta Capital" />

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />

    <form @submit.prevent="form.post(route('gallery.store'))"
          class="space-y-8 mx-auto divide-y mx-auto pt-32 px-4 max-w-7xl sm:px-6 lg:px-8 lg:pt-56 divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div>
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Gallery Upload</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Create photo albums with useful information here</p>
                </div>

                <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="title" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Title </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="max-w-lg flex rounded-md shadow-sm">
                                <input v-model="form.title" type="text" name="title" id="title" autocomplete="title" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                            </div>
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="title" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> client </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="max-w-lg flex rounded-md shadow-sm">
                                <input v-model="form.client" type="text" name="client" id="client" autocomplete="client" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                            </div>
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="title" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Category </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="max-w-lg flex rounded-md shadow-sm">
                                <input v-model="form.category" type="text" name="Category" id="Category" autocomplete="Category" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                            </div>
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="date" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Date </label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input v-model="form.date"  type="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Description </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea-input v-model="form.description" :error="form.errors.description" :cms="true" label="Description" />
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Gallery Images </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div id="dragBox" @drop="dropHandler" @dragover="handleDragOver" @dragleave="handleDragLeave" @dragenter="handleDragEnter"  class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a file</span>
                                            <input @change="change" id="file-upload" multiple="" accept="image/jpeg,image/png,image/gif" type="file" class="sr-only" />
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="flex justify-end">
                <button @click="form.reset()" type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                <loading-button :loading="form.processing"  type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-presta4 hover:bg-blue-presta4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</loading-button>
            </div>
        </div>
    </form>
    <div class="pt-6 max-w-7xl">
        <ul role="list" class="space-y-12 sm:grid sm:grid-cols-5 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:gap-x-8">
            <li v-for="(img,idx) in form.caseStudy_image" :key="idx">
                <div class="space-y-4">
                    <div class="aspect-w-3 aspect-h-2">
                        <img class="object-cover shadow-lg rounded-lg" :src="getBlobUrl(img)" alt="" />
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <MainFooter/>

</template>

<script>
import NavigationHome from '@/Components/NavigationHome.vue';
import MainFooter from '@/Components/MainFooter.vue';
import loadingButton from "@/Shared/LoadingButton";
import TextareaInput from "@/Shared/TextareaInput"
import TextInput from '@/Shared/TextInput'


import { useForm } from '@inertiajs/inertia-vue3';
import { onMounted } from "vue"

export default {
    name: "index",
    components:{
        NavigationHome,
        TextareaInput,
        TextInput,
        MainFooter,
        loadingButton,
    },
    props:{
        caseStudy: Array
    },
    setup({caseStudy}){
        onMounted(()=>{
            console.log('caseStudy',caseStudy)
        })
        const form = useForm({
            title:null,
            client:null,
            category:null,
            description:null,
            date:null,
            caseStudy_image:[],
        })
        const getBlobUrl = (x) => {
            return URL.createObjectURL(x)
        }
        function dropHandler(ev) {
            ev.preventDefault();
            if (ev.dataTransfer.items) {
                for (let i = 0; i < ev.dataTransfer.items.length; i++) {
                    if (ev.dataTransfer.items[i].kind === 'file') {
                        form.caseStudy_image.push(ev.dataTransfer.items[i].getAsFile());
                        document.querySelector('#dragBox').style.borderColor = '2px dashed var(--inputBorderColor)';
                    }
                }
            } else {
                for (let i = 0; i < ev.dataTransfer.files.length; i++) {
                    form.caseStudy_image.push(ev.dataTransfer.files[i]);
                    document.querySelector('#dragBox').style.borderColor = '2px dashed var(--inputBorderColor)';
                }
            }
        }

        function handleDragOver(ev) {
            ev.preventDefault();
            console.log('File(s) in drop zone');
            document.querySelector('#dragBox').style.borderColor = 'rgb(66, 251, 183)';
        }

        function handleDragEnter(ev) {
            ev.preventDefault();
        }

        function handleDragLeave(ev) {
            ev.preventDefault();
            document.querySelector('#dragBox').style.borderColor = '2px dashed var(--inputBorderColor)';
        }

        async function change(e) {
            await readFileUrl(e.target);
        }

        async function readFileUrl(input) {
            if (input.files && input.files[0]) {
                for (let i = 0; i < input.files.length; i++) {
                    console.log('images',input.files[i])
                    form.caseStudy_image.push(input.files[i]);
                }
            }
        }
        return{
            change,
            form,
            dropHandler,
            handleDragOver,
            handleDragEnter,
            handleDragLeave,
            getBlobUrl,
        }
    }
}
</script>
<style scoped lang="scss">
/* Basic editor styles */
.ProseMirror {
    > * + * {
        margin-top: 0.75em;
    }

    ul,
    ol {
        padding: 0 1rem;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        line-height: 1.1;
    }

    code {
        background-color: rgba(#616161, 0.1);
        color: #616161;
    }

    pre {
        background: #0D0D0D;
        color: #FFF;
        font-family: 'JetBrainsMono', monospace;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;

        code {
            color: inherit;
            padding: 0;
            background: none;
            font-size: 0.8rem;
        }
    }

    img {
        max-width: 100%;
        height: auto;
    }

    blockquote {
        padding-left: 1rem;
        border-left: 2px solid rgba(#0D0D0D, 0.1);
    }

    hr {
        border: none;
        border-top: 2px solid rgba(#0D0D0D, 0.1);
        margin: 2rem 0;
    }
}

</style>
