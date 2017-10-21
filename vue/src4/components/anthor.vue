<template>
<body>
<div class="main-container" id="main-container">
		<div class="main-content">
					<div class="page-content">
						<div class="page-header">
							<h1>
								添加主播
							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 主播名称 </label>
										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" v-model="z_name" />
											<div class="space-2"></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 主播简介 </label>

										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" v-model="content"/>
											<div class="space-2"></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">证件号码</label>

										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" v-model="number"/>
											<div class="space-2"></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">主播房间</label>
										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" v-model="room_num"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">所属用户</label>
										<div class="col-sm-9">
											<select v-model="uid">
												<option>请选择</option>
												<option v-for="val in userList" v-bind:value='val.uid'>{{val.user_name}}</option>
											</select>
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
			z_name:'',
			content:'',
			number:'',
			room_num:'',
			userList:'',
			uid:'',
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
             url: "http://localhost/yii/advanced/backend/web/index.php?r=index/add",
             data: {z_name:this.z_name,content:this.content,number:this.number,room_num:this.room_num,uid:this.uid},
             dataType:"jsonp",
             jsonp:'callback',
             success: function(msg){
                 if (msg.status == 100) {
                 	location.href='http://localhost:8080/index.html#/tables';
                 }else{
                 	alert(msg.msg);
                 }
              }
          });
		}
	}
}
</script>