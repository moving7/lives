<div class="sidebar-show">

        <div id="sidebar-scroll">

            <div class="sidebar-show-nav">

                <a href="http://i.huya.com/index.php?m=Subscribe" class="clickstat sidebar-show-line js-sub" target="_blank" eid="click/navi/zuoce/sub" eid_desc="点击/导航/左侧导航/我的订阅"><i class="sidebar-icon-sub"></i>我的订阅<span class="subscribe-text"> (请登录)</span></a>

                <a href="http://www.huya.com/l" class="clickstat sidebar-show-line" eid="click/navi/zuoce/live" eid_desc="点击/导航/左侧导航/全部直播"><i class="sidebar-icon-live"></i> 全部直播</a>

                <a href="http://www.huya.com/g" class="clickstat sidebar-show-line" eid="click/navi/zuoce/gametype" eid_desc="点击/导航/左侧导航/全部游戏"><i class="sidebar-icon-type"></i>全部分类</a>

            </div>



            <div class="sidebar-recom">
					@foreach($data as $v)
                <div class="m sidebar-show-line ">

                    <a class="m-title clickstat" href="http://www.huya.com/g/100023" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1">

                        <i class="m-title-type" style="background-image: url('{{URL::asset('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpz3aAZJ1488336152.png')}}';"></i>

                        <span class="m-title-span">{{$v['type_name']}}</span>

                    </a>

                    <div class="m-bd">
						
                        <div class="recomend-list clearfix">
                        @foreach($v['_child'] as $val)
                            <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/lol" title="{{$val['type_name']}}">{{$val['type_name']}}</a>
						@endforeach
                            </div>
                    </div>

                </div>
				@endforeach
                 <!-- <div class="m sidebar-show-line ">

                    <a class="m-title clickstat" href="http://www.huya.com/g/100002" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2">

                        <i class="m-title-type" style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpuKzEv31488336851.png');"></i>

                        <span class="m-title-span">单机热游</span>

                    </a>

                    <div class="m-bd">

                        <div class="recomend-list clearfix">

                               

                            <a class="recomend-item clickstat" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2" href="http://www.huya.com/g/100032" title="主机游戏">主机游戏</a>            

                               

                            

                                                </div>

                    </div>

                </div>

                                                <div class="m sidebar-show-line ">

                    <a class="m-title clickstat" href="http://www.huya.com/g/100022" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3">

                        <i class="m-title-type" style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpNhPhI81488336174.png');"></i>

                        <span class="m-title-span">娱乐天地</span>

                    </a>

                    <div class="m-bd">

                        <div class="recomend-list clearfix">

                               

                            <a class="recomend-item clickstat" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3" href="http://www.huya.com/g/1663" title="星秀">星秀</a>            

                               

                           

                                                </div>

                    </div>

                </div>

                                                <div class="m sidebar-show-line ">

                    <a class="m-title clickstat" href="http://www.huya.com/g/100004" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4">

                        <i class="m-title-type" style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpJAXeoz1488336183.png');"></i>

                        <span class="m-title-span">手游休闲</span>

                    </a>

                    <div class="m-bd">

                        <div class="recomend-list clearfix">

                               

                            <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/2336" title="王者荣耀">王者荣耀</a>            

                               

                            
                                                </div>

                    </div>

                </div>

                                   -->          </div>

            <div class="sidebar-banner" style="display:none">

                <a target="_blank" class="sidebar-banner-link clickstat third-clickstat" id="sidebarBanner" eid="click/push/leftnaviad" eid_desc="点击/推荐/左侧导航推荐图">

                </a>

            </div>

        </div>

        <div class="sidebar-tool">

            <a target="_blank" class="download clickstat" eid="click/navi/zuoce/xiazai" eid_desc="点击/导航/左侧导航/客户端下载" href="http://www.huya.com/download/" title="下载客户端"></a>

            <a target="_blank" class="toAnchor clickstat" eid="click/navi/zuoce/zhubo" eid_desc="点击/导航/左侧导航/我要做主播" href="http://www.huya.com//e/zhubo" title="我要直播"></a>

        </div>

        <a target="_blank" class="gov-jb clickstat" eid="click/navi/zuoce/jubao" eid_desc="点击/导航/左侧导航/举报" href="http://jb.ccm.gov.cn/" style="position: absolute;left: 14px;bottom: 80px; left: 80px; bottom: 55px; color: #666;">12318举报</a>

        <span id="sidebar-hide-btn" class="arrow-btn clickstat" eid="click/navi/zuoce/close"  eid_desc="点击/导航/左侧导航/收起"></span>

    </div>