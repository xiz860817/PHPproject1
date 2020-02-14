<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
    protected $table = 'test';
    public $timestamps = False;

    public function new(){
        $this->Name= 'A';
        $this->save(); 
    }
}
