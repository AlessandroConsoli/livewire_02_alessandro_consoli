<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view('article.create');
    }

    public function edit(Article $article){ //* Dependency injection (impongo che l'oggetto sia di tipo Article)
        return view('article.edit', compact('article')); //* aggiungo anche il dato che è l'articolo con "compact"
    }

}
