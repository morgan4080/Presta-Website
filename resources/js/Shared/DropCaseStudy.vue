<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <Menu as="div" class="relative inline-block text-left z-10">
        <div>
            <MenuButton class="inline-flex justify-end w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                {{ getCategory }}
                <ChevronDownIcon class="ml-auto h-5 w-5" aria-hidden="true" />
            </MenuButton>
        </div>

        <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
            <MenuItems class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                <div class="py-1">
                    <MenuItem @click="emitItem(item)" v-slot="{ active }" v-for="(item,idx) in categories">
                        <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">{{item}}</a>
                    </MenuItem>
                </div>
            </MenuItems>
        </transition>
    </Menu>
</template>

<script>
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/solid'
import {useStore} from "vuex";
const categories = ['investment groups','sacco','Microfinance']
import { mapState, mapGetters, mapMutations, mapActions } from '../Modules/map-state'

export default {
    emits:['caseStudydrop'],
    components: {
        Menu,
        MenuButton,
        MenuItem,
        MenuItems,
        ChevronDownIcon,
    },
    setup({emit}){
        const store = useStore()
        const { getCategory } = mapGetters()

        const emitItem = (param)=>{
            store.commit('setCategory',param)
        }
        return{
            categories,
            getCategory,
            emitItem
        }
    }
}
</script>
