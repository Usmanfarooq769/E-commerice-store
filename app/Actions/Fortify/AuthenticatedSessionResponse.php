<?php

namespace App\Actions\Fortify;


use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class AuthenticatedSessionResponse implements LoginResponseContract
{
    
    public function toResponse($request)
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return redirect()->route('dashboard');
        }

        // all non-admin users (user, guest-users)
        return redirect()->route('products');
    }
}

