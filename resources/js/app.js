import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

import { createStore } from 'vuex'

// Create a new store instance.
const store = createStore({
    state () {
        return {
            toggleCreate: false,
            imgModalUrl:"",
            category:"",
        }
    },
    getters: {
        getToggleCreate: (state) => state.toggleCreate,
        getImgModalUrl: (state) => state.imgModalUrl,
        getCategory: (state) => state.category,

    },
    mutations: {
        setToggleCreate: (state, payload = []) => {
            state.toggleCreate = payload
        },
        setImgModalUrl: (state, payload = []) => {
            state.imgModalUrl = payload
        },
        setCategory: (state, payload = []) => {
            state.category = payload
        }
    },
    actions: {



    }
})

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(store)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#00ffff' });
