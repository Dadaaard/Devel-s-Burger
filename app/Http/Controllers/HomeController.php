<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\posting;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                $post=posting::all();
                $post2=User::all();

                return view('home.homepage',compact('post','post2'));
            }

            else if($usertype=='admin')
            {
                return view('admin.adminhome');
            }

            else{
                return redirect()->back();
            }
        }
    }
    public function homepage()
    {

        $post = posting::all();

        return view('home.homepage',compact('post'));
       
    }
}
