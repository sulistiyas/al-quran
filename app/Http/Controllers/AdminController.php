<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('layouts.admin.dash');
    }

    public function create_user()
    {
        // 
    }

    public function store_user(Request $request)
    {
        // 
    }

    public function update_user($id)
    {
        // 
    }

    public function delete_user($id)
    {
        // 
    }
}
