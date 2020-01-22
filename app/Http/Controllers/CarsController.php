<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Route;
use View;
class CarsController extends Controller{
    //
    public function index(){
        $customers = DB::select('select * from customers');
        // 可綁定參數
        // $customers = DB::select('select * from customers where Name = :names', ['names' => "Peter"]);
        return View::make('customers',['customers' => $customers]);
    }
}