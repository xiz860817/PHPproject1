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
        //從controller呼叫
        $post = App\Customer::create([
            'Name' => 'Merry',
            'Address' => 'Test Load No.12',
            'Phone' => '0912345678'
        ]);
        // 可用下列方法，節省輸入的時間
        $post = App\Customer::create($request->all());
    }
    
}
