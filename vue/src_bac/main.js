// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue';
import App from './App';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-default/index.css';
import { Button, Select } from 'element-ui';
import Hello from './components/Hello';
import Artlist from './components/article/List';
import Arttj from './components/article/Tuijian';
import Artadd from './components/article/Add';
import Artedite from './components/article/Edite';

Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(ElementUI);
Vue.use(Button);
Vue.use(Select);
var router = new VueRouter({

	// 配置路由
	routes: [
	  {
	    path: '/',
	    component: Hello
	  },
	  {
	    path: '/article/list',
	    component: Artlist,
	    children: [
	      {path: 'tuijian',component: Arttj}
	    ],
	  },
	  {
	    path: '/article/add',
	    component: Artadd,
	  },
	]	
})
/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})