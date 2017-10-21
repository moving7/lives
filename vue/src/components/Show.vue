<template>
	<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li class="active">控制台</li>
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
								控制台
								<small>
									<i class="icon-double-angle-right"></i>
									 查看
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="alert alert-block alert-success">
									<button data-dismiss="alert" class="close" type="button">
										<i class="icon-remove"></i>
									</button>

									<i class="icon-ok green"></i>

									欢迎使用
									<strong class="green">
										虎牙后台管理系统
										<small>(v1.2)</small>
									</strong>
									,这7组的项目
								</div>

								<div class="row">
									<div class="space-6"></div>

									<div class="col-sm-7 infobox-container">
										<div class="infobox infobox-green  ">
											<div class="infobox-icon">
												<i class="icon-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">金豆</span>
												<div class="infobox-content">{{glod}}</div>
											</div>
											<div class="stat stat-success">8%</div>
										</div>

										<div class="infobox infobox-blue  ">
											<div class="infobox-icon">
												<i class="icon-twitter"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">银豆</span>
												<div class="infobox-content">{{silver}}</div>
											</div>

											<div class="badge badge-success">
												+32%
												<i class="icon-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-pink  ">
											<div class="infobox-icon">
												<i class="icon-shopping-cart"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">金豆券</span>
												<div class="infobox-content">{{glods}}</div>
											</div>
											<div class="stat stat-important">4%</div>
										</div>

										<div class="infobox infobox-red  ">
											<div class="infobox-icon">
												<i class="icon-beaker"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"></span>
												<div class="infobox-content"></div>
											</div>
										</div>

										<div class="infobox infobox-orange2  ">
											<div class="infobox-chart">
												<span data-values="196,128,202,177,154,94,100,170,224" class="sparkline"><canvas style="display: inline-block; width: 44px; height: 34px; vertical-align: top;" width="44" height="34"></canvas></span>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"></span>
												<div class="infobox-content"></div>
											</div>

											<div class="badge badge-success">
												
												<i class="icon-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-blue2  ">
											<div class="infobox-progress">
												<div data-size="46" data-percent="42" class="easy-pie-chart percentage easyPieChart" style="width: 46px; height: 46px; line-height: 46px;">
													<span class="percent"></span>
												<canvas height="46" width="46"></canvas></div>
											</div>

											<div class="infobox-data">
												<span class="infobox-text"></span>

												<div class="infobox-content">
													<span class="bigger-110">~</span>
													
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="infobox infobox-green infobox-small infobox-dark">
											<div class="infobox-progress">
												<div data-size="39" data-percent="61" class="easy-pie-chart percentage easyPieChart" style="width: 39px; height: 39px; line-height: 39px;">
													<span class="percent">金豆</span>
												<canvas height="39" width="39"></canvas></div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">{{glod}}</div>
												<div class="infobox-content"></div>
											</div>
										</div>

										<!--<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-chart">
												<span data-values="3,4,2,3,4,4,2,2" class="sparkline"><canvas style="display: inline-block; width: 39px; height: 20px; vertical-align: top;" width="39" height="20"></canvas></span>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">获得</div>
												<div class="infobox-content">$32,000</div>
											</div>
										</div>-->

										<div class="infobox infobox-grey infobox-small infobox-dark">
											<div class="infobox-icon">
												<i class="icon-download-alt"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">银豆</div>
												<div class="infobox-content">{{silver}}</div>
											</div>
										</div>
									</div>

									<div class="vspace-sm"></div>

									<!--<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5>
													<i class="icon-signal"></i>
													访问来源
												</h5>

												<div class="widget-toolbar no-border">
													<button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">
														本周
														<i class="icon-angle-down icon-on-right bigger-110"></i>
													</button>

													<ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
														<li class="active">
															<a class="blue" href="#">
																<i class="icon-caret-right bigger-110">&nbsp;</i>
																本周
															</a>
														</li>

														<li>
															<a href="#">
																<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
																上周
															</a>
														</li>

														<li>
															<a href="#">
																<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
																本月
															</a>
														</li>

														<li>
															<a href="#">
																<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
																上月
															</a>
														</li>
													</ul>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div id="piechart-placeholder" style="width: 90%; min-height: 150px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 384px; height: 150px;" width="384" height="150"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 384px; height: 150px;" width="384" height="150"></canvas><div class="legend"><div style="position: absolute; width: 92px; height: 110px; top: 15px; right: -30px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:15px;right:-30px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #68BC31;overflow:hidden"></div></div></td><td class="legendLabel">social networks</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #2091CF;overflow:hidden"></div></div></td><td class="legendLabel">search engines</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #AF4E96;overflow:hidden"></div></div></td><td class="legendLabel">ad campaigns</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #DA5430;overflow:hidden"></div></div></td><td class="legendLabel">direct traffic</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #FEE074;overflow:hidden"></div></div></td><td class="legendLabel">other</td></tr></tbody></table></div></div>

													<div class="hr hr8 hr-double"></div>

													<div class="clearfix">
														<div class="grid3">
															<span class="grey">
																<i class="icon-facebook-sign icon-2x blue"></i>
																&nbsp; likes
															</span>
															<h4 class="bigger pull-right">1,255</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="icon-twitter-sign icon-2x purple"></i>
																&nbsp; tweets
															</span>
															<h4 class="bigger pull-right">941</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="icon-pinterest-sign icon-2x red"></i>
																&nbsp; pins
															</span>
															<h4 class="bigger pull-right">1,050</h4>
														</div>
													</div>
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div><!-- /widget-box -->
									</div><!-- /span -->-->

								</div><!-- /row -->

								<div class="hr hr32 hr-dotted"></div>


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
</template>


<script>

export default {
  name: 'show',
  data () {
    return {
      message: '',
      glod:0,
      silver:0,
      user:'',
      glods:''
    }
  },
  created()
  {
  	moneys(this)
  },
  methods:
  {
	
  }
}
function moneys(obj)
{
//	alert(4)
//console.log(this)
$.ajax({
  			url:'http://yii.929.vip/?r=money/index',
  			dataType:'jsonp',
  			type:'get',
//			data:{user_id:this.username},
  			success:function(msg)
  			{
//				console.log(e)
//				if(msg.code == 200)
//				{
//					alert('登录成功')
//					location.href="/#/"
//				}
//				alert(msg.silver_num)
				obj.glod = msg.glod_num
				obj.silver = msg.silver_num
				obj.glods = msg.glods
  			}
  		})
}

try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}

</script>

<style>
</style>