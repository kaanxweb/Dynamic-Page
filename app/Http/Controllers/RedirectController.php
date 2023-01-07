<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class RedirectController extends Controller
{
    public function redirect(){
        if(session()->has('locale'))
            return redirect()->route('page.show', session()->get('locale'));
        else
            return redirect()->route('page.show', App::getLocale());
    }
}
