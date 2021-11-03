<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    function index()
    {
        $user = new User;
        return $user;
    }
    function register(Request $request)
    {
        $user = new User();
        if (User::where('email', $request->email)->exists()) {
            return ["User Already Exist"];
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role == 'hotel_manager' ? 'hotel_manager' : 'student',
                'password' => bcrypt($request->password),
                'address' => $request->address,
                'phone_no' => $request->phone_no,
            ]);
            $token = $user->createToken('token')->plainTextToken;
            return ["message" => "success", "user" => $user, "token" => $token];
        }
    }
    function login(Request $request)
    {

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return $this->error('Credentials not match', 401);
        } else {
            /** @var \App\Models\User $user **/
            $user = Auth::user();
            $token = $user->createToken('token')->plainTextToken;
            return ["message" => "success", "user" => $user, "token" => $token];
        }
    }
    function logout(){
    try {
        /** @var \App\Models\User $user **/
        $user = Auth()->user();
        $log =  $user->tokens()->delete();
       
        if ($log) {
          return [ 'message'=>'success'];
        }
    } catch (\Illuminate\Auth\AuthenticationException $th) {
        return $th->getMessage();
    }
        
    }
}
