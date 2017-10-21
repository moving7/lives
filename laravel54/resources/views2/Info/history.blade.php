@extends('i')
@section('content')

        <div class="main-col">
        <div class="scroll-content">
            <div class="mod mod-subscribe" id="subscribe_watch_wrap">
                <div class="mod-hd">
                    <h3>订阅与观看记录</h3>
                    <span style="left: 187px;">订阅了<i>0</i>个主播</span>
                </div>
                <div class="mod-bd">
                    <!-- 新修改 2014.10 {-->
                    <div class="mod-tab">
                        <div class="mod-tab-hd">
                            <ul class="mod-tab-trigger J_nav" id="subscribeWatchTab"> 
                                <li class="selected"><a href="javascript:void(0)">订阅</a></li>
                                <li class=""><a href="javascript:void(0)">观看记录</a></li>
                             </ul>
                        </div>

                        <!--订阅-->
                         <div class="mod-tab-bd J_content" style="display:block">
                            <div class="sub_tab" id="subscribeTab">
                                <!-- <a class="cur" class="" href="javascript:void(0)">游戏</a> -->
                            </div>
                            <div id="subscribeCont">
                                <div class="mod-tab-content">
                                   <ul class="sub_wrap" id="subWrap">
                                                                           </ul>
                                    
                                                                        </div>
                            </div>
                        </div>
                        <!--end订阅-->

                        <!--观看记录-->
                         <div class="mod-tab-bd J_content" id="watch_history" style="display:none">
                            <span class="trash_bar"><em class="ico_trash"></em><a href="#" class="trash">清除观看记录</a></span>
                            
                            <div class="loading" id="watch_history_loading">下拉获取更多</div>
                            
                        </div>
                        <!--end 观看记录-->
                     </div>
                
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.9.1/js/mtv.js"></script>
    <script>
        //订阅主播
        var userId = "1842012381";
        document.body.scrollTop=0;

        $(function(){
            $('#subWrap').on('click','li',function(e){
                var link = $(this).data('link');
                window.open(link);
            });
            $('.cancel_sub').on('click',function(e){
                var that = $(this),
                    aid = that.data('aid');

                dy.activitySubscribe(aid,'Cancel');
                e.stopPropagation && e.stopPropagation();
                e.cancelBubble && e.cancelBubble();
            })
        });
    </script>
    
   @endsection