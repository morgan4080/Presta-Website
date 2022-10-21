<template>
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-base text-blue-presta4 font-semibold tracking-wide uppercase">Revenue share model pricing is for FOSA SACCOs</h2>
                <h2 class="text-3xl font-extrabold text-gray-900 mt-2">Convenience Fees</h2>
                <p class="mt-4 text-lg text-gray-500">Initial Presta Setup Fee is Inclusive of USSD, Sender ID, Paybill Application + Setup and Bulk SMS.</p>
            </div>
            <RevenueDistributionTable/>
        </div>
    </div>
</template>

<script>
import RevenueDistributionTable from '@/Components/RevenueDistributionTable.vue';

export default {
    components: {
        RevenueDistributionTable
    }
}
</script>
