<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
class UserController extends Controller
{
    //all users
    public function userdata(){
        $user = DB::table('users')
        ->get();
        return view('home',['data'=>$user]);
    }

    //single user

    public function singleuser(string $id){
        $user =DB::table('users')
        ->where('id',$id)
        ->get();
        return view('singleuser',compact('user'));
    }

   public function insert(){
       return view('singup');
   }
   public function insertdata(UserRequest $req){
    $user = DB::table('users')->insert([
        'name' => $req->name,
        'email' => $req->email,
        'password' => $req->password,
        'city' => $req->city,
        'age' => $req->age,
    ]);
      if($user){
        return redirect()->route('home')->with('status','Your user is created successfull!');
      }
   }


//    update
public function update(string $id){
    // $user = User::find($id);
    $user = DB::table('users')
    ->where('id',$id)
    ->get();

    return view('update',['user'=> $user]);
}

public function updatedata(UserUpdateRequest $req,string $id){
    $user = DB::table('users')
    ->where('id',$id)
    ->update([
        'name' => $req->name,
        'email' => $req->email,
        'city' => $req->city,
        'age' => $req->age,
    ]);
    // return redirect()->route('update.user')->with('status','User Update Successfull!');
    return redirect()->route('home')->with('status','Your user is update successfull!');

}

public function delete(string $id){
    $delete = DB::table('users')
    ->where('id',$id)
    ->delete();

    return redirect()->route('home')->with('status','User delete successfull!');
}
}
