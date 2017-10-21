<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
class IndexController extends Controller
{
	//首页
	public function index()
	{
		
		
		$res = DB::select("select * from huya_anchor");
		$user = array();
		foreach ($res as $key => $v) {
			$user[] = $v['user_id'];
		}
		
		$user_info = implode(',',$user);
		$users = DB::select("select user_id from huya_user where user_status = 1 and user_id in ($user_info)");
		$res = DB::select("select info_nickname,info_desc from huya_userinfo");
		$ress = DB::select("select info_nickname from huya_userinfo limit 3");
		//展示热门分类
		$type = DB::select("select anchor_type from huya_anchor ");
		$types = array();
		foreach ($type as $key => $v) {
			$types[] = $v['anchor_type'];
		}
		$ok = $this->test($types);
		$username=Session::get('user');
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		//根据id查询分类表
		$hottype = DB::select("select type_name,type_id from huya_type where type_id in ($ok)");
		$hottypes = DB::select("select type_name,type_id from huya_type where type_id in ($ok) limit 3");
		$imgs = DB::select("select room_img from huya_room limit 5");
//		print_r($imgs);die;
		return view('index.index',['imgs'=>$imgs,'res'=>$res,'ress'=>$ress,'hottype'=>$hottype,'hottypes'=>$hottypes,'er'=>$er]);
		//return view('index.index',['name'=>$data]);
	}
	public function test($data)
	{
		$type_id = implode(",",$data);
		return $type_id;
	}
	//直播
	public function show(){

		//类型id
		$type_id = isset($_GET['id'])?$_GET['id'] : '';
	
		$rs=DB::select("select * from huya_type where type_status=:status",['status'=>1]);
		// print_r($rs);die;
		$data=$this->cate($rs);

		$live=$this->live($type_id);
//		 print_r($live);die;

		$username=Session::get('user');
//		print_r($username);die;
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
//		print_r($er);die;
//		print_r($data);die;

		return view("index.show",['data'=>$data,'live'=>$live,'er'=>$er]);
	}
	//直播房间列表
	public function live($type_id){
		if (!empty($type_id)) {
			$data=DB::select("SELECT * FROM huya_room where status=1 and is_del=0 and type_id=$type_id");
		}else{
			$data=DB::select("SELECT * FROM huya_room where status=1 and is_del=0");
		}
		
		foreach ($data as $key => $value) {
			$rs=DB::select("SELECT type_name FROM huya_type where type_id=".$value['type_id']);

			$data[$key]['type_name']=$rs[0]['type_name'];
			
			$anchor=DB::select("SELECT user_id FROM huya_anchor where anchor_id=".$value['anchor_id']);

			$info=DB::select("SELECT * FROM huya_userinfo where user_id=".$anchor[0]['user_id']);
			$data[$key]['nickname']=$info[0]['info_nickname'];
			$data[$key]['head']=$info[0]['info_head'];
		}
		return $data;
	}
	//多级分类
	public function cate($list,$pk='type_id',$pid='parent_id',$child='_child',$root=0){
		$tree=array();
	    $packData=array();
	    foreach ($list as  $data) {
	        $packData[$data[$pk]] = $data;
	    }
	    foreach ($packData as $key =>$val){     
	        if($val[$pid]==$root){//代表跟节点       
	            $tree[]=& $packData[$key];
	        }else{
	            //找到其父类
	            $packData[$val[$pid]][$child][]=& $packData[$key];
	        }
	    }
	    return $tree;
	}
	//分类
	public function category(){
		$rs=DB::select("select * from huya_type where type_status=:status",['status'=>1]);
		$data=$this->cate($rs);
//		print_r($rs);die;
		$res=DB::select("select * from huya_type where parent_id>:pid",['pid'=>0]);
//		print_r($res);die;
		$username=Session::get('user');
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		return view('index.category',['data'=>$data,'cate'=>$res,'er'=>$er]);
	}
	//登录
	public function login(){
		return view('index.login');
	}
	//注册
	public function register(){
		return view('index.register');
	}
	//登陆
	public function login_do(){
		//账号
		$user=$_GET['email'];
		//密码
		$user_pwd=$_GET['pwd'];
		//七天免等
		$rem=$_GET['remember'];
		//验证手机号
		$phone=DB::table('user')->where([['user_phone',$user],['user_pwd',MD5($user_pwd)]])->first();
		$flag=1;
		$user_name=null;
		if (empty($phone)) {
			//验证邮箱
			$email=DB::table('user')->where([['user_email',$user],['user_pwd',md5($user_pwd)]])->first();
			if (empty($email)) {
				//验证yy
				$yy=DB::table('user')->where([['user_yy',$user],['user_pwd',md5($user_pwd)]])->first();
				if (!$yy['user_name']) {
						$flag=0;
				}else{
					$user_name=$yy;
				}
			}else{
				$user_name=$email;
			}
		}else{
			$user_name=$phone;
		}
		Session::put('user',$user_name);
//		print_r($user_name);die;

		$res=DB::table('userinfo')->where('user_id',$user_name['user_id'])->first();
		Session::put('info',$res);

		$num=DB::table('money')->where('user_id',$user_name['user_id'])->first();
		Session::put('money',$num);

		return $flag;
	}
	public function regin(){
		//错误码
		$error=250;
		//邮箱
		$email=$_GET['email'];
		//密码
		$user_pwd=$_GET['pwd'];
		//手机号
		$phone=$_GET['phone'];
		//验证邮箱
		$user_email=DB::table("user")->where('user_email',$email)->first();
		//验证手机号
		$user_phone=DB::table('user')->where('user_phone',$phone)->first();
		if (!empty($user_email)) {
			$msg='邮箱存在';
		}elseif(!empty($user_phone)){
			$msg='手机号已存在';
		}else{
			$rs=DB::table('user')->insert([
					'user_email'=>$email,
					'user_phone'=>$phone,
					'user_pwd'=>md5($user_pwd)
				]);
			if ($rs) {
				$error=200;
				$msg='注册成功';
			}
		}
		return array('error'=>$error,'msg'=>$msg);
	}

	//展示主播详情
	public  function details()
	{
		$username=Session::get('user');
		//判断用户是否登录;
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		$use_id = $username['user_id'];
		//通过用户id查询
		$nicks = DB::table("userinfo")->where([['user_id',$use_id]])->first();
		//查询出类型id
		$type_id = DB::table("anchor")->where([['user_id',$use_id]])->first();
		$type = $type_id['anchor_type'];
		//查询出房间名称
		$room =DB::table("room")->where([['type_id',$type]])->first();
		$anchor = $room['anchor_id'];
		//通过主播的id查询出粉丝的关注人的id
		$fen = DB::select("select user_id from huya_user_anchor where anchor_id='$anchor'");
//        var_dump($fen);die;
		$anchorid = array();
		foreach($fen as $v){
			$anchorid[] = $v['user_id'];
		}
		$anid = implode(",",$anchorid);
		print_r($anid);
		//根据粉丝的id查询拥有金豆最多的人数
		$people = DB::select("select user_id from huya_money where user_id in (2) order by glod_num desc limit 3");
		$peopleid = array();
		foreach($people as $v){
			$peopleid[] = $v['user_id'];
		}
		$peole_id = $this->test($peopleid);
//        var_dump($peole_id);die;
		//查询粉丝名字
		$name  = DB::select("select user_name from huya_user where user_id in ($peole_id)");
//        var_dump($name);die;
		return view('index.details',['er'=>$er,'nicks'=>$nicks,'room'=>$room,'name'=>$name]);
	}

	//退出登陆
	public function logout(){
        Session::flush();
        $rs=Session::get('user');
        if (empty($rs)) {
        	echo 1;
        }
	}
}