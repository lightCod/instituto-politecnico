<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('users.listuser')->with(['users' => $users, 'msg' => '']);
    }

    public function create(){
        return view('users.storeuser')->with('msg', '');
    }

    public function store(Request $request){
        try{
            $users = User::all();
            $user = new User();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->user_type = $request['user_type'];
            if($request['password'] != $request['password_confirmation']){
                return view('users.storeuser')->with(['msg' => 'Confirm password doesnt match']);
            }
            $user->password = bcrypt($request['password']);

            $user->save();
            return view('users.storeuser')->with(['msg' => 'success']);
    }
    catch(Exception $ex){
        return view('users.storeuser')->with('msg', 'error');
    }
    }    

    public function edit(){
        return view('users.changePass')->with(['msg' => '']);
    }

    public function update(Request $request){
        $user = User::where(['email' =>$request['email']])->first();
        if(Hash::check($request['password'], $user->password)){  
            if($request['newPassword'] == $request['confirmPassword']){
                $user->password = bcrypt($request['newPassword']);
                $user->save();
                return view('users.changePass')->with(['msg' => 'success']);
            }
            else {
                return view('users.changePass')->with(['msg' => 'notMatch']);
            }
        }
        else {
            return view('users.changePass')->with(['msg' => 'passIncorrect']);
        }
    }
        
    public function destroy(Request $request){
        $user = User::find($request['id']);
        $user->delete();
        $users = User::all();
        return view('users.listuser')->with(['users' => $users, 'msg' => 'success']);
    }    
}
