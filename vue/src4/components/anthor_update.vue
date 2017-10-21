<template>
<body>
<div class="main-container" id="main-container">
		<div class="main-content">
					<div class="page-content">
						<div class="page-header">
							<h1>
								修改页面
							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 主播名称 </label>
										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" v-model="lists.z_name" />
											<div class="space-2"></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 主播简介 </label>

										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" v-model="lists.content" />
											<div class="space-2"></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">证件号码</label>

										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" v-model="lists.number"/>
											<div class="space-2"></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">主播房间</label>
										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" v-model="lists.room_num"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">所属用户</label>
										<div class="col-sm-9">
											<select v-model="lists.uid">
												<option>请选择</option>
												<option v-for="val in users" v-bind:value='val.uid'>{{val.user_name}}</option>
											</select>
										</div>
									</div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button" v-on:click="sub">
												<i class="icon-ok bigger-110"></i>
												修改
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
	export default {
	data () {
		return {
			lists:[],
			users:[],
		}
	},
	mounted:function() {
			this.$http.jsonp('http://localhost/yii/advanced/backend/web/index.php?r=index/show&id='+this.$route.query.id, {}, 
			{
	        emulateJSON: true
	    }).then(function(response) {
	        this.lists = response.body.data
	        this.users = response.body.user
	    }, function(response) {
	    	
	        console.log(response)
	    }); 
	     
	},
	methods:{
		sub:function(){
			this.$http.jsonp('http://localhost/yii/advanced/backend/web/index.php?r=index/update', {params:this.lists}, 
			{
	        emulateJSON: true
	    }).then(function(response) {
	    	console.log(response.body)
	        this.lists = response.body
	    }, function(response) {
	    	
	        console.log(response)
	    }); 
		}
	}
}
</script>