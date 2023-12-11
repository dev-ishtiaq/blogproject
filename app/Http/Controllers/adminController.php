<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function post_page()
    {
        return view('admin.post_page');
    }
    public function add_post(Request $request)
    {
        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->description;
        $post->post_status = 'active';
        $post->user_id = $user_id;
        $post->name = $name;
        $post->usertype = $usertype;

// ==================================

        $image = $request->image;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
            }
// ==================================

        $post->save();
        return redirect()->back()->with('message','Post Submitted successfully!');
    }
    
    public function show_post()
    {
        $post = Post::all();
        return view('admin.show_post', compact('post'));
    }

    public function delete_post($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('message', 'Post deleted successfully!');
    }

    public function edit_post($id)
    {
        $post = Post::find($id);
        $post->edit();
        return redirect()->back()->with('message', 'Post updated successfully!');
    }
}
