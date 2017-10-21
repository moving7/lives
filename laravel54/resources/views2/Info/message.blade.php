@extends('i')
@section('content')

    <div class="main-col">
        <div class="scroll-content">
          <div class="mod">
            <div class="mod-hd">
                <h3>我的消息</h3>
                <div class="msg-desc"><i></i><p>您还没有收到新的私信。</p></div>
            </div>
            <div class="mod-bd">
              <div class="mod-tab-content">
                <div class="mod-tab">
                  <div class="mod-tab-hd">
                      <ul class="mod-tab-trigger J_nav">
                          <li class="selected"><a href="javascript:void(0);">系统消息<span class="system-msg-num" id="system-msg-num"></span></a></li>
                          <li><a href="javascript:void(0);">官方公告<span class="offical-msg-num" id="offical-msg-num"></span></a></li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="mod-bd">

              <!-- 系统消息s -->
                <div class="mod-message system-message" tabindex="1" style="overflow: hidden; outline: none;">
                  
                

<!-- 无消息 -->
<span class="no-msg-tit">当前暂无消息！</span>
</div>
              <!-- 系统消息e -->
              <!-- 官方消息s -->
                <div class="mod-message offical-message" style="display: none; overflow: hidden; outline: none;" tabindex="2">

                

<!-- 无消息 -->
<span class="no-msg-tit">当前暂无消息！</span>
</div>
              <!-- 官方消息e -->

            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- 操作弹窗 -->
  <div class="box general-box" id="general-box">
      <div class="box-hd">
          <h3 class="title">操作</h3>
          <a href="javascript:;" class="btn-close J_btnClose" title="关闭">关闭</a>
      </div>
      <div class="box-bd">
          <iframe style="width:470px;height:335px;" src="" frameborder="0"></iframe>
      </div>
  </div>
  <!-- 放大图片 -->
  <div class="enlarge-img" id="enlarge-img">
    <img src="">
  </div>
  <div class="mask_bg"></div>
   @endsection