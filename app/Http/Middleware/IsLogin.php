<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsLogin
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
        $url_ori = url('');
        $url_req = str_replace( $url_ori, '', $request->url() );
        $url_arr = explode('/', $url_req );
        $jml = count($url_arr);
        $cr = "";
        // if( $jml >= 5) $cr = $url_arr[4];
        if( $jml > 0 ) $cr = $url_arr[1];
        // echo $url_arr[1]; die();

        if( auth()->guard('pegawai')->check() || auth()->guard('kontraktor')->check() )
        {
            if( $cr =='login' ) return redirect()->route('dashboard.index');
            else return $next($request);
        } else {
            if( $cr == "login") return $next( $request );
            else return redirect()->route('login.index');
        }
        return $next($request);
    }
}
