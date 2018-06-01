<?php namespace App\Http\Controllers\Client;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Mst_Series;
use App\Http\Database\Mst_Series_Resemble;
use App\Http\Database\Customer_info;

use App\Services\Mst;
use App\Services\Helper;

use App\Lib\SmsDemo;

use Cookie, Mail;

class EcTypeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getType(Request $request)
	{
		
		return view('client/ECTypeSelection');
	}
	
	public function getSpec(Request $request)
	{
		$id = $request->input('IDX');
		$hz = $request->input('HZ');
		$vt = $request->input('VT');
		$load = $request->input('L');
		$page = $request->input('PAGE');
		
		$direction = 'horizontal';
		if($hz) $direction = 'horizontal';
		if($vt) $direction = 'vertical';
		
		return view('client/ECSpec', ['idx' => $id, 'direction' => $direction, 'load' => $load, 'page' => $page]);
	}
	
	public function getSpecsub(Request $request)
	{
		if($request->input('page') == 'require')
			$data = Mst_Series::getDataById($request->input('idx'), $request->input('direction'), $request->input('load'));
		if($request->input('page') == 'resemble')
			$data = Mst_Series_Resemble::getDataById($request->input('idx'));

		return view('client/ECSpecSub', ['data' => $data, 'page' => $request->input('page')]);
	}
	
	public function getPeripheral(Request $request)
	{
		
		return view('client/ECPeripheral');
	}
	
	public function getProductestimate(Request $request)
	{
		
		return view('client/ECProductEstimate');
	}
	
	public function getEstimate(Request $request)
	{
		
		return view('client/ECEstimate');
	}
	
	public function getProductestimateconfirm(Request $request)
	{
		
		return view('client/ECProductEstimateConfirm');
	}
	
	public function getTerms(Request $request)
	{
		
		return view('client/ECTerms');
	}
	
	public function getCustomerinfo(Request $request)
	{
		
		return view('client/ECCustomerInfo');
	}
	
	public function postSendCode(Request $request)
	{
		//判断是否已有验证码
		if(Cookie::has("iaiec_expired_at") && Cookie::get('iaiec_expired_at') > date('Y-m-d H:i:s')) {
			return json_encode(array('Message' => '验证码已发送至您的手机，10分钟内有效，请过期后重新请求发送！'));
		}
		
		$mobile = $request->input('mobile');
		$code = Helper::genCode();
		$expired_at = date('Y-m-d H:i:s', strtotime("+10 minute"));
		
		$demo = new SmsDemo(
		    "LTAIxejRcvkp0xsG",
		    "DSOPTGqLiKt5HBUUeu0Xiq2ZC0PFzU"
		);
		
		$response = $demo->sendSms(
		    "艾卫艾", 			// 短信签名
		    "SMS_105045035", 	// 短信模板编号
		    $mobile, 			// 短信接收者
		    Array(  			// 短信模板中字段的值
		        "code" => $code
		    ),
		    ""
		);
		
		if(1) {	//正确发送验证码
			Cookie::queue('iaiec_mobile', $mobile, 30);
			Cookie::queue('iaiec_code', $code, 30);
			Cookie::queue('iaiec_expired_at', $expired_at, 30);
		}
		
		echo json_encode($response);
	}
	
	public function postCustomerinfoSubmit(Request $request)
	{
		//iaic-yewu@iai-robot.com
		$email = 'lixin@eigyo.com.cn';
		$param = $request->all();
		
		//先检查验证码是否通过
		if( !(Cookie::has("iaiec_code") && Cookie::get('iaiec_expired_at') > date('Y-m-d H:i:s') && $param['code'] == Cookie::get('iaiec_code')) ) 
			return json_encode(array('code' => 0, 'msg' => '验证码错误或已失效！'));
		
		//发送邮件
		Mail::send('emails.customerinfo', ['param' => $param], function($message) use ($email) {
		    $message->to($email)->subject('【IAI-EC选型】用户咨询');
		});
		
		$param['product'] = "";
		foreach($param['productCom'] as $p) {
			$param['product'] .= $p['name'] . '：' . $p['numSuryo'] . '件；';
		}
		
		unset($param['code']);
		unset($param['productCom']);
		
		//记录至数据库中
		Helper::tableSave(new Customer_info, $param);
		
		return json_encode(array('code' => 1, 'msg' => '邮件发送成功！'));
	}
	
	public function getCustomerfinish(Request $request)
	{
		
		return view('client/ECCustomerFinish');
	}
	
}
