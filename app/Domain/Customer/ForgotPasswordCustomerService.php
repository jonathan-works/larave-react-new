<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 28/08/2018
 * Time: 17:52
 */

namespace App\Domain\Customer;


use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordCustomerService
{

    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }

}