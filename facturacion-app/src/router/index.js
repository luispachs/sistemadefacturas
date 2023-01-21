import { createRouter, createWebHistory } from 'vue-router'
import login from "../views/login.vue"
import register from "../views/register.vue"


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'login',
      component: login,
    },
    {
      path: '/register',
      name: 'register',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component:register ,
    }
  ]
})

export default router
