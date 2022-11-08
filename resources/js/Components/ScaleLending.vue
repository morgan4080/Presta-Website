<template>
    <div class="bg-white mt-4">
        <div class="mx-auto max-w-7xl flex flex-col justify-center items-center">
            <h2 class="custom-light-blue font-semibold my-4">SCALE YOUR LENDING EFFORTLESSLY</h2>
            <h1 class="sm:font-semibold text-2xl sm:text-center custom-blue-900">When your customers need a loan,<br>
                they need it now.
               </h1>
            <p class="text-base md:text-lg  custom-grey-dark text-center py-4">Don’t make them wait and don’t put yourself at risk by rushing through manual or disparate processes.</p>
        </div>
        <div class="mx-auto max-w-7xl grid grid-cols-2 sm:gap-x-8 sm:py-12 sm:px-8 bg-blue-white">
            <div class="col-span-1 ">
                <img src="/images/Prestatab.png" alt="Prestatab" class="object-cover object-center group-hover:opacity-75 rounded-lg my-auto">
            </div>

            <div class="col-span-1 flex-col justify-between">


                <div class="inline-flex  pb-1 custom-light-blue">

                    <p class="font-bold my-4 tracking-wider"> IMPROVE MARGINS & OPERATIONAL EFFICIENCIES</p>
                </div>
                <p class="pb-2 text-base md:text-lg  custom-grey-p">Streamline your processes and decrease the friction that both your applicants and employees experience. Your lending business will become more efficient, reducing the time it takes to process and underwrite loans—increasing margins without touching rates or staff levels.
                </p>

                <div class=" inline-flex pb-1 custom-light-blue">
                    <p class="font-bold my-4 tracking-wider" > INCREASE SCALABILITY & REVENUE GROWTH</p>
                </div>
                <p class="pb-2 text-base md:text-lg custom-grey-p">Don’t let legacy technology limit your capacity. Use a flexible cloud-based solution to support virtually unlimited lending. With repeatable, automated loan processes, your business can handle application volumes of 3X your historic levels without adding staff or compromising lending standards.
                </p>


                <div class="inline-flex pb-1 custom-light-blue">
                    <p class="font-bold my-4 tracking-wider"> MITIGATE RISK</p>
                </div>
                <p class="pb-2 text-base md:text-lg custom-grey-p">An inefficient lending process creates risk in the form of human error and integration failures. We remove the operational risk of data errors and the business risk of not collecting revenue due to those errors by supporting the entire lending process—from application to collections—all on a single platform.</p>

            </div>

        </div>
        </div>
</template>

<script>
export default {
    name: "ScaleLending.vue"
}
</script>

<style scoped>

.custom-grey-dark{
    color:#656464;
}
.custom-grey-p{
    color:#727272;
}

.custom-blue-900 {

    color: #0A093D
}
.custom-light-blue {
    color: #489AAB
}
</style>
