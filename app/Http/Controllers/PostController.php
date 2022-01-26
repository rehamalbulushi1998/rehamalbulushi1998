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
}
