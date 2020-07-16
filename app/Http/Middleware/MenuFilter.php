<?php

namespace App\Http\Middleware;

use App\Page;
use Closure;

class MenuFilter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $page = Page::where('slug', $request->slug)->first();
        if ($page->show == 0) {
            return redirect(route('front.index'));
        }
        return $next($request);
    }
}
