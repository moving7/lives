<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
class EditController extends Controller
{
	public function edit()
	{
		$user=Session::get('user');
//		$user_id = Session::get('user');
		$res=DB::table('userinfo')->where('user_id',$user['user_id'])->first();
//		print_r($res);die;
		if (!empty($user)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
//		print_r($er);die;
		return view('info.edit',['er'=>$er,'res'=>$res]);
	}
	public function edit_do()
	{
		$user = Session::get('user');
//		print_r($user_id);die;
//		$res=DB::table('userinfo')->where('user_id',$user_id)->first();
//		print_r($res);die;
		$data = $_POST;
//		print_r($data);
		$rs=DB::table('userinfo')->where('user_id',$user['user_id'])->update([
			'info_desc'=>$data['info_desc'],
		]);
//		echo "<script>alert('修改成功');</script>";
		return redirect('info');
	}
}