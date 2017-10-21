<template>
<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">房间</a>
							</li>

							<li>
								<a href="#">房间列表</a>
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
								房间列表
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
										
											<table class="table table-striped table-bordered table-hover" >
												<thead>
													<tr>
														<th class="center">
															<!--<label>
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>-->
															ID
														</th>
														<th>房间名称</th>
														<th>房间介绍</th>
														<th class="hidden-480">房间状态</th>

														<!--<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															其他
														</th>-->

														<th>操作</th>
													</tr>
												</thead>

												<tbody id="tbox" >
													<tr align="center" v-for="val in lists">
														<!--<td colspan="7">123</td>-->
														<td>{{val.room_id}}</td>
														<td>{{val.room_name}}</td>
														<td>{{val.room_info}}</td>
														<td v-if="val.is_del == 0">正常</td>
														<td v-else>禁用</td>
														<td><div class="visible-md visible-lg hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></button><button class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></button><button class="btn btn-xs btn-danger del" @click="del(val.room_id)" ><i class="icon-trash bigger-120"></i></button></div><div class="visible-xs visible-sm hidden-md hidden-lg"><div class="inline position-relative"><button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle"><i class="icon-cog icon-only bigger-110"></i></button><ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close"><li><a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View"><span class="blue"><i class="icon-zoom-in bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit"><span class="green"><i class="icon-edit bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete"><span class="red"><i class="icon-trash bigger-120"></i></span></a></li></ul></div></div></td>
													</tr>
													<!--<tr>-->
														<!--<td>22</td>-->
													<!--</tr>-->
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
export default {
//name: 'tables',
  data () {
    return {
//    message: '',
      lists:{},
    }
  },
  created()
  {
  	test(this)
  },
	mounted: function() {
//			this.$http.jsonp('http://yii.929.vip/?r=index/rooms', {}, 
//			{
//	        emulateJSON: true
//	    }).then(function(response) {
////	  		alert(2)
//	        this.lists = response.body
//	    }, function(response) {
////	    	alert(3)
////	        console.log(response)
//	    }); 
		
		
		
		
//		$.ajax({
//			url:'http://yii.929.vip/?r=index/gift',
//			type:'get',
//			dataType:'jsonp',
//			jsonp:'call',
//			success:function(msg)
//			{
////				console.log(msg)
//				var obj = '';
//				$.each(msg,function(k,v){
//					obj += '<tr><td class="center"><input type="hidden" value="'+v.gift_id+'" />'+v.gift_id+'</td><td>'+v.gift_name+'</td><td>'+v.gift_money+'</td><td>'+v.gift_desc+'</td><td>--</td><td><div class="visible-md visible-lg hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></button><button class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></button><button class="btn btn-xs btn-danger del"><i class="icon-trash bigger-120"></i></button></div><div class="visible-xs visible-sm hidden-md hidden-lg"><div class="inline position-relative"><button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle"><i class="icon-cog icon-only bigger-110"></i></button><ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close"><li><a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View"><span class="blue"><i class="icon-zoom-in bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit"><span class="green"><i class="icon-edit bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete"><span class="red"><i class="icon-trash bigger-120"></i></span></a></li></ul></div></div></td></tr>'
//				})
//				$('#tbox').html(obj)
//			}
//		})
		
//  alert($)
	},
  methods:
  {
  	del:function(id)
  	{
//		alert(id)
$.ajax({
			url:'http://yii.929.vip/?r=index/r_del',
			type:'get',
			dataType:'jsonp',
			data:'room_id='+id,
//			jsonp:'call',
			success:function(msg)
			{
				if(msg.code == 200)
				{
					alert('删除成功')
//					location.href="/"
					location.href="/#/room_add"
				}
				else
				{
					alert('操作失败')
				}
			}
		})
  	},
//	test:function()
//	{
//		alert(3)
//	},
  	onreadys:function(){
  		$(document).ready(function(){
  		alert('好了')
  	})
  	}
  }

}
  	function test(obj)
  	{
//		alert(2)
//		alert($('#myTable')).val()
		$.ajax({
			url:'http://yii.929.vip/?r=index/rooms',
			type:'get',
			dataType:'jsonp',
//			jsonp:'call',
			success:function(msg)
			{
				console.log(msg)
//				var obj = '';
//				$.each(msg,function(k,v){
//					obj += '<tr><td class="center"><input type="hidden" value="'+v.gift_id+'" />'+v.gift_id+'</td><td>'+v.gift_name+'</td><td>'+v.gift_money+'</td><td>'+v.gift_desc+'</td><td>--</td><td><div class="visible-md visible-lg hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></button><button class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></button><button class="btn btn-xs btn-danger del"><i class="icon-trash bigger-120"></i></button></div><div class="visible-xs visible-sm hidden-md hidden-lg"><div class="inline position-relative"><button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle"><i class="icon-cog icon-only bigger-110"></i></button><ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close"><li><a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View"><span class="blue"><i class="icon-zoom-in bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit"><span class="green"><i class="icon-edit bigger-120"></i></span></a></li><li><a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete"><span class="red"><i class="icon-trash bigger-120"></i></span></a></li></ul></div></div></td></tr>'
//				})
//				$('#tbox').html(obj)
//alert(3)
				obj.lists = msg
			    datatable()
//					$(document).ready(function(){
//			        alert('3')
			//      alert('#myTable');
//			    });
			}
		})
  	}
  	function datatable()
  	{
//		alert(3)
		$('.myTable').DataTable();
  	}

try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
</script>

<style>
</style>