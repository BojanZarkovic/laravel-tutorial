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

    public function createNewPost(Request $request) {
        $title = $request->title;
        $body = $request->body;

        $post = new Post();
        $post->title = $title;
        $post->body = $body;

        $post->save();

        return redirect('/admin');
    }

    public function showEditPostForm(Request $request, $id) {
        $post = Post::find($id);

        return view('editPost', ['post' => $post]);
    }

    public function editPost(Request $request, $id) {
        $post = Post::find($id);

        $title = $request->title;
        $body = $request->body;

        $post->title = $title;
        $post->body = $body;
        $post->save();

        return view('editPost', ['post' => $post, 'message' => 'Post successfully edited!']);
    }
}
