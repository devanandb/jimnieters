<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;
use App\Subscription;

class WebController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $categories = Category::with('articles')->get();

        return view('web.home', compact('articles', 'categories'));
    }

    public function category($slug)
    {   
        $categories = Category::with('articles')->get();
        $category = Category::where('slug', $slug)->firstOrFail();
        $articles = Category::find($category->id)->articles;
        // return $articles;
        return view('web.category', compact('articles', 'category', 'categories'));
    }

    public function tag($slug)
    {   
        $categories = Category::with('articles')->get();
        $tags = Tag::with('articles')->get();
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $articles = Tag::find($tag->id)->articles;
        // return $articles;
        return view('web.tag', compact('articles', 'tag', 'tags', 'categories'));
    }

    public function content($slug)
    {   
        $categories = Category::with('articles')->get();
        $article = Article::where('slug', $slug)->firstOrFail();
        // $articles = Category::find($category->id)->articles;
        // return $articles;
        return view('web.article', compact('article', 'categories'));
    }

    public function subscribe(Request $request)
    {
        $subscription = new Subscription;

        // return $request;
        $subscription->name = $request->name;
        $subscription->email = $request->email;
        $subscription->channel = $request->channel;

        $subscription->save();
    }
}
