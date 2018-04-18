<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use App\Models\Mahasiswa;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usernameCheck = Mahasiswa::where('email', $request->email)->first();
        if($usernameCheck)
        {
        $passwordCheck = Mahasiswa::where('email', $request->email)
                            ->where('password',$request->password)
                            ->first();
        if($passwordCheck)
        {
            // $this->guard()->login($passwordCheck);

            return response()->json([
                'status' => "Login Berhasil",
                'data' => $usernameCheck
            ]);
        }else{
            return response()->json([
                'status' => "Password Salah",
            ]);
        }
        }else{
            return response()->json([
                'status' => "Username Salah",
            ]);
        }

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }          
    }
}
