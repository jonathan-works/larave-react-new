<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 27/08/2018
 * Time: 15:31
 */

namespace App\Http\Controllers\Cms;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index ()
    {
        return view('cms.home.index');
    }
}