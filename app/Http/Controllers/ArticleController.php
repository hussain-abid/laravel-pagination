<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function get_data(){
        $articles = Article::paginate(10);
        return view('home', compact('articles'));
    }

}
