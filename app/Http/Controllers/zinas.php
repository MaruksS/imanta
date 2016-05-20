<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Input;
use App\Http\Requests\CreateArticle;
use Auth;


class zinas extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }
    public function index(){
        $articles=Article::latest()->get();
        return view('zinas.index')->with('articles',$articles);
    }


    public function create()
    {
        return view('zinas.izveidot');
    }
    public function store(CreateArticle $request)
    {
        $article=new Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->user_id = Auth::user()->id;
        $article->published_at = Carbon::now();
        if($request->hasFile('image'))
        {
            $file = Input::file('image');

            $article->filePath = $article['title'];

            $file->move(public_path().'/images/', $article['title']);
        }
        $article->save();
        return redirect('zinas');
    }
    public function show(Article $article)
    {
        return view('zinas.show')->with('article',$article);
    }

    public function edit(Article $article)
    {
        return view('zinas.labot',compact('article'));
    }
    public function update(Article $article,CreateArticle $request)
    {
        $article->title = $request->title;
        $article->body = $request->body;
        if($request->hasFile('image')) {
            $file = Input::file('image');

            $article->filePath = $article['title'];

            $file->move(public_path().'/images/', $article['title']);
        }
        $article->save();
        return redirect('zinas');
    }
    public function destroy($id)
    {
        $article = Article::find($id);

        $article->delete();

        return redirect('zinas');
    }
}