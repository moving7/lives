@extends('i')
@section('content')

        <div class="main-col">
            <div class="mod">
                <div class="mod-hd">
                    <h3>等级成长</h3>
                </div>
                <div class="user-level-header">
                    <img class="header-img" src="http://huyaimg.msstatic.com/avatar/1023/36/e18474aadc0d1e137aa9f84aac69ff_180_135.jpg" height="95" width="95">
                    <div class="personal-information">
                        <p class="nick">
                            <span>♥      </span>
                            <i class="user-level-icon user-level-icon-1"></i>
                        </p>
                        <div class="grow-level">
                            <span>LV1</span>
                            <p class="grow-level-contact">
                                <span class="grow-level-number">0/200</span>
                                <span class="grow-level-part" style="width:0%;"></span>
                            </p>
                            <span>LV2</span>
                        </div>
                                                    <p class="grow-level-gain">今日还可获得<span>200</span>&nbsp;点经验值</p>
                                            </div>
                </div>
                   
                <!-- 新手任务 -->
                    <div class="novice-task">
                        <div class="task-head">
                            <h4>新手任务</h4>
                            <p class="line"></p>
                        </div>
                        <ul class="task-content" id="task-content">
                                                            <li class="task-list task-id141">
                                    <img src="http://img.dwstatic.com/huya/questcenter/icon/xinshou_dingyue.png" height="40" width="40" alt="订阅主播">
                                    <div class="task-desc">
                                        <p>订阅主播</p>
                                        <p class="task-desc-experience">(+20EXP)</p>
                                    </div>
                                                                            <!-- 进行中 -->
                                        <div class="task-status ststus-doing">
                                            <a href="javascript:;">0/5</a>
                                        </div>
                                                                    </li>
                                                            <li class="task-list task-id142">
                                    <img src="http://img.dwstatic.com/huya/questcenter/icon/xinshou_touxiang.png" height="40" width="40" alt="设置头像">
                                    <div class="task-desc">
                                        <p>设置头像</p>
                                        <p class="task-desc-experience">(+20EXP)</p>
                                    </div>
                                                                                                                        <!-- 领取 -->
                                            <div class="task-status ststus-receive">
                                                <a href="javascript:;" data-exper="20" task-id="142">领取</a>
                                            </div>
                                                                                                            </li>
                                                            <li class="task-list task-id171">
                                    <img src="http://img.dwstatic.com/huya/questcenter/icon/xinshou_songli.png" height="40" width="40" alt="送出玉兔">
                                    <div class="task-desc">
                                        <p>送出玉兔</p>
                                        <p class="task-desc-experience">(+20EXP)</p>
                                    </div>
                                                                            <!-- 进行中 -->
                                        <div class="task-status ststus-doing">
                                            <a href="javascript:;">0/1</a>
                                        </div>
                                                                    </li>
                                                            <li class="task-list task-id170">
                                    <img src="http://img.dwstatic.com/huya/questcenter/icon/xinshou_ewai.png" height="40" width="40" alt="额外奖励">
                                    <div class="task-desc">
                                        <p>额外奖励</p>
                                        <p class="task-desc-experience">(+30EXP)</p>
                                    </div>
                                                                            <!-- 进行中 -->
                                        <div class="task-status ststus-doing">
                                            <a href="javascript:;">1/3</a>
                                        </div>
                                                                    </li>
                                                    </ul>
                        <div class="novice-task-copyright">
                            <p>提示：领取新手任务全部奖励，即可开启每日推荐任务，获得更多经验值</p>
                        </div>
                    </div>
                                <!-- 快速升级 -->
                <div class="rapid-version">
                    <div class="task-head">
                        <h4>快速升级</h4>
                        <p class="line"></p>
                    </div>
                    <ul class="rapid-version-content">
                        <li>
                            <i class="rapid-version-list-1"></i>
                            <p class="rapid-version-list-title">做任务</p>
                            <p>完成每日任务推荐</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-2"></i>
                            <p class="rapid-version-list-title">领宝箱</p>
                            <p>每个宝箱都有经验值</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-3"></i>
                            <p class="rapid-version-list-title">送礼物</p>
                            <p>送给主播任意礼物</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-4"></i>
                            <p class="rapid-version-list-title">充金豆</p>
                            <p>金豆充值礼包经验多多</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-5"></i>
                            <p class="rapid-version-list-title">拥有特权</p>
                            <p>开通续费贵族/守护</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- 领取任务按钮弹窗 -->
<div class="box getTask" id="getTask">
    <div class="box-hd">
        <h3 class="title">任务-领取</h3>
        <a href="javascript:;" class="btn-close J_btnClose" title="关闭">关闭</a>
    </div>

    <div class="box-bd">
        <div class="cont cont-tips">
            
        </div>
        <div class="box_bot">
            <a href="javascript:void(0);" class="btn">确定</a>
        </div>
    </div>
</div>
<div class="mask_bg"></div>
<script type="text/javascript" src="//a.msstatic.com/huya/icenter/main/js/user_level_13751e2.js"></script>
    
   @endsection