<template>
	<div class="main-container" id="main-container">
		<div class="main-content">
			<br />
			
			Date: <input class="Wdate" type="text" id="start_time" onClick="WdatePicker()"> - <input class="Wdate" type="text" id="end_time" onClick="WdatePicker()">
					<button class="btn btn-info" type="button" v-on:click="sel">
						<i class="icon-ok bigger-110"></i>
							查
					</button>
					<div class="page-content">
							<div id="myChart" style="width: 600px;height:400px;"></div>

					
					</div>
				</div>
			</div>
</body>
</html>

	
</template>

<script>
// 引入基本模板
let echarts = require('echarts/lib/echarts')
// 引入柱状图组件
require('echarts/lib/chart/bar')
require('echarts/lib/chart/line')
// 引入提示框和title组件
require('echarts/lib/component/tooltip')
require('echarts/lib/component/title')
export default {
  name: 'hello',
  data() {
    return {
      msg: 'Welcome to Your Vue.js App',
      obj_1:["北京", "青岛", "天津", "长沙", "辽宁", "上海"],
      obj_2:[5, 2, 3, 1, 1, 2],
      obj_3:[4,3,9],
      obj_4:['9','10','11'],
      obj_5:['没','有','数','据'],
      obj_6:[0,0,0,0],
      start_time:'',
      end_time:'',
    }
  },
  mounted() {
//	alert(2);
//	this.data_init(this)
  	
//  this.drawLine(this);
  },
  methods: {
  	data_init(obj,start_time,end_time)
  	{
  		$.ajax({
             url: "http://yii.929.vip/?r=echart/show_days",
             data: {start_time:start_time,end_time:end_time},
             dataType:"jsonp",
             jsonp:'call',
             success: function(msg){
                 if (msg.code == 200) {
//               	alert('OK')
//					console.log(msg)
					obj.obj_1 = msg.msg
					obj.obj_2 = msg.nums
//					obj.show()
					obj.drawLine(obj)
//					this.obj_3 = msg.area
//					this.drawLine(obj);
//					console.log(obj.obj_1)
//               	location.href='/#/rooms';
                 }else{
//               	alert(msg.msg);
//					alert('添加失败')
					alert('没有数据')
					obj.obj_1 = obj.obj_5
					obj.obj_2 = obj.obj_6
//					console.log(obj_1);
					obj.drawLine(obj)
                 }
              },
              error:function()
              {
//            	alert('ok')
alert('没有数据')
					obj.obj_1 = obj.obj_5
					obj.obj_2 = obj.obj_6
//					console.log(obj_1);
					obj.drawLine(obj)
              }
          });
  	},
    drawLine(obj) {
      // 基于准备好的dom，初始化echarts实例
      let myChart = echarts.init(document.getElementById('myChart'))
      // 绘制图表
      myChart.setOption({
        title: { text: '每日用户注册数据' },
        tooltip: {},
        xAxis: {
          data: this.obj_1
        },
        yAxis: {},
        series: [{
//        name: '销量',
          type: 'line',
          data: this.obj_2
        }]
      });
    },
    show()
    {
    	alert(2)
    },
    sel()
    {
//  	alert(3)
		var d_1 = $('#start_time').val();
		var d_2 = $('#end_time').val();
		
		if(d_1 == '' || d_2 == '')
		{
			alert('条件不能为空')
		}
		else if(d_1>d_2)
		{
			alert('从小到大')
		}
		else
		{
			this.data_init(this,d_1,d_2);
		}
//		alert(d_1)
//		alert(d_2)
		
    }
    
  }
}

</script>


<style>
	
</style>