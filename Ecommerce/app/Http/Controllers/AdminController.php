<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function index(){
        return view('Admin.product');
    }

    public function store(Request $request){
 
        $data = new  Product();
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->description=$request->description;
        $data->save();

        return redirect()->back()->with('message','products added successfully');
       
       
    }

    public function ShowProduct(){
        $data=Product::all();
        return view('Admin.ShowProduct',compact('data'));
    }

    public function DeleteProduct($id){
        $data=Product::find($id);
        $data->delete();
        return redirect()->back();
    }
}
