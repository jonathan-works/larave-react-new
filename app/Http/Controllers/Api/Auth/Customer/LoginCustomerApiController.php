<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 27/08/2018
 * Time: 16:05
 */

namespace App\Http\Controllers\Api\Auth\Customer;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginCustomerApiController extends Controller
{

    use AuthenticatesUsers;

    protected $guard = 'customer-api';

    public function login(Request $request)
    {

        if ($this->guard($this->guard)->attempt(['email' => $request->email, 'password' => $request->password])) {

            $user = $this->guard($this->guard)->user();

            $success['token'] = $user->createToken('MyApp')->accessToken;

            return response()->json(['success' => $success], 200);
        }

        return response()->json(['error' => 'Unauthorised'], 401);

    }

    protected function guard()
    {
        return Auth::guard($this->guard);
    }
}