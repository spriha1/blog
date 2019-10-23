<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function getArticles()
    {
        // $articles = Article::select('id', 'title', 'details', 'excerpt');
        $articles = Article::all();
        return response($articles, 200);
        // return $articles;
    }

    public function addArticle(Request $request)
    {
        $article = new Article;

        $article->title = $request->title;
        $article->details = $request->details;
        $article->userId = $request->userId;
        $article->save();

        return response($article, 200);
        // return $article;
    }

    public function updateArticle(Request $request)
    {
        $article = Article::find($request->id);

        $article->title = $request->title;
        $article->details = $request->details;
        $article->user_id = $request->userId;
        $article->save();

        return response($article, 200);
        // return $article;
    }

    public function deleteArticle($id)
    {
        Article::destroy($id);
        $response = 'Article deleted successfully';
        return response($response, 200);
    }

}
