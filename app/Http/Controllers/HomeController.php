<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CallMeeting;

class HomeController extends Controller
{

    public function index(){
        return view('home');
    }

    public function bookCall(){

        return view('book_call');
    }

    public function arrangeMeeting(Request $request)
    {
        $request->validate(CallMeeting::RULES);

        $data = array(
            CallMeeting::NAME => $request->name,
            CallMeeting::EMAIL => $request->email,
            CallMeeting::CELLNUMBER => $request->cellnumber,
            CallMeeting::DATE => $request->date,
            CallMeeting::TIME => $request->time,
            CallMeeting::DATE => $request->date,
        );

        if ($request->file('logo')) {
            $file = $request->file('logo');
            $data[CallMeeting::LOGO] = $file->getClientOriginalName();
            $file->move('public/assets/Logo', $file->getClientOriginalName());
        }

        if (CallMeeting::create($data)) {
            return redirect()->back()->with('success','Meeting scheduled successfully');
        }
    }

    public function checkTimeAvailability(Request $request)
    {
        $date = $request->date;
        $meetings = CallMeeting::select('time')->where('date', $date)->get();
        return json_encode($meetings);
    }
}
