<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <TransitionRoot as="template" :show="getToggleCreate" class="min-w-7xl ">
        <Dialog as="div" class="fixed z-10 inset-0 overflow-y-auto" @close="toggleModal(false)">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <TransitionChild :show="getToggleCreate" as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
                    <DialogOverlay @click="toggleModal(false)" class="fixed inset-0 bg-gray-500 bg-opacity-80 transition-opacity" />
                </TransitionChild>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <TransitionChild :show="getToggleCreate" as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-90" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <div class="relative inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:align-middle sm:max-w-lg sm:w-full">
                            <div class="h-full w-full mx-auto lg:max-w-none">
                                <img :src="getImgModalUrl" alt="">
                            </div>
                    </div>
                </TransitionChild>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script>
import { ref,watch } from 'vue'
import { Dialog, DialogOverlay, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { CheckIcon } from '@heroicons/vue/outline'
import { useStore } from 'vuex'
import { mapState, mapGetters, mapMutations, mapActions } from '../Modules/map-state'
// const getToggleCreate = computed(() => store.getters.getToggleCreate)
export default {
    components: {
        Dialog,
        DialogOverlay,
        DialogTitle,
        TransitionChild,
        TransitionRoot,
        CheckIcon,
    },
    setup() {
        let url = ref('')
        const store = useStore()
        // const { generateQuotation } = mapActions()
        const { getToggleCreate, getImgModalUrl } = mapGetters()
        function toggleModal(param) {
            if (param === false){
                store.commit('setToggleCreate',false)
            }else {
                store.commit('setToggleCreate',true)
            }
        }
        return {
            url,
            toggleModal,
            getToggleCreate,
            getImgModalUrl,
        }
    },
}
</script>
