<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Route;
class CustomerController extends Controller
{
    //
    public function index(){
        return View::make('board');
}
}