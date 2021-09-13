<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use Illuminate\Pagination\Paginator;


class HomeController extends Controller
{
    //
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='1'){
               // $doctor= Doctor::all();
                return view('Admin.home');
            }
            else {
                $data=Product::all();
                $user=auth()->user();
                $count=Cart::where('phone',$user->phone)->count();
            return view('User.home',compact('data','count'));
            }
        }

        else{
            return redirect()->back();
        }
    }

    public function index(){


        if(Auth::id()){

            return redirect('redirect');
        }

        else{
            $data=Product::all();
            return view('User.home',compact('data'));
        }
       
    }

    public function Search(Request $request){
      
        $search=$request->search;
        $data=Product::where('title','Like','%'.$search.'%')->get();
        return view('User.home',compact('data'));
    }

    public function AddCart(Request $request,$id){
        
        if(Auth::id()){
             $user=auth()->user();
             $cart=new Cart;
             $product=Product::find($id);
             $cart->name=$user->name;
             $cart->phone=$user->phone;
             $cart->address=$user->address;
             $cart->product_title=$product->title;
             $cart->price=$product->price;
             $cart->quantity=$request->quantity;
             $cart->save();
            return redirect()->back()->with('message','products added successfully');
        }

        else{
            return redirect('login');
        }
    }

    public function ShowCart(){
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();
        $cart=Cart::where('phone',$user->phone)->get();
        return view('User.ShowCart',compact('count','cart'));
    }
  

    public function DeleteCart($id){
       
        $data=Cart::find($id);
        $data->delete();
        return redirect()->back()->with('message','products removed successfully');
    }

    public function Order(Request $request){
      
        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;
  
        foreach($request->productname as $key=>$productname){

            $order=new Order;
            $order->productname=$request->productname[$key];
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];
            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;
            $order->save();
        }

        return redirect()->back();
    }

}
