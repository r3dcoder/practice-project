<?php

namespace App\Http\Controllers;

use App\bookRoom;
use App\rent_car;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct(){

        $this->middleware('checkRole:admin');

    }

    public function dashboard(){

        return view('admin.dashboard');
    }


    public function comments(){
        return view('admin.comments');
    }



    public function users(){
        return view('admin.users');
    }

    public function cars(){
        $cars = rent_car::all();
        return view('admin.posts', compact('cars'));

    }

    public function rooms(){
        $rooms = bookRoom::all();
        return view('admin.rooms', compact('rooms'));

    }

}
