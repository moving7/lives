<template>
  <div id="app">
  	<!--头部-->
  	<iheader></iheader>
  	<div class="main-container" id="main-container">
  	<div class="main-container" id="main-container">
  		<!--导航-->
  	<imenu></imenu>
  	<!--显示路由页面-->
    	<router-view></router-view>
    </div>
    </div>
  </div>
</template>

<!--引入一个js文件-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!--这里写js代码-->
<script>
/*加载头部*/
import Iheader from './components/layout/top'
/*加载导航*/
import Imenu from './components/layout/menu'

export default {
  name: 'app',
  components: 
  {
  	/*部件*/
  	Iheader,Imenu
  }
}
</script>

<!--这里写css代码-->
<style>

</style>
