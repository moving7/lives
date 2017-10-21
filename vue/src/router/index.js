import Vue from 'vue'
import Router from 'vue-router'
//首页
import Hello from '@/components/show'
//文字派版
import typography from '@/components/typography'
//UI组件
import elements from '@/components/ui/elements'
import buttons from '@/components/ui/buttons'
import treeview from '@/components/ui/treeview'
import jquery_ui from '@/components/ui/jquery_ui'
import nestable_list from '@/components/ui/nestable_list'
//表格
import tables from '@/components/tables/tables'
import jqgrid from '@/components/tables/jqgrid'
//表单
import form_elements from '@/components/form/form_elements'
import form_wizard from '@/components/form/form_wizard'
import wysiwyg from '@/components/form/wysiwyg'
import dropzone from '@/components/form/dropzone'
//插件
import widgets from '@/components/widgets'
//日历
import calendar from '@/components/calendar'
//相册
import gallery from '@/components/gallery'
//更多页面
import profile from '@/components/dropdown/profile'
import inbox from '@/components/dropdown/inbox'
import pricing from '@/components/dropdown/pricing'
import invoice from '@/components/dropdown/invoice'
import timeline from '@/components/dropdown/timeline'

//其它页面
import faq from '@/components/submenu/faq'
import error_s from '@/components/submenu/error_s'
import error_w from '@/components/submenu/error_w'
import grid from '@/components/submenu/grid'
import blank from '@/components/submenu/blank'

//测试API
import api_test from '@/components/api'
import t_add from '@/components/tables/add'
import user_add from '@/components/ui/user_add'
import rooms from '@/components/room/rooms'
import room_add from '@/components/room/room_add'
import moneys from '@/components/money/moneys'
import lives from '@/components/liver/list'
import live_add from '@/components/liver/live_add'

//用户echart分析图
import echart_province from '@/components/echart/province'
import echart_days from '@/components/echart/days'

//登录页面
import login from '@/components/login'

Vue.use(Router)

export default new Router({
  routes: [
    {
    	//首页
      path: '/',
      name: 'Hello',
      component: Hello
    },
//  {
//  	//首页
//    path: '/',
//    name: 'Hello',
//    component: api_test
//  },
    {
    	path:'/t_add',
    	name:'t_add',
    	component:t_add
    },
    {
    	path:'/rooms',
    	name:'rooms',
    	component:rooms
    },
    {
    	path:'/user_add',
    	name:'user_add',
    	component:user_add
    },
    {
    	path:'/room_add',
    	name:'room_add',
    	component:room_add
    },
    {
    	path:'/moneys',
    	name:'moneys',
    	component:moneys
    },
    {
    	path:'/lives',
    	name:'lives',
    	component:lives
    },
		{
    	path:'/live_add',
//  	name:'lives',
    	component:live_add
    },
    {
    	path:'/echart/province',
//  	name:'lives',
    	component:echart_province
    },
		{
    	path:'/echart/days',
//  	name:'lives',
    	component:echart_days
    },






    //接口调接
    {
  		path: '/echostr',
//		name: 'api',
  		component: api_test
  	},
    
    
    
    
    
    
    
    
    
    
    {
    	//登录页面
      path: '/login',
      name: 'login',
      component: login
    },
    {
    	//文字排版
    	path:'/typography',
    	name:'typography',
    	component:typography
    },
    {
    	//组件
    	path:'/elements',
    	name:'elements',
    	component:elements
    },
    {
    	//按钮 图表
    	path:'/buttons',
    	name:'buttons',
    	component:buttons
    },
    {
    	//树菜单
    	path:'/treeview',
    	name:'treeview',
    	component:treeview
    },
    {
    	//jQuery UI
    	path:'/jquery_ui',
    	name:'jquery_ui',
    	component:jquery_ui
    },
    {
    	//可拖拽列表
    	path:'/nestable_list',
    	name:'nestable_list',
    	component:nestable_list
    },
    {
    	//简单动态
    	path:'/tables',
    	name:'tables',
    	component:tables
    },
    {
    	//jqGrid plugin
    	path:'/jqgrid',
    	name:'jqgrid',
    	component:jqgrid
    },
    {
    	//表单组件
    	path:'/form_elements',
    	name:'form_elements',
    	component:form_elements
    },
    {
    	//向导提示 验证
    	path:'/form_wizard',
    	name:'form_wizard',
    	component:form_wizard
    },
    {
    	//编辑器
    	path:'/wysiwyg',
    	name:'wysiwyg',
    	component:wysiwyg
    },
    {
    	//文件上传
    	path:'/dropzone',
    	name:'dropzone',
    	component:dropzone
    },
    {
    	//插件
    	path:'/widgets',
    	name:'widgets',
    	component:widgets
    },
    {
    	//日历
    	path:'/calendar',
    	name:'calendar',
    	component:calendar
    },
    {
    	//相册
    	path:'/gallery',
    	name:'gallery',
    	component:gallery
    },
    {
    	//用户信息
    	path:'/profile',
    	name:'profile',
    	component:profile
    },
    {
    	//收件箱
    	path:'/inbox',
    	name:'inbox',
    	component:inbox
    },
    {
    	//售价单
    	path:'/pricing',
    	name:'pricing',
    	component:pricing
    },
    {
    	//购物车
    	path:'/invoice',
    	name:'invoice',
    	component:invoice
    },
    {
    	//时间轴
    	path:'/timeline',
    	name:'timeline',
    	component:timeline
    },
    {
    	//帮助
    	path:'/faq',
    	name:'faq',
    	component:faq
    },
    {
    	//404错误页面
    	path:'/error_s',
    	name:'error_s',
    	component:error_s
    },
    {
    	//500错误页面
    	path:'/error_w',
    	name:'error_w',
    	component:error_w
    },
    {
    	//网格
    	path:'/grid',
    	name:'grid',
    	component:grid
    },
    {
    	//空白页面
    	path:'/blank',
    	name:'blank',
    	component:blank
    },
  ]
})
