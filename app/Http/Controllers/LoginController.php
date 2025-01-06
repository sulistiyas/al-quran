<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DetailUsers;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function auth_login()
    {
        if (auth()->user()->user_level == "0") {
            // return view('layouts.admin.dash');
            return redirect()->route('index_admin');
        } else if (auth()->user()->user_level == "1") {
            // return view('layouts.user.dash');
            return redirect()->route('index_user');
        }
    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function register_user(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'txt_name' => 'required',
            'txt_email' => 'required',
            'txt_pass' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Validation Error',
                'errors'    => $validator->errors()
            ]);
        } else {
            User::create([
                'name'          => $request->name,
                'email'         => $request->email,
                'password'      => Hash::make($request->password),
                'user_level'    => $request->txt_role,
                'created_at'    => date('Y-m-d h:i:s'),
                'updated_at'    => date('Y-m-d h:i:s')
            ]);
            $get_id = DB::table('users')->select('id')->orderBy('id', 'asc')->get();
            foreach ($get_id as $items) {
                $id_users = $items->id;
            }
            DetailUsers::create([
                'id_users'      => $id_users,
                'phone_num'     => $request->phone_num,
                'address'       => $request->address,
                'created_at'    => date('Y-m-d h:i:s'),
                'updated_at'    => date('Y-m-d h:i:s')
            ]);
        }
    }
    // public function auth_logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('/');
    // }
}
