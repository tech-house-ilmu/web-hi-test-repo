<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticlePageController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('pages.article.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('pages.article.detail-article', compact('article'));
    }
}
