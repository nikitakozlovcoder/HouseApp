<?php

namespace App\Http\Controllers;


use App\Article;
use App\Category;
use App\Image;

class Home
{
    public function Index()
    {
        $images = Image::all();
        return view('index', ['images' => $images]);
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