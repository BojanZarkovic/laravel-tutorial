<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showHomePage() {
        $posts = Post::latest()->take(3)->get();
        return view('home', ['posts' => $posts]);
    }

    public function showAdminPage() {
        $posts = Post::paginate(8);
        return view('admin', ['posts' => $posts]);
    }
}
