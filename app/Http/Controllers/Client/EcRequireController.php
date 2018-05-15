<?php namespace App\Http\Controllers\Client;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Database\Series_Type;

class EcRequireController extends Controller {

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
	public function getIndex(Request $request)
	{
		
		return view('client/EcRequire');
	}
	
	public function getRod(Request $request)
	{
		return view('client/ECRequireRod');
		
	}
	
	public function getSlider(Request $request)
	{
		return view('client/ECRequireSlider');
		
	}
	
	public function getTime(Request $request)
	{
		return view('client/ECRequireTime');
		
	}
	
	public function getLife(Request $request)
	{
		return view('client/ECRequireLife');
		
	}
	
	public function getPressingsmall(Request $request)
	{
		return view('client/ECRequirePressingSmall');
		
	}
	
	public function getLoadsmall(Request $request)
	{
		return view('client/ECRequireLoadSmall');
		
	}
	
	public function getCycletimesmall(Request $request)
	{
		return view('client/ECRequireCycleTimeSmall');
		
	}
	
	public function getCycletimerod(Request $request)
	{
		return view('client/ECRequireCycleTimeRod');
		
	}
	
	public function getLoadrodlinerguide(Request $request)
	{
		return view('client/ECRequireLoadRodLinerGuide');
		
	}
	
	public function getLoadrod(Request $request)
	{
		return view('client/ECRequireLoadRod');
		
	}
	
	public function getAjaxSelectModel(Request $request)
	{
		dd($request->all());
		
		
		
	}
	
}
