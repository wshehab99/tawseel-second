<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(RegistrRequest $request)
    {
        return response()->json(User::create($request->validated()), 200);
    }
}
