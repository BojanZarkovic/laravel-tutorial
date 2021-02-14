<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getPostById(Request $request, $id) {
        $post = Post::findOrFail($id);
        return view('post', ['post' => $post]);
    }

    public function showNewPostForm(Request $request) {
        return view('newPost');
    }
}
