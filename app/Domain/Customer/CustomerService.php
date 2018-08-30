<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 28/08/2018
 * Time: 17:30
 */

namespace App\Domain\Customer;


use App\Domain\Customer;
use App\Http\Helper\JsonResponseApi;
use App\Http\Requests\Customer\CreateCustomerRequest;
use App\Http\Requests\Customer\PasswordEmailRequest;
use App\Http\Requests\Customer\PasswordResetRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Auth;

class CustomerService
{
//    use SendsPasswordResetEmails;
//    use AuthenticatesUsers;
//    use RegistersUsers;
//    use ResetsPasswords;


//    protected function guard()
//    {
//        return Auth::guard('customer');
//    }

    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;

            return JsonResponseApi::success($success, $this->successStatus);
        }
        else{

            return JsonResponseApi::error('Unauthorised');
        }
    }

    public function register(CreateCustomerRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $customer = Customer::create($input);
        $success['token'] =  $customer->createToken('MyApp')->accessToken;
        $success['name'] =  $customer->name;

        return JsonResponseApi::success($success);
    }

    public function sendResetLinkEmail(PasswordEmailRequest $request)
    {

        return 'teste email';
    }

    public  function reset(PasswordResetRequest $request)
    {
        return 'teste showResetForm';
    }




}