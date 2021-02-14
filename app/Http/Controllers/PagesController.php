<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showHomePage() {
        $posts = Post::all();
        return view('home', ['posts' => $posts]);
    }

    public function showAdminPage() {
        $posts = Post::all();
        return view('admin', ['posts' => $posts]);
    }
}
