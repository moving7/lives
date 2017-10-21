
@extends('header')
@section('content')
               <!-- 标签快速选择 -->

                <div class="box-hd clearfix">

                    <h2 class="title"><a href="http://www.huya.com/l">全部直播</a></h2>

                    <div class="filter">
</div>

                </div>

                <div class="box-bd">
                    {{--瀑布流所需样式--}}
                    <link rel="stylesheet" type="text/css" href="/flow/style/base.css">
                    <link rel="stylesheet" type="text/css" href="/flow/style/index.css">
                    <!--[if lt IE 9]>
                    <script src="/flow/js/css3-mediaqueries.js"></script>
                    <![endif]-->
                    <script type="text/javascript" src="/flow/js/jquery-1.8.3.min.js"></script>
                    <script type="text/javascript" src="/flow/js/jQueryColor.js"></script>
                    <!--这个插件是瀑布流主插件函数必须-->
                    <script type="text/javascript" src="/flow/js/jquery.masonry.min.js"></script>
                    <!--这个插件只是为了扩展jquery的animate函数动态效果可有可无-->
                    <script type="text/javascript" src="/flow/js/jQeasing.js"></script>

                    {{--瀑布流 start--}}
                    <script>
                        $(function(){
                            /*瀑布流开始*/
                            var container = $('.waterfull ul');
                            var loading=$('#imloading');
                            // 初始化loading状态
                            loading.data("on",true);
                            /*判断瀑布流最大布局宽度，最大为1280*/
                            function tores(){
                                var tmpWid=$(window).width();
                                if(tmpWid>1280){
                                    tmpWid=1280;
                                }else{
                                    var column=Math.floor(tmpWid/320);
                                    tmpWid=column*320;
                                }
                                $('.waterfull').width(tmpWid);
                            }
                            tores();
                            $(window).resize(function(){
                                tores();
                            });
                            container.imagesLoaded(function(){
                                container.masonry({
                                    columnWidth: 320,
                                    itemSelector : '.item',
                                    isFitWidth: true,//是否根据浏览器窗口大小自动适应默认false
                                    isAnimated: true,//是否采用jquery动画进行重拍版
                                    isRTL:false,//设置布局的排列方式，即：定位砖块时，是从左向右排列还是从右向左排列。默认值为false，即从左向右
                                    isResizable: true,//是否自动布局默认true
                                    animationOptions: {
                                        duration: 800,
                                        easing: 'easeInOutBack',//如果你引用了jQeasing这里就可以添加对应的动态动画效果，如果没引用删除这行，默认是匀速变化
                                        queue: false//是否队列，从一点填充瀑布流
                                    }
                                });
                            });
                            /*模拟从后台获取到的数据*/
                            var sqlJson=[{'src':'/images/2824-S.jpg','date':'2小时前','looked':321},{'src':'/images/9-S.jpg','writer':'站长素材','date':'2小时前','looked':321},{'src':'/images/162-S.jpg','writer':'站长素材','date':'2小时前','looked':321},{'src':'/images/485-S.jpg','writer':'站长素材','date':'2小时前','looked':321},{'src':'/images/2413-S.jpg','writer':'站长素材','date':'2小时前','looked':321},{'src':'/images/1715-S.jpg','writer':'站长素材','date':'2小时前','looked':321},{'src':'/images/2793-S.jpg','writer':'站长素材','date':'2小时前','looked':321},{'src':'/images/393-S.jpg','writer':'站长素材','date':'2小时前','looked':321}];
                            /*本应该通过ajax从后台请求过来类似sqljson的数据然后，便利，进行填充，这里我们用sqlJson来模拟一下数据*/
                            $(window).scroll(function(){
                                if(!loading.data("on")) return;
                                // 计算所有瀑布流块中距离顶部最大，进而在滚动条滚动时，来进行ajax请求，方法很多这里只列举最简单一种，最易理解一种
                                var itemNum=$('#waterfull').find('.item').length;
                                var itemArr=[];
                                itemArr[0]=$('#waterfull').find('.item').eq(itemNum-1).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
                                itemArr[1]=$('#waterfull').find('.item').eq(itemNum-2).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
                                itemArr[2]=$('#waterfull').find('.item').eq(itemNum-3).offset().top+$('#waterfull').find('.item').eq(itemNum-1)[0].offsetHeight;
                                var maxTop=Math.max.apply(null,itemArr);
                                if(maxTop<$(window).height()+$(document).scrollTop()){
                                    //加载更多数据
                                    loading.data("on",false).fadeIn(800);
                                    (function(sqlJson){
                                        /*这里会根据后台返回的数据来判断是否你进行分页或者数据加载完毕这里假设大于30就不在加载数据*/
                                        if(itemNum>300){
                                            loading.text('就有这么多了！');
                                        }else{
                                            var html="";
                                            for(var i in sqlJson){
                                                html+="<li class='item'><a href='{{URL::asset('index/details')}}' class='a-img'><img src='"+sqlJson[i].src+"'></a>";
                                                // html+="<h2 class='li-title'>"+sqlJson[i].title+"</h2>";
                                                // html+="<p class='description'>"+sqlJson[i].intro+"</p><div class='qianm clearfloat'>";
                                                // html+="<span class='sp1'><b>"+sqlJson[i].looked+"</b>浏览</span>";
                                                // html+="<span class='sp2'>"+sqlJson[i].writer+"</span><span class='sp3'>"+sqlJson[i].date+"&nbsp;By</span></div></li>";
                                                html+='</li>'
                                            }
                                            /*模拟ajax请求数据时延时800毫秒*/
                                            var time=setTimeout(function(){
                                                $(html).find('img').each(function(index){
                                                    loadImage($(this).attr('src'));
                                                })
                                                var $newElems = $(html).css({ opacity: 0}).appendTo(container);
                                                $newElems.imagesLoaded(function(){
                                                    $newElems.animate({ opacity: 1},800);
                                                    container.masonry( 'appended', $newElems,true);
                                                    loading.data("on",true).fadeOut();
                                                    clearTimeout(time);
                                                });
                                            },800)
                                        }
                                    })(sqlJson);
                                }
                            });
                            function loadImage(url) {
                                var img = new Image();
                                //创建一个Image对象，实现图片的预下载
                                img.src = url;
                                if (img.complete) {
                                    return img.src;
                                }
                                img.onload = function () {
                                    return img.src;
                                };
                            };
                            loadImage('images/one.jpeg');
                            /*item hover效果*/
                            var rbgB=['#71D3F5','#F0C179','#F28386','#8BD38B'];
                            // $('#waterfull').on('mouseover','.item',function(){
                            // 	var random=Math.floor(Math.random() * 4);
                            // 	$(this).stop(true).animate({'backgroundColor':rbgB[random]},1000);
                            // });
                            // $('#waterfull').on('mouseout','.item',function(){
                            // 	$(this).stop(true).animate({'backgroundColor':'#fff'},1000);
                            // });
                        })
                    </script>
                    {{--瀑布流 end--}}

                    <div class="content">
                        <!-- 瀑布流样式开始 -->
                        <div class="waterfull clearfloat" id="waterfull">
                            <ul class="live-list clearfix areafib" id="js-live-list">
                                @foreach($live as $v)
                                    {{--<li class='item'><a href='http://www.datouwang.com/' class='a-img'><img src='"+sqlJson[i].src+"'></a>--}}
                                    <li class="game-live-item item" gid="1">

                                        <a href="{{URL::asset('index/details')}}" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"allLive/0/1/1","game_id":"1","ayyuid":"1346609715"}'>


                                            <img class="pic lazy"  src="/images/load.jpg" data-src="/images/<?=$v['room_img']?>"  alt="{{$v['room_name']}}" title="{{$v['room_name']}}">

                                            <div class="item-mask"></div>

                                            <i class="btn-link__hover_i"></i>

                                            <em class="tag tag-blue">蓝光</em>    </a>

                                        <a href="{{URL::asset('index/details')}}" class="title new-clickstat"report='{"eid":"click/position","position":"allLive/0/1/1","game_id":"1","ayyuid":"1346609715"}' title="{{$v['room_name']}}" target="_blank">{{$v['room_name']}}</a>

    <span class="txt">

        <span class="avatar fl">

            <img src="{{URL::asset(images/<?= $v['head']?>)" onerror="this.onerror=null; this.src='/images/{{$v['head']}}';" alt="{{$v['room_name']}}" title="{{$v['room_name']}}">
            <i class="nick" title="{{$v['nickname']}}">{{$v['nickname']}}</i>
        </span>
                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/lol" title="{{$v['type_name']}}">{{$v['type_name']}}</a></span>
                <span class="num"><i class="num-icon"></i><i class="js-num">80.8万</i></span>
    </span>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        <!-- loading按钮自己通过样式调整 -->
                        <div id="imloading" style="width:150px;height:30px;line-height:30px;font-size:16px;text-align:center;border-radius:3px;opacity:0.7;background:#000;margin:10px auto 30px;color:#fff;display:none">
                            7组玩命加载中.....
                        </div>
                    </div>
                    {{--瀑布流end--}}



                    {{--lazy load start--}}
                    <script>
                        //                        alert(2)
                        var imgs = document.getElementsByClassName("lazy"); /*懒惰加载图片*/
                        //                        alert(imgs)
                        var imgsLen = imgs.length;
//                        alert(imgsLen)
                        var unloaded = imgsLen; /*标记还有多少个图片没有加载*/
                        var clientHight = window.innerHeight || document.documentElement.clientHeight; /*浏览器用户可视窗口高度*/

                        /*给图片设置真正的src*/
                        function setImgSrc (index) {
                            imgs[index].src = imgs[index].getAttribute("data-src"); /*取图片真正的地址*/
                            --unloaded;
                        }

                        /*滚动事件处理*/
                        function scrollHandler(index) {
                            var scrollTop = document.body.scrollTop || document.documentElement.scrollTop; /*滚动离顶部距离*/
                            for (var i = index; i < imgsLen; i++) {
                                var offset = imgs[i].offsetTop; /*元素到顶部的偏移量*/
                                if (scrollTop + clientHight > offset) {
                                    setImgSrc(i);
                                } else {
                                    break;
                                }
                            }
                        }

                        /*监听滚动事件*/
                        function myScrollListener() {
                            var start = imgsLen-unloaded; /*查找第一个没有加载的图片的位置*/
                            if (unloaded > 0) {
                                scrollHandler(start);
                            }
                        }

                        /*第一次加载加载页面的时候加载出现在用户视线里的图片*/
                        function firstLoad() {
                            for (var i = 0; i < imgsLen; i++) {
                                var top = imgs[i].offsetTop;
                                if (top < clientHight) {/*图片到顶部的位置如果小于客户端可视窗口的高度，则说明图片显示出来了*/
                                    setImgSrc(i);
                                }else{
                                    break;
                                }
                            }
                        }

                        window.onscroll = myScrollListener;

                        window.onload = firstLoad;


                    </script>
                    {{--lazyload end--}}

@endsection
{{--<style>--}}
    {{--.duya-header{--}}
        {{--margin-top: -18px;--}}
    {{--}--}}
{{--</style>--}}


