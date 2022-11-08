<template>
    <Head title="Digital Onboarding | Presta Capital" ><title></title></Head>
<div class="bg-gradient-to-r from-[#FFFFFF] to-[#D4E7FE]">
    <NavigationHome ></NavigationHome>

    <div class="relative custom-light-blue pt-24 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl grid grid-cols-2  sm:gap-x-12  sm:px-4" >
            <div class="col-span-1  sm:mt-20 my-auto">
                <h2 class="text-lg custom-light-blue sm:py-4 font-semibold">DIGITAL ONBOARDING</h2>

                <h1 class="font-bold text-5xl tracking-wider text-sm pb-4 custom-light-blue">Turn<span class="custom-dark-bg"> First Impressions</span><br>
                    into <span class="custom-dark-bg"> Obsessions </span>
                    </h1>

                <div class="text-base md:text-lg custom-grey-dark" >
                    <p class="sm:my-4 ">When it comes to onboarding your customers, time is of the essence. That’s why we keep speed in mind, so you can welcome newcomers in 5 minutes or less.</p>
                        <br>
                        <span class="sm:mb-2">
                            More speed and less friction means fewer dropouts along the way.
                        </span>

                </div>
                <div class="inline-flex sm:mb-4">
                    <button>
                        <svg width="111" height="110" viewBox="0 0 111 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_521_1520)">
                                <rect x="30.1768" y="20" width="50" height="50" fill="#27627E"/>
                            </g>
                            <path d="M65.1768 44.7956L60.148 41.5911L60.148 44.1547L45.1768 44.1547L45.1768 45.4364L60.148 45.4364L60.148 48L65.1768 44.7956Z" fill="#F3FAFE"/>
                            <defs>
                                <filter id="filter0_d_521_1520" x="0.176758" y="0" width="110" height="110" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="10"/>
                                    <feGaussianBlur stdDeviation="15"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.808333 0 0 0 0 0.808333 0 0 0 0 0.808333 0 0 0 0.6 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_521_1520"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_521_1520" result="shape"/>
                                </filter>
                            </defs>
                        </svg>

                    </button>
                    <p class="my-auto">Play Demo</p>
                </div>
            </div>


            <div class="col-span-1 sm:mx-auto sm:mb-0 sm:pb-0" >
                <img src="/images/DigitalOnboarding1.png" alt="curly hair lady">

            </div>
        </div>
    </div>
</div>

    <OnboardingSolution></OnboardingSolution>
    <DOFeatures></DOFeatures>
    <OpportunityAwait></OpportunityAwait>
    <SignLoanform></SignLoanform>

    <MainFooter :showDemo="true" />



</template>

<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import MainFooter from '@/Components/MainFooter.vue';
import NavigationHome from '@/Components/NavigationHome.vue';
import OpportunityAwait from '@/Components/OpportunityAwait.vue';
import SignLoanform from "@/Components/SignLoanform";
import OnboardingSolution from '@/Components/OnboardingSolution.vue';
import DOFeatures from '@/Components/DOFeatures.vue';


</script>

<style scoped>

.custom-light-blue{
    color:
        #489AAB
;
}
.custom-grey-dark{
    color:#656464;
}
.custom-dark-bg{
    color:#00637F
}
</style>
