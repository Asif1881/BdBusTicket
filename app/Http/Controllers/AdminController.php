<?php

namespace App\Http\Controllers;

use App\SeatDetails;
use App\SeatPrice;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin');
    }

    public function users()
    {
        $users = User::where('role_id',3)->get();
        return view('backend.users',compact('users'));
    }

    public function buy_ticket()
    {
        $buy_tickets = SeatDetails::all();
//        dd($buy_tickets);
        return view('backend.buy_ticket',compact('buy_tickets'));
    }

    public function ticket_price()
    {
        $seat_details = SeatPrice::where('status',1)->get();
        Session::get('add_ticket');
        return view('backend.seat_details',compact('seat_details'));
    }

    public function add_ticket()
    {
        return view('backend.add_ticket');
    }

    public function add_ticket_details(Request $request)
    {
        $this->validate($request, [
            'seat_price' => 'required',
            'bus_name' => 'required',
            'bus_number' => 'required',
            'route_name' => 'required',
            'dep_time' => 'required',
            'arr_time' => 'required',
        ]);

        $add = new SeatPrice();
        $add->seat_price = $request->seat_price;
        $add->bus_name = $request->bus_name;
        $add->bus_number = $request->bus_number;
        $add->total_seat = $request->total_seat;
        $add->route_name = $request->route_name;
        $add->dep_time = $request->dep_time;
        $add->arr_time = $request->arr_time;
        $add->status = 1;
        $add->save();
        Session::put('add_ticket', 'Ticket Price add successfully');
        return redirect()->route('ticket.price');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
