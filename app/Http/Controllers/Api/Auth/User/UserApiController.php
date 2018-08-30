<?php
/**
 * Created by PhpStorm.
 * User: Webeleven
 * Date: 29/08/2018
 * Time: 16:28
 */

namespace App\Http\Controllers\Api\Auth\User;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserApiController extends Controller
{
    public function details()
    {
        $user = Auth::user();

        if($user != null || $user != "")
            return response()->json(['success' => $user], 200);
        else
            return response()->json(['error'=>'Unauthorised'], 401);
    }
}