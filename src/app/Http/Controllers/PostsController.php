<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function show($post)
  {
    $posts = [
      '1' => '11',
      '2' => '22'
    ];

    if (! array_key_exists($post, $posts)) {
      abort(404, 'Sorry, that post was not found.');
    }

    return view('post', [
      // 'post' => $posts[$post] ?? 'Nothing here yet.'
      'post' => $posts[$post]
    ]);
  }
}
