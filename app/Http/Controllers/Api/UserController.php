<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
    	$users = User::orderBy("id","DESC")->paginate(4);
    	return response()->json($users);
    }
    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required:min:6',
        ]);

    	$user = new User();
    	$user->name     = $request->get('name');
    	$user->email    = $request->get('email');
    	$user->password = bcrypt($request->get('password'));
    	$user->save();
    	return response()->json($user);

    }

    public function show($id)
    {
    	$user  = User::find($id);
    	return response()->json($user);
    }

    public function update($id,Request $request){
    	$user = User::find($id);
    	$user->name     = $request->get('name');
    	$user->email    = $request->get('email');
    	$user->update();
    	return response()->json($user);

    }

    public function destroy($id)
    {
        $user  = User::find($id);
        $user->delete();
        return response()->json('User has been successfully Delete');
    }
}
