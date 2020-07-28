<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function loginshow()
    {
        return view('auth.login');
    }
    public function loginproses(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $check = DB::table('admindbs')
            ->where('username', $username)
            ->first();

        if ($check && HASH::check($password, $check->password) && $check->status == 'active') {
            $check->isLogin = 'login';
            $check = (array)$check;
            session($check);

            return redirect('/admin/dashboard');
        }
        // dd($request->all());
    }

    // Content of Dashboard
    public function index()
    {
        return view('dashboard.index');
    }
}
