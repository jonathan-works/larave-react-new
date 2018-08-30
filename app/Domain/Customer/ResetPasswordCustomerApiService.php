<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 28/08/2018
 * Time: 17:59
 */

namespace App\Domain\Customer;


use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordCustomerApiService
{
    use ResetsPasswords;

    public function __construct()
    {
        $this->middleware('guest');
    }
}