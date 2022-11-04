<template>
    <div class="custom-sign hidden md:block">
    <div class="px-8 grid h-80 grid-cols-2 md:gap-x-16 md:px-0" >
        <div class="col-span-1 flex flex-col justify-center items-left md:pl-36">
            <h2 class="custom-light-blue text-lg">SIGN LOAN FORMS</h2>
            <h1 class="font-bold text-4xl custom-blue-900 sm:pb-4">Anywhere, Anytime</h1>
            <p class="custom-grey sm:mb-12">Who needs to physically sign loan forms<br> anymore? Our digital gurantorship app simplifies<br> the Loan Application Process for both Members<br> & Staff</p>
            <div class="inline-flex">
                <button>
                <img src="/images/Appstore.png" alt="Apple Store">
                </button>
                <button>
                <img src="/images/Playstore.png" alt="Play Store">
                </button>
            </div>
        </div>


        <div class="col-span-1 sm:mx-auto sm:mb-0 sm:pb-0 flex items-end" >
            <img class="max-h-64 w-60 mb-4" src="/images/mobilemuckup.png" alt="iphone11 form">

        </div>
    </div>
    </div>
</template>

<script>
export default {
    name: "SignLoanform.vue"
}
</script>

<style scoped>


.custom-grey {

    color: #8C8C8C
}
.custom-blue-900 {

    color: #0A093D
}
.custom-light-blue {
    color: #489AAB
}
.custom-sign {
    background-color:#E5F0FD
}
</style>
