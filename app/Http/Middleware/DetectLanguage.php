<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use BinshopsBlog\Models\BinshopsLanguage;

class DetectLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $lang = BinshopsLanguage::where('locale', $request->route('locale'))
            ->where('active', true)
            ->first();

        if (!$lang){
            return abort(404);
        }
        $request->attributes->add(['lang_id' => $lang->id, 'locale' => $lang->locale]);

        return $next($request);
    }
}
