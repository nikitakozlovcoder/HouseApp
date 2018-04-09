<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class Articles extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function ShowAll()
    {
        $articles = Article::all();
        return view('Articles.index',['articles' => $articles]);
    }
    public function Show($id)
    {
        return view('Articles.edit');
    }

    public function AddShow()
    {
        $categories = Category::all();

        return view('Articles.add', ['categories' => $categories]);
    }
    public function Add(Request $request)
    {
        $article = new Article();
        $article->title = $request->input('title');
        $article->short = $request->input('short');
        $article->body = $request->input('body');
        $article->category_id = $request->input('category_id');
        $path = $request->file('article_image')->store('uploads');
        $article->image_url = $path;
        if ($request->input('is_main'))
        {
            $article->is_main = true;
        }
        else
        {
            $article->is_main = false;
        }
        $article->save();
        return redirect()->route('ShowAll');
    }

    public function Update()
    {

    }
    public function Delete()
    {

    }
}
