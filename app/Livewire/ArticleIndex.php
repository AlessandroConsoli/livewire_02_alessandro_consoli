<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleIndex extends Component
{
    public function render()
    {
        $articles = Article::all()->sortByDesc('created_at');
        return view('livewire.article-index', compact('articles'));
    }
}
