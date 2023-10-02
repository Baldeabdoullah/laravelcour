<?php

namespace App\Http\Controllers;

// use App\Models\Comment;

use App\Models\Image;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('articles', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        // $post = Post::where('title', 'Atque velit ratione velit quod eos.')->firstOrFail();

        return view('article', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => ['required', 'min:5', 'max:255', 'unique:posts'],
        //     'content' => ['required']
        // ]);

        // $name =  Storage::disk('local')->put('file', $request->file('file'));
        $filename = time() . '.' . $request->file('file')->extension();

        $path = $request->file('file')->storeAs(
            'avatar',
            $filename,
            'public'
        );

        // bonne pratique (pour ca il faut protected $guarded = [])
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        $image = new Image();
        $image->path = $path;

        $post->image()->save($image);
    }

    public function contact()
    {
        return view('contact');
    }
}
