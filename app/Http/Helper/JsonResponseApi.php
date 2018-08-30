<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 28/08/2018
 * Time: 16:34
 */

namespace App\Http\Helper;


class JsonResponseApi
{

    public static function success($success, $status = 200)
    {
        return response()->json(['success'=> $success], $status);
    }

    public static function error($error, $status = 401)
    {
        return response()->json(['error'=> $error ], $status);
    }
}