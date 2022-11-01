<style>
.custom-blue-200{
    color: #217BF4
}

.custom-blue-900 {

    color: #0A093D
}

</style>

<template>
    <div class="my-8">
        <div class="mx-auto max-w-7xl flex flex-col justify-center items-center">
            <h2 style="" class="custom-blue-200 py-2">Valuable Team</h2>
            <h1 class="text-2xl font-semibold pb-2 custom-blue-900" >Our Active Members</h1>
            <p class="text-center pb-2">Trusted by over 50 credit unions and 500,000+ members <br> across African regions</p>
        </div>
        <div class=" mx-auto flex justify-center items-center">
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select a tab</label>
                <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                <select id="tabs" name="tabs" class="block w-full rounded-md border-gray-300 focus:border-indigo-500  focus:ring-indigo-500">
                    <option class="w-full" v-for="tab in tabs" :key="tab.name" :selected="tab.current">{{ tab.name }}</option>
                </select>
            </div>
            <div class="hidden sm:block">
                <nav style="background-color: #f7fafe;" class="isolate w-96 flex divide-x divide-gray-200 rounded-lg shadow py-2 px-1" aria-label="Tabs">
                    <div v-on:click="selectMember(tabIdx)" v-for="(tab, tabIdx) in tabs" :key="tabIdx"  :class="[tab.current ? 'text-gray-900 bg-blue-presta2' : 'text-gray-500 custom-blue-20 hover:text-gray-700', tabIdx === 0 ? 'rounded-lg' : '',  tabIdx === tabs.length - 1 ? 'rounded-r-lg' : '', 'group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center focus:z-10']" :aria-current="tab.current ? 'page' : undefined">
                        <span>{{ tab.name }}</span>
                    </div>
                </nav>
            </div>
        </div>
        <div class="bg-white">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8">
                <div v-if="tabIndex === 0" class="grid grid-cols-1 gap-8 md:grid-cols-2  lg:grid-cols-4">
                    <a href="https://www.imarishasacco.co.ke" target="_blank" class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/imarisha.svg" style="height: 130px" alt="imarisha logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">Imarisha SACCO</h2>
                        <p class=" text-sm text-gray-500">www.imarishasacco.co.ke</p>
                    </a>
                    <a href="https://www.onepay.co.ke" target="_blank" class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/onepay.svg" style="height: 130px" alt="onepay logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">One Pay SACCO</h2>
                        <p class=" text-sm text-gray-500">www.onepay.co.ke</p>
                    </a>
                    <a href="https://www.batsacco.co.ke" target="_blank" class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/bat.svg" style="height: 130px" alt="bat logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">B.A.T SACCO</h2>
                        <p class=" text-sm text-gray-500">www.batsacco.co.ke</p>
                    </a>
                    <a href="https://www.ketepasacco.co.ke" target="_blank" class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/ketepa.svg" style="height: 130px" alt="ketepa logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">Ketepa SACCO</h2>
                        <p class=" text-sm text-gray-500">www.ketepasacco.co.ke</p>
                    </a>

                </div>
                <div  v-if="tabIndex === 1" class="grid grid-cols-1 gap-8 md:grid-cols-2  lg:grid-cols-4">
                    <div class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/ketepa.svg" style="height: 130px" alt="ketepa logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">Ketepa SACCO</h2>
                        <p class=" text-sm text-gray-500">www.ketepasacco.co.ke</p>
                    </div>
                    <div class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/imarisha.svg" style="height: 130px" alt="imarisha logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">Imarisha SACCO</h2>
                        <p class=" text-sm text-gray-500">www.imarishasacco.co.ke</p>
                    </div>
                    <div class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/onepay.svg" style="height: 130px" alt="onepay logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">One Pay SACCO</h2>
                        <p class=" text-sm text-gray-500">www.onepay.co.ke</p>
                    </div>
                    <div class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/bat.svg" style="height: 130px" alt="bat logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">B.A.T SACCO</h2>
                        <p class=" text-sm text-gray-500">www.batsacco.co.ke</p>
                    </div>

                </div>
                <div v-if="tabIndex === 2" class="grid grid-cols-1 gap-8 md:grid-cols-2  lg:grid-cols-4">
                    <div class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/onepay.svg" style="height: 130px" alt="onepay logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">One Pay SACCO</h2>
                        <p class=" text-sm text-gray-500">www.onepay.co.ke</p>
                    </div>
                    <div class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/imarisha.svg" style="height: 130px" alt="imarisha logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">Imarisha SACCO</h2>
                        <p class=" text-sm text-gray-500">www.imarishasacco.co.ke</p>
                    </div>
                    <div class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/bat.svg" style="height: 130px" alt="bat logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">B.A.T SACCO</h2>
                        <p class=" text-sm text-gray-500">www.batsacco.co.ke</p>
                    </div>
                    <div class="col-span-1 flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                        <img src="/images/svg/ketepa.svg" style="height: 130px" alt="ketepa logo" >
                        <h2 class="text-lg font-bold tracking-tight text-gray-900 ">Ketepa SACCO</h2>
                        <p class=" text-sm text-gray-500">www.ketepasacco.co.ke</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import {ref} from 'vue';
const tabIndex = ref(0)
const tabs = ref([
    { name: "SACCO's", href: '#', current: false },
    { name: 'MFIs', href: '#', current: false },
    { name: 'Other', href: '#', current: true },
])
const selectMember = (param) => {
    console.log('param',param)
    tabIndex.value = param
    tabs.value.forEach(function (ele,idx) {
        console.log('element',ele)
        ele.current = idx === param;
    })

}
</script>
