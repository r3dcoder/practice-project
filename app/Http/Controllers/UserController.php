<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\userUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function dashboard(){

        return view('user.dashboard');

    }
    public function comments(){

        return view('user.comments');
    }

    public function profile(){

        return view('user.profile');
    }

    public function profilePost(userUpdate $request){

        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back();
    }
    public function deleteComment($id){

        $comment= Comment::where('id', $id)->where('user_id', Auth::id())->delete();

        return back();
    }

}
