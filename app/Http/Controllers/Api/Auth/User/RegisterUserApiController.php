<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 27/08/2018
 * Time: 16:09
 */

namespace App\Http\Controllers\Api\Auth\User;


use App\Domain\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Tymon\JWTAuth\Facades\JWTAuth;

class RegisterUserApiController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $guard = 'api';

    /**
     * RegisterUserApiController constructor.
     * @param string $guard
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['register']]);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:120',
            'email' => 'required|string|email|unique:users|max:120',
            'password' => 'required|string|min:6|max:120',
            'password_confirmation' => 'required|same:password'
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();

        //Login
        $credentials = $request->only('email', 'password');
//        $success['token'] =  auth($this->guard)->attempt($credentials);
//        $success['name'] =  $user->name;
//
//        return response()->json(['success'=>$success]);

        $token = auth($this->guard)->attempt($credentials);

        return $this->respondWithToken($token);
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