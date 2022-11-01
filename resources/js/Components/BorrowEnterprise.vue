<template>
    <div class="bg-white mt-4">
        <div class="mx-auto max-w-7xl flex flex-col justify-center items-center">
            <h2 class="custom-blue-200 my-4 font-semibold">CREATE SEAMLESS BORROWING EXPERIENCES</h2>
            <h1 class="sm:font-semibold text-2xl sm:text-center custom-blue-900">Flexible, customizable lending
            </h1>
            <p class="sm:text-sm custom-grey-dark text-center py-4">Lending doesn’t have to be complicated. Our modular platform gives you the ability<br>
                to manage lending simply throughout the entire loan lifecycle, from application to collections.<br>
                The result is a better experience for both borrowers and lenders.</p>
        </div>
        <div class="mx-auto max-w-7xl grid grid-cols-4 sm:gap-x-8 sm:py-12 sm:px-20 bg-blue-white">
            <div class="col-span-1 flex flex-col justify-center items-center shadow-2xl sm:py-4 sm:px-4 ">
                <h1 class="sm:font-semibold sm:text-sm sm:text-center custom-blue-200">Loan Origination
                </h1>
                <p class=" sm:text-sm custom-grey-dark text-center pt-6 pb-8">Loan origination personalized and taylor-made specifically for you.</p>
                <button  type="button" class=" mt-4 inline-flex items-center rounded-md border border-transparent bg-blue-presta2  px-8 py-2 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-blue-prestaR focus:ring-offset-2">Continue</button>
            </div>
            <div class="col-span-1 flex flex-col justify-center items-center shadow-2xl sm:py-4 sm:px-4 ">
                <h1 class="sm:font-semibold sm:text-sm sm:text-center custom-blue-200">Appraisal
                </h1>
                <p class=" sm:text-sm custom-grey-dark text-center sm:pt-6 sm:pb-16">Appraisal services delivered at your convenience</p>
                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-blue-presta2  px-8 py-2 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-blue-prestaR focus:ring-offset-2">Continue</button>
            </div>
            <div class="col-span-1 flex flex-col justify-center items-center shadow-2xl sm:py-4 sm:px-4 ">
                <h1 class="sm:font-semibold sm:text-sm sm:text-center custom-blue-200">Loan Management
                </h1>
                <p class=" sm:text-sm custom-grey-dark text-center pt-6 pb-12">Loan management delivered right at the comfort of your mobile device</p>
                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-blue-presta2  px-8 py-2 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-blue-prestaR focus:ring-offset-2">Continue</button>
            </div>
            <div class="col-span-1 flex flex-col justify-center items-center shadow-2xl sm:py-4 sm:px-4 ">
                <h1 class="sm:font-semibold sm:text-sm sm:text-center custom-blue-200">Digital Onboarding
                </h1>
                <p class=" sm:text-sm custom-grey-dark text-center pt-6 sm:pb-12">We also offer Digital on-boarding for your businesses/ enterprise</p>
                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-blue-presta2  px-8 py-2 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-blue-prestaR focus:ring-offset-2">Continue</button>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "BorrowEnterprise.vue"
}
</script>

<style scoped>

.custom-grey-dark{
    color:#656464;
}

.custom-blue-900 {

    color: #0A093D;
}
.custom-blue-200{
    color: #217BF4;
}

</style>
