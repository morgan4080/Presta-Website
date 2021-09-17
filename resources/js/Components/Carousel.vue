<template>
    <div class="carousel relative">
        <div class="carousel-inner">
            <!-- Hero card -->
            <input @click="showTarget($event.target)" class="carousel-open hidden" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div id="slider-2" class="relative carousel-item">
                <div class="absolute inset-x-0 bottom-0 h-1/2 bg-white" />
                <div class="w-full mx-auto">
                    <div class="relative min-h-screen sm:overflow-hidden">
                        <div class="absolute inset-0">
                            <img class="min-h-screen w-full object-cover" src="/images/slider2.jpg" alt="Show Casing Presta Capital" />
                            <div class="absolute inset-0">
                                <img class="min-h-screen w-full object-cover" src="/images/Path 34.png" alt="Show Casing Presta Capital" />
                            </div>
                        </div>
                        <div class="relative max-w-7xl mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                            <h1 class="text-left mt-32 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                                <span class="block text-white">Simple & Secure</span>
                                <span class="block text-blue-presta1">Lending Platform</span>
                            </h1>
                            <p class="text-left mt-6 max-w-lg text-xl text-blue-presta1 sm:max-w-3xl">
                                Suitable for Microfinance & Saccos.
                            </p>
                            <div class="mt-10 max-w-sm sm:max-w-none sm:flex sm:justify-start relative">
                                <ol class="carousel-indicators absolute top-0 left-0 -mt-12">
                                    <li>
                                        <label for="carousel-1" class="carousel-bullet font-bold text-gray-200 text-opacity-50">&#8213;</label>
                                    </li>
                                    <li>
                                        <label for="carousel-2" class="carousel-bullet font-bold text-white">&#8213;</label>
                                    </li>
                                </ol>
                                <home-dialogue :video-id="'0gvPT1SAGko'">
                                </home-dialogue>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input @click="showTarget($event.target)" class="carousel-open hidden" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div id="slider-1" class="relative carousel-item">
                <div class="absolute inset-x-0 bottom-0 h-1/2 bg-white" />
                <div class="w-full mx-auto">
                    <div class="relative min-h-screen sm:overflow-hidden">
                        <div class="absolute inset-0">
                            <img class="min-h-screen w-full object-cover" src="/images/scroll-image-2.jpg" alt="Show Casing Presta Capital" />
                            <div class="absolute inset-0">
                                <img class="min-h-screen w-full object-cover" src="/images/Path 33.png" alt="Show Casing Presta Capital" />
                            </div>
                        </div>
                        <div class="relative max-w-7xl mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                            <h1 class="text-left mt-32 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                                <span class="block text-white">Digital Guarantorship</span>
                                <span class="block text-blue-presta1">For SACCOs</span>
                            </h1>
                            <p class="text-left mt-6 max-w-lg text-xl text-blue-presta1 sm:max-w-3xl">
                                Booting customer experience with digital signatures.
                            </p>
                            <div class="mt-10 max-w-sm sm:max-w-none sm:flex sm:justify-start relative">
                                <ol class="carousel-indicators absolute top-0 left-0 -mt-12">
                                    <li>
                                        <label for="carousel-1" class="carousel-bullet font-bold text-white">&#8213;</label>
                                    </li>
                                    <li>
                                        <label for="carousel-2" class="carousel-bullet font-bold text-gray-200 text-opacity-50">&#8213;</label>
                                    </li>
                                </ol>
                                <home-dialogue :video-id="'0gvPT1SAGko'">
                                </home-dialogue>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { gsap } from 'gsap';
import HomeDialogue from '@/Components/HomeDialogue.vue';
export default {
    components: {
        HomeDialogue
    },
    beforeDestroy() {
        this.timeline.kill();
    },
    created() {
        this.slider_images = [
            {
                image: '/images/scroll-image-2.jpg',
            },
            {
                image: '/images/scroll-image-2.jpg',
            }
        ]
        setTimeout(() => this.doAnimate(), 100)
    },
    methods: {
        openVid() {
            this.openVideoDialogue = true
        },
        getTargets() {
            let arr = [];
            for (let i =0; i < this.slider_images.length; i++) {
                arr.push(`${i + 1}`);
            }
            return arr
        },
        doAnimate() {
            let targets = this.getTargets();
            let that = this;
            if (targets.length === 2) {
                this.timeline = gsap.timeline({repeat: -1, delay: 0.9, repeatDelay: 10, yoyo: false,repeatRefresh: true,smoothChildTiming: true,})
                    .eventCallback("onRepeat", () => {
                        if (location.pathname !== "/") {
                            that.timeline.pause();
                        } else {
                            that.timeline.restart();
                        }
                    });
                this.timeline
                    .fromTo('#slider-' + targets[1],
                        {
                            x: 0
                        },
                        {
                            x: 0,
                            duration: 15,
                            onComplete: () => {
                                if (location.pathname === "/") {
                                    document.querySelector('#carousel-' + targets[1]) ? document.querySelector('#carousel-' + targets[1]).click() : null;
                                } else {
                                    that.timeline.pause();
                                }
                            },
                        },
                        '+=0.9'
                    )
                    .fromTo('#slider-' + targets[0],
                        {
                            x: 0,
                        },
                        {
                            x: 0 ,
                            duration: 15,
                            onComplete: () => {
                                if (location.pathname === "/") {
                                    document.querySelector('#carousel-' + targets[0]) ? document.querySelector('#carousel-' + targets[0]).click() : null;
                                } else {
                                    that.timeline.pause();
                                }
                            },
                        },
                        '+=0.9'
                    );
            } else if (targets.length === 3) {
                this.timeline = gsap.timeline({repeat: -1, delay: 0.9, repeatDelay: 10, yoyo: false,repeatRefresh: true,smoothChildTiming: true,});
                this.timeline
                    .fromTo('#slider-' + targets[1],
                        {
                            x: 0
                        },
                        {
                            x: 0,
                            duration: 15,
                            onComplete: () => {
                                if (location.pathname === "/") {
                                    document.querySelector('#carousel-' + targets[1]) ? document.querySelector('#carousel-' + targets[1]).click(): null;
                                } else {
                                    that.timeline.pause();
                                }
                            },
                        },
                        '+=0.9'
                    )
                    .fromTo('#slider-' + targets[2],
                        {
                            x: 0
                        },
                        {
                            x: 0,
                            duration: 15,
                            onComplete: () => {
                                if (location.pathname === "/") {
                                    document.querySelector('#carousel-' + targets[2])?document.querySelector('#carousel-' + targets[2]).click(): null;
                                } else {
                                    that.timeline.pause();
                                }
                            },
                        },
                        '+=0.9'
                    )
                    .fromTo('#slider-' + targets[0],
                        {
                            x: 0,
                        },
                        {
                            x: 0 ,
                            duration: 15,
                            onComplete: () => {
                                if (location.pathname === "/") {
                                    document.querySelector('#carousel-' + targets[0]) ? document.querySelector('#carousel-' + targets[0]).click() : null;
                                } else {
                                    that.timeline.pause();
                                }
                            },
                        },
                        '+=0.9'
                    );
            }
        },
        showTarget(target) {
            if (this.time_out) this.timeline.pause();
            clearTimeout(this.time_out);
            gsap.fromTo('#slider-' + target.id.slice(-1), { x: document.querySelector('#slider-' + target.id.slice(-1)).offsetWidth}, { x: 0, ease: "back", duration: 1, })
            this.time_out = setTimeout(() => {
                this.timeline.resume();
            }, 5000);
        },
    },

    data() {
        return {
            timeline: null,
            time_out: null,
            slider_images: [],
            openVideoDialogue: false
        }
    },
}
</script>

<style scoped>

</style>
