<template>
    <div class="space-y-4 sm:space-y-0 sm:mr-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
        <Link :href="route('demo')" :class="{'text-blue-presta2 bg-white hover:bg-indigo-50' : context === 'homepage', 'text-white bg-blue-presta4 hover:bg-blue-presta3' : context !== 'homepage'}" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm sm:px-8">
            Request demo
        </Link>
        <button v-show="context === 'homepage'" @click="openModal('video')" type="button" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-presta1 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
            <PlayIcon class="flex-none w-5 h-5 text-white mr-1" aria-hidden="true" />
            Watch video
        </button>
    </div>
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
                            :class="{'rounded-2xl max-w-md' : context0 && context0 === 'demo', 'max-w-2xl' : context0 && context0 === 'video'}"
                            class="inline-block w-full max-w-2xl p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl"
                        >

                            <div v-if="context0 && context0 ==='demo'" class="pt-2 pb-4 space-y-2">
                                <label class="block text-sm">
                                    <span class="text-gray-700">Organisation</span>
                                    <input type="text" class="form-input mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="">
                                </label>
                                <label class="block text-sm">
                                    <span class="text-gray-700">Full name</span>
                                    <input type="text" class="form-input mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="">
                                </label>
                                <label class="block text-sm">
                                    <span class="text-gray-700">E-mail</span>
                                    <input type="email" class="form-input mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="">
                                </label>
                            </div>

                            <iframe v-if="context0 && context0 ==='video'" id="existing-iframe-example"
                                    class="w-full h-96"
                                    :src="`https://www.youtube.com/embed/${videoId}?enablejsapi=1`"
                                    frameborder="0"
                                    style="border: solid 4px #37474F"
                            ></iframe>

                            <div class="mt-4 flex justify-between">
                                <button
                                    type="button"
                                    class="inline-flex justify-center px-4 py-2 text-sm font-medium text-blue-900 bg-blue-100 border border-transparent rounded-md hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500"
                                    @click="closeModal"
                                >
                                    Got it, thanks!
                                </button>
                                <button
                                    v-if="context0 && context0 ==='demo'"
                                    type="button"
                                    class="inline-flex justify-center px-4 py-2 text-sm font-medium text-blue-900 bg-blue-100 border border-transparent rounded-md hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500"
                                    @click="closeModal"
                                >
                                    Submit
                                </button>
                            </div>

                        </div>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import { ref, toRefs } from 'vue'

import {
    PlayIcon,
} from '@heroicons/vue/outline'

import {
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogOverlay,
    DialogTitle,
} from '@headlessui/vue'

export default {
    components: {
        TransitionRoot,
        TransitionChild,
        Dialog,
        DialogOverlay,
        DialogTitle,
        PlayIcon,
        Link
    },

    props: {
        videoId: {
            type: String,
            default: null
        },
        context: String,
    },

    setup(props) {
        const isOpen = ref(false)

        const context0 = ref(null)

        const { videoId } = toRefs(props)

        console.log("incoming video id", videoId.value)

        const openModal = (type) => {
            switch (type) {
                case 'video':

                    context0.value = type

                    var tag = document.createElement('script');
                    tag.id = 'iframe-demo';
                    tag.src = 'https://www.youtube.com/iframe_api';
                    var firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                    var player;
                function onYouTubeIframeAPIReady() {
                    player = new YT.Player('existing-iframe-example', {
                        events: {
                            'onReady': onPlayerReady,
                            'onStateChange': onPlayerStateChange
                        }
                    });
                }
                function onPlayerReady(event) {
                    document.getElementById('existing-iframe-example').style.borderColor = '#FF6D00';
                }
                function changeBorderColor(playerStatus) {
                    var color;
                    if (playerStatus === -1) {
                        color = "#37474F"; // unstarted = gray
                    } else if (playerStatus === 0) {
                        color = "#FFFF00"; // ended = yellow
                    } else if (playerStatus === 1) {
                        color = "#33691E"; // playing = green
                    } else if (playerStatus === 2) {
                        color = "#DD2C00"; // paused = red
                    } else if (playerStatus === 3) {
                        color = "#AA00FF"; // buffering = purple
                    } else if (playerStatus === 5) {
                        color = "#FF6DOO"; // video cued = orange
                    }
                    if (color) {
                        document.getElementById('existing-iframe-example').style.borderColor = color;
                    }
                }
                function onPlayerStateChange(event) {
                    changeBorderColor(event.data);
                }

                    break
                case 'demo':
                    // setup quote
                    context0.value = type
                    break
            }
            isOpen.value = true
        }

        const closeModal = () => {
            isOpen.value = false
        }

        return {
            context0,
            isOpen,
            closeModal,
            openModal
        }
    },
}
</script>
