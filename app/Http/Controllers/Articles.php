<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

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
        $categories = Category::all();
        $article = Article::where('id', $id);;

        if ($article === null)
        {
            abort(404);
        }
        $cat = Article::find($id)->Category;
        return view('Articles.edit', ['categories' => $categories, 'article' => $article->get(), 'cat' => $cat]);
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

    public function Update(Request $request, $id)
    {
        $article = Article::find($id);

        if ($article !== null)
        {
            $article->title = $request->input('title');
            $article->short = $request->input('short');
            $article->body = $request->input('body');
            $article->category_id = $request->input('category_id');
            if ($request->file('article_image') !== null)
            {
                $path = $article['image_url'];
                Storage::delete($path);
                $newPath = $request->file('article_image')->store('uploads');
                $article->image_url = $newPath;
            }

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

        abort(404);
    }
    public function UploadImage(Request $request)
    {
        $path = $request->file('file')->store('uploads');

        return response()->json([
            'location' => 'http://'.$_SERVER['SERVER_NAME'].'/img/'.$path,
        ]);
    }
    public function Delete($id)
    {
        $article = Article::find($id);
        if ($article !== null)
        {
            $path = $article['image_url'];
            $article->delete();
            Storage::delete($path);
            return redirect()->route('ShowAll');
        }

        abort(404);

    }
}
