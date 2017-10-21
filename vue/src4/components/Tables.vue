<template>
	<div class="main-content">
					<div class="page-content">
						<div class="page-header">
							<h1>
								主播列表
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">ID</th>
														<th>主播名称</th>
														<th>主播房间</th>
														<th class="hidden-480">主播简介</th>
														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															真实姓名
														</th>
														<th class="hidden-480">证件号码</th>
														<th width="200px">操作</th>
													</tr>
												</thead>

												<tbody>
													<tr class="item" v-for="value in lists">
														<td class="center">
															<label>
																{{value.anchor_id}}
																<span class="lbl"></span>
															</label>
														</td>
														<td>{{value.z_name}}</td>
														<td>{{value.room_num}}</td>
														<td class="hidden-480">{{value.content}}</td>
														<td>{{value.name}}</td>

													<td class="hidden-480">
													<span class="label label-sm label-warning">{{value.number}}</span>
													</td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																
																<button class="btn btn-xs btn-info">
																	<router-link :to="{path:'/anthor_update',query: {id: value.anchor_id}}">
																	<i class="icon-edit bigger-120"></i>
																	</router-link>
																</button>
																<button @click="del(value)" class="btn btn-xs btn-danger">
																<i class="icon-trash bigger-120"></i>
																</button>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
</template>
<script>
export default {
	data () {
		return {
			lists:[]
		}
	},
	mounted:function() {
			this.$http.jsonp('http://localhost/yii/advanced/backend/web/index.php?r=index/show', {}, 
			{
	        emulateJSON: true
	    }).then(function(response) {
	  
//	        this.lists = response.body
			console.log(response)
	    }, function(response) {
	    	
	        console.log(response)
	    }); 
	     
	},
	methods:{
		del:function(value)
		{
			this.$http.jsonp('http://localhost/yii/advanced/backend/web/index.php?r=index/del&id='+value.anchor_id, {},
			{
	        emulateJSON: true
	    }).then(function(response) {
	    if (response.body.status == 100) 
	    	{
	    	this.$http.jsonp('http://localhost/yii/advanced/backend/web/index.php?r=index/show', {}, 
			{
	        emulateJSON: true
	      }).then(function(response) {
	  
	        this.lists = response.body
	    }, function(response) {
	    	
	        console.log(response)
	    });
	    	 	
	    	}else{
	    		alert(response.body.msg);
	    	}
	    }, function(response) {
	        console.log(response);
	    }); 	
	   }
	},
			
	}
</script>