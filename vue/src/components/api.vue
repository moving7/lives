<template>
	<div>
		<input type="button" value="API" v-on:click="test" />
		<input type="button" value="测试" v-on:click="login_do" />
	</div>
</template>

<script>
export default {
  name: 'login',
  data () 
  {
    return {
      username:'',
      password:''
    }
  },
  methods:
  {
  	test:function(val)
  	{
//		alert(val)
		$.ajax({
			url:'http://www.do.com/vue3/frontend/web/?r=index/index',
			dataType:'jsonp',
			jsonp:'callback',
//			callback:'call',
//			data:{username:this.username,password:this.password},
			success:function(msg)
			{
				alert(4);
//				switch (e.error)
//				{
//					case '200':
//					alert(e.msg);
//					$('#navbar').show();
//					$('#sidebar').show();
//					location.href='/#/';
//					break;
//					default:
//					alert(e.msg);
//					break;
//				}
			}

		})
		
  },
  	login_do:function()
  	{
//		alert(2)
		$.ajax({
			url:'http://www.do.com/vue3/frontend/web/?r=index/login_do',
			dataType:'jsonp',
			callback:'api',
			success:function(msg)
			{
				alert(5)
//				console.log(msg)
			},
			error:function(info)
			{
				alert(1)
			}
		})
  	}
  	
  }
}

</script>

<style>
</style>