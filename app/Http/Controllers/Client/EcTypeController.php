<?php namespace App\Http\Controllers\Client;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Database\Mst_Series;
use App\Http\Database\Mst_Series_Resemble;

use App\Services\Mst;

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
	
	public function getCustomerfinish(Request $request)
	{
		
		return view('client/ECCustomerFinish');
	}
	
}
