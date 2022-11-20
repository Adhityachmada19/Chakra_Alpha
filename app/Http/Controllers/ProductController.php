<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(){
      
        $products=Product::all();
        return view('admin.product.index',compact('products'));
    }
    public function create(Request $request){
        $request->validate([
                'title'=>'required|max:50',
                'description'=>'required',
                'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
            $product= new Product;
            $product->title =$request->input('title');
            $product->description =$request->input('description');

            if($request->hasFile('image')){
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time(). '.'.$extension;
                $file->move('image/product/',$filename);
                $product->image = $filename;
            } 
            $product->save();
            return redirect('/product')->with('success','Added Data  Successfully');

        
    }
    public function edit($id){
        $product =Product::find($id);
        return view('admin.product.edit',compact('product'));
        }
    
    public function update_profile(ProductRequest $request,$id){
            $product= Product::find($id);
            $request->validate([
                'title'=>'required|max:50',
                'description'=>'required',
                'image'=>'image|mimes:jpeg,png,jpg|max:2048',
            ]);
                $product->title =$request->input('title');
                $product->description =$request->input('description');
                
                if($request->hasFile('image')){
                    $path='image/product/'.$product->image;
                    if(File::exists($path)){
                        File::delete($path);
                    }

                    $file=$request->file('image');
                    $extension=$file->getClientOriginalExtension();
                    $filename=time(). '.'.$extension;
                    $file->move('image/product/',$filename);
                    $product->image = $filename;
                } 
                $product->update();
                return redirect('/product')->with('warning','Update data  Successfully');
                
    }
    public function delete($id){
        $product=Product::find($id);
        if($product){
            $path = 'image/product/'.$product->image;
            if(File::exists($path)){
                FIle::delete($path);
            }
            $product->delete();
            return back()->with('danger','Delete Data Successfully');
        }
    }
}
    