<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //for read data from DB
use Illuminate\Support\Facades\Cache; //for read data from Cash


class PhoneController extends Controller
{
    public function GetPhoneData()
    {
        $phone=DB::table('product')
        ->get();
        return view('index',["products"=>$phone]);
    }

    public function GetPhoneDataid($id) //set any name for parameter
    {
        $phone=DB::table('product')->find($id);
        return view('checkout',["products"=>$phone]);
    }

    public function getInvoice(Request $request) //$request: for receive the transmitted data
    {
        //echo ($name);
        //echo '<br>';
        /*
        $email=$request->email;
        $city=$request->city;
        $country=$request->country;
        $code=$request->code;
        $mobile=$request->mobile;
        $notes=$request->notes;
        */

        $customer_name=$request->customer_name;
        $product_name=$request->product_name;
        $price=$request->price;

        Cache::put('price',$price);

        $QTY=1;
        $total=$price*$QTY;
        $tax=$total*0.15;
        $net=$total+$tax;

        $date=date('Y-m-d');
        $id=$request->id;
        $row=[
            'id'=>$id,
            'customer_name'=>$customer_name,
            'date'=>$date,
            'product_name'=>$product_name,
            'price'=>$price,
            'quantity'=>$QTY,
            'tax'=>$tax,
            'net'=>$net,
        ];
        DB::table('invoice')->insert($row);

        //Fetch the last row
        $datainv=DB::table('invoice')
        ->orderBy('id','desc')->first();

        return view('invoice',['inv'=>$datainv]);
        //DB::table('invoice')->insert(['name'=>'sameera','email'=>'s@gmail.com']);

    }
}