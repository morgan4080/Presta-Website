<template>
    <Head title="SACCO | Presta Capital" />

    <NavigationHome :incomingNavClass="'bg-blue-presta4'" />

    <div class="min-h-screen bg-white">
        <main>
            <div>
            </div>
        </main>
    </div>

    <MainFooter :showDemo="false" />
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import MainFooter from '@/Components/MainFooter.vue';
import NavigationHome from '@/Components/NavigationHome.vue';
export default {
    components: {
        MainFooter,
        NavigationHome,
        Head,
        Link
    }
}
</script>
