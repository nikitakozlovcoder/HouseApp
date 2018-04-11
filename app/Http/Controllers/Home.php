<?php

namespace App\Http\Controllers;


use App\Article;
use App\Category;
use App\Image;
use Illuminate\Support\Facades\DB;

class Home
{
    public function Index()
    {
        $images = Image::all();
        $articles= DB::table('articles')->where('is_main', true)->take(3)->get();
        return view('index', ['images' => $images, 'articles' => $articles]);
    }
    public function Products()
    {
        $categories = Category::all();
        return view('products', ['categories' => $categories]);
    }
    public function Product($id)
    {
        $article = Article::find($id);
        return view('product', ['article'=>$article]);
    }
}