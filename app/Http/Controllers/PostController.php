<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $post = Post::where('is_published', 0)->get();
        dd($post);
    }
    
    public function create() {
        $postsArr = [
            [
                'title' => 'Title of post from VS code',
                'image' => 'image.jpg',
                'content' => 'some content',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'Another title of post from VS code',
                'image' => 'Another image.jpg',
                'content' => 'Another some content',
                'likes' => 50,
                'is_published' => 1,
            ],
            ];
            Post::create([
                'title' => 'Another title of post from VS code',
                'image' => 'Another image.jpg',
                'content' => 'Another some content',
                'likes' => 50,
                'is_published' => 1,
            ]);
                dd($postsArr);
    }
}
