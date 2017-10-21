@extends('i')
@section('content')

    <div class="main-col">
        <div class="scroll-content">
            <div>
                <div class="mod mod-propery">
                    <div class="mod-hd" id="addHead">
                        <h3>特权管理</h3>     
                    </div>
                    <div id="tab-click" class="mod-tab">
                        <div class="mod-tab-hd" style="border-bottom:1px solid #ccc;">
                            <ul class="mod-tab-trigger J_nav">
                                <li class="selected" data-show="my_room_auditor"><a href="javascript:void(0);">房间管理</a></li>
                                <li data-show="defend_admin"><a href="javascript:void(0);">守护管理</a></li>
                                <li data-show="fans_cion"><a href="javascript:void(0);">粉丝徽章</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="my_room_auditor">
                        <!-- 房间管理 s -->
                        <div class="add_wrap" id="addWrap"><p style="width:100%;height:50px;line-height:50px;text-align:center;color:#666666">还没有管理的房间</p></div>
                        <!-- 房间管理 e -->
                        <!-- 禁言记录 s -->
                        <div class="ban_wrap" style="display:none;" id="banWrap">
                            <div class="mod-hd">
                                <a href="javascript:void(0);" class="back-to" id="backIndex">返回</a>
                                <h3 class="my_protect_h3">操作记录</h3>
                            </div>
                            <div class="head_wrap">
                                <div class="common_input input_ban_time">
                                    <!-- <input type="text" value="2016-03-01" id="banOptime" /> -->
                                    <label>
                                       <input class="Wdate" type="text" id="banOptime" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',onpicked:globalParam.updateData})" value="">
                                   </label>
                                </div>
                                <!-- <select class="common_select" id="banTime" onchange="globalParam.updateData();">
                                    <option value="">禁言时长</option>
                                    <option value="1800">30分钟</option>
                                    <option value="86400">1天</option>
                                    <option value="259200">3天</option>
                                    <option value="604800">7天</option>
                                </select> -->
                                <select class="common_select" id="banOption" onchange="globalParam.updateData();">
                                    <option value="">全部封禁操作</option>
                                    <option value="0">禁止发言</option>
                                    <option value="1">封入黑名单</option>
                                </select>
                                <select class="common_select" id="roomMen" onchange="globalParam.updateData();"></select>
                                <div class="common_input input_ban_op_yy" style="width:120px;">
                                    <input type="text" placeholder="搜索房管YY号" id="banOpYy" style="width:100%;">
                                </div>
                                <div class="common_input input_ban_yy">
                                    <input type="text" placeholder="搜索禁言用户YY号" id="banYy">
                                </div>
                                <a href="javascript:void(0);" class="common_btn search_man" id="search">搜索</a>
                            </div>
                            <table cellpadding="0" cellspacing="0" class="con_table" id="banList">
                                <tbody><tr>
                                    <th>时间</th>
                                    <th>封禁操作</th>
                                    <th>房管</th>
                                    <th>封禁时长</th>
                                    <th>封禁用户</th>
                                    <th>用户发言</th>
                                    <th>封禁理由</th>
                                    <th>操作</th>
                                </tr>
                                <!-- <tr class="active">
                                    <td>2016-03-01</td>
                                    <td>差不多先生（909014040）</td>
                                    <td>30分钟</td>
                                    <td>哈哈先生（909014040）</td>
                                    <td>看片 +QQ1234567891011</td>
                                    <td>
                                        <a href="javascript:void(0);">解禁</a>
                                    </td>                   
                                </tr> -->

                            </tbody></table>
                            <p class="page_wrap" id="banPageWrap"></p>
                        </div>
                        <!-- 禁言记录 e -->
                    </div>
                    <!-- 守护管理s -->
                    <div id="defend_admin" style="display:none;">
                        <!-- 守护特权  -->
                        <div class="mod mod-basic">
                            <div class="mod-hd">
                                <h4>守护特权</h4>
                                <span class="line line-income"></span>
                            </div>
                            <!-- 没有守护特权 -->
                            <!-- <div class="no_protect"></div> -->
                            <a href="http://www.huya.com/public/main/html/sh2.html" class="no_protect" target="_blank"></a>
                            <!-- 有守护特权 -->
                            <div class="protect hidden">
                                <div class="top">
                                    <p>我守护的主播</p>
                                    <a href="http://i.huya.com/index.php?m=Guard&amp;do=guardProfileList" class="btn-link protect_m">查看守护列表</a>
                                </div>
                                <ul class="protect_m">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 守护管理e -->
                    <!-- 粉丝徽章s -->
                    <div class="mod mod-basic" id="fans_cion" style="display:none;">
                        <div class="mod-hd">
                            <h4>粉丝徽章</h4>
                            <span class="line line-income"></span>
                        </div>
                                                <a class="no_fans" href="http://hd.huya.com/0301fans/index.html" target="_blank">
                            <div class="top">
                                <p>我尚未拥有任何粉丝徽章</p>
                            </div>
                        </a>
                                            </div>
                    <!-- 粉丝徽章e -->
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- 粉丝徽章弹窗 -->
    <div class="fans_box">
        <div class="box_top">
            <div class="fans_lev">
                <i class="fans-level"></i>
            </div>
            <a href="javascript:void(0);" class="close">关闭</a>
        </div>
        <p>主播昵称：<span class="zhubo_nick" style="color:#333;">排名第一的王者妹妹</span></p>
        <p>亲密度排名：<span class="zhubo_paiming" style="color:#FF8800;">300</span></p>
        <div class="num"><span>亲密度：</span><span class="contact"><span class="part"></span></span><span class="zhubo_qinmidu">2520/4920</span></div>
        <div class="box_bot">
            <a href="javascript:void(0);" class="btn" id="use_fans">佩戴徽章</a>
            <!-- <a href="javascript:void(0);" class="btn del_fans">删除徽章</a> -->
        </div>
    </div>
    <!-- 删除粉丝徽章弹窗 -->
    <div class="fans_del">
        <div class="box_top">
            <a href="javascript:void(0);" class="close">关闭</a>
        </div>
        <div class="warn">您确定要删除该粉丝徽章？</div>
        <p>徽章删除后将无法找回，针对该主播的粉丝等级和亲密度也将清空</p>
        <div class="box_bot">
            <a href="javascript:void(0);" class="btn sure_fans">确定</a>
            <a href="javascript:void(0);" class="btn quit_fans">取消</a>
        </div>
    </div>
    <!-- 隐藏守护弹窗 -->
    <div class="hide_sh">
        <div class="box_top">
            <a href="javascript:void(0);" class="close">关闭</a>
        </div>
        <div class="warn">确定要隐藏该主播守护关系？</div>
        <p>确定在贵宾席上隐藏你与该主播的守护关系？隐藏后可恢复显示</p>
        <div class="box_bot">
            <a href="javascript:void(0);" class="btn sure_hide_sh" data-hide="">确定</a>
            <a href="javascript:void(0);" class="btn quit_hide_sh">取消</a>
        </div>
    </div>
<script type="text/javascript" src="http://a.dwstatic.com/huya/icenter/2.6/js/my_room_auditor.js"></script>
<script type="text/javascript" src="http://a.dwstatic.com/huya/icenter/2.15/js/privilege_admin.js"></script>
<script type="text/javascript">
    // 统计上报
    $("body").on('click', '.clickstat',function(event){
        var that = $(this);

        report({
            eid:that.attr('eid'),
            eid_desc:that.attr('eid_desc')
        });
    });

</script>
    
   @endsection