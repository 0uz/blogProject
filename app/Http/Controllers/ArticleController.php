<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleCreateRequest;
use App\Models\Article;
use App\Models\Tag;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Util\Json;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::get();
        return view('dashboard',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleCreateRequest $request)
    {
        $article = new Article($request->post());
        $article->owner = Auth::user()->id;
        $returned = Article::create($article->toArray());
//        dd($returned);
//        foreach (json_decode($request->post('tags')) as $tag){
//            Tag::create(['tag'=>$tag,'ownerArticle'=>])
//        }
        return redirect()->route('article.index')->with('success','Article created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $artical
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $artical
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $artical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $artical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $artical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $artical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $artical)
    {
        //
    }
}
