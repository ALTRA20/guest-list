<?php

namespace App\Http\Controllers\Auth;
use App\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
{
    Auth::logout();

    return redirect()->route('login');
}

}
