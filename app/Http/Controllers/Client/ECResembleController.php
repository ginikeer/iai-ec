<?php namespace App\Http\Controllers\Client;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Mst_Series_Resemble;

use App\Services\Mst;

class ECResembleController extends Controller {

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
	public function getIndex()
	{
		
		return view('client/ECResemble');
	}
	
	public function getAjaxSelectModel(Request $request)
	{
		$data = Mst_Series_Resemble::getFilterData($request->all());
		
		$result["data"] = $data;
		$result["cnt"] = count($data);
		
		echo json_encode($result);
	}
	
}
