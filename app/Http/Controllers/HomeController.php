<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
use Alert;

class HomeController extends Controller
{
   public function index()
   {
        if(Auth::id())
        {
            $post = Post::where('post_status','=','active')->get();
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('home.homepage', compact('post'));
            }

            else if($usertype=='admin')
            {
                return view('admin.adminhome');
            }

            else
            {
                return redirect()->back();
            }
        }
    }
    public function homepage()
   {
        $post = Post::where('post_status','=','active')->get();
        return view('home.homepage', compact('post'));
   }

   public function post_description($id)
   {
    $post = Post::find($id);
    return view('home.post_description', compact('post'));
   }
   public function create_post()
   {
    return view('home.create_post');
   }
   public function user_post(Request $request)
   {
    $user       = Auth()->user();
    $userid     = $user->id;
    $username   = $user->name;
    $usertype   = $user->usertype;

    $post = new Post;
    $post->title = $request->title;
    $post->description = $request->description;
    $post->user_id = $userid;
    $post->name = $username;
    $post->usertype = $usertype;
    $post->post_status = 'pending';



    $image = $request->image;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
            $post->image=$imagename;
        }

    $post->save();
    Alert::success('welcome!','You have added data successfully!');
    return redirect()->back();
   }
   public function my_post()
   {
    $user = Auth::user();
    $userid = $user->id;
    $data = Post::where('user_Id', '=', $userid)->get();
    return view('home.my_post', compact('data'));
   }
   public function delete_my_post($id)
   {
    $data = Post::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'Post deleted successfully!');
   }
   public function post_update_page($id)
   {
    $data = Post::find($id);
   return view('home.post_update_page', compact('data'));
   }
   public function post_update_submit(Request $request, $id)
   {
    $data = Post::find($id);
    $data ->title = $request->title;
    $data ->description = $request->description;
    $image = $request->image;
    if($image)
    {
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $data->image=$imagename;
    }

    $data->save();
    return redirect()->back()->with('message', 'Post updated successfully!');
   }

}
