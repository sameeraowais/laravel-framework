<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->date('date');
            $table->string('product_name');
            $table->float('price');
            $table->integer('quantity');
            $table->float('tax');
            $table->float('net');
        }); 
        //نحتاج سوي ترحيل للجدول عشان يروح للداتابيس
        //عن طريق الأمر
        // php artisan migrate
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
