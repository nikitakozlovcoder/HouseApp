<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.04.2018
 * Time: 14:06
 */

namespace App\Http\Controllers;


use App\Article;
use App\Category;

class Home
{
    public function Index()
    {
        return view('index');
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