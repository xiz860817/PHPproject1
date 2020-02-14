<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    //
    protected $table = 'customers';
    protected $primarykey = 'id';
    public $timestamps = true;
    
    // 從 View 送過來的　$request 內容會是陣列，看起來如下：
    public function update(){
        $customers = App\Customer::find(1);
	$customers->Name = 'James';
	$customers->Phone = '0912345678';
	$customers->save();
    }
    
}
