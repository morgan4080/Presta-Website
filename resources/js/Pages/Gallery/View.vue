    <template>
        <Head title="Gallery Create | Presta Capital" />

        <NavigationHome :incomingNavClass="'bg-blue-presta4'" />
        <div class="bg-white mx-auto pt-32 px-4 max-w-7xl sm:px-6 lg:px-8 lg:pt-40">
            <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
                <div class="space-y-12 lg:flex-col  lg:space-y-0">
                    <div class="space-y-5 sm:space-y-4">
                        <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">{{ album.title }}</h2>
                        <p class="text-indigo-600">{{ album.date }}</p>
                        <p class="text-xl text-gray-500 my-2">{{
                                album.description
                            }}</p>
                    </div>
                    <div class="pt-6">
                        <ul role="list" class="space-y-12 sm:grid sm:grid-cols-3 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:gap-x-8">
                            <li v-for="(img,idx) in album.gallery_image" :key="idx">
                                <div class="space-y-4">
                                    <div class="aspect-w-3 aspect-h-2">
                                        <img class="object-cover shadow-lg rounded-lg" :src="img" alt="" />
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <MainFooter/>

</template>

<script>
import NavigationHome from '@/Components/NavigationHome.vue';
import MainFooter from '@/Components/MainFooter.vue';
import {Head} from "@inertiajs/inertia-vue3";
const people = [
    {
        name: 'Emma Dorsey',
        role: 'Senior Front-end Developer',
        imageUrl:
            'https://images.unsplash.com/photo-1505840717430-882ce147ef2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80',
        bio: 'Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.',
        twitterUrl: '#',
        linkedinUrl: '#',
    },

    // More people...
]

export default {
    name: "View",
    components:{
        NavigationHome,
        MainFooter
    },
    props:{
        album : Array
    },
    setup({album}){
        return{
            people,
        }
    }

}
</script>

<style scoped>

</style>
