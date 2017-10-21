import Vue from 'vue'
import Router from 'vue-router'
import login from '@/components/login/login'
import index from '@/components/login/index'
import fonts from '@/components/admin/fonts'
import jsonp from '@/components/admin/jsonp'
import elements from '@/components/admin/elements'
import hello from '@/components/Hello'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Hello',
      component: hello
    },
    {
	    path: '/login',
	    component: login,
	  },
	  {
	  	path: '/index',
	  	component: index,
	  },
	  {
	  	path: '/admin/fonts',
	  	component: fonts,
	  },
	  {
	  	path:'/admin/elements',
	  	component: elements,
	  },
	  {
	  	path: '/josnp',
	  	component: jsonp,
	  }
  ]
})
