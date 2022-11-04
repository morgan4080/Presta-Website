<template>
    <div>
        <div class="mx-auto max-w-7xl grid sm:grid-cols-1 sm:grid-rows-2 lg:grid-cols-2 lg:grid-rows-1 gap-x-32 md:py-16 py-4 py-4 md:px-4">
            <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
                <div class="group aspect-w-2 aspect-h-1 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
                    <img src="/images/infoImg/info1.png" alt="hands on laptop" class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
                    <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>

                </div>

                <div class="group  relative  overflow-hidden rounded-lg sm:row-span-2">
                    <img src="/images/infoImg/info3.png" alt="round table meeting" class="object-cover object-center group-hover:opacity-75">
                    <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50"></div>

                </div>
                <div class="group relative aspect-w-2 aspect-h-1 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
                    <img src="/images/infoImg/info2.png" alt="blue cables" class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
                    <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>

                </div>

            </div>
            <div class="bg-white-500 mx-auto" >
                <h2 style="" class="custom-blue-600 py-2">What's Presta</h2>
                <h1 class="text-2xl font-semibold pb-2 custom-blue-900" >Why join Presta?</h1>
                <p class="mb-2 text-lg">Recent surveys have indicated that small businesses recognise the need they have to connect with <br> consumer.</p>
                <ul class="text-lg spacing-y-4">
                    <li>Groups</li>
                    <li>Messages</li>
                    <li>Share</li>
                </ul>

            </div>
        </div>
    </div>


</template>

<script>
export default {
    name: "Information.vue"
}
</script>

<style scoped>
.custom-blue-200 {
    color: #217BF4
}
ul {
    list-style: none;
}

ul li::before {
    content: "\2022";
    color:#217BF4;
    font-weight: bold;
    display: inline-block;
    width: 1em;
    margin-left: 0;
}
.custom-blue-900 {

    color: #0A093D
}
.custom-blue-600 {

    color: #489AAB
}

</style>
