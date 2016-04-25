<?php

namespace App\Http\Middleware;

use Closure;

class RequestCheck
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
		//dd($request);
		$required_para=$request->input('tags');

		if(isset($required_para) && empty($required_para))
		{
			return redirect('search/flickr');
		}

		return $next($request);
	}
}
