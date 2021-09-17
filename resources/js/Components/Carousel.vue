<template>
    <div class="carousel relative">
        <div class="carousel-inner">
            <!-- Hero card -->
            <div v-for="(slider, index) of slider_images" :key="slider.id">
                <input @click="showTarget($event.target)" class="carousel-open hidden" type="radio" :id="'carousel-'+ (index + 1)" name="carousel" aria-hidden="true" hidden="" checked="checked">
                <div :id="'slider-'+ (index + 1)" class="relative carousel-item">
                    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-white" />
                    <div class="w-full mx-auto">
                        <div class="relative min-h-screen sm:overflow-hidden">
                            <div class="absolute inset-0">
                                <img :class="{ 'min-h-screen object-cover' : context === 'homepage', 'min-h-screen lg:min-h-0 object-cover object-right-bottom lg:object-center lg:object-fit lg:pt-40' : context !== 'homepage'}" class="w-full" :src="slider.image" alt="Show Casing Presta Capital" />
                                <div v-if="context === 'homepage'" class="fixed inset-0">
                                    <img class="min-h-screen w-full object-cover" src="/images/Path 33.png" alt="Show Casing Presta Capital" />
                                </div>
                            </div>
                            <div :class="{ 'lg:py-32' : context === 'homepage', 'lg:pb-32 lg:pt-40' : context !== 'homepage'}" class="relative max-w-7xl mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
                                <h1 class="text-left mt-48 lg:mt-32 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                                    <span :class="{ 'text-white' : context === 'homepage', 'text-blue-presta4' : context !== 'homepage'}" class="block text-white">{{ slider.title }}</span>
                                    <span :class="{ 'text-blue-presta1' : context === 'homepage', 'text-blue-presta4' : context !== 'homepage'}" class="block">{{ slider.sub_title }}</span>
                                </h1>
                                <p :class="{ 'text-blue-presta1' : context === 'homepage', 'text-blue-presta4' : context !== 'homepage'}" class="text-left mt-6 max-w-lg text-xl sm:max-w-3xl">
                                    {{ slider.excerpt }}
                                </p>
                                <div class="mt-10 max-w-sm sm:max-w-none sm:flex sm:justify-start relative">
                                    <ol class="carousel-indicators absolute top-0 left-0 -mt-12">
                                        <li v-for="(slide, x) of slider_images" :key="slide.id">
                                            <label :for="'carousel-'+ (x + 1)" :class="{ 'text-white' : x === index && context === 'homepage', 'text-gray-200 text-opacity-50' : x !== index && context === 'homepage', 'text-blue-presta4' : x === index && context !== 'homepage', 'text-blue-presta4 text-opacity-50' : x !== index && context !== 'homepage' }" class="carousel-bullet font-bold" v-html="giveIndicator(x, index)"></label>
                                        </li>
                                    </ol>
                                    <home-dialogue :context="context" :video-id="slider.videoId" />
                                </div>
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
import { reactive } from 'vue'

export default {
    props: {
        sliders: Array,
        context: String
    },
    components: {
        HomeDialogue
    },
    beforeDestroy() {
        this.timeline.kill();
    },
    created() {
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
            openVideoDialogue: false
        }
    },

    setup(props) {
        const slider_images = reactive(props.sliders);

        function giveIndicator(i, index) {
            return ['&#8213;', '&#8213;'].filter((ic, i) => i === index)
        }

        return {
            slider_images,
            giveIndicator
        }
    }
}
</script>

<style scoped>

.carousel-inner {
    position: relative;
    overflow: hidden;
    width: 100%;
}

.carousel-open:checked + .carousel-item {
    position: static;
    opacity: 100;
}

.carousel-item {
    position: absolute;
    opacity: 0;
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
}

.carousel-indicators {
    list-style: none;
    text-align: center;
    z-index: 10;
}

.carousel-indicators li {
    display: inline-block;
    margin: 0 5px;
}

.carousel-bullet {
    cursor: pointer;
    display: block;
    font-size: 35px;
}

.carousel-bullet:hover {
    color: #aaaaaa;
}

.html5-video-container {
    z-index: 10;
    position: relative;
}

.html5-main-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    outline: 0;
}

.html5-video-player .video-click-tracking, .html5-video-player .video-stream {
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
}
</style>
