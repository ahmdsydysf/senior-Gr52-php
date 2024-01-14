<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsYoung
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        dd($request->path(), $request->url(), $request->is('main/*'), $request->host(), $request->schemeAndHttpHost(), $request->httpHost(), $request->ip());

        $name = $_GET['name'];

        $_GET['status'] = 'active';

        if($request->age <= 20) {
            // return view('all.allcontroller');
            // return redirect('all/controller');
            return redirect()->route('all', ['name' => 'karim&sayed' , 'age' => 500]);
            // return redirect('all/karim/controller/20');
            // return response()->view('all.allcontroller', ['name' => 'mohamed' , 'age' => 50]);
            // return redirect()->route('user_age', ['age' => $request->age]);
            // return redirect('user/age/{age}');
        }
        return $next($request);
        // echo "<h1> yes pass </h1>";
    }
}
