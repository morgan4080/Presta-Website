<template>
    <TransitionRoot appear :show="isOpen" as="template">
        <Dialog as="div" @close="closeModal">
            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="min-h-screen px-4 text-center bg-opacity-25 bg-gray-900 backdrop-filter backdrop-blur">
                    <TransitionChild
                        as="template"
                        enter="duration-300 ease-out"
                        enter-from="opacity-0"
                        enter-to="opacity-100"
                        leave="duration-200 ease-in"
                        leave-from="opacity-100"
                        leave-to="opacity-0"
                    >
                        <DialogOverlay class="fixed inset-0" />
                    </TransitionChild>

                    <span class="inline-block h-screen align-middle" aria-hidden="true">
                        &#8203;
                    </span>

                    <TransitionChild
                        as="template"
                        enter="duration-300 ease-out"
                        enter-from="opacity-0 scale-95"
                        enter-to="opacity-100 scale-100"
                        leave="duration-200 ease-in"
                        leave-from="opacity-100 scale-100"
                        leave-to="opacity-0 scale-95"
                    >
                        <div
                            class="inline-block w-full max-w-2xl p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-2xl max-w-md"
                        >
                            <form v-if="!formSubmitted" @submit.prevent="submitDemoUser">
                                <div class="pt-2 pb-4 space-y-2">
                                    <label class="block text-sm">
                                        <span class="text-gray-700">Full name</span>
                                        <input type="text" class="form-input mt-1 block w-full border rounded-md bg-gray-100 border-gray-200 focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="" required>
                                    </label>
                                    <label class="block text-sm">
                                        <span class="text-gray-700">E-mail</span>
                                        <input type="email" class="form-input mt-1 block w-full border rounded-md bg-gray-100 border-gray-200 focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="" required>
                                    </label>
                                    <label class="block text-sm">
                                        <span class="text-gray-700">Phone</span>
                                        <input type="number" class="form-input mt-1 block w-full border rounded-md bg-gray-100 border-gray-200 focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="" required>
                                    </label>
                                </div>

                                <div class="mt-4 flex justify-between">
                                    <button
                                        type="button"
                                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-pink-900 bg-pink-100 border border-transparent rounded-md hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500"
                                        @click="closeModal"
                                    >
                                        Close
                                    </button>
                                    <button
                                        type="submit"
                                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-blue-900 bg-blue-100 border border-transparent rounded-md hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </form>
                            <div v-else>
                                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                                    <CheckIcon class="h-6 w-6 text-green-600" aria-hidden="true" />
                                </div>
                                <div class="mt-3 text-center sm:mt-5">
                                    <DialogTitle as="h3" class="text-lg leading-6 font-medium text-gray-900">Demo account ready</DialogTitle>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Congratulations your demo account has been setup.</p>
                                        <p class="text-sm text-gray-500 pt-2">Username: <span class="underline">johndoe</span></p>
                                        <p class="text-sm text-gray-500 pt-2">Password: <span class="underline">pass1</span></p>
                                        <p class="pt-4">
                                            <a target="_blank" rel="noreferrer noopener" class="underline text-sm text-blue-presta1" href="https://accounts.presta.co.ke/?tn=t10009&redirect_url=https://lending.presta.co.ke">Start demo</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script setup>
import {
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogOverlay,
    DialogTitle
} from '@headlessui/vue';

import { CheckIcon } from '@heroicons/vue/outline'

import {ref} from "vue";

const isOpen = ref(true);

const formSubmitted = ref(false);

const closeModal = () => {
    isOpen.value = false
}

const submitDemoUser = () => {
    formSubmitted.value = true;
}

</script>

<style scoped>

</style>
