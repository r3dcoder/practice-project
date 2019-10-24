<?php

namespace App\Http\Controllers;

use App\bookRoom;
use App\Http\Requests\carRent;
use App\Post;
use App\rent_car;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //

    public function index(){

        $posts = Post::all();

        return view('welcome', compact('posts'));

    }

    public function singlePost(Post $post){

        return view('singlePosst', compact('post'));

    }

    public function about(){
        return view('about');

    }
    public function contact(){
        return view('contact');

    }
    public function slidePhoto(){
        return view('slider');

    }
    public function carRent(){
        return view('carRent');
    }

    public function bookedCar(Request $request){
        $post = new rent_car();
        $post->pic_up_location = $request['pic_up_location'];
        $post->pic_up_date = $request['picUpDate'];
        $post->return_date = $request['returnDate'];
        $post->car_type= $request['carType'];

        $post->mobile_number= $request['mobile'];
        $post->save();
        return back()->with('success', 'Post successfully created');
    }

    public function roomBook(){

        return view('roomBook');
    }

    public function roomBooked(Request $request){
        $post = new bookRoom();
        $post->pic_up_date = $request['picUpDate'];
        $post->return_date = $request['returnDate'];
        $post->room_number= $request['roomType'];

        $post->mobile_number= $request['mobile'];
        $post->save();
        return back()->with('success', 'Post successfully created');

    }
}
