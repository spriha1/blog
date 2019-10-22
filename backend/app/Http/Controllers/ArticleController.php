<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function getArticles()
    {
        $articles = Article::all();
        return $articles;
    }

    public function addArticle(Request $request)
    {
        $article = new Article;
        
        $article->title = $request->title;
        $article->details = $request->details;
        $article->user_id = $request->userId;
        $article->save();

        return $article;
    }

    public function updateArticle(Request $request)
    {
        $articles = Article::all();
        return $articles;
    }

    public function deleteArticle(Request $request)
    {
        $articles = Article::all();
        return $articles;
    }

}
