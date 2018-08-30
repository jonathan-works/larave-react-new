<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 28/08/2018
 * Time: 17:56
 */

namespace App\Domain\Customer;


use App\Http\Helper\JsonResponseApi;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginCustomerApiService
{
    use AuthenticatesUsers;


    public function __construct(JsonResponseApi $jsonResponseApi)
    {
        $this->middleware('guest')->except('logout');

        //$this->jsonResponseApi = $jsonResponseApi;
    }

}