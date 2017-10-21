@extends('i')
@section('content')

        <div class="main-col">
            <div class="scroll-content">
                <div class="mod">
                    <div class="mod guizu">
                        <div class="mod-hd">
                            <a href="http://i.huya.com/" class="back-to">返回</a>
                            <h3 style="border-left: none;">贵族特权</h3>
                        </div>
                        <div class="mod-bd" style="margin-top:20px;">
                            <a href="http://hd.huya.com/guizu/" target="_blank">
                                <img width="780" height="240" alt="点击查看贵族特权详情" src="http://assets.dwstatic.com/project/yytv/center/2.9.1/img/guizu-banner.jpg">   
                            </a>

                            <div class="mod mod-basic mod-wode-tequan" style="margin-top:20px;">
                                <div class="mod-hd">
                                    <h4>我的特权</h4>
                                    <span class="line" style="left:70px;"></span>
                                    <a href="http://hd.huya.com/guizu/" target="_blank" class="btn-basic">查看贵族特权</a>
                                </div>
                                <div class="mod-bd" id="nobleInfo" style="margin-bottom:80px; display:none; position: relative;">
                                    <div class="biaoji">
                                        <div class="biaoji-tu">
                                            <div id="biaoji_tu"></div>
                                            <div class="biaoji-shuoming" id="nobleName"></div>
                                        </div>                                   
                                    </div>
                                    <div class="qixian">
                                        <div class="info">为您办理开通的主播：<span id="pName"></span></div>
                                        <div class="info">有效期至：<span id="validDate"></span></div>

                                        <div class="mini-info">
                                            注：有效期前续费，仅需 <span class="num" id="onlyNeedYb"></span> Y币，节省 <span class="num" id="saveYb"></span> Y币，
                                            续费成功立赠价值 <span class="num" id="rebackYb"></span> Y币金豆券。
                                        </div>

                                        <div class="btn-group" style="text-align:left;margin-top:10px;">
                                            <a href="javascript:;" class="btn btn-basic" id="renewBtn">马上续费</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="kong" id="kong">
                                    尚未开通贵族服务。
                                </div>
                            </div>

                            <div class="mod mod-basic mod-banli-tequan" style="display:none;">
                                <div class="mod-hd">
                                    <h4>通过我办理的特权</h4>
                                    <span class="line" style="left:125px;"></span>
                                </div>
                                <div class="mod-bd">
                                    <table id="presentTable">
                                        <thead>
                                            <tr style="background: #f2f3f4;">
                                                <th width="20%">昵称</th>
                                                <th width="20%">YY号</th>
                                                <th width="20%">
                                                    <a href="javascript:;" id="openServiceSort" data-sort="0" data-type="level">
                                                        开通服务
                                                        <span class="arrow"></span>
                                                    </a>
                                                </th>
                                                <th width="20%">
                                                    <a href="javascript:;" id="validDateSort" data-sort="0" data-type="date">
                                                        到期时间
                                                        <span class="arrow"></span>
                                                    </a>
                                                </th>
                                                <th width="20%">提成</th>
                                            </tr>
                                        </thead>
                                        <tbody id="presentNobleTable">
                                            <tr><td colspan="5">数据加载中...</td></tr>
                                        </tbody>
                                    </table>
                                    <div class="mod-page" id="presentNobleTablePage" style="display:none;">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
<style>
    .j-pop{
        color:#e74c3c;margin: 10px;display: inline-block;
    }
    /*.box{display:block;}*/
</style>
<div class="pop-box-content">
    <div class="box" id="popup-win1">
        <div class="box-hd">
            <h3 class="title">解约金记录</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>
        <div class="box-bd">
            <table class="record">
                <tbody><tr style="background: rgb(255, 255, 255);">
                    <th>时间</th>
                    <th>解约频道</th>
                    <th>金额</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                <tr style="background: rgb(255, 249, 232);">
                    <td>2014.04.08 16:00</td>
                    <td>987654321</td>
                    <td><span class="num">￥20,000</span></td>
                    <td><span class="status-on">扣款中</span></td>
                    <td><a href="#1">刷新</a></td>
                </tr>
                <tr style="background: rgb(255, 255, 255);">
                    <td>2014.04.08 16:00</td>
                    <td>987654321</td>
                    <td><span class="num">￥20,000</span></td>
                    <td><span class="status-complete">解约成功</span></td>
                    <td><a href="#1">刷新</a></td>
                </tr>
                <tr style="background: rgb(255, 249, 232);">
                    <td>2014.04.08 16:00</td>
                    <td>987654321</td>
                    <td><span class="num">￥20,000</span></td>
                    <td><span class="status-on">扣款中</span></td>
                    <td><a href="#1">刷新</a></td>
                </tr>
                <tr style="background: rgb(255, 255, 255);">
                    <td>2014.04.08 16:00</td>
                    <td>987654321</td>
                    <td><span class="num">￥20,000</span></td>
                    <td><span class="status-on">扣款中</span></td>
                    <td><a href="#1">刷新</a></td>
                </tr>
                <tr style="background: rgb(255, 249, 232);">

                </tr>
            </tbody></table>

        </div>

    </div>


    <div class="box" id="popup-win2">
        <div class="box-hd">
            <h3 class="title">解除签约</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-sign">
                <p class="tips-single content_span">您确定与<span class="em">【网易官方】英雄三国（9000012频道）</span>解除签约？</p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>


    <div class="box" id="popup-win3">
        <div class="box-hd">
            <h3 class="title">验证码</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-verify">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">

                    <div class="form-group">
                        <label class="l-verify">请输入验证码：</label>
                        <input type="text" class="verify-code">
                        <img src="http://i.huya.com/main/statics/img/verify_code.jpg" class="v-code">
                    </div>

                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>


    <div class="box" id="popup-win4">
        <div class="box-hd">
            <h3 class="title">解除签约</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-action">
                        <label class="g-radio">
                            <input name="unSignVerifyType" checked="checked" value="1" type="radio">
                            <span>协议解约</span>
                        </label>
                        <label class="g-radio">
                            <input name="unSignVerifyType" value="2" type="radio">
                            <span>强制解约</span>
                        </label>

                    </div>
                    <p class="tips-m content_span"><i class="icon-mini icon-notices"></i>双方协议解约，不影响任何一方利益。</p>
                    <p id="force4" class="tips-m " style="display:none">
                        <i id="force4" class="icon-mini icon-notices"></i>强制解约需要缴纳解约金<span id="deductGoldbeanNum"></span>Y币
                    </p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>


    <div class="box" id="popup-win5">
        <div class="box-hd">
            <h3 class="title">解除签约</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-action">
                        <label class="g-radio">
                            <input type="radio" name="unSignVerifyType" id="unSignVerifyTypeId" checked="checked" value="1" onclick="ow_util.setUnSignVerifyValue(this)">
                            <span>协议解约</span>
                        </label>
                        <label class="g-radio">
                            <input type="radio" name="unSignVerifyType" value="2" onclick="ow_util.setUnSignVerifyValue(this)">
                            <span>强制解约</span>
                        </label>

                    </div>
                    <p id="consult" class="tips-m">
                        <i class="icon-mini icon-notices"></i>双方协议解约，不影响双方任何利益
                    </p>
                    <p id="force" class="tips-m " style="display:none">
                        <i class="icon-mini icon-notices"></i>强制解约无须主播确认但会扣除您<span class="num content_span">10,000</span>个金元宝
                    </p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>


    <div class="box" id="popup-win6">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-waring"></i>
                    <span> 抱歉，进行官方频道认证前，必须先进行频道认证。</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"><a href="#1" class="btn btn-verify">立即认证</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>
    
    <!-- 修改头像验证 -->
    <div class="box" id="AccessTocken">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="javascript:void(0);" onclick="NAV_UTIL.logout();" class="btn btn-confirm">重新登录</a></span>
                </div>

            </div>

        </div>
    </div>

    <div class="box" id="popup-win7-1">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>


    <div class="box" id="popup-win7">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>
    
    <div class="box" id="popup-win7-2">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>
    
    <div class="box" id="popup-win7-3">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">抱歉，您的余额不足，请先充值！</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">去充值</a></span>
                </div>

            </div>

        </div>
    </div>

    <div class="box" id="popup-win8">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-success"></i>
                    <span>您的资料提交完成，审核将在7个工作日内完成。</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div></div>


    <div class="box" id="popup-win9">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-success"></i>
                    <span class="end">与【网易官方】英雄三国（YY：9121212）解约成功，扣取金豆<span class="num">121,212个</span></span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div></div>


    <div class="box" id="popup-win10">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="end">与【网易官方】英雄三国（YY：9121212）解约失败！原因是：金豆数量不足。</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div></div>



    <div class="box" id="popup-win11">
        <div class="box-hd">
            <h3 class="title">金豆充值</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-charge">
                <p class="tips-verify">Y币兑换金豆，兑换比率：<strong>1</strong>Y币=<strong>1,000</strong>金豆</p>
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit">请输入购买数量：</label>
                        <input type="text" class="common-input">
                        <span class="inline-text">Y币</span>
                        <p class="tips-l">(目前账户剩余<strong>1,000</strong>Y币)</p>
                    </div>
                    <p class="tips-error"><i class="icon-mini mini-error"></i>抱歉，你的余额不足，请先充值</p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-basic">马上兑换</a></span>
                </div>
            </div>

        </div>

    </div>


    <div class="box box-charge" id="popup-win12">
        <div class="box-hd">
            <h3 class="title">金豆兑换</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-golden content_a">
                <p class="tips-verify">金元宝兑换金豆，兑换比率：<strong>1</strong>金元宝=<strong>1</strong>金豆</p>
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit">请输入要兑换的金豆数量：</label>
                        <input type="text" class="common-input">
                        <span class="inline-text">个</span>
                        <p class="tips-l">(目前账户剩余<strong>1,000</strong>金元宝)</p>
                    </div>
                    <div class="form-group">
                        <label class="tit">验证码：</label>
                        <input type="text" class="common-input">
                        <a href="#1" class="get-code">获取验证码</a>
                        <a href="#1" class="get-phone">获取密保手机号</a>

                    </div>
                </form>
                <div class="btn-group">
                    <a href="#1" class="btn btn-confirm">确定</a>
                    <a href="#1" class="btn btn-cancel">取消</a>

                </div>
            </div>

        </div>

    </div>

    <div class="box" id="popup-win13">
        <div class="box-hd">
            <h3 class="title">签约邀请</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-invite" style="width:400px;*width:430px;">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit-i">受邀请人YY号：</label>
                        <input type="text" id="yyid_input" class="invite-input" onchange="ow_util.insertvalue($(this));">
                    </div>
                    <div class="form-group">
                        <label class="tit-i">签约时限：</label>
                        <select class="channel-select" name="selecttime" id="selecttime" style="width: 160px;margin-top: 5px;" onchange="ow_util.insertselect($(this));">
                            <option value="1">1年</option>
                            <option value="2">9个月</option>
                            <option value="3">6个月</option>
                            <option value="4">3个月</option>
                        </select>
                    </div>
                                        <div class="form-group">
                        <label class="tit-i">期待ow提成：</label>
                        <input type="text" id="percent_input" class="invite-input" onkeyup="ow_util.insertPercent($(this));">
                        <span style="font-size:12px;height:30px;line-height:30px;margin-left:2px;">% <i id="percent_tips">比例范围：10%-30%</i></span>
                        <span class="inline-tips" style="*display: block;*margin-top: 36px;">普通公会ow提成为10%，但若公会升级为白金公会，将按此设置比例提成</span>
                    </div>
                    
                    <div class="form-group">
                        <label class="tit-i">邀请信息：</label>
                        <textarea id="message_input" rows="2" cols="30" onkeyup="ow_util.textup('message_input');
                                ow_util.insertMessage($(this));
                                  " onkeydown="ow_util.textdown('message_input', event)"></textarea>
                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>

                </div>
            </div>

        </div>

    </div>


    <div class="box" id="popup-win14">
        <div class="box-hd">
            <h3 class="title">添加普通主播</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-add" style="padding:35px 35px 30px 35px;">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit">请输入YY号：</label>
                        <input id="yyid_input" type="text" class="num-input" onchange="ow_util.insertvalue($(this))">
                    </div>
                    <p>1.添加的主播必须完成虎牙认证。<a href="http://i.huya.com/index.php?m=ProfileAuth" target="_blank">如何完成虎牙认证</a></p>
                    <p>2.添加主播成功后请退出重进频道（直播间）即可开播。</p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>

    <div class="box" id="popup-win15">
        <div class="box-hd">
            <h3 class="title">解除签约</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-total content_a">
                <p>您本月一共获得金豆<strong>1,000</strong>个，请月结：</p>
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-action">
                        <label class="g-radio">
                            <input type="radio">
                            <span>兑换成银豆</span>
                        </label>
                        <label class="g-radio">
                            <input type="radio">
                            <span>兑换为佣金</span>
                        </label>

                    </div>
                    <p class="total">兑换结果：<strong>10,000</strong>个银豆：</p>
                    <p class="tips-m"><i class="icon-mini icon-notices"></i>请在每月2号前完成结算，逾期未处理将默认转为银豆。</p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>


    <div class="box" id="popup-win16">
        <div class="box-hd">
            <h3 class="title">签约提成设置</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-setting">
                                <p>请输入对应签约时限的提成比例，该比例将在成为白金公会之后生效于签约主播。</p>
                                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit-i">签约3个月提成比例：</label>
                        <input id="percent_input_4" type="text" class="common-input" onkeyup="ow_util.insertDefaultPercent($(this), 4)">
                        <span class="inline-text">%</span>
                        <span class="inline-tips" id="inline-tips_4">(10%-30%)</span>
                    </div>
                    <div class="form-group">
                        <label class="tit-i">签约6个月提成比例：</label>
                        <input id="percent_input_3" type="text" class="common-input" onkeyup="ow_util.insertDefaultPercent($(this), 3)">
                        <span class="inline-text">%</span>
                        <span class="inline-tips" id="inline-tips_3">(10%-30%)</span>
                    </div>
                    <div class="form-group">
                        <label class="tit-i">签约9个月提成比例：</label>
                        <input id="percent_input_2" type="text" class="common-input" onkeyup="ow_util.insertDefaultPercent($(this), 2)">
                        <span class="inline-text">%</span>
                        <span class="inline-tips" id="inline-tips_2">(10%-30%)</span>
                    </div>
                    <div class="form-group">
                        <label class="tit-i">签约1年提成比例：</label>
                        <input id="percent_input_1" type="text" class="common-input" onkeyup="ow_util.insertDefaultPercent($(this), 1)">
                        <span class="inline-text">%</span>
                        <span class="inline-tips" id="inline-tips_1">(10%-30%)</span>
                    </div>
                    <div class="form-group">
                    <p class="tips-error "><i class="icon-mini mini-error"></i><span id="setting_tips">请按要求填写签约比例。</span></p>
                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>
    
    <div class="box" id="popup-win17">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify content_span">
                    <i class="icon icon-error"></i>
                    <span>您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">

                </div>

            </div>

        </div>
    </div>

    <!-- 我的消息 马上处理(协议解约)-->
    <div class="box" id="popup-win18">
        <div class="box-hd">
            <h3 class="title">协议解约确认</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-action">
                        <label class="g-radio">
                            <input name="unSignVerifyType" checked="checked" value="1" onclick="ow_util.setUnSignVerifyValue(this);" type="radio">
                            <span>同意</span>
                        </label>
                        <label class="g-radio">
                            <input name="unSignVerifyType" value="2" onclick="ow_util.setUnSignVerifyValue(this);" type="radio">
                            <span>不同意</span>
                        </label>

                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>

    <!-- 我的消息 马上处理（签约确认）-->
    <div class="box" id="popup-win19">
        <div class="box-hd">
            <h3 class="title">签约</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-add">
                <form class="form content_span" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit">频道号：</label>
                        <input type="text" class="num-input" id="channelId_input" value="" disabled="">
                    </div>
                    <div class="form-group">
                        <label class="tit">OW提成比例：</label>
                        <span class="inline-text">%</span>
                    </div>
                    
                    <div class="form-group">
                        <label class="tit">签约时限：</label>
                        <span class="inline-text"></span>
                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>

    <div class="box" id="popup-win20">
        <div class="box-hd">
            <h3 class="title">签约邀请</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-invite">
                <form class="form content_span" action="about:blank" method="get" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit-i">OW提成：</label>
                        <span class="inline-text">%</span>
                    </div>
                    <div class="form-group">
                        <label class="tit-i">你可以复制以下内容给主播：</label>
                        <textarea id="message_output" rows="3" cols="30" onkeyup="ow_util.insertMessage();"></textarea>
                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnClose"> <a id="testCopyMsg" style="position:relative;" href="javascript:void(0);" class="btn btn-confirm">复制并关闭</a></span>
                </div>
            </div>

        </div>

    </div>

    <div class="box" id="popup-win21">
        <div class="box-hd">
            <h3 class="title">比例修改确认</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-action">
                        <label class="g-radio">
                            <input name="is_agree" onclick="profile_util.insertIsAgree(1);" checked="checked" value="1" type="radio">
                            <span>同意</span>
                        </label>
                        <label class="g-radio">
                            <input name="is_agree" value="0" onclick="profile_util.insertIsAgree(0);" type="radio">
                            <span>不同意</span>
                        </label>

                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>
 <div class="box" id="popup-win22">
        <div class="box-hd">
            <h3 class="title">白金频道条款</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd"> 
            <div class="cont cont-tips">
                <p class="tips-verify"><span class="end" style="width:370px">该频道为白金公会，签约该频道后，必须遵守白金公会的相关条例，如下：</span></p>
                <p class="tips-verify"><span class="end" style="width:370px">&nbsp;&nbsp;1.本次申请签约频道为白金公会频道，将激活虎牙白金公会违约金条款，签约期内您将无法单方面与其解约。但您仍可以通过与该频道OW协商达成协议解约或支付违约金强制解约。</span></p>
                <p class="tips-verify"><span class="end" style="width:370px">&nbsp;&nbsp;2.签约期间，虎牙官方禁止使用其他账号进行直播或白金公会公会申请。一经发现，官方将有权禁止该账号在虎牙平台进行表演。</span></p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>
    
    <div class="box" id="popup-win23">
        <div class="box-hd">
            <h3 class="title">解约提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-sign">
                <p class="tips-single content_span">您确定与该频道解除签约？</p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>

    <div class="box" id="popup-win24">
        <div class="box-hd">
            <h3 class="title">签约提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>
        
        <div class="box-bd">
            <div class="cont cont-add">
                <form class="form content_span" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        您确定与该频道签约？
                    </div>
                    <div class="form-group">
                        <label class="tit">频道号：</label>
                        <input type="text" class="num-input" id="channelId_input" value="" disabled="">
                    </div>
                    <div class="form-group">
                        <label class="tit">OW提成比例：</label>
                        <span class="inline-text">%</span>
                    </div>
                    
                    <div class="form-group">
                        <label class="tit">签约时限：</label>
                        <span class="inline-text"></span>
                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">拒绝</a></span>
                </div>
            </div>
    </div>

</div>
    <div class="box" id="popup-win25">
        <div class="box-hd">
            <h3 class="title">签约提成设置</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-setting">
                <p>请输入你和该签约主播的新提成比例。</p>
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit-i">请输入提成比例：</label>
                        <input id="percent_input_ow" type="text" class="common-input" onkeyup="ow_util.insertPercent($(this))">
                        <span class="inline-text">%</span>
                        <span class="inline-tips"></span>
                    </div>
                    <p class="tips-error m-120">签约3个月提成比例:最小10%，最大30%</p>
                    <p class="tips-error m-120">签约6个月提成比例:最小10%，最大30%</p>
                    <p class="tips-error m-120">签约9个月提成比例:最小10%，最大30%</p>
                    <p class="tips-error m-120">签约1年提成比例:最小10%，最大30%</p>
                    <p class="tips-error m-120">签约3年提成比例:最小10%，最大30%</p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>
    
    <div class="box" id="popup-win26">
        <div class="box-hd">
            <h3 class="title">撤回提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-sign">
                <p class="tips-single content_span">您确定要撤回您的签约申请？</p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>
    
    
    <div class="box box-charge" id="popup-win27">
        <div class="box-hd">
            <h3 class="title">金豆兑换</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-golden content_a">
               
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit">你将使用<strong>10</strong>Y币兑换<strong>10000</strong>金豆</label>
                        
                    </div>
                    <div class="form-group">
                        <label class="tit">验证码：</label>
                        <input type="text" class="common-input">
                        <a href="#1" class="get-code">获取验证码</a>
                        <a href="#1" class="get-phone">获取密保手机号</a>

                    </div>
                </form>
                <div class="btn-group">
                    <a href="#1" class="btn btn-confirm">确定</a>
                    <a href="#1" class="btn btn-cancel">取消</a>

                </div>
            </div>

        </div>
    </div>
    
    <div class="box" id="popup-win28">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify content_span">
                    <i class="icon icon-error"></i>
                    <span>您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">

                </div>

            </div>

        </div>
    </div>
    
    <div class="box" id="popup-win29">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-sign">
                <p class="tips-single content_span"></p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">官方登陆</a></span>
                    <span><a target="_blank" href="https://aq.yy.com/p/reg/account.do?appid=21&amp;url=http://www.huya.com/" class="btn btn-cancel">注册</a></span>
                </div>
            </div>

        </div>

    </div>
    
    <div class="box" id="popup-succ">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-success"></i>
                    <span class="content_span">您的资料提交完成，审核将在7个工作日内完成。</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div></div>
     <div class="box" id="popup-error">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>
    <div class="box" id="popup-error2">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>
    
    <!-- 兑换成功后的弹窗 S{} -->
<div id="box_exchange" class="box">
    <div class="box-hd">
        <h3 class="title">提示</h3>
        <a href="javascript:void(0);" class="btn-close J_btnClose" title="关闭">关闭</a>
    </div>

    <div class="box-bd">
        <div class="cont cont-tips">
            <p class="tips-verify">
                <i class="icon icon-success"></i>
                <span class="content_span">恭喜您，成功领取1000金豆！</span>
            </p>
            <div class="btn-group">
                <span class="ui-button J_btnConfirm">
                    <a href="javascript:void(0)" class="btn btn-confirm">确定</a>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="box" id="unsignVerify-popbox-4">
    <div class="box-hd">
        <h3 class="title">短信验证</h3>
        <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
    </div>

    <div class="box-bd">
        <div class="cont">
            <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                <div class="form-action" style="width:290px;margin-left:0;">关键操作需要验证手机号</div>
            </form>
            <div class="btn-group">
                <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm" onclick="ow_util.unsignVerifyUtil.getVerify();">获取验证码</a></span>
                <input id="verify_code" maxlength="10" type="text">
            </div>
            <div class="btn-group" style="margin-top:20px">
                <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm" onclick="ow_util.unsignVerifyUtil.sendVerify();">确定</a></span>
            </div>
        </div>
    </div>
</div>
<!-- }E 兑换成功后的弹窗 -->
    
<!-- 确定签约邀请弹窗 -->
<div class="box" id="popup-box-invite">
    <div class="box-hd">
        <h3 class="title">邀约确认</h3>
        <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
    </div>

    <div class="box-bd">
        <div class="cont" style="padding:0 20px 30px 20px;">
            <p><b>确认向该主播发出邀请吗？</b></p>
            <p>受邀人YY号：<span id="popup-box-invite-yy"></span></p>
            <p>签约年限：<span id="popup-box-invite-year"></span></p>
            <p>OW提成：<span id="popup-box-invite-owtc"></span></p>
            <p><b>注意</b></p>
            <p>官方严禁主播使用非主播本人认证账号开播，若非主播本人认证，虎牙官方将不承认主播与频道的签约关系，双方合法权益将无法得到保障。</p>
            <div class="btn-group">
                <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
            </div>
        </div>
    </div>
</div>

<div class="mask">

</div>





<div class="box custom-popbox-result" id="confirmRenewPopbox" style="">
    <div class="box-hd">
        <h3 class="title">提示</h3>
        <a href="javascript:void(0);" class="btn-close J_btnClose" title="关闭">关闭</a>
    </div>

    <!-- 验证手机 -->
    <div class="box-bd hide" id="validMobile">
        <i class="icon icon-info"></i>
        <p class="info" style="text-align:left;">即将支付 <span class="num payYb"></span> Y币</p>
        <p class="info" style="text-align:left;font-size: 12px; color: #999;">
            为了保障账户安全，请验证手机<span id="phone_number"></span>
        </p>
        <p class="info" style="text-align:left;">
            <label>
                <input type="text" style="width:80px; height:30px; padding-left: 5px" id="captchaInput" placeholder="验证码">
                <a href="javascript:;" id="sendCaptchaBtn" onclick="nobleUtil.sendCaptcha();">获取验证码</a>
                <span id="sendCaptchaInfo"></span>
                <span id="validMobileErrorInfo" style="color:red;"></span>
            </label>
        </p>
        <div class="btn-group">
            <a href="javascript:void(0);" class="btn btn-cancel" onclick="nobleUtil.buyNobleByCaptcha();">确认支付</a>
        </div>
    </div>

    <!-- 绑定手机 -->
    <div class="box-bd hide" id="bindUserMobile">
        <i class="icon icon-info"></i>
        <p class="info" style="text-align:left;">即将支付 <span class="num payYb"></span> Y币</p>
        <p class="info" style="text-align:left;font-size: 12px; color: #999;">
            为了保障账户安全，请先<a href="https://aq.yy.com/mb/mob/index.do" target="_blank">绑定密保手机</a>
        </p>
        <div class="btn-group">
            <a href="javascript:void(0);" class="btn btn-cancel">确认支付</a>
        </div>
    </div>

    <!-- Y币不够， 需要充值 -->
    <div class="box-bd hide" id="notEnoughtYb">
        <i class="icon icon-info"></i>
        <p class="info" style="text-align:left;">即将支付 <span class="num payYb"></span> Y币</p>
        <p class="info" style="text-align:left;font-size: 12px; color: #999;">
           当前账户拥有 <span class="num" id="currentYb"></span> Y币，请充值 <span class="num" id="payNeedYb"></span> Y币。
        </p>
        <div class="btn-group">
            <a href="https://pay.duowan.com/userDepositDWAction.action" target="_blank" class="btn btn-confirm" onclick="nobleUtil.checkRecharge();">前往充值</a>
            <a href="javascript:void(0);" class="btn btn-cancel J_btnClose">取消</a>
        </div>
    </div>

    <!-- 充值加载中 -->
    <div class="box-bd hide" id="loadingRecharge">
        <img src="http://assets.dwstatic.com/project/yytv/center/2.9.1/img/loading2.gif" class="icon" style="margin-right:10px; ">
        <p class="info" style="text-align:left; margin-left:90px; font-size:16px;">请完成充值</p>
        <p class="info" style="text-align:left; margin-left:90px; font-size: 12px; color: #999;">
           自动检测中，请不要关闭此对话框
        </p>
    </div>

    <!-- 充值失败 -->
    <div class="box-bd hide" id="rechargeError">
        <i class="icon icon-info"></i>
        <p class="info" style="text-align:left;">抱歉，充值失败。 </p>
        <p class="info" style="text-align:left;font-size: 12px; color: #999;">
           当前账户拥有 <span class="num" id="currentYb2"></span> Y币，请充值 <span class="num" id="payNeedYb2"></span> Y币。
        </p>
        <div class="btn-group">
            <a href="https://pay.duowan.com/userDepositDWAction.action" target="_blank" class="btn btn-confirm" onclick="nobleUtil.checkRecharge();">前往充值</a>
            <a href="javascript:void(0);" class="btn btn-cancel J_btnClose">取消</a>
        </div>
    </div>

    <!-- 当前贵族身份为活动赠送 -->
    <div class="box-bd hide" id="nobleTypeOne">
        <i class="icon icon-error"></i>
        <p class="info" style="text-align:left;">当前贵族身份为活动赠送，无法续费。</p>
        <p class="info" style="text-align:left;">
            详情请咨询官方工作人员。
        </p>
        <div class="btn-group">
            <a href="javascript:void(0);" class="btn btn-cancel J_btnClose">确定</a>
        </div>
    </div>

    <!-- 支付成功 -->
    <div class="box-bd hide" id="successPay">
        <i class="icon icon-success"></i>
        <p class="info" style="text-align:left; margin-left:60px;">支付成功！</p>
        <p class="info" style="text-align:left; margin-left:60px;">
            返还的的金豆券价值为：<span id="rebackGold" class="num"></span> Y币。
        </p>
        <div class="btn-group">
            <a href="javascript:void(0);" class="btn btn-confirm" onclick="location.reload();">确定</a>
        </div>
    </div>

    <!-- 支付失败 -->
    <div class="box-bd hide" id="errorPay">
        <i class="icon icon-error"></i>
        <p class="info" style="text-align:left; margin-left:60px;">支付失败！</p>
        <p class="info" style="text-align:left; margin-left:60px;" id="errorPayInfo"></p>
        <div class="btn-group">
            <a href="javascript:void(0);" class="btn btn-confirm" onclick="location.reload();">确定</a>
        </div>
    </div>

    <!-- 支付结果查询中 -->
    <div class="box-bd hide" id="loadingPayResult">
        <img src="http://assets.dwstatic.com/project/yytv/center/2.9.1/img/loading2.gif" class="icon" style="margin-right:10px; ">
        <p class="info" style="text-align:left; margin-left:90px; font-size:16px;">支付结果查询中...</p>
        <p class="info" style="text-align:left; margin-left:90px; font-size: 12px; color: #999;">
           支付结果查询中，请不要关闭此对话框
        </p>
    </div>


</div>

<!-- 续费支付框 -->
<div class="box custom-popbox-result renew-pay-popbox" id="renewPopbox" style="">
    <div class="box-hd">
        <h3 class="title">续费</h3>
        <a href="javascript:void(0);" class="btn-close J_btnClose" title="关闭">关闭</a>
    </div>
    <div class="box-bd">
        <div>请选择续费时长</div>
        <form>
            <div class="form-group" id="payYbInputFormGroup">
                <input type="hidden" id="payYbInput">
                <label for="oneMonth" style="margin-right:20px;"><input id="oneMonth" name="renewTime" onclick="setTimeValue(1)" checked="checked" type="radio">一个月</label>
                <label for="threeMonths" style="margin-right:20px;"><input id="threeMonths" name="renewTime" onclick="setTimeValue(3)" type="radio">三个月</label>
                <label for="sixMonths" style="margin-right:20px;"><input id="sixMonths" name="renewTime" onclick="setTimeValue(6)" type="radio">六个月</label>
                <label for="otherMonths" style="margin-right:20px;">
                    <input id="otherMonths" name="renewTime" type="radio">
                    <input id="otherMonthsInput" style="width:30px;height:30px;padding-left:5px;" onkeyup="setTimeValue($(this).val())">个月
                </label>
                <label style="color:red; display:none;" id="timeErrorInfo">请输入有效值</label>
            </div>
            <div class="renew-info">
                <span id="biaoji_tu_2"></span>
                <span class="num" id="biaoji_name_2"></span> 有效期将延长至 <span id="newValidDate"></span>
                <div class="mini-info">
                    (一个月按30天记，有效期最高续满24个月)
                </div>
            </div>
            <div style="font-size: 16px;">
                即将支付 <span class="num" id="needYb"></span> Y币，立返价值 <span class="num" id="returnYbGoldBean">720,000</span> Y币金豆券
            </div>
            <div class="btn-group">
                <a href="javascript:void(0);" class="btn btn-confirm" id="renewConfirmBtn">确认支付</a>
                <a href="javascript:void(0);" class="btn btn-cancel J_btnClose">取消</a>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.0.1/js/profile.js"></script>
<script src="http://assets.dwstatic.com/b=project/yytv/center/2.4/js&amp;f=lego.popupbox.js"></script>
<script src="http://assets.dwstatic.com/project/yytv/center/2.9.1/js/moment.js?t=20150610"></script>
<link rel="stylesheet" type="text/css" href="https://res.duowan.com/pay/auth/web/style.css">
<script src="http://res.duowan.com/pay/auth/js/auth.js"></script>
<script type="text/javascript">
    var embedYyUrl = "http://q.huya.com/yy/";
    window.dataType = "jsonp";
</script>
<script src="http://assets.dwstatic.com/project/yytv/center/2.9.1/js/livepay.js?t=20150610"></script>
<!-- <script src="http://assets.dwstatic.com/project/yytv/center/2.9.1/js/guizutequan.js?t=20150610"></script> -->

<script src="http://a.msstatic.com/huya/icenter/2.5/js/guizutequan.js"></script>
<!-- 展示用户贵族开通主播，以及uid -->
<script src="http://a.msstatic.com/huya/icenter/2.15/js/show_guizutequan.js"></script>
<!-- 展示用户贵族开通主播，以及uid  -->


   @endsection