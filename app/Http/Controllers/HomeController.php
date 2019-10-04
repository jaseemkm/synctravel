<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function addpackage()
    {
        return view('addpackage');
    }
    public function editpackage()
    {
        $result = DB::table('tour_details')->get();
        return view('editpackage',['result' => $result]);
    }
    public function deletepackage($id)
    {
        DB::table('tour_details')->where('id',$id)->delete();
        return redirect('/editpackage');
    }

    public function index()
    {
        return view('dashboard');
    }
    public function indexhome()
    {
        return 'dashboard';
    }
    public function updatepackage($id)
    {
        $result = DB::table('tour_details')->where('id', $id)->first();
        return view('updatepackage',['result' => $result]);


    }

    public function travel()
    {
        $result = DB::table('BookingDetails')->where('package', '0')->get();
        return view('travelbooking',['result' => $result]);
    }
    public function event()
    {
        $result = DB::table('BookingDetails')->where('package', '1')->get();
        return view('event',['result' => $result]);

    }
    public function insert(Request $req)
    {
        $title = $req->input('title');
        $price = $req->input('price');
        $per = $req->input('per');
        $dis = $req->input('dis');
        $days = $req->input('days');
        $uid=uniqid();
        $package=$req->input('pack');
        $date=$req->input('date');
        $seat=$req->input('seat');

        foreach ($req->image as $image)
         {

            $path = $image->store('public');
            $split = explode('/', $path);
            DB::table('image')->insert(
                 ['name'=>$uid,'path'=>$split[1]]);

         }

      if($package=='0')
        {

        DB::table('tour_details')->insert(
    ['title' => $title, 'price' => $price,'pack_person'=>$per,'description'=>$dis,'img'=>$uid,'duration'=>$days.'days','package'=>$package,'image'=>$split[1]]);
        return view('addpackage');
       }

       if($package=='1')
       {
        DB::table('tour_details')->insert(
    ['title' => $title, 'price' => $price,'pack_person'=>$per,'description'=>$dis,'img'=>$uid,'duration'=>$days.'days','package'=>$package,'image'=>$split[1],'date'=>$date,'seat'=>$seat]);
        return view('addpackage');
       }



    }
    public function update(Request $req)
    {
        $id=$req->input('id');
        $title = $req->input('title');
        $price = $req->input('price');
        $per = $req->input('per');
        $dis = $req->input('dis');
        $days = $req->input('days');
        //$uid=uniqid();
        $package=$req->input('pack');
        $date=$req->input('date');
        $seat=$req->input('seat');
        /*
        foreach ($req->image as $image)
         {

            $path = $image->store('public');
            $split = explode('/', $path);
            DB::table('image')->insert(
                 ['name'=>$uid,'path'=>$split[1]]);

         }
         */




        if($package=='0')
        {

        DB::table('tour_details')->where('id',$id)->update(
    ['title' => $title, 'price' => $price,'pack_person'=>$per,'description'=>$dis,'duration'=>$days.'days','package'=>$package]);
        return redirect('/editpackage');
       }

       if($package=='1')
       {
        DB::table('tour_details')->where('id',$id)->update(
    ['title' => $title, 'price' => $price,'pack_person'=>$per,'description'=>$dis,'duration'=>$days.'days','package'=>$package,'date'=>$date,'seat'=>$seat]);
        return redirect('/editpackage');
       }



    }



}
