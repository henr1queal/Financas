<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;  // add the User model

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function me() 
    {
        return response()->json([
            'data' => auth()->user()
        ], 200);
    }
}