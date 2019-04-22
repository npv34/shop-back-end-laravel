<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CreateUserRequest $request)
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
            $image = $request->image;
            $path = $image->store('category', 'public');
            $category->image = $path;
        }
        $category->save();
    }

    public function index()
    {
        $categories = Category::all();
        return view("admin.categories.index", compact('categories'));
    }
}
