<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.04.2018
 * Time: 14:06
 */

namespace App\Http\Controllers;


class Home
{
    public function Index()
    {
        return view('index');
    }
    public function Products()
    {
        return view('products');
    }
    public function Product($id)
    {
        return $id;
    }
}