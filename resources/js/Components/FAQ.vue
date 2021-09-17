<template>
    <div class="bg-blue-presta4">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="lg:max-w-2xl lg:mx-auto lg:text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                    Frequently asked questions
                </h2>
                <p class="mt-4 text-gray-200">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec. Urna, sed a lectus elementum blandit et.</p>
            </div>
            <div class="mt-20">
                <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-10">
                    <div v-for="faq in faqs" :key="faq.id">
                        <dt class="font-semibold text-white">
                            {{ faq.question }}
                        </dt>
                        <dd class="mt-3 text-gray-200">
                            {{ faq.answer }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</template>

<script>
const faqs = [
    {
        id: 1,
        question: "Do I need your own paybills to start lending?",
        answer:
            "A Monthly Active User is counted as any user who connects with our Chat API for read/write.",
    },
    {
        id: 2,
        question: "What are the requirements for onboarding?",
        answer:
            "Yes, all plans include a forever free development mode. You get credentials for using TalkJS in production by “going live” – this is the process of entering credit card information and going through checkout. Once you do that, you have two fully separate apps in the TalkJS dashboard, with two fully separate groups of users, conversations, and settings.",
    },
    {
        id: 3,
        question: "How long does it take for my business to be set up?",
        answer:
            "A Monthly Active User is counted as any user who connects with our Chat API for read/write.",
    },
    {
        id: 4,
        question: "Do you offer system training for my staff?",
        answer:
            "get credentials for using TalkJS in production by “going live” – this is the process of entering credit card information and going through checkout. Once you do that, you have two fully separate apps in the TalkJS dashboard, with two fully separate groups of users, conversations, and settings.",
    },
    // More questions...
]

export default {
    setup() {
        return {
            faqs,
        }
    },
}
</script>

<style scoped>

</style>
