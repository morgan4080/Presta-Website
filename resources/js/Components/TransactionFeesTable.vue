<template>
    <div class="mt-6 flex flex-col md:flex-row justify-center items-center md:space-x-12">
        <div @click="topTab = 1" :class="{'text-blue-presta4 font-semibold md:font-bold border-b-2 border-blue-presta3' : topTab === 1, 'text-blue-presta3 font-medium' : topTab !== 1, }" class="cursor-pointer py-2">Disbursement to m-pesa</div>
        <div @click="topTab = 2" :class="{'text-blue-presta4 font-semibold md:font-bold border-b-2 border-blue-presta3' : topTab === 2, 'text-blue-presta3 font-medium' : topTab !== 2, }" class="cursor-pointer py-2">Disbursement to banks</div>
    </div>
    <div class="mt-12 flex flex-col mx-auto max-w-5xl">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <TransitionRoot
                    :show="topTab === 1"
                    enter="transition ease-in-out duration-300 transform"
                    enter-from="-translate-x-full"
                    enter-to="translate-x-0"
                    leave="transition ease-in-out duration-300 transform"
                    leave-from="translate-x-0"
                    leave-to="-translate-x-full"
                >
                    <div v-show="topTab === 1" class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-base font-bold text-white bg-blue-prestaT uppercase tracking-wider">
                                    Transaction Value (KES)
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-base font-bold text-white bg-blue-prestaW uppercase tracking-wider">
                                    Presta Charge
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-base font-bold text-white bg-blue-prestaR uppercase tracking-wider">
                                    M-pesa Charge
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-base font-bold text-white bg-blue-presta4 uppercase tracking-wider">
                                    Total Charge
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(rateX, Idx) in ratesMpesa" :key="rateX.id" :class="Idx % 2 === 0 ? 'bg-white' : 'bg-gray-50'">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ rateX.value }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 border-blue-prestaS border-l-2">
                                    {{ rateX.presta }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 border-blue-prestaS border-l-2">
                                    {{ rateX.mpesa }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 border-blue-prestaS border-l-2">
                                    {{ rateX.total }}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </TransitionRoot>
                <TransitionRoot
                    :show="topTab === 2"
                    enter="transition ease-in-out duration-300 transform"
                    enter-from="-translate-x-full"
                    enter-to="translate-x-0"
                    leave="transition ease-in-out duration-300 transform"
                    leave-from="translate-x-0"
                    leave-to="-translate-x-full"
                >
                <div v-show="topTab === 2" class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-base font-bold text-white bg-blue-prestaT uppercase tracking-wider">
                                Transaction Value (KES)
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-base font-bold text-white bg-blue-prestaW uppercase tracking-wider">
                                Presta Charge
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-base font-bold text-white bg-blue-prestaR uppercase tracking-wider">
                                M-pesa Charge
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-base font-bold text-white bg-blue-presta4 uppercase tracking-wider">
                                Total Charge
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(rateX, Idx) in ratesBank" :key="rateX.id" :class="Idx % 2 === 0 ? 'bg-white' : 'bg-gray-50'">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ rateX.value }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 border-blue-prestaS border-l-2">
                                {{ rateX.presta }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 border-blue-prestaS border-l-2">
                                {{ rateX.mpesa }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 border-blue-prestaS border-l-2">
                                {{ rateX.total }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                </TransitionRoot>
            </div>
        </div>
    </div>
</template>

<script>
import { TransitionRoot } from '@headlessui/vue'
import { ref } from 'vue'

const ratesBank = [
    { id: 1, value: '0 - 500', presta: '0', mpesa: '0', total: '0' },
    { id: 2, value: '501 - 1,500', presta: '65', mpesa: '0', total: '65' },
    { id: 3, value: '1,501 - 5,000', presta: '95', mpesa: '0', total: '95' },
    { id: 4, value: '5,001 - 10,000', presta: '145', mpesa: '0', total: '145' },
    { id: 5, value: '10,001 - 15,000', presta: '195', mpesa: '0', total: '195' },
    { id: 6, value: '15,001 - 20,000', presta: '245', mpesa: '0', total: '245' },
    { id: 7, value: '20,001 - 25,000', presta: '295', mpesa: '0', total: '295' },
    { id: 8, value: '25,001 - 35,000', presta: '345', mpesa: '0', total: '345' },
    { id: 9, value: '35,001 - 50,000', presta: '395', mpesa: '0', total: '395' },
    { id: 10, value: '50,001 - 100,000', presta: '445', mpesa: '0', total: '445' },
    { id: 11, value: '100,001 - 1,000,000', presta: '495', mpesa: '0', total: '495' },
];
const ratesMpesa = [
    { id: 1, value: '0 - 500', presta: '0', mpesa: '16', total: '16' },
    { id: 2, value: '501 - 1,500', presta: '65', mpesa: '23', total: '88' },
    { id: 3, value: '1,501 - 5,000', presta: '95', mpesa: '23', total: '118' },
    { id: 4, value: '5,001 - 10,000', presta: '145', mpesa: '23', total: '168' },
    { id: 5, value: '10,001 - 15,000', presta: '195', mpesa: '23', total: '218' },
    { id: 6, value: '15,001 - 20,000', presta: '245', mpesa: '23', total: '268' },
    { id: 7, value: '20,001 - 25,000', presta: '295', mpesa: '23', total: '318' },
    { id: 8, value: '25,001 - 35,000', presta: '345', mpesa: '23', total: '368' },
    { id: 9, value: '35,001 - 50,000', presta: '395', mpesa: '23', total: '418' },
    { id: 10, value: '50,001 - 100,000', presta: '445', mpesa: '23', total: '468' },
    { id: 11, value: '100,001 - 1,000,000', presta: '495', mpesa: '23', total: '518' },
]

export default {
    components: { TransitionRoot },
    setup() {
        const topTab = ref(1)
        return {
            ratesBank,
            ratesMpesa,
            topTab
        }
    },
}
</script>
