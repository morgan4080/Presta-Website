<template>
    <div class="mt-12 flex flex-col mx-auto max-w-4xl">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="mb-4">
                    <p class="text-right font-extrabold text-gray-700 text-lg tracking-wider">REVENUE SHARE DISTRIBUTION</p>
                </div>
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-base font-bold text-gray-900 uppercase tracking-wider">
                                DISTRIBUTION
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-base font-bold text-white bg-blue-prestaT uppercase tracking-wider">
                                RATE
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-base font-bold text-white bg-blue-prestaW uppercase tracking-wider">
                                PRESTA
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-base font-bold text-white bg-blue-presta4 uppercase tracking-wider">
                                SACCO
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(rateX, Idx) in rates" :key="rateX.id" :class="Idx % 2 === 0 ? 'bg-white' : 'bg-gray-50'">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ rateX.name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-blue-prestaS border-l-2">
                                {{ rateX.rate }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-blue-prestaS border-l-2">
                                {{ rateX.presta }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 border-blue-prestaS border-l-2">
                                {{ rateX.sacco }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    <p class="text-right font-extrabold text-gray-700 text-lg tracking-wider">INITIAL SETUP - KSH. BASED ON REQUIREMENTS</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
const rates = [
    { id: 1, name: 'PRESTA CONVENIENCE FEE', rate: '0.60%', presta: '70%', sacco: '30%' },
    { id: 2, name: '', rate: '', presta: '', sacco: '' },
]

export default {
    setup() {
        return {
            rates,
        }
    },
}
</script>
