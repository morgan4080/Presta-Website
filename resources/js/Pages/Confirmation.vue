<template>
    <Head title="Demo confirmation | Presta Capital" />

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />

    <div class="min-h-screen bg-background0">
        <div class="max-w-7xl mx-auto pt-48 pb-12 px-4 sm:pt-72 sm:pb-32 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold tracking-tight text-blue-presta3 sm:text-6xl text-center">
                <span class="block">Thank you for</span>
                <span class="block">getting in touch!</span>
                <span class="text-base font-bold tracking-normal">Our experts will reach you out soon.</span>
            </h2>
        </div>

        <div class="mx-auto pb-16 px-4 sm:pb-24 sm:px-6 lg:px-12">
            <div class="text-center md:space-x-12 md:flex md:justify-between md:text-left">
                <div class="relative max-w-4xl lg:flex lg:items-center mx-auto">

                    <div class="hidden lg:block lg:flex-shrink-0">
                        <img class="h-32 w-32 rounded-full" src="/images/QuentinAfande.png" alt="Quentin Afande Testimonial" />
                    </div>

                    <div class="relative lg:ml-6">
                        <svg class="absolute top-24 left-0 transform -translate-x-8 -translate-y-24 h-16 w-16 text-blue-presta1 opacity-25" stroke="currentColor" fill="none" viewBox="0 0 144 144" aria-hidden="true">
                            <path stroke-width="2" d="M41.485 15C17.753 31.753 1 59.208 1 89.455c0 24.664 14.891 39.09 32.109 39.09 16.287 0 28.386-13.03 28.386-28.387 0-15.356-10.703-26.524-24.663-26.524-2.792 0-6.515.465-7.446.93 2.327-15.821 17.218-34.435 32.11-43.742L41.485 15zm80.04 0c-23.268 16.753-40.02 44.208-40.02 74.455 0 24.664 14.891 39.09 32.109 39.09 15.822 0 28.386-13.03 28.386-28.387 0-15.356-11.168-26.524-25.129-26.524-2.792 0-6.049.465-6.98.93 2.327-15.821 16.753-34.435 31.644-43.742L121.525 15z" />
                        </svg>
                        <blockquote class="relative">
                            <footer class="mt-8 text-lg leading-9 font-medium text-gray-900">
                                <p>
                                    Their affordable and bundled pricing has been ideal for each growth stage and it has allowed us to scale up at the right cost.
                                </p>
                            </footer>
                            <div class="flex mt-4 justify-center md:justify-start">
                                <div class="flex-shrink-0 lg:hidden">
                                    <img class="h-12 w-12 rounded-full" src="/images/QuentinAfande.png" alt="" />
                                </div>
                                <div class="ml-4 lg:ml-0">
                                    <div class="text-base font-medium text-gray-900">Quentin Afande</div>
                                    <div class="text-base font-medium text-blue-presta4">MD. Feezy Mobile Credit Ltd.</div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <MainFooter :showDemo="false" />
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { ChatAlt2Icon, PhoneIcon } from '@heroicons/vue/outline'
import NavigationHome from '@/Components/NavigationHome.vue';
import MainFooter from '@/Components/MainFooter.vue';
export default {
    components: {
        PhoneIcon,
        NavigationHome,
        MainFooter,
        Head,
        Link,
        ChatAlt2Icon
    },
}
</script>
