<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data = User::all();
        return view('view_admin', compact('data'));
    }

}