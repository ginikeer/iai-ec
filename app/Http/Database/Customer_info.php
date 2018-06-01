<?php namespace App\Http\Database;

use Illuminate\Database\Eloquent\Model;

use DB;

class Customer_info extends Model {
	
	protected $table = 'customer_info';
	
	protected $guarded  = ["id"];

}