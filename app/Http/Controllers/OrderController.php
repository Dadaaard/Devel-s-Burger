<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\posting;
use App\Models\Users;
use App\Models\Order;

use App\Models\FinalOrder;

class OrderController extends Controller
{
    public function add_cart(Request $request,$id)
    {
        $user=Auth::user();
        
        $post = posting::find($id);
        
        $order= new Order;

        $order->name=$user->name;
        $order->email=$user->email;
        $order->user_id=$user->id;

        $order->productname=$post->productname;
        $order->price=$post->price;
        $order->image=$post->image;
        $order->product_id=$post->id;


        if($request->quantity!=null){
            $order->price=$post->price*$request->quantity;
        }
        else{
            $order->price=$post->price;
        }

        $order->quantity=$request->quantity;

        $order->save();

        return redirect()->back();
    }
    public function show_cart()
    {
        $id=Auth::user()->id;

        $cart=Order::where('user_id','=',$id)->get();
        return view('home.showcart',compact('cart'));
    }

    public function remove_cart($id)
    {
        $cart=Order::find($id);

        $cart->delete();

        return redirect()->back();
    }



    public function checkout_order()
    {

        $user=Auth::user();

        $userid=$user->id;

        $data=Order::where('user_id','=',$userid)->get();

        foreach($data as $data)
        {

            $order = new FinalOrder;

            $order->name=$data->name;
            $order->email=$data->email;
            $order->user_id=$data->user_id;


            $order->productname=$data->productname;
            $order->quantity=$data->quantity;
            $order->price=$data->price;
            $order->image=$data->image;
            $order->product_id=$data->product_id;

            $order->payment_status='Not Paid';

            $order->save();

            $cart_id=$data->id;

            $cart=Order::find($cart_id);

            $cart->delete();
            
        }

        return view('home.processing');

    }

}