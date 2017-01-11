<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UsersController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->select('name', 'email as user_email', 'id')->get();

        return view('user', compact('users'));
    }

    public function client()
    {
        $companies = DB::table('company')->select('company', 'currency', 'id', 'address')->get();

        return view('new-invoice', compact('companies'));
    }
}
