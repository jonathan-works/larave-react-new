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

    protected $guard = 'api-cms';

    /**
     * LoginCustomerApiController constructor.
     * @param string $guard
     */
    public function __construct()
    {
        $this->middleware('auth:api-cms', ['except' => ['login', 'isLogged']]);
    }


    public function login(Request $request)
    {

        $this->validateLogin($request);

        $credentials = $request->only('email', 'password');

        if($token = auth($this->guard)->attempt($credentials)){
            return $this->respondWithToken($token);
        }

        return response()->json(['error' => 'Unauthorised'], 401);

    }

    public function logout()
    {
        auth($this->guard)->logout();

        return response()->json(['success' => 'Successfully logged out'],200);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth($this->guard)->refresh());
    }

    public function isLogged()
    {
        try {
            auth($this->guard)->userOrFail();
            return response()->json(['success' => 'Is Logged!'],200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => 'Is not logged in'], 401);
        }
    }


    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth($this->guard)->factory()->getTTL() * 60
        ],200);
    }

    protected function guard()
    {
        return Auth::guard($this->guard);
    }
}