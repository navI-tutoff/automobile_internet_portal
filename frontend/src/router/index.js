import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import MainAds from '@/views/MainAds.vue'
import LoginView from '@/views/LoginView.vue'
import VehicleCardView from '@/views/VehicleCardView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    // {
    //   path: '/about',
    //   name: 'about',
    //   // route level code-splitting
    //   // this generates a separate chunk (About.[hash].js) for this route
    //   // which is lazy-loaded when the route is visited.
    //   component: () => import('../views/AboutView.vue'),
    // },
    {
      path: '/auto',
      name: 'auto',
      component: MainAds
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView
    },
    {
      path: '/veh_ad',
      name: 'veh_ad',
      component: VehicleCardView
    }
  ],
})

export default router
