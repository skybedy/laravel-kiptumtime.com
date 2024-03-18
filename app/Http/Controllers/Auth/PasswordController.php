<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\Flauser;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $password = Hash::make($validated['password']);

        $request->user()->update([
            'password' => $password,
            'password_changed' => 1       
         ]);

        

        $flauser = Flauser::where('email', $request->user()->email);
         
        $flauser->update(['password' => $password]);

        return back()->with('status', 'Password updated');
    }
}
