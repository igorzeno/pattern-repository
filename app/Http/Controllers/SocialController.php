<?php

namespace App\Http\Controllers;

use App\Http\Services\SocialService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function index()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('vkontakte')->user();
        $u = (new SocialService())->SaveUser($user);
        if($u){
            return redirect()->route('home');
        }
        else {
            return back(400);
        }
    }
}
