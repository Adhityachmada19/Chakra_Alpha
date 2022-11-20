<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products=Product::orderby('id','DESC')->get();
        $customers=Customer::all();
        $services=Service::all();
        $product_count=Product::count();
        $customer_count=Customer::count();
        $service_count=Service::count();
        return view('user.content.index',compact('products','customers','services','customer_count','product_count','service_count'));
    }
    public function product($id){
        $product=Product::find($id);

        return view('user.content.product',compact('product'));
    }
    public function services($id){
        $service = Service::find($id);
        return view('user.content.service',compact('service'));
    }
}
