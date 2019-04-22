<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        if ($request->slug) {
            $category->slug = $request->slug;
        } else {
            $category->slug = Str::slug($request->name, '-');
        }

        if ($request->desc) {
            $category->desc = $request->desc;
        }

        if ($request->hasFile('image')) {
            $category = $request->image;
            $path = $category->store('category', 'public');
            $category->image = $path;
        }

        $category->save();

    }
}
