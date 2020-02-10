<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('Cusid',100)->unique()->index();
            $table->char('Name',50)->index();
            $table->char('Address',255);
            $table->char('Phone',10)->index();
            $table->timestamps();
        });
    }
    public function update()
    {
        $post = App\Customer::create([
            'Name' => 'Merry',
            'Address' => 'Test Load No.12',
            'Phone' => '0912345678'
        ]);
        // 可用下列方法，節省輸入的時間
        $post = App\Customer::create($request->all());
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
