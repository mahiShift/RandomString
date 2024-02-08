<?php

namespace App\Http\Controllers;

use App\Models\PasswordModel;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    public function CheckRequest(Request $request)
    {
        $password = md5($request->input('password'));
        // dd($password);
        $user = PasswordModel::where('password', $password)->first();
        // $user = DB::table('admin_password')->get();
        // dd($user);
        if ($user != '') {
            Session::put('name', $user->name);
            // echo 'hii....mahi';
            return redirect('index');
        } else {
            return redirect()->back()->with('success', 'password is incorrect.');
        }
    }

}
