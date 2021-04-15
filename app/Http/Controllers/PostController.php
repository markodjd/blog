<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function index() {
        $posts = Post::where('is_published', true)->orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        if (!$post->is_published) {
            throw new ModelNotFoundException();
        }
        return view('posts.show', compact('post'));
    }
}
