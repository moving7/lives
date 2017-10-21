<?php

namespace frontend\controllers;

use yii\rest\Controller;

class EchartController extends Controller
{
//    按省统计注册人数
    public function actionShow_p()
    {
//        echo 1;die;
        $call = \Yii::$app->request->get('call');
        $res = (new \yii\db\Query())->select('region_id,region_name')
            ->from('huya_userinfo')
            ->leftJoin('huya_region','huya_userinfo.info_location = huya_region.region_id')
            ->groupBy('region_id')
            ->all();
//        print_r($res);die;

        $nums = array();
        foreach ($res as $key => $val) {
            $nums[$key] = (new \yii\db\Query())->select('*')
                ->from('huya_userinfo')
//            ->leftJoin('huya_region','huya_userinfo.info_location = huya_region.region_id')
                ->where(['info_location'=>$val['region_id']])
//            ->groupBy('region_id')
                ->count();
        }
//        注册人数
//        print_r($nums);
//        print_r($res);die;
//        $count = (new \yii\db\Query())->select('*')
//            ->from('huya_userinfo')
////            ->leftJoin('huya_region','huya_userinfo.info_location = huya_region.region_id')
//            ->where(['info_location'=>$res['0']['region_id']])
////            ->groupBy('region_id')
//            ->count();
        foreach($res as $k => $v)
        {
            $area[$k] = $v['region_name'];
        }
//        注册省份
//        print_r($area);die;
        echo $call.'('.json_encode(['code'=>200,'num'=>$nums,'area'=>$area]).')';
    }
    //    按天统计注册人数
    public function actionShow_d()
    {
//        echo 1;die;
        $call = \Yii::$app->request->get('call');
        $add_date = \Yii::$app->request->get('start_time');
        $res = (new \yii\db\Query())->select('region_id,region_name')
            ->from('huya_userinfo')
            ->leftJoin('huya_region','huya_userinfo.info_location = huya_region.region_id')
            ->where(['add_date'=>$add_date])
            ->groupBy('region_id')
            ->all();
//        print_r($res);die;

        $nums = array();
        foreach ($res as $key => $val) {
            $nums[$key] = (new \yii\db\Query())->select('*')
                ->from('huya_userinfo')
//            ->leftJoin('huya_region','huya_userinfo.info_location = huya_region.region_id')
                ->where(['info_location'=>$val['region_id']])
//            ->groupBy('region_id')
                ->count();
        }
//        注册人数
//        print_r($nums);
//        print_r($res);die;
//        $count = (new \yii\db\Query())->select('*')
//            ->from('huya_userinfo')
////            ->leftJoin('huya_region','huya_userinfo.info_location = huya_region.region_id')
//            ->where(['info_location'=>$res['0']['region_id']])
////            ->groupBy('region_id')
//            ->count();
        foreach($res as $k => $v)
        {
            $area[$k] = $v['region_name'];
        }
//        注册省份
//        print_r($area);die;
        echo $call.'('.json_encode(['code'=>200,'num'=>$nums,'area'=>$area]).')';
    }
//    折线图数据导出
    public function actionShow_days()
    {
//        echo 2;die;
//        $call = \Yii::$app->request->get('call');
        $start_time = \Yii::$app->request->get('start_time');
        $end_time = \Yii::$app->request->get('end_time');
        $data = (new \yii\db\Query())->select('count(add_date) as nums,add_date')
            ->from('huya_userinfo')
            ->groupBy('add_date')
//            ->where(['between','add_date',$start_time,$end_time])
            ->all();
        if(!$data)
        {
            echo $call.'('.json_encode(['code'=>404]).')';exit;
        }
//        print_r($data);
//        die;
//        将SQL数据一次性查出,剩下的交给PHP去执行,可减轻数据库压力
        $nums = array();

        $msg = array();
        foreach($data as $key => $val)
        {
            $nums[$key] = $val['nums'];
            $msg[$key] = $val['add_date'];
        }
//        print_r($nums);
//        echo '<hr />';
//        print_r($msg);
//
//        die;
        echo $call.'('.json_encode(['code'=>200,'nums'=>$nums,'msg'=>$msg]).')';
    }

}