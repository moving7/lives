import Vue from 'vue'
import Router from 'vue-router'
import VueResource from 'vue-resource'
import Hello from '@/components/Hello'
import Typography from '@/components/Typography'
import Elements from '@/components/Elements'
import Tables from '@/components/Tables'
import Login from '@/components/Login'
import Anthor from '@/components/Anthor'
import Anthor_update from '@/components/Anthor_update'
Vue.use(Router)
Vue.use(VueResource)
export default new Router({
  routes: [
    {
      path: '/',
      name: 'Hello',
      component: Hello
    },
     {
      path: '/typography',
      name: 'Typography',
      component: Typography
    },
    {
      path: '/elements',
      name: 'Elements',
      component: Elements
    },
    {
      path: '/tables',
      name: 'Tables',
      component: Tables
    },
    {
      path: '/login',
      name: 'Login',
      component: Login
    },
    {
      path: '/anthor',
      name: 'Anthor',
      component: Anthor
    },
    {
      path: '/anthor_update',
      name: 'Anthor_update',
      component: Anthor_update
    },
  ]
})
