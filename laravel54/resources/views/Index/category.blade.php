@extends('header2')
@section('content')

        <div class="mod-list">

            <div class="box">

                <div class="box-hd clearfix">

                    <h2 class="title">

                        全部分类                    </h2>

                    <div class="filter">

                       

                    </div>

                </div>

                <div class="box-bd">

                                        <ul class="game-list clearfix" id="js-game-list">
@foreach($cate as $vas)
                                                                                <li class="game-list-item" gid="1">

        <a target="_blank" href="show?id={{$vas['type_id']}}" class="pic new-clickstat" report='{"eid":"click/postion","position":"gameList/gameCard/1","game_id":"1"}'>

        <img class="pic-img" src="{{URL::asset('images/'.$vas['type_img'])}}" onerror="this.onerror=null; this.src='images/{{$vas['type_img']}}" alt="{{$vas['type_name']}}" title="{{$vas['type_name']}}">

        <h3 class="title">{{$vas['type_name']}}</h3>

    </a>

</li>
@endforeach
                                            </ul>
                                    </div>

            </div>

        </div>



    <script src="{{URL::asset('js/jq_ud_mod_4de7709.js')}}" data-fixed="true"></script>

    <script src="{{URL::asset('js/huyahiidoweb_err_monitor-min.js')}}" id="huyahiido_err_monitor" act="webhuyaerror" pageview="gamelist" data-fixed="true"></script>

    <script src="{{URL::asset('js/headerFunction_c0fe602.js')}}" data-fixed="true"></script>

    <script type="text/javascript" charset="utf-8" src="{{URL::asset('js/auto_combine_c4419_9392b35.js')}}"></script>
<script>

        require("app/game-list");

    </script>

    <!--BODY_END-->

    <!-- S 页面公用功能 -->

    <script type="text/javascript" src="{{URL::asset('js/sidebarFunction_c28b9f0.js')}}" data-fixed="true"></script>



<!-- S 后台推送消息 -->

    <!--[if lte IE 7]>

    <script  type='text/javascript' src='//www.huya.com/base/js/push/json3.min.js'></script>

    <![endif]-->

    <!--[if lte IE 9]>

    <script type='text/javascript' src='//www.huya.com/base/js/push/jquery.xdomainrequest.min.js'></script>

    <![endif]-->

    <script data-fixed="true">

        var PUSH_PROXY_URL="//channelproxy.huya.com/";

        var WEB_PUSH_URL="webpush.huya.com";

        var PUSH_ENABLE=true;//推送开关

        var WEB_PUSH_TLS_ENABLE=true;//是否使用TLS

        var matchNoticeData=[];//赛事直播间预告数据

    </script>

    <script type='text/javascript' src='js/push-min.js?t=20170818'></script>

    <script type='text/javascript' src='js/push.func-min.js?t=20161207'></script><!-- E 后台推送消息 -->    <!-- E 页面公用功能 -->

    <script type="text/javascript" src="js/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>

    <script type="text/javascript" data-fixed="true">

        (function(win){

            var $win = $(win);

            var reportTimer = null;



            function report(){

                var oHref = parseQueryString(location.href);

                zhReport({

                    rso: oHref['rso'] || oHref['from'] || "",

                    rso_desc: oHref['rso_desc'] || "",

                    eid: "pageview/list",

                    eid_desc:"pageview/游戏列表"

                });

            }



            $win.on('load.report',function(){

                reportTimer && clearTimeout(reportTimer);

                report();

            });



            reportTimer = setTimeout(function(){

                $win.off('.report');

                report();

            }, 3500);



        })(window); 

    </script>

    <!-- S 通用底部 -->

    <script data-fixed="true">

var _hmt = _hmt || [];

(function() {

  var hm = document.createElement("script");

  hm.src = "//hm.baidu.com/hm.js?51700b6c722f5bb4cf39906a596ea41f";

  var s = document.getElementsByTagName("script")[0]; 

  s.parentNode.insertBefore(hm, s);

})();

</script>

    <!-- E 通用底部 -->

@endsection