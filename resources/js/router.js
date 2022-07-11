import Vue from 'vue'
import VueRouter from 'vue-router'
import VehicleList from './components/VehicleList'
import VehicleShow from './components/VehicleShow'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'VehicleList',
        component: VehicleList
    },
    {
        path: '/vehicles/:id',
        name: 'VehicleShow',
        component: VehicleShow
    }
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router
