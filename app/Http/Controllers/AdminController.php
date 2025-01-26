<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\posting;


use App\Models\FinalOrder;

class AdminController extends Controller
{
    public function post_page()
    {
        return view('admin.post_page');
    }

        //for request data
    public function add_post(Request $request)
    {
        $post=new posting;

        $post->productname = $request->productname;
        $post->description = $request->description;

        $image = $request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);

        $post->image = $imagename;

        $post->price = $request->price;

        $post->save();

        return redirect()->back();
    }
    public function show_data()
    {
        $post = posting::all();
        return view('admin.show_data',compact('post'));
    }


    public function delete_post($id)
    {
        $post = posting::find($id);

        $post->delete();

        return redirect()->back()->with('message','Post Deleted Successfully');
    }

    public function edit_page($id)
    {

        $post = posting::find($id);

        return view('admin.edit_page',compact('post'));

    }

    public function update_post(Request $request, $id)
    {
        $data = posting::find($id);

        $data->productname=$request->productname;
        $data->description=$request->description;


        $image=$request->image;
        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);

        $data->image = $imagename;
        }


        $data->price=$request->price;

        
        $data->save();

        return redirect()->back();
    }
    public function searchdata(Request $request)
    {

        $searchText=$request->search;

        $post=posting::where('productname','LIKE',"%$searchText%")->get();

        return view('home.homepage',compact('post'));
    }
    public function admin_orders()
    {

        $order=FinalOrder::all();




        return view('admin.orders',compact('order'));
    }
}
