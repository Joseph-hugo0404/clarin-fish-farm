<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserManagementController extends Controller
{

    public function __construct() {
        $this->middleware('role:admin');
    }

    public function show(User $name) {
        $roles = [];
        foreach(Role::orderBy('role')->get() as $role) {
            $roles[$role->id] = $role->role;
        }

        $permissions = [];
        foreach(Permission::orderBy('permission')->get() as $perm) {
            $permissions[$perm->id] = $perm->permission;
        }

        return view('profile.mgt.show', [
            'name' => $name,
        ]);
    }

    public function updateUser(User $name, Request $request) {
        $request->validate([
            'name' => 'string|required',
            'lname' => 'string|required',
            'fname' => 'string|required',
            'email' => 'email|required',
        ]);

        $user->update($request->all());

        return redirect('/user-mgt/' . $name->id)->with('Info','This user has been updated');
    }

    public function changePassword(User $user, Request $request) {

        $request->validate([
            'password' => 'string|required|confirmed'
        ]);

        $user->update(['password'=>bcrypt($request->password)]);

        return redirect('/user-mgt/' . $user->id)->with('Info','This user\'s password has been updated.');
    }

    public function toggleUserActivation(User $user) {

        $user->active = !$user->active;
        $user->save();

        $activation = $user->active ? "ACTIVATED" : "DEACTIVATED";

        return redirect('/user-mgt/' . $user->id)->with('Info',"User $user->user has been $activation");
    }

}
