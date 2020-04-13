<?php

namespace App\Http\Controllers;

use App\SeatDetails;
use App\SeatPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomerSeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.all_seats');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'price' => 'required',
            'bus_name' => 'required',
            'bus_number' => 'required',
            'route_name' => 'required',
            'total_seat' => 'required',
            'seat_number' => 'required',
        ]);

        $add = new SeatDetails();
        $add->seat_price_id = $request->id;
        $add->price = $request->price;
        $add->bus_name = $request->bus_name;
        $add->bus_number = $request->bus_number;
        $add->total_seat = $request->total_seat;
        $add->route_name = $request->route_name;
        $add->seat_number = $request->seat_number;
        $add->status = 0;
        $add->user_id = Auth::id();
        $add->save();
        Session::put('booking_ticket', 'Ticket Booking successfully');
        return redirect()->route('bd-bus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
