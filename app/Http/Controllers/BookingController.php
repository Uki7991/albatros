<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
	public function index() {
        $numbers = DB::select('select * from hotel_numbers');
        return $numbers;
    }

    public function create(Request $request) {
    	if($request) {
    		$book = new Booking();
    		$book->name = $request->name;
    		$book->last_name = $request->last_name;
    		$book->phone_number = $request->phone_number;
    		$book->coming_day = $request->coming_day;
    		$book->coming_month = $request->coming_month;
    		$book->coming_year = $request->coming_year;
    		$book->leaving_day = $request->leaving_day;
    		$book->leaving_month = $request->leaving_month;
    		$book->leaving_year = $request->leaving_year;
    		$book->hotel_number = $request->hotel_number;
    		$book->save();
            return redirect('/');
    	}
        else
            return redirect('/register');
    }

    public function info($id) {
        $room = \App\HotelNumber::find($id);
        return view('room', ['room' => $room]);
    }
}
