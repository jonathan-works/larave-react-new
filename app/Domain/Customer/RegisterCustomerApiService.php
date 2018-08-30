<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 28/08/2018
 * Time: 17:57
 */

namespace App\Domain\Customer;


use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterCustomerApiService
{

    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }
}