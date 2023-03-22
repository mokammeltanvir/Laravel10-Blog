<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->where('active', '=', 1)
        ->whereDate('published_at', '<', Carbon::now())
        ->orderBy('published_at', 'DESC')
        ->paginate(3);
        return view('home', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        if(!$post->active || $post->published_at > Carbon::now()) {
            throw new NotFoundHttpException();
        }

        $next = Post::query()->where('active', '=', 1)
        ->whereDate('published_at', '<=', Carbon::now())
        ->where('published_at', '<', $post->published_at)
        ->orderBy('published_at', 'Desc')
        ->limit(1)
        ->first();

        $previous = Post::query()->where('active', '=', 1)
        ->whereDate('published_at', '<=', Carbon::now())
        ->where('published_at', '>', $post->published_at)
        ->orderBy('published_at', 'Asc')
        ->limit(1)
        ->first();


        return view('post.view', compact('post', 'next', 'previous'));
    }

    public function byCategory(Category $category)
    {
        $posts = Post::query()
        ->join('category_post', 'posts.id', '=', 'category_post.post_id')
        ->where('category_post.category_id', '=', $category->id)
        ->where('active', '=', 1)
        ->whereDate('published_at', '<=', Carbon::now())
        ->orderBy('published_at', 'DESC')
        ->paginate(10);

        return view('home', compact('posts'));
    }
}
