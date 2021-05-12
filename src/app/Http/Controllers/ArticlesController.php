<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
  public function show($id)
  {
    $article = \App\Models\Article::find($id);

    return view('articles.show', ['article' => $article]);
  }
}
