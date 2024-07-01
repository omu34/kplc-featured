<?php

namespace App\Http\Controllers;

use App\Models\LatestNews;

class LatestNewsController extends Controller
{
    public function show($id)
    {
        $news = LatestNews::findOrFail($id);

        return view('news.show', compact('news'));
    }
}