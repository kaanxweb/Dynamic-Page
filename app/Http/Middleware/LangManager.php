<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class LangManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {



        //dd(session()->get('locale'));

        

        if (session()->has('locale') === false){
            session()->put('locale', App::getLocale());
        }


        //If lang and url are not the same, redirect to the correct url
        if (session()->has('locale') && $request->segment(1) != session()->get('locale')) {
            $locale = DB::table('langs')->where('code', $request->segment(1))->first();
            if ($locale) {
                //dd('Checkpoint 1 | LangManager Middleware | Redirect to correct url');
                return redirect()->route('lang.change', ['lang' => $locale->code]);
            }else{
                return redirect()->route('404', session()->get('locale'));
            }
        }

        if (session()->has('locale') && App::isLocale(session()->get('locale')) == false) {
            App::setLocale(session()->get('locale'));
        }
        return $next($request);
    }
}
