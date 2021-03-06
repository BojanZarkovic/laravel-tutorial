<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function getAllCategories(Request $request) {
        $categories = Category::paginate(8);
        return view('categories', ['categories' => $categories]);
    }


    public function showNewCategoryForm(Request $request) {
        return view('newCategory');
    }

    public function createNewCategory(Request $request) {

        $request->validate([
            'title' => 'required|string'
        ]);

        $title = $request->title;

        $category = new Category();
        $category->title = $title;

        $category->save();

        return redirect('/admin');
    }

}
