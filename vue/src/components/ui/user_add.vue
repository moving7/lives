<template>
<body>
<div class="main-container" id="main-container">
		<div class="main-content">
					<div class="page-content">
						<div class="page-header">
							<h1>
								添加用户
							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 用户名 </label>
										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" v-model="gift_name" />
											<div class="space-2"></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 礼物价格 </label>

										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" v-model="gift_money"/>
											<div class="space-2"></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">礼物简介</label>

										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" v-model="gift_desc"/>
											<div class="space-2"></div>
										</div>
									</div>

									
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button" v-on:click="add">
												<i class="icon-ok bigger-110"></i>
												提交
											</button>
											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
</body>
</html>
</template>
<script>
	export default{
	name:'add',
	data()
	{
		return{
			gift_name:'',
			gift_money:'',
			gift_desc:'',
			userList:'',
		}
	},
	mounted: function() {
			this.$http.jsonp('http://localhost/yii/advanced/backend/web/index.php?r=index/user', {}, {
	        emulateJSON: true
	    }).then(function(response) {
	        this.userList = response.body
	    }, function(response) {
	        console.log(response)
	    });   
	},
	methods:
	{
		add:function(){
			$.ajax({
             url: "http://yii.929.vip/?r=index/t_add",
             data: {gift_name:this.gift_name,gift_money:this.gift_money,gift_desc:this.gift_desc},
             dataType:"jsonp",
             jsonp:'callback',
             success: function(msg){
                 if (msg.code == 200) {
                 	alert('添加成功')
                 	location.href='/#/tables';
                 }else{
//               	alert(msg.msg);
					alert('添加失败')
                 }
              }
          });
		}
	}
}
</script>