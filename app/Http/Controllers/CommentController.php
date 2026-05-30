<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    public function store(Request $request, string $slug): RedirectResponse
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'content' => 'required|string|max:2000',
        ]);

        $article->comments()->create($validated);

        return redirect()
            ->back()
            ->with('comment_success', 'Komentar kamu berhasil dikirim!');
    }
}