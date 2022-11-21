<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile() {
        $user = auth()->user();
        return view('profile.profile',[
            'user' => $user
        ]);
    }

    function index()
    {
        $data = User::findOrFail(Auth::user()->id);
        return view('profile.profile', compact('data'));
    }

    public function update(Request $request) {
        $user = auth()->user();

        $request->validate([
            'name' => 'string|required',
            'email' => 'string|required',

            'password' => 'string|required',
        ]);

        //check user for duplicates
        if($request->user != $user->user) {
            $userWithUsername = User::where('user', $request->user)
                    ->where('id','<>', $user->id)->first();

            if($userWithUsername) {
                return back()->withInput()->with('Error','The user name is already taken by someone else.');
            }
        }

        $user->update($request->only('name','email','password'));

        $picField = $request['pic-field'];

        $this->savePic($picField, $user);

        return redirect('profile')->with('Info','Your user profile has been updated.');
    }

    private function savePic($field, $user) {
        $folderPath = 'images/profile-pics';

        if($field) {
            $image_parts = explode(";base64,", $field);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $file = $folderPath . $user->id . '.jpg';

            try {
                $data = \imagecreatefromstring($image_base64);
                if(!$data) {
                    die("Fatal Error!");
                }

                imagejpeg($data, $file);
            }catch(\Exception $ex) {
                die($ex->getMessage());
            }
        }
    }

}