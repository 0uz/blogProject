<?php

namespace App\Http\Controllers;

use App\Models\artical;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Index";
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
    public function store(Request $request)
    {
        return "add article";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artical  $artical
     * @return \Illuminate\Http\Response
     */
    public function show(artical $artical)
    {
        return "show article";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artical  $artical
     * @return \Illuminate\Http\Response
     */
    public function edit(artical $artical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artical  $artical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artical $artical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artical  $artical
     * @return \Illuminate\Http\Response
     */
    public function destroy(artical $artical)
    {
        //
    }
}
