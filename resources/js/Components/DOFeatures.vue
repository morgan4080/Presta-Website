<template>
    <div class="bg-white mt-4 sm:mb-4">
        <div class="mx-auto max-w-7xl flex flex-col justify-center items-center">
            <h1 class=" text-4xl sm:text-center custom-blue-200 mb-4">The 3 Key Features of<br>
             <span class="sm:font-semibold custom-blue-900">Digital Onboarding</span>
            </h1>
        </div>
        <div class="mx-auto max-w-7xl grid grid-cols-3  sm:px-20 bg-gradient-to-r from-[#FFFFFF] to-[#D4E7FE]">
            <div class="col-span-1 flex flex-col justify-centre items-center  sm:py-4 sm:px-4 ">
                <img src="/images/DOF1.png" alt="">
                <h1 class=" sm:text-3xl sm:text-center custom-blue-600 sm:mt-6 mb-4">Onboard in<br>
                    <span class="sm:font-semibold" >Under 5 Minutes</span>
                </h1>
                <p class="font-light sm:text-xs custom-grey-dark text-center pt-2 pb-4">When it comes to onboarding your customers, time is of the essence. That’s why we keep speed in mind, so you can welcome newcomers in 5 minutes or less. More speed and less friction mean fewer dropouts along the way.</p>

            </div>
            <div class="col-span-1 flex flex-col justify-center items-center  sm:px-4 ">
                <img src="/images/DOF2.png" alt="">
                <h1 class="sm:text-3xl sm:text-center custom-blue-600 sm:mt-6 mb-4">KYC uploaded
                    <span class="sm:font-semibold" > Anytime, Anywhere </span>
                </h1>
                <p class="font-light sm:text-xs custom-grey-dark text-center pt-2 pb-4">eKYC process, in which the user uploads and validates his identity documents, their authenticity, and their facial appearance, in addition to other KYC requirements and security checks using their phone.</p>
            </div>
            <div class="col-span-1 flex flex-col justify-center items-center  sm:py-4 sm:px-4 ">
                <img src="/images/DOF3.png" alt="">
                <h1 class=" sm:text-3xl sm:text-center custom-blue-600 sm:mt-6 mb-4">Agents capture
                    <span class="sm:font-semibold" >  Digital Field Application </span>
                </h1>
                <p class="font-light sm:text-xs custom-grey-dark text-center pt-2 pb-4">Offer differentiated financial services at the customer's doorstep. From digital customer onboarding, account opening and digital loan origination to savings and transactions - efficient, convenient and personalized.</p>

            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "DOFeatures.vue"
}
</script>

<style scoped>
.custom-blue-600 {

    color: #489AAB
}
.custom-grey-dark{
    color:#656464;
}
.custom-blue-900 {

    color: #0A093D
}

</style>
