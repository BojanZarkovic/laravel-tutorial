<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function getAllPosts(Request $request) {
        $posts = Post::with(['user', 'categories'])->paginate(8);
        return view('posts', ['posts' => $posts]);
    }

    public function getPostsByUser(Request $request, $userId) {
        $posts = Post::where('user_id', $userId)->with(['user', 'categories'])->paginate(8);
        return view('posts', ['posts' => $posts]);
    }

    public function getPostById(Request $request, $id) {
        $post = Post::with(['user', 'categories'])->findOrFail($id);
        return view('post', ['post' => $post]);
    }

    public function showNewPostForm(Request $request) {
        $categories = Category::all();
        return view('newPost', ['categories' => $categories]);
    }

    public function createNewPost(Request $request) {

        $user = Auth::user();

        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'categories' => 'sometimes|array'
        ]);

        $title = $request->title;
        $body = $request->body;
        $categoryIds = $request->categories ? $request->categories : [];

        $post = new Post();
        $post->title = $title;
        $post->body = $body;
        $post->user_id = $user->id;

        $post->save();

        $post->categories()->sync($categoryIds);

        return redirect('/admin');
    }

    public function showEditPostForm(Request $request, $id) {
        $categories = Category::all();
        $post = Post::with(['user', 'categories'])->findOrFail($id);

        return view('editPost', ['post' => $post, 'categories' => $categories]);
    }

    public function editPost(Request $request, $id) {
        $post = Post::with(['user', 'categories'])->findOrFail($id);

        $title = $request->title;
        $body = $request->body;

        $post->title = $title;
        $post->body = $body;
        $post->save();

        return view('editPost', ['post' => $post, 'message' => 'Post successfully edited!']);
    }

    public function deletePost(Request $request, $id) {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->back()->with('message', 'Post successfully deleted!');
    }
}
