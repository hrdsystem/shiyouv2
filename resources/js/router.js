// import Vue from 'vue'
// import VueRouter from 'vue-router'

// Vue.use(VueRouter)
// import Home from './components/Home'
// import Hello from './components/Hello'

// export default new VueRouter({
//     mode: 'history',
//     routes: [
//         {
//             path: '/home',
//             name: 'home',
//             component: Home
//         },
//         {
//             path: '/hello',
//             name: 'hello',
//             component: Hello
//         },
//     ],
// });

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Home from './components/Home'
// import Home2 from './components/Home2'
import Hello from './components/Hello'
import Home_Deployed from './components/Home_Deployed'
import Master_Maintenance_Tool from './components/Master_Maintenance_Tool'

import GaibuMaster from './components/Master_Maintenance/Gaibu'
import SetsubiMaster from './components/Master_Maintenance/Setsubi'
import NaibuMaster from './components/Master_Maintenance/Naibu'

import Toilet from './components/tabs/Toilet'

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/home',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello
        },
        {
            path: '/home_Deployed',
            name: 'home_Deployed',
            component : Home_Deployed
        },
        {
            path: '/master_maintenance_tool',
            name: 'master_maintenance_tool',
            component : Master_Maintenance_Tool
        },
        {
            path: '/gaibu_master',
            name: 'gaibu_master',
            component : GaibuMaster
        },
        {
            path: '/setsubi_master',
            name: 'setsubi_master',
            component : SetsubiMaster
        },
        {
            path: '/naibu_master',
            name: 'naibu_master',
            component : NaibuMaster
        },
        {
            path: '/toilet',
            name: 'toilet',
            component : Toilet
        },
    ],
});