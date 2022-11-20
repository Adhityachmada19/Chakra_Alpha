<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index(){
      
        $services=Service::all();
        return view('admin.service.index',compact('services'));
    }
    public function create(Request $request){
        $request->validate([
                'title'=>'required|max:50',
                'description'=>'required',
                'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
            $service= new Service();
            $service->title =$request->input('title');
            $service->description=$request->input('description');

            if($request->hasFile('image')){
                $file=$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time(). '.'.$extension;
                $file->move('image/service/',$filename);
                $service->image = $filename;
            } 
            $service->save();
            return redirect('/service')->with('success','Added Data  Successfully');

        
    }
    public function edit($id){
        $service =Service::find($id);
        return view('admin.service.edit',compact('service'));
        }
    
    public function update(Request $request,$id){
            $service= Service::find($id);
            $request->validate([
                'title'=>'required|max:50',
                'description'=>'required',
                'image'=>'image|mimes:jpeg,png,jpg|max:2048',
            ]);
                $service->title =$request->input('title');
                $service->description=$request->input('description');
                if($request->hasFile('image')){
                    $path='image/service/'.$service->image;
                    if(File::exists($path)){
                        File::delete($path);
                    }

                    $file=$request->file('image');
                    $extension=$file->getClientOriginalExtension();
                    $filename=time(). '.'.$extension;
                    $file->move('image/service/',$filename);
                    $service->image = $filename;
                } 
                $service->update();
                return redirect('/service')->with('warning','Update data  Successfully');
                
    }
    public function delete($id){
        $service=Service::find($id);
        if($service){
            $path = 'image/service/'.$service->image;
            if(File::exists($path)){
                FIle::delete($path);
            }
            $service->delete();
            return back()>with('danger','Delete Data Successfully');
        }
    }
}
