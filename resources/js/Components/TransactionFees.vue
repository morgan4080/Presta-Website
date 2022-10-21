<template>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-base text-blue-presta4 font-semibold tracking-wide uppercase">Disbursement</h2>
                <h2 class="text-3xl font-extrabold text-gray-900 mt-2">TRANSACTION FEE</h2>
                <p class="mt-4 text-lg text-gray-500">Presta charges a convenience fee on disbursements as listed below for all packages under the subscription model.
                    (The lender can however choose to pay this costs on behalf of his customers.)
                </p>
            </div>
            <TransactionFeesTable/>
        </div>
    </div>
</template>

<script>
import TransactionFeesTable from '@/Components/TransactionFeesTable.vue';

export default {
    components: {
        TransactionFeesTable
    }
}
</script>
