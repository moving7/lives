<?php

namespace frontend\controllers;

use yii;
use yii\rest\Controller;

class MoneyController extends Controller
{
    public function actionIndex()
    {
//        echo 3;die;
        $call = Yii::$app->request->get('callback');
        $session = Yii::$app->session;
        $user = $session->get('user');
//        print_r($user);die;
//        $money = (new \yii\db\Query());
        $u_id = (new \yii\db\Query())->select('user_id')
            ->from('huya_user')
            ->where(['user_name'=>$user])
            ->one();
        $res = (new \yii\db\Query())->select('*')
            ->from('huya_money')
            ->where(['user_id'=>$u_id])
            ->one();
//        print_r($res);die;
        echo $call.'('.json_encode($res).')';
    }
}