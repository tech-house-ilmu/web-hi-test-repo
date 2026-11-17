<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class ArticlePageController extends Controller
{
    /**
     * Display the articles landing page.
     */
    public function index(): View
    {
        $featuredArticle = Article::where('is_published', true)
            ->where('is_featured', true)
            ->first() ?? Article::where('is_published', true)->orderBy('sort_order', 'asc')->orderBy('date', 'desc')->first();

        $articles = Article::where('is_published', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('date', 'desc')
            ->paginate(9);

        return view('pages.article.index', compact('articles', 'featuredArticle'));
    }

    /**
     * Display a specific article by its slug.
     */
    public function show(string $slug): View
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $relatedArticles = Article::where('id', '!=', $article->id)
            ->orderBy('date', 'desc')
            ->take(3)
            ->get();

        return view('pages.article.detail-article', compact('article', 'relatedArticles'));
    }
}
