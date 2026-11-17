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
        $featuredArticle = rescue(function () {
            $featured = Article::where(function ($q) {
                $q->where('is_published', true)->orWhereNull('is_published');
            })
            ->where('is_featured', true)
            ->first();

            if ($featured) {
                return $featured;
            }

            return Article::where(function ($q) {
                $q->where('is_published', true)->orWhereNull('is_published');
            })
            ->orderBy('sort_order', 'asc')
            ->orderBy('date', 'desc')
            ->first();
        }, function () {
            return rescue(fn () => Article::orderBy('date', 'desc')->first(), null, false);
        }, false);

        $articles = rescue(function () {
            return Article::where(function ($q) {
                $q->where('is_published', true)->orWhereNull('is_published');
            })
            ->orderBy('sort_order', 'asc')
            ->orderBy('date', 'desc')
            ->paginate(9);
        }, function () {
            return rescue(fn () => Article::orderBy('date', 'desc')->paginate(9), Article::paginate(9), false);
        }, false);

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
