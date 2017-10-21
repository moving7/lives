
@extends('header')
@section('content')
               <!-- 标签快速选择 -->

                <div class="box-hd clearfix">

                    <h2 class="title"><a href="http://www.huya.com/l">全部直播</a></h2>

                    <div class="filter">
</div>

                </div>

                <div class="box-bd">

                    <ul class="live-list clearfix areafib" id="js-live-list">
                    @foreach($live as $v)
 <li class="game-live-item" gid="1">

 <a href="{{URL::asset('index/details')}}" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"allLive/0/1/1","game_id":"1","ayyuid":"1346609715"}'>

        <img class="pic"  src="/images/<?=$v['room_img']?>" onerror="this.onerror=null; this.src='/images/<?=$v['room_img']?>';" alt="{{$v['room_name']}}" title="{{$v['room_name']}}">

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
@endsection
<style>
    .duya-header{
        margin-top: -18px;
    }
</style>
       