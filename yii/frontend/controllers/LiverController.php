<?php

namespace frontend\controllers;

use yii;
use yii\rest\Controller;

class LiverController extends Controller
{
    public function actionIndex()
    {
//        echo 2;die;
        $call = Yii::$app->request->get('call');
        // search
        $search = Yii::$app->request->get('sear-data');
//        print_r($search);die;
        $search = isset($search)?['like','info_nickname',$search]:' 1=1';
        // ['like','gift_name',$search]
        // "gift_name like %$search%"
        // print_r($search);die;
        // 每页显示条数
        $pagenum = 3;
        // 当前页
        $p = Yii::$app->request->get('p');
        $p = isset($p)?$p:1;
        // print_r($p);die;
        // 偏移量
        $offset = ($p-1)*$pagenum;
        // 总页面数
        $count = (new yii\db\query())->select('room_info,room_id,huya_anchor.anchor_id,type_name,room_name,info_nickname')
//        $res = (new yii\db\query())->select('*')
            ->from('huya_anchor')
            ->leftJoin('huya_room','huya_anchor.anchor_id = huya_room.anchor_id')
            ->innerJoin('huya_type','huya_anchor.anchor_type = huya_type.type_id')
            ->leftJoin('huya_userinfo','huya_anchor.user_id = huya_userinfo.user_id')
            ->innerJoin('huya_user','huya_anchor.user_id = huya_user.user_id')
            ->where($search)
            ->count();
//        print_r($count);die;
        // 总页数
        $pages = ceil($count/$pagenum);
        $data = (new yii\db\query())->select('room_info,room_id,huya_anchor.anchor_id,type_name,room_name,info_nickname')
//        $data = (new yii\db\query())->select('*')
            ->from('huya_anchor')
            ->leftJoin('huya_room','huya_anchor.anchor_id = huya_room.anchor_id')
            ->innerJoin('huya_type','huya_anchor.anchor_type = huya_type.type_id')
            ->leftJoin('huya_userinfo','huya_anchor.user_id = huya_userinfo.user_id')
            ->innerJoin('huya_user','huya_anchor.user_id = huya_user.user_id')
            ->where($search)
            ->orderBy('room_id')
            ->limit($pagenum)
            ->offset($offset)
            ->all();
//        print_r($data);die;
//        foreach ($data as $key => $value)
//        {
//            $data[$key]['info_nickname'] = str_replace($search,"<span style='color:#f12'>苹果</span>",$value['info_nickname']);
//        }
//        print_r($data);die;
//        $data = ['data'=>$res];
//        echo $call.'('.json_encode($res).')';
        echo $call.'('.json_encode(['p'=>$p,'pages'=>$pages,'data'=>$data]).')';
        exit;

        // echo 1;die;
//        $callback = Yii::$app->request->get('call');

        // echo $pages;die;
        // print_r($count);die;
//        $data = (new \yii\db\Query())->select('*')
//            ->from('huya_gift')
//            ->where($search)
//            ->limit($pagenum)
//            ->offset($offset)
//            ->all();
//        // print_r($data);die;
//        echo $callback.'('.json_encode(['p'=>$p,'pages'=>$pages,'data'=>$data]).')';
    }

    public function actionTest()
    {
        $res = '<font color="#f12">苹果</font>';
        $encryption = json_encode($res);
        echo $decryption = json_decode($encryption);

        die;
    }
}