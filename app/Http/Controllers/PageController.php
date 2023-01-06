<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class PageController extends Controller
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
        dd('hello');
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page;
        $page->access_name = $request->access_name;
        if ($page->save()) {
            return redirect()->route('page.create')->with('success', 'Page created successfully!');
        }
        return redirect()->route('page.create')->with('error', 'Page creation failed!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang, $slug = null)
    {
        if ($slug == null) {
            $page = Page::with(['pageDetails' => function ($query) {
                $query->where('lang', App::getLocale());
            }])->first();
        } else {
            $page = Page::withWhereHas('pageDetails', function ($query) use ($slug) {
                $query->where('slug', $slug);
                $query->where('lang', App::getLocale());
            })->first();
        }

        if ($page) {
            return view('pages.' . $page->access_name, compact('page'));
        }
        return redirect()->route('404', ['lang' => App::getLocale()]);
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
