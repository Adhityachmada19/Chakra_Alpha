<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
      
        $customers=Customer::all();
        return view('admin.Customer.index',compact('customers'));
    }
    public function create(Request $request){
        $request->validate([
                'title'=>'required|max:50',
                'description'=>'required',
                'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
            $customer= new Customer();
            $customer->title =$request->input('title');
            $customer->description =$request->input('description');

            if($request->hasFile('image')){
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time(). '.'.$extension;
                $file->move('image/customer/',$filename);
                $customer->image = $filename;
            } 
            $customer->save();
            return redirect('/customer')->with('success','Added Data  Successfully');

        
    }
    public function edit($id){
        $customer =Customer::find($id);
        return view('admin.Customer.edit',compact('customer'));
        }
    
    public function update(Request $request,$id){
            $customer= Customer::find($id);
            $request->validate([
                'title'=>'required|max:50',
                'description'=>'required',
                'image'=>'image|mimes:jpeg,png,jpg|max:2048',
            ]);
                $customer->title =$request->input('title');
                $customer->description =$request->input('description');
                
                if($request->hasFile('image')){
                    $path='image/Customer/'.$customer->image;
                    if(File::exists($path)){
                        File::delete($path);
                    }

                    $file=$request->file('image');
                    $extension=$file->getClientOriginalExtension();
                    $filename=time(). '.'.$extension;
                    $file->move('image/Customer/',$filename);
                    $customer->image = $filename;
                } 
                $customer->update();
                return redirect('/customer')->with('warning','Update data  Successfully');
                
    }
    public function delete($id){
        $customer=Customer::find($id);
        if($customer){
            $path = 'image/Customer/'.$customer->image;
            if(File::exists($path)){
                FIle::delete($path);
            }
            $customer->delete();
            return back()>with('danger','Delete Data Successfully');
        }
    }
}
