import Vue from 'vue'
    import VueRouter from 'vue-router'

    Vue.use(VueRouter)

    import App from './components/App'
    import welcome from './components/welcome'
    import PageForVue from './components/PageForVue'

    const router = new VueRouter({
        mode: 'history',
        routes: [
            {
                path: '/dashboard',
                name: 'dashboard',
                component: welcome,
                props: { title: "This is the SPA home" }
            },
            {
                path: '/spa-page',
                name: 'page',
                component: PageForVue,
                props: { 
                    title: "This is the SPA Second Page",
                    author : {
                        name : "Fisayo Afolayan",
                        role : "Software Engineer",
                        code : "Always keep it clean"
                    }
                }
            },    
        ],
    })
    const app = new Vue({
        el: '#app',
        components: { App },
        router,
    });