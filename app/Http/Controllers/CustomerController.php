<?php

namespace App\Http\Controllers;

//加入 EditCustomer
use App\Http\Request\EditCustomer;
use View;
use Route;
use Illuminate\Http\Request;
use App\Test;
class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $test = Test::all();
        $post = new Test;
        $post->new();

        return View::make('board',['test' => $test]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $Cusid)
    {
        //
        
        return View::make('edit',['Cusid'=>$Cusid]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update( $Cusid, EditCustomer $request)
    {
        
        $customer = CustomerEloquent::where('Cusid', $Cusid)->firstOrFail();
        $customer->Phone = $request->Phone;
        $customer->save();

        return View::make('edit',[
            'customer' => $customer,
            'msg' => '修改成功'
         ]);
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
