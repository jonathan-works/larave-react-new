<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 27/08/2018
 * Time: 16:06
 */

namespace App\Http\Controllers\Api\Auth\Customer;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;


class ResetPasswordCustomerApiController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;


    protected $guard = 'customer-api';

    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|string|email|max:120',
            'password' => 'required|string|min:6|max:120',
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function reset(Request $request)
    {
        //return 'teste';
        $this->validate($request, $this->rules(), $this->validationErrorMessages());

            $response = $this->broker()->reset(
                $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        if($response == Password::PASSWORD_RESET)
            return response()->json(['success' => 'Success'], 200);
        else
            return response()->json(['error'=>'Unauthorised'], 401);
    }

    protected function guard()
    {
        return Auth::guard($this->guard);
    }
}
