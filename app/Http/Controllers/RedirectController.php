<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class RedirectController extends Controller
{
    public function redirect(Request $request){
        if(session()->has('locale'))
            return route('page.show', session()->get('locale'));
        else
            return route ('page.show', App::getLocale());
    }
}
