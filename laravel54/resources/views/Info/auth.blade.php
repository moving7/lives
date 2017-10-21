@extends('i')
@section('content')


    <div class="main-col">
        <div class="scroll-content">
            <div class="mod">

                <div class="mod-hd">
                    <h3>虎牙认证</h3>
                </div>
                <!-- 虎牙认证操作提示 add by shixubo -->
                    <p class="start_p">★ 推荐认证方式：下载虎牙助手app，3分钟快速完成虎牙认证</p>
                    <div class="h5_head">
                      <span>操作指引</span>
                    </div>
                    <ul class="ques_wrap">
                        <li>
                            <p>1、下载并安装虎牙助手app客户端（请确认虎牙助手app是最新版本）</p>
                        </li>
                        <li>
                            <p>2、打开app并使用虎牙账号登录</p>
                        </li>
                        <li>
                            <p>3、点击“头像”进入“个人中心”，在“个人中心”完成虎牙认证</p>
                        </li>
                        <li>
                            <p>4、认证教程：<a href="http://blog.huya.com/product/70" target="_blank">http://blog.huya.com/product/70</a></p>
                        </li>
                    </ul>
                    <img class="qr_code" src="http://a.msstatic.com/huya/icenter/2.15/img/QR_code.png" alt="虎牙App">
                    <div class="h5_head">
                      <span>示意图</span>
                    </div>
                    <img src="http://a.msstatic.com/huya/icenter/2.15/img/sign_page_2.jpg" alt="认证方式">
                    <p class="point_p">· 备用认证方式：必须完成高级实名认证，并且完善主播资料后才算完成虎牙认证</p>
                <!-- 虎牙认证操作提示end -->
                <div class="h5_head">
                  <span>高级实名认证</span>
                </div>
                <p id="warning"></p>
                                <p id="anth_desc">高级实名认证正在维护中，请使用上述的推荐认证方式：下载虎牙助手app进行认证</p>
                <ul id="anth_main" class="auth_type">
                    <li>
                        <p class="p_1">简单认证</p>
                        <p class="p_2"></p>
                        <p class="p_3">只需提交姓名和身份证信息，可提高账号安全等级</p>
                    </li>
                    <li class="active">
                        <p class="p_1">高级认证</p>
                        <p class="p_2"></p>
                        <p class="p_3">需要提交姓名、身份证和银行卡信息，仅适用于虎牙主播用户</p>
                        <a href="https://aq.yy.com/index.do?cbk=/realname/index.do?startEnhanced=1" target="_blank" class="go_real_auth">开始高级实名认证</a>
                    </li>
                </ul>
                                <div class="h5_head">
                  <span>完善主播资料</span>
                </div>
                                 <!-- <p class="real_auth_tips">（主播头像可到主播设置中修改，其他资料一经提交不得修改，请谨慎填写）</p> -->
                 <table cellpadding="0" cellspacing="0" border="0" class="info_set">
                    <tbody><tr>
                        <td class="td_1">主播昵称：</td>
                        <td class="td_2">
                            <div>
                                <input type="text" class="phone_num" id="anchor_nick" placeholder="控制在6个汉字以内最佳">
                                <!-- <span>（限10个汉字或20个字符以内）</span> -->
                                <span id="checkNickWord" style="display:none;">
                                    <i style="background-image:url(../main/statics/img/icon_notive.png);display: inline-block;width: 16px;height: 16px;vertical-align: middle;margin-top: -3px;"></i>
                                    <span style="color:#FF6D0D;">你的昵称过长或含有非法字符</span>
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_1"></td>
                        <td class="td_2">
                            <div style="color:red;">（主播昵称提交后将无法修改，请谨慎填写）</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_1">直播品类：</td>
                        <td class="td_2">
                            <select class="live_type" id="liveType">
                                <option value="1">网游竞技</option>
                                <option value="2">单机热游</option>
                                <option value="3">娱乐综艺</option>
                                <option value="4">手游休闲</option>
                            </select>
                            <span>（根据兴趣选择，仅作运营人员参考，不影响实际开播权限）</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_1" style="vertical-align: top;padding-top: 34px;">头像：</td>
                        <td class="td_2 td_img">
                            <!-- 上传头像 s -->
                            <div class="data-form">
                                <div class="upload-file">
                                    <div class="flash-upload-img">
                                            <div id="avatar_upload_file" class="uploadify" style="height: 30px; width: 70px;"><object id="SWFUpload_0" type="application/x-shockwave-flash" data="base/uploadify/uploadify.swf?preventswfcaching=1507540932894" width="70" height="30" class="swfupload" style="position: absolute; z-index: 1;"><param name="wmode" value="transparent"><param name="movie" value="base/uploadify/uploadify.swf?preventswfcaching=1507540932894"><param name="quality" value="high"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="flashvars" value="movieName=SWFUpload_0&amp;uploadURL=%2Findex.php%3Fm%3DCaptcha%26do%3DsaveImg&amp;useQueryString=false&amp;requeueOnError=false&amp;httpSuccess=&amp;assumeSuccessTimeout=30&amp;params=&amp;filePostName=avatar&amp;fileTypes=*.gif%3B%20*.jpg%3B%20*.png%3B*.jpeg&amp;fileTypesDescription=Image%20Files&amp;fileSizeLimit=1024KB&amp;fileUploadLimit=0&amp;fileQueueLimit=999&amp;debugEnabled=false&amp;buttonImageURL=%2F&amp;buttonWidth=70&amp;buttonHeight=30&amp;buttonText=&amp;buttonTextTopPadding=0&amp;buttonTextLeftPadding=0&amp;buttonTextStyle=color%3A%20%23000000%3B%20font-size%3A%2016pt%3B&amp;buttonAction=-110&amp;buttonDisabled=false&amp;buttonCursor=-2"></object><div id="avatar_upload_file-button" class="uploadify-button " style="height: 30px; line-height: 30px; width: 70px;"><span class="uploadify-button-text">上传图片</span></div></div><div id="avatar_upload_file-queue" class="uploadify-queue"></div><div style="text-align: left;position:static;color:red;"></div>
                                            <!-- <br /> -->
                                            <!-- <img id="user_old_avatar" class="face" src="http://huyaimg.msstatic.com/avatar/1023/36/e18474aadc0d1e137aa9f84aac69ff_180_135.jpg" onerror="this.onerror='';this.src='http://huyaimg.msstatic.com/cdnimage/default/big_default_avatar.jpg'" > -->
                                            <div id="avatarpreviewdiv" style="line-height: 0px;width:140px;height:140px;overflow:hidden; float:right;display:none;clear:none">
                                                <img style="float:left;" id="avatarpreview2">
                                            </div>
                                            <span style="clear:none;text-align: top;">
                                                <button id="avatarSureButton" onclick="profile_util.saveJcropImg('avatar');return false;" style="float:right;display: none;border: 0 none;height: 31px; overflow: hidden;background:url(http://i.huya.com/base/images/base-sprite.png)  no-repeat -300px -160px;vertical-align:-7px;width:70px;position:static;margin:150px -70px 0 0; ">确定</button><button id="avatarFailButton" onclick="profile_util.cancelJcropImg('avatar');return false;" style="float:right;display: none;border: 0 none;height: 31px; overflow: hidden;background:url(http://i.huya.com/base/images/base-sprite.png)  no-repeat -300px -199px;vertical-align:-7px;width:70px;position:static;margin:150px -141px 0 100px;">取消</button>
                                            </span>
                                            <div id="avatar_preview" style="width:350px;clear:none;text-align: center;line-height: 0px;"></div>

                                            <input type="hidden" id="x" name="x" value="0">
                                            <input type="hidden" id="y" name="y" value="0">
                                            <input type="hidden" id="w" name="w" value="140">
                                            <input type="hidden" id="h" name="h" value="140">
                                            <input type="hidden" name="xywh" value="" id="xywh" allownull="false">
                                            <input type="hidden" name="avatar_id" id="avatar_id" value="" allownull="false">
                                    </div>
                                </div>
                            </div>
                            <!-- 上传头像 e -->
                            <div class="img_wrap" id="imgWrap">
                                <img src="http://huyaimg.msstatic.com/avatar/1023/36/e18474aadc0d1e137aa9f84aac69ff_180_135.jpg" onerror="this.onerror='';this.src='http://huyaimg.msstatic.com/cdnimage/default/big_default_avatar.jpg'" alt="user">
                            </div>
                            <!-- <a href="javascript:void(0);" class="upload_btn" title="上传图片" id="avatar_upload_file">上传图片</a> -->
                            <span class="upload_tips">支持.jpg .jpeg .bmp .gif格式照片，大小不超过2M。（请使用ie9或更高级版本浏览器上传）</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_1">&nbsp;</td>
                        <td class="td_2">
                            <a href="javascript:void(0);" title="提交" class="sub_info" id="subInfo">提交</a>
                        </td>
                    </tr>
                 </tbody></table>
                 


                <p class="ques_head">常见问题解决<span><img src="../main/statics/img/ques_icon.png"></span></p>
                <ul class="ques_wrap">
                    <li>
                        <p class="p_1">1、什么是虎牙认证？</p>
                        <p class="p_2">为适应现阶段业务发展需要，虎牙直播已推出新版虎牙主播认证系统。必须完成高级实名认证，
并且完善主播资料后才算完成虎牙认证。通过虎牙认证的主播将获得更多曝光、礼物分成、签约公会等一系列特权。</p>
                    </li>
                    <li>
                        <p class="p_1">2、认证时填写的直播品类提交后，就只能直播该品类吗？</p>
                        <p class="p_2">不是，认证填写的直播品类只是方便虎牙运营团队了解主播直播情况，不影响实际直播品类，建议填写想要直播的品类即可。
                        </p>
                    </li>
                    <li>
                        <p class="p_1">3、虎牙认证的银行卡跟佣金提现的银行卡有冲突吗？</p>
                        <p class="p_2">不冲突，虎牙认证验证的银行卡信息只是为了核实本人信息，与佣金提现的银行卡无关。</p>
                    </li>
                    <li>
                        <p class="p_1">4、当udb.yy.com显示高级实名认证已经通过而虎牙认证页面显示高级实名认证未通过时，请检查是否同一个yy号登录。</p>
                        <p class="p_2">关于新版认证的任何问题可联系：YY 80176 80321</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
<script type="text/javascript">
$(function(){
    $("#avatar_upload_file").uploadify({
        'buttonText' : '上传图片',
        'fileSizeLimit' : '1024KB',
        'width'    : 70,
        'height' :30,
        'fileObjName' : 'avatar',
        'fileTypeDesc' : 'Image Files',
        'fileTypeExts' : '*.gif; *.jpg; *.png;*.jpeg', 
        'swf'           : 'base/uploadify/uploadify.swf',
        'uploader'      : 'index.php?m=Captcha&do=saveImg',
        'onUploadError' : function(file, errorCode, errorMsg, errorString) {
            alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
        },
        'onUploadStart' : function(file) {
            window.console && console.log("上传开始");
            profile_util.cancelJcropImg('avatar');
        },
        'onUploadSuccess' : function(file, data, response) {
            window.console && console.log("上传成功");
            if (response) {
               // 隐藏原图片和提示
               $('#imgWrap').hide();


                $("#avatar_upload_file-queue").hide();
                $("#avatar_preview img").remove();
        
                var obj = $.parseJSON(data)
                var imgUrl = obj.img;
                var imgKey = obj.file;
                profile_util.previewImg(imgUrl, 500, 'avatar', imgKey,'');
                $("#avatarpreviewdiv").show().css('float','right');
                $("#avatarSureButton").show();
                $("#avatarFailButton").show();
                $("#avatarpreview2").attr("src",imgUrl).css('max-width','none'); 
                profile_util.JcropAvatar();
            }
        } 
    });

    $('#avatarSureButton').on('click',function(){
        // $('#imgWrap').hide();
    });

    $('#subInfo').on('click',function(){
        var liveType = $('#liveType').val(),
            mobile = $.trim($('#phoneNum').val()),
            avatar_id = $('#avatar_id').val(),
            xywh = $('#xywh').val(),
            anchor_nick = $('#anchor_nick').val();
        //主播昵称验证
        var tmpStr = anchor_nick.replace(/[\u4e00-\u9fa5]/gi,"aa"),//使用英文字符替换中文
            tmpStrLen = tmpStr.length;
        if(tmpStrLen > 20){//验证长度
            //alert("您的昵称过长");
            $("#checkNickWord").show();
            return;
        }else{
            $("#checkNickWord").hide();
        }
        var testNick = /^(?!\s)(?!.*?\s$)[a-zA-Z0-9\u4e00-\u9fa5\-\、]+$/;
        if(!testNick.test(anchor_nick)){
            //alert("昵称含有非法字符");
            $("#checkNickWord").show();
            return;
        }else{
            $("#checkNickWord").hide();
        }
        

        if(!avatar_id){
            alert("请上传头像！");
            return;
        }

        if(!xywh){
            alert("上传头像后，请点击确定按钮！");
            return;
        }

        $.post( indexUrl + "index.php?m=ProfileAuth&do=saveInfo",{
            liveType:liveType,
            avatar_id:avatar_id,
            xywh:xywh,
            nick:anchor_nick
        },function(res){
            window.console && console.log("上传头像返回：");
            var res = $.parseJSON(res);

            if(res.status === 200){
                alert('已提交成功！');
                location.reload();
            }else{
                alert('提交失败：' + res.message);
            }
        });

    });
    //不支持placeholder
    if(!placeholderSupport()){
        $("#anchor_nick").after("<span>（控制在6个汉字以内最佳）</span>");
    }
    function placeholderSupport() {
        return 'placeholder' in document.createElement('input');
    }
    //IE兼容placeholder
    /*if($.browser.msie) { 
        $(":input[placeholder]").each(function(){
        $(this).placeholder();
        });
    }*/

    });
</script>
   
   @endsection