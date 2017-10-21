<?php

namespace frontend\controllers;

use yii;
use yii\web\Controller;
use yii\base\ErrorException;

class IndexController extends Controller
{
    public $success = ['code'=>200];
    public function actionApi()
    {
        $result = '<xml><code>404</code><msg>Yii很简单</msg></xml>';
        $data['callback'] = Yii::$app->request->get('callback');
        echo $data['callback'].'('.json_encode($result).')';
//        is_server
    }
    public function actionShow_userlist()
    {
        $call = isset($_GET['call'])?$_GET['call']:'';
        // $data = 'pig';
        $db = (new \yii\db\Query());
        // $count = $db->from('week1_m')->where($where)->count();
        // $pages = new pagination(['totalCount' => $count,'pagesize'=>6]);
        $data = $db
            ->select('*')
//            ->join('inner join','week3_mt','week1_m.m_id = week3_mt.m_id')
            // ->limit($pages->limit)
            // ->offset($pages->offset)
            // ->where($where)
//            ->orderby('week1_m.m_id asc')
            // ->orderby('m_id asc')
            ->from('huya_user')->all();
            // print_r($data);die;
        echo $call.'('.json_encode($data).')';
    }
    public function actionIndex()
    {
        echo '<xml>1</xml>';
        echo '<hr />';
        echo "<xml><root>3</root></xml>";
    }
    public function actionShow()
    {
//        echo 1;die;
        $this->actionKeys();
    }

    public function actionKeys()
    {
        echo 3;die;
    }

    public function actionHost()
    {
        echo yii::$app->request->userIp;
        // echo yii\web\Request::contentType;
        // $headers = Yii::$app->request->headers;

        // 返回 Accept header 值
        // $accept = $headers->get('Accept');
        // echo $accept;
        // echo Yii::$app->response->statusCode = 200;
        // throw new \yii\web\NotFoundHttpException;
        // $response = Yii::$app->response;
        // $response->format = \yii\web\Response::FORMAT_HTML;
        // $response->data = ['message' => 'hello world'];
    }
    public function actionOldss()
    {
        return $this->redirect('http://baidu.com', 301);
    }
    public function actionLoad()
    {
        return \Yii::$app->response->sendFile('./index.php');
    }
    public function actionCok()
    {
        \yii::$app->response->cookies->add(new \yii\web\Cookie([
    'name' => 'name',
    'value' => 'Larry',
    'expire'=>time()+3600
]));

        print_r($_COOKIE);
    }
    public function actionGetcok()
    {
        // echo yii::$app->request->cookies->get('name');
        try {
    10/0;
} catch (ErrorException $e) {
    Yii::warning("Division11111 by zero.");
}
    }

    

    public function actionGift()
    {
        // echo 1;die;
        $callback = Yii::$app->request->get('call');
        // search
        $search = Yii::$app->request->get('sear-data');
        $search = isset($search)?['like','gift_name',$search]:' 1=1';
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
        $count = (new \yii\db\Query())->select('*')->from('huya_gift')->where($search)->count();
        // 总页数
        $pages = ceil($count/$pagenum);
        // echo $pages;die;
        // print_r($count);die;
        $data = (new \yii\db\Query())->select('*')
        ->from('huya_gift')
        ->where($search)
        ->limit($pagenum)
        ->offset($offset)
        ->all();
        // print_r($data);die;
        echo $callback.'('.json_encode(['p'=>$p,'pages'=>$pages,'data'=>$data]).')';
    }
    public function actionT_add()
    {
        $data = yii::$app->request->get();
        // print_r($data);
        // $res = yii::$app->db->createCommand()->execute()
        $res = Yii::$app->db->createCommand()->insert('huya_gift',['gift_name'=>$data['gift_name'],'gift_money'=>$data['gift_money'],'gift_desc'=>$data['gift_desc']])->execute();
        echo $data['callback'].'('.json_encode(['code'=>200]).')';
    }
    public function actionT_add_do()
    {
         // $res = yii::$app->db->createCommand("UPDATE week1_m SET m_name = '$res[m_name]',m_info = '$res[m_info]',is_show = '$res[is_show]' WHERE m_id = $res[m_id]")->execute()
    }
    public function actionRooms()
    {
        $call = yii::$app->request->get('callback');
        // $res = Yii::$app->db->createCommand()
        $res = (new \yii\db\Query())->select('*')
        ->from('huya_room')
        ->all();
        // echo htmlspecialchars('<p>1</p>');/
        // exit;
        foreach ($res as $key => $value) {
            $value['room_info'] = htmlspecialchars_decode($value['room_info']);
        }
        // print_r($res);die;
        echo $call.'('.json_encode($res).')';
    }
    public function actionRoom_add()
    {
        $call = Yii::$app->request->get('callback');
        $data = Yii::$app->request->get();
        // print_r($data);
        $res = Yii::$app->db->createCommand()->insert('huya_room',['room_name'=>$data['room_name'],'room_info'=>$data['room_info']])->execute();
        // if(!$res)
        echo $call.'('.json_encode($this->success).')';
    }
    public function actionR_del()
    {
        $call = Yii::$app->request->get('callback');
        $id = Yii::$app->request->get('room_id');
        $res = Yii::$app->db->createCommand()->delete('huya_room',['room_id'=>$id])->execute();
        if(!$res)
        {
            $msg = '操作失败';
            echo $call.'('.json_encode($msg).')';
        }
        else
        {
            echo $call.'('.json_encode($this->success).')';
        }

    }
    public function actionG_del()
    {
        $call = Yii::$app->request->get('callback');
        $id = Yii::$app->request->get('gift_id');
        $res = Yii::$app->db->createCommand()->delete('huya_gift',['gift_id'=>$id])->execute();
        if(!$res)
        {
            $msg = '操作失败';
            echo $call.'('.json_encode($msg).')';
        }
        else
        {
            echo $call.'('.json_encode($this->success).')';
        }

    }
}