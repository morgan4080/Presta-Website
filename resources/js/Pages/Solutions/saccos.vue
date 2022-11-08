<template>

    <Head title="Presta Sacco | Presta Capital" ><title></title></Head>
<div class="bg-gradient-to-r from-[#FFFFFF] to-[#D4E7FE] ">
    <NavigationHome ></NavigationHome>

    <div class="relative custom-light-blue md:pt-24 px-4 sm:px-6 lg:px-8 lgkkk:pt-40">
        <div class="mx-auto max-w-7xl grid grid-cols-2 bg-gradient-to-r from-[#FFFFFF] to-[#D4E7FE] sm:gap-x-12  sm:px-4" >
            <div class="col-span-1  sm:mt-20 my-aueto">
                <h2 class="text-lg font-semibold custom-light-blue sm:pb-4">PRESTA SACCO</h2>

                <h1 class="font-bold text-5xl tracking-wider text-sm pb-4 custom-light-blue"><span  class="custom-dark-bg">Win</span> Deposits,<span  class="custom-dark-bg"> Engage</span><br>
                    Account Holders & <br>
                    <span  class="custom-dark-bg"> Increase </span> Profitability.</h1>
                <p class="custom-light-blue font-boldtext-base md:text-lg  sm:mb-2">Grow your Credit Union, increase your efficiencies, and overcome the challenges of increasing Credit Union regulatory requirements & dividends.</p>
                <div class="text-base md:text-lg  custom-grey-dark" >
                    <p class="sm:pb-4 ">Savy financial services providers know that to build a strong relationship and become your users’ primary relationship, you need to become the place where they spend and save. To do that, give them a fast, simple, automated way to move their deposits and payments to your platform. </p>

                    <p>
                        Presta Sacco makes it easy to engage with new, existing, and even idle accounts. Our automated solutions for mobile direct deposits and recurring payments can bring your users fully onboard—and turn you into their primary financial services provider.

                    </p>

                </div>
                <div class="inline-flex">
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
                <img src="/images/Sacco.png" alt="lady">

            </div>
        </div>
    </div>
</div>
    <SaccoPartners></SaccoPartners>
    <Engagement></Engagement>
    <BorrowSacco></BorrowSacco>
    <HappyClients></HappyClients>
    <OpportunityAwait></OpportunityAwait>
    <Demo2></Demo2>
    <SignLoanform></SignLoanform>

    <MainFooter :showDemo="true" />



</template>

<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import MainFooter from '@/Components/MainFooter.vue';
import NavigationHome from '@/Components/NavigationHome.vue';

import Engagement from '@/Components/Engagement.vue';
import BorrowSacco from '@/Components/BorrowSacco.vue';
import HappyClients from '@/Components/HappyClients.vue';
import OpportunityAwait from '@/Components/OpportunityAwait.vue';
import SignLoanform from "@/Components/SignLoanform";
import Demo2 from '@/Components/Demo2.vue';
import SaccoPartners from '@/Components/SaccoPartners.vue';


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
