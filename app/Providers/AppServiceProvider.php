<?php

namespace App\Providers;

use App\Domain\Customer\ForgotPasswordCustomerInterface;
use App\Domain\Customer\ForgotPasswordCustomerService;
use App\Domain\Customer\LoginCustomerApiInterface;
use App\Domain\Customer\LoginCustomerApiService;
use App\Domain\Customer\RegisterCustomerApiInterface;
use App\Domain\Customer\RegisterCustomerApiService;
use App\Domain\Customer\ResetPasswordCustomerApiInterface;
use App\Domain\Customer\ResetPasswordCustomerApiService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       //
    }
}
