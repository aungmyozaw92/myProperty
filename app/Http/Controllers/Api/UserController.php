<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;

class UserController extends Controller
{
    public function index(){
    	$users = User::with('roles')->get();
    	// $users->role = User::with('roles');
    	return response()->json(["users" => $users],200);
    }
    public function getAllRoles(){
    	$roles = Role::pluck('name')->all();
    	return response()->json($roles);
    }

    public function store(Request $request)
    {
    	// dd ($request);
    	// dd ($request->input('roles'));

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm_password',
            'roles' => 'required'
        ]);


        $input = $request->all();
        $input['password'] = Hash::make($input['password']);


        $user = User::create($input);
        $user->assignRole($request->input('roles'));


        return response()->json($user);

    	// $user = new User();
    	// $user->name     = $request->get('name');
    	// $user->email    = $request->get('email');
    	// $user->password = bcrypt($request->get('password'));
    	// $user->save();
    	// return response()->json($user);
    }
}
