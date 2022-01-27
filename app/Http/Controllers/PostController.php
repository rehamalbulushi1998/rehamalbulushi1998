<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        $category = Category::all();
        if (Auth::user()->user_type == 'author') {
            return view('createpost')->with('category', $category);
        } else {
            abort(403);
        }
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $request->input('title');
        $post->desciption = $request->input('desc');
        $post->category_id = $request->input('category_id');
        $file = $request->file('file');
        $path = Storage::disk('public')->putFile('/', $file);
        $post->img = $path;
        $post->save();
        return redirect()->back()->withSuccess('Post created successfully!');
    }


    public function userpost()
    {
        if (Auth::user()->user_type == 'author') {
            $post = Post::all()->where('user_id', auth()->id());
            return view('myposts')->with('post', $post);
        } else {
            abort(403);
        }

    }
    public function edit($id)

    {
        $post = Post::find($id);

        return view('editpost', ["post" => $post]);
    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);
       
        $post->title = $request->input('title');
        $post->category_id = $request->input('category_id');
        $post->desciption = $request->input('desc');
        $post->save();
        return redirect('myposts')->withSuccess('Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function delete(Post $post, $id)
    {
        $post = Post::find($id);
        return view('deletepost')->with('post', $post);
    }

    public function destroy(Request $request, $id)
    {
       
        $post = Post::find($id);
        $post->delete();
        return redirect('myposts')->withSuccess('Post deleted successfully!');  
    }
}
