<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        
            return view('createcategory');
    
    }

    public function store(Request $request)
    {
        $category = new Category();
        
        $category->title = $request->input('title');
        
        $category->save();
        return redirect()->back()->withSuccess('Post created successfully!');
    }
}
