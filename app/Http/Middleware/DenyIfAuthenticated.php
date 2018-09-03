<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 03/09/2018
 * Time: 12:01
 */

namespace App\Http\Middleware;

use App\Domain\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class DenyIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {


        return $next($request);
    }
}
