<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\DetailUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'user_level' => '1'
        ]);
        $get_id = DB::table('users')->select('id')->orderBy('id', 'asc')->get();
        foreach ($get_id as $items) {
            $id_users = $items->id;
        }
        return DetailUsers::create([
            'id_users' => $id_users,
            'phone_num' => $input['phone_num'],
            'address' => $input['address'],
            'created_at'   => date('Y-m-d'),
            'updated_at'   => date('Y-m-d'),
        ]);
    }
}
