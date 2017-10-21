<?php

namespace frontend\controllers;

use yii;
use yii\web\Controller;

class LoginsController extends Controller
{
    public $error = ['code'=>404];
    public function actionChecks()
    {
        $call = Yii::$app->request->get('callback');
        $session = Yii::$app->session;
//        $session->set('user','123');
//        $session['user'] = '';
        $res = $session->get('user');
//        print_r($res);die;
        $data = [];
        if(!$res)
        {
            $data['msg'] = 404;
            echo $call.'('.json_encode($data).')';
        }
        else
        {
            $data['msg']=200;
            $data['user']=$res;
            echo $call.'('.json_encode($data).')';
        }
    }
    public function actionLogin()
    {
        $call = Yii::$app->request->get('callback');
        $data = Yii::$app->request->get();
        // print_r($data);

        $res = (new \yii\db\Query());
        $res = $res->select('*')
            ->from('huya_user')
             ->where(['user_name'=>$data['username']])
            ->one();
//         print_r($res);die;
        if(!$res)
        {
//            $result = '您输入的有误';
            echo $call.'('.json_encode($this->error).')';
            exit;
        }
        // echo $data['password'];die;
        // echo $res['user_pwd'];die;
        if(md5($data['password']) == $res['user_pwd'])
        {
//            $result = '登录成功';
            $session = Yii::$app->session;
            $re = $session->set('user',$res['user_name']);
            $data = ['code'=>200,'user'=>$res['user_name']];
//            print_r($data);die;
            echo $call.'('.json_encode($data).')';
        }
        else
        {
//            $result = '登录失败';
            echo $call.'('.json_encode($this->error).')';
            exit;
        }

//        echo $callback.'('.json_encode($result).')';
    }
}