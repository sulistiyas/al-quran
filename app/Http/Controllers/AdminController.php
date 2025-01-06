<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DetailUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index_admin()
    {
        return view('layouts.admin.dash');
    }

    public function index_users()
    {
        //disable ONLY_FULL_GROUP_BY
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $user_data = DB::select("select * from users s, detail_users ds group by s.id");
        // dd($user_data);
        return view('layouts.admin.user.index', ['users_data' => $user_data]);
    }

    public function show_users($id)
    {
        $fetch_data = DB::table('users')
            ->join('detail_users', 'id_users', '=', 'users.id')
            ->where('users.deleted_at', '=', NULL)
            ->where('users.id', '=', $id)
            ->orderBy('users.id', 'ASC')->get();
        return view('components.admin.modals.show', ['fetch_data' => $fetch_data]);
    }

    public function store_users(Request $request)
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
                'name'          => $request->txt_name,
                'email'         => $request->txt_email,
                'password'      => Hash::make($request->txt_pass),
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
                'phone_num'     => $request->txt_phone,
                'address'       => $request->txt_address,
                'created_at'    => date('Y-m-d h:i:s'),
                'updated_at'    => date('Y-m-d h:i:s')
            ]);
            Alert::success('Success', 'Insert Data Successfully');
            return redirect()->route('index_users');
        }
    }

    public function update_users(Request $request, string $id)
    {
        $users_data = User::where('id', '=', $id)->first();
        $detail_users = DetailUsers::where('id_users', '=', $id)->first();
        $validator = Validator::make($request->all(), [
            'txt_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Validation Error',
                'errors'    => $validator->errors()
            ], 401);
        } else {
            $users_data->update([
                'name'              => $request->txt_name,
                'user_level'        => $request->txt_role,
                'updated_at'        => date('Y-m-d h:i:s')
            ]);

            $detail_users->update([
                'phone_num'         => $request->txt_phone,
                'address'           => $request->txt_address,
                'updated_at'        => date('Y-m-d h:i:s')
            ]);
            Alert::success('Success', 'Successfully Update Users Data');
            return redirect()->route('index_users');
        }
    }

    public function edit_users($id)
    {
        $edit_data = DB::table('users')
            ->join('detail_users', 'id_users', '=', 'users.id')
            ->where('users.deleted_at', '=', NULL)
            ->where('users.id', '=', $id)
            ->orderBy('users.id', 'ASC')->get();
        return view('components.admin.modals.update', ['edit_data' => $edit_data]);
    }

    public function destroy_users($id)
    {
        // 
    }
}
