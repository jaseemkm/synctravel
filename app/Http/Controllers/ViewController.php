<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function logout(Request $request) {
  Auth::logout();
  return redirect('/home');
}
    public function index()
    {
        $details = DB::select('select * from tour_details', [1]);
        return view('index',['details' => $details]);
    }
    public function booking($id)
    {
        $result = DB::table('tour_details')->where('id', $id)->first();
        return view('booking',['result' => $result]);
    }

    public function tour($id)
    {
        $result = DB::table('tour_details')->where('id', $id)->first();
        $img=DB::table('image')->where('name', $result->img)->get();

        return view('tour-details',['result' => $result,'img'=>$img]);
    }

    public function addbooking(Request $booking)
    {
        $packid =  $booking->input('id');
        $name = $booking->input('name');
        $email = $booking->input('mail');
        $mob = $booking->input('mob');
        $nmbr = $booking->input('number');
        $msg = $booking->input('message');
        $date= $booking->input('date');
        $result = DB::table('tour_details')->where('id', $packid)->first();
        $seat=$result->seat-$nmbr;
        DB::table('BookingDetails')->insert(
    ['packid' => $packid, 'name' => $name,'mail'=>$email,'mob'=>$mob,'no_person'=>$nmbr,'message'=>$msg,'date'=>$date,'package'=>$result->package]);


        if($result->package=='1')


        {
            DB::table('tour_details')->where('id',$packid)->update(['seat' => $seat]);
        }

            return redirect('/');
    }


}
