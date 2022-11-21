<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function profile() {
        $user = auth()->user();
        return view('profile.profile',[
            'user' => $user
        ]);
    }

    public function changePasswordForm() {
        return view('users.change-password',[
            'user' => auth()->user()
        ]);
    }

    public function changePassword(Request $request) {
        $request->validate([
            'user_id' => 'numeric|required',
            'current_password'=>'string|required',
            'new_password' => 'string|required|confirmed'
        ]);

        $user = User::findOrFail($request->user_id);

        $check = Hash::check($request->current_password, $user->password);

        if(!$check) {
            return back()->with('Error','Your current password incorrect.');
        }

        $user->update(['password'=>bcrypt($request->new_password)]);

        return redirect('/users/profile')->with('Info','Your password has been changed.');
    }

   
}
