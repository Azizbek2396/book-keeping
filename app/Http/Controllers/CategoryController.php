<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Tip;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
//        dd($categories->name);
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $tips = Tip::get();
//        dd($tips->name);

        return view('categories.form', compact('tips'));
    }

    public function store(CategoryRequest $request)
    {
        $params = $request->all();

        Category::create($params);
//        dd($params);
        session()->flash('success', 'Вы успешно добавили категорию!');
        return redirect()->route('categories.index');
    }
}
