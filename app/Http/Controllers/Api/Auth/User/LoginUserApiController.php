<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 27/08/2018
 * Time: 16:05
 */

namespace App\Http\Controllers\Api\Auth\User;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserApiController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $guard = 'cms-api';

    /**
     * LoginUserApiController constructor.
     * @param string $guard
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function login(Request $request){

        if($this->guard($this->guard)->attempt(['email' => $request->email, 'password' => $request->password])){

            $user = $this->guard($this->guard)->user();

            $success['token'] =  $user->createToken('MyApp')->accessToken;

            return response()->json(['success' => $success], 200);
        }

        return response()->json(['error' => 'Unauthorised'], 401);
    }

    protected function guard()
    {
        return Auth::guard($this->guard);
    }
}