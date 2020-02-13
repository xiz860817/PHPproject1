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
    $customers=DB::insert('insert into customers (Name,Address) values (?, ?)', ['James', 'test rolad 1']);
    
}
