<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <TransitionRoot as="template" :show="getToggleCreate">
        <Dialog as="div" class="fixed z-10 inset-0 overflow-y-auto" @close="toggleModal(false)">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
                    <DialogOverlay class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
                </TransitionChild>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                        <div class="bg-white py-4 px-4 sm:px-6 lg:col-span-3 lg:6 lg:px-8 xl:pl-12">
                            <div class="text-center pb-8">
                                <h1 class="uppercase text-lg font-medium text-black">
                                    Create Customer
                                </h1>
                            </div>
                            <div class="max-w-lg mx-auto lg:max-w-none">
                                jasdasdasdasdasda
                            </div>
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
        const { getToggleCreate } = mapGetters()
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
        }
    },
}
</script>
