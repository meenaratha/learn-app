<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function shop(){
        return view('frontend.shop.shop');
    }
    function shop_details(){
        return view('frontend.shop.shop-detail');
    }
}
