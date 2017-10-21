<template>
<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">用户</a>
							</li>

							<li>
								<a href="#">用户列表</a>
							</li>
							
						</ul><!-- .breadcrumb -->

						<div id="nav-search" class="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" autocomplete="off" id="nav-search-input" class="nav-search-input" placeholder="Search ...">
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								用户信息
								<small>
									<i class="icon-double-angle-right"></i>
									User
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table class="table table-striped table-bordered table-hover" id="sample-table-1">
												<thead>
													<tr>
														<th class="center">
															<!--<label>
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>-->
															ID
														</th>
														<th>用户名</th>
														<th>手机号</th>
														<th class="hidden-480">邮箱</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															YY号
														</th>
														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															用户类型	
														</th>
														<th>用户状态</th>
														<th>功能</th>
													</tr>
												</thead>

												<tbody id="tbox">
													<!--<tr align="center">
														<td colspan="7">加载中</td>
													</tr>-->
													<tr v-for="val in lists">
														<td  align="center">{{val.user_id}}</td>
														<td  align="center">{{val.user_name}}</td>
														<td  align="center">{{val.user_phone}}</td>
														<td  align="center">{{val.user_email}}</td>
														<td  align="center">{{val.user_yy}}</td>
														<td  align="center" v-if="val.user_status == 1">主播</td>
														<td  align="center" v-else>普通用户</td>
														<td  align="center" v-if="val.is_del == 0">正常</td>
														<td  align="center" v-else>已封号</td>
														<td  align="center"><div class="visible-md visible-lg hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></button><button class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></button><button class="btn btn-xs btn-danger del"><i class="icon-trash bigger-120"></i></button></div><div class="visible-xs visible-sm hidden-md hidden-lg"><div class="inline position-relative"><button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle"><i class="icon-cog icon-only bigger-110"></i></button><ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close"><li><a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View"><span class="blue"><i class="icon-zoom-in bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit"><span class="green"><i class="icon-edit bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete"><span class="red"><i class="icon-trash bigger-120"></i></span></a></li></ul></div></div></td>
													</tr>
													<!--<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#">ace.com</a>
														</td>
														<td>$45</td>
														<td class="hidden-480">3,330</td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success">
																	<i class="icon-ok bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="icon-edit bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="icon-flag bigger-120"></i>
																</button>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>-->

												</tbody>
											</table>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
</template>

<script>
//$('.del').click(function(){
//	alert(2)
//})
//	$(document).on('click','.del',function(){
//		$(this).hide()
//		alert(3?)
//	});
export default {
  name: 'tables',
  data () {
    return {
      message: '',
      lists:{}
    }
  },
  created()
  {
  	data_init(this)
  },
//	mounted: function() {
//		$.ajax({
//			url:'http://yii.929.vip/?r=index/show_userlist',
//			type:'get',
//			dataType:'jsonp',
//			jsonp:'call',
//			success:function(msg)
//			{
////				$('#tbox').html(msg)
////				console.log(msg)
////				alert(2)
//				var obj = '';
//				$.each(msg,function(k,v){
//					obj += '<tr><td class="center"><input type="hidden" value="'+v.user_id+'" />'+v.user_id+'</td><td>'+v.user_name+'</td><td>'+v.user_phone+'</td><td>'+v.user_email+'</td><td>'+v.user_yy+'</td><td><div class="visible-md visible-lg hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></button><button class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></button><button class="btn btn-xs btn-danger del"><i class="icon-trash bigger-120"></i></button></div><div class="visible-xs visible-sm hidden-md hidden-lg"><div class="inline position-relative"><button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle"><i class="icon-cog icon-only bigger-110"></i></button><ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close"><li><a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View"><span class="blue"><i class="icon-zoom-in bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit"><span class="green"><i class="icon-edit bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete"><span class="red"><i class="icon-trash bigger-120"></i></span></a></li></ul></div></div></td></tr>'
//				})
//				$('#tbox').html(obj)
//			}
//		})
////		alert(3)
////			this.$http.jsonp('http://yii.929.vip/?r=index/api', {}, {
////	        emulateJSON: true
////	    }).then(function(response) {
//////	        this.userList = response.body
////			alert(1)
////	    }, function(response) {
////	        console.log(response)
//////			alert(2)
////	    });   
//	},
  methods:
  {
  	dels:function(){
//		alert(2)
		$(document).on('click','')
  	},
  	test_del:function()
  	{
  		alert(3)
  	},
  	onreadys:function(){
  		$(document).ready(function(){
  		alert('好了')
  	})
  	}
  }
}
function data_init(obj)
{
//	alert(3)
	$.ajax({
			url:'http://yii.929.vip/?r=index/show_userlist',
			type:'get',
			dataType:'jsonp',
			jsonp:'call',
			success:function(msg)
			{
//				var obj = '';
//				$.each(msg,function(k,v){
//					obj += '<tr><td class="center"><input type="hidden" value="'+v.user_id+'" />'+v.user_id+'</td><td>'+v.user_name+'</td><td>'+v.user_phone+'</td><td>'+v.user_email+'</td><td>'+v.user_yy+'</td><td><div class="visible-md visible-lg hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></button><button class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></button><button class="btn btn-xs btn-danger del"><i class="icon-trash bigger-120"></i></button></div><div class="visible-xs visible-sm hidden-md hidden-lg"><div class="inline position-relative"><button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle"><i class="icon-cog icon-only bigger-110"></i></button><ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close"><li><a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View"><span class="blue"><i class="icon-zoom-in bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit"><span class="green"><i class="icon-edit bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete"><span class="red"><i class="icon-trash bigger-120"></i></span></a></li></ul></div></div></td></tr>'
//				})
//				$('#tbox').html(obj)
				obj.lists = msg
			}
		})
}
try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
</script>

<style>
</style>