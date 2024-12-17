import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import MainAdsView from '@/views/MainAdsView.vue'
import LoginView from '@/views/LoginView.vue'
import VehicleCardView from '@/views/VehicleCardView.vue'
import RegView from '@/views/RegView.vue'

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
      component: MainAdsView
    },
    {
      path: '/auto/:id',
      name: 'vehicle-card',
      component: VehicleCardView
    },
    {
      path: '/login',
      name: 'login',
      component: LoginView
    },
    {
      path: '/reg',
      name: 'registration',
      component: RegView
    }
  ],
})

export default router
