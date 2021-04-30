import Vue from 'vue';
import VueRouter from 'vue-router';

import HomeComponent from './components/HomeComponent';
import aboutComponent from './components/aboutComponent';

Vue.use(VueRouter);

export default new VueRouter({
    mode:'history',
    routes:[
        { path:'/',component:HomeComponent },
        { path:'/about' , component:aboutComponent }

    ]
});