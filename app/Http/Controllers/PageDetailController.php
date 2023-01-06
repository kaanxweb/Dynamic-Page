<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use App\Models\Page;
use App\Models\PageDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all();
        $languages = Lang::all();
        return view('page_detail.create')
        ->with('pages', $pages)
        ->with('languages', $languages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pageDetail = new PageDetail;
        $pageDetail->page_id = $request->page_id;
        $pageDetail->page_name = $request->page_name;
        $pageDetail->title = $request->title;
        $pageDetail->slug = Str::slug($request->page_name);
        $pageDetail->language = $request->language;
        if($pageDetail->save()){
            return redirect()->route('pageDetail.create')->with('success', 'Page Detail Created Successfully');
        }
        return redirect()->route('pageDetail.create')->with('error', 'Page Detail Created Failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
