<?php

namespace App\Http\Controllers\web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::where("email", request("email"))->first();
        if (!$user) {
            $user = User::create([
                "email"=> request("email"),
                "password"=> Hash::make(request("password")),
                'name'=> request('name'),
            ]);
            $token = $user->createToken('lgoin')->plainTextToken;
            Auth::login($user);
            $queryString = http_build_query(['user'=>$user->toArray() , 'token'=>$token]);
            return Redirect::to('http://localhost:3000/index.php?' . $queryString); // the marketplace url
        }
        return "Cann't register for this email";  // still in the same page
    }
    public function login(Request $request)
    {
        $user = User::where('email', request('email'))->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $token = PersonalAccessToken::where('tokenable_id', $user->id)->first();
            if ($token) {
                $token->delete();
            }
            $token = $user->createToken('lgoin')->plainTextToken;
            Auth::login($user);
            $queryString = http_build_query(['user'=>$user->toArray() , 'token'=>$token]);
            return Redirect::to('http://localhost:3000/index.php?' . $queryString); // the marketplace url

        }
        return 'Cannot login now';

    }
    public function logout(Request $request)
    {
        $user = Auth::user();
        $token = PersonalAccessToken::where('tokenable_id', $user->id)->first();
        $token->delete();
        Auth::logout();
        return 1;

    }
}
