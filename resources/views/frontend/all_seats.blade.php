@extends('frontend.layout.layout')
@section('content')
<section id="breadcrumb">
    <div class="overly"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 text-center">
                <div class="breadcrumbinfo">
                    <article>
                        <span class="b-title">Stop Looking. Start Tracking!</span>
                        {{--<form action="https://ideal.thesoftking.com/bluebus/search" method="get">
                            <div class="form-row">
                                <div class="col-12 col-md-3 col">
                                    <input type="text" name="start_point" value=""
                                           id="fromAutoComplete" class="form-control" placeholder="Form">
                                </div>
                                <div class="col-12 col-md-3 col">
                                    <input type="text" name="end_point" value="" id="toAutoComplete"
                                           class="form-control" placeholder="To">
                                </div>
                                <div class="col-12 col-md-3 col">
                                    <input type="text" name="date" id="datetimepicker2"
                                           value="26 Feb 2020" class="form-control"
                                           placeholder="Date">

                                </div>
                                <div class="col-12 col-md-3 col">
                                    <button type="submit" class="form-control h-serch">SEARCH</button>
                                </div>
                            </div>
                        </form>--}}
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== banner end =========== -->

<!-- =========== Main Ticket Booking Area Start ===================== -->
<div id="ticket-booking">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4>{{ $view_seats->bus_name }}</h4>
                <div class="margin-bottom-10"></div>
                <h4>{{ $view_seats->bus_number }}</h4>
                <div class="margin-bottom-10"></div>

                <p><strong><span class="text-danger">Route Name:</span> {{ $view_seats->route_name }}
                    </strong></p>
                <div class="margin-bottom-10"></div>

                <p>Dep Time: {{ $view_seats->dep_time }}</p>
                <p>Arriving Time: {{ $view_seats->arr_time }}</p>
                <div class="margin-bottom-5"></div>
                <strong>Total Seat: {{ $view_seats->total_seat }}</strong>
                <div class="margin-bottom-5"></div>
                <strong>Ticket Price : {{ $view_seats->seat_price }} Tk.</strong>
            </div>
        </div>

        <div class="margin-bottom-60"></div>

        <div class="row">
            <div class="offset-md-1 col-md-5 col-sm-10 ">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="seat  ">
                            <div class="seat-body">
                                <span class="seat-handle-left"></span>
                                <span class="seat-handle-right"></span>
                                <span class="seat-bottom"></span>
                            </div>
                        </div>
                        <p>Available Seat</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="seat ChooseSeat selected ">
                            <div class="seat-body">
                                <span class="seat-handle-left"></span>
                                <span class="seat-handle-right"></span>
                                <span class="seat-bottom"></span>
                            </div>
                        </div>
                        <p>Selected Seat</p>
                    </div>


                    <div class="col-md-4 col-sm-4">
                        <div class="seat ladies last-seat seat occupied ChooseSeat ">
                            <div class="seat-body">
                                <span class="seat-handle-left"></span>
                                <span class="seat-handle-right"></span>
                                <span class="seat-bottom"></span>
                            </div>
                        </div>
                        <p>Booked Seat</p>
                    </div>
                </div>
                <div class="margin-bottom-40"></div>
                <div class="all-seats">
                    <div class="row"><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    A1
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    A2
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">&nbsp;</div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    A3
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    A4
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div></div><div class="row"><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    B1
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    B2
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">&nbsp;</div><div class="col-2">
                            <div class="seat ChooseSeat selected" data-item="selected">
                                <div class="seat-body">
                                    B3
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat ChooseSeat selected" data-item="selected">
                                <div class="seat-body">
                                    B4
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div></div><div class="row"><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    C1
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    C2
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">&nbsp;</div><div class="col-2">
                            <div class="seat ChooseSeat selected" data-item="selected">
                                <div class="seat-body">
                                    C3
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat ChooseSeat selected" data-item="selected">
                                <div class="seat-body">
                                    C4
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div></div><div class="row"><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    D1
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    D2
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">&nbsp;</div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    D3
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    D4
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div></div><div class="row"><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    E1
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    E2
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">&nbsp;</div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    E3
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    E4
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div></div><div class="row"><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    F1
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    F2
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">&nbsp;</div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    F3
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    F4
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div></div><div class="row"><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    G1
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    G2
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">&nbsp;</div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    G3
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    G4
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div></div><div class="row"><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    H1
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    H2
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">&nbsp;</div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    H3
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    H4
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div></div><div class="row"><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    I1
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    I2
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">&nbsp;</div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    I3
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    I4
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div></div><div class="row"><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    J1
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    J2
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">&nbsp;</div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    J3
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div><div class="col-2">
                            <div class="seat occupied ChooseSeat " data-item="">
                                <div class="seat-body">
                                    J4
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div></div><div class="row"><div class="col-2">
                            <div class="seat occupied ChooseSeat last-seat-21 " data-item="">
                                <div class="seat-body">
                                    M
                                    <span class="seat-handle-left"></span>
                                    <span class="seat-handle-right"></span>
                                    <span class="seat-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <form action="" class="price-details" id="bookingFrm"
                      method="post" accept-charset="utf-8">
                    <input type="hidden" name="_token" value="PiCxnFDq8Oe8XexEujBHLmWQQeT4WpTJPAj6HbEh">
                    <div class="form-group">
                        <h4> Facilities</h4>
                        <div id="facilities">
                            <div class="funkyradio">
                                <div class="funkyradio-default">
                                    <input type="radio" checked="">
                                    <label>Free Breakfast</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive ">
                        <table class="table table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td class="text-right" style="width: 30%;">Seat(s)</td>
                                <th id="seatPreview">B3, B4, C3, C4, </th>
                            </tr>
                            <tr>
                                <td class="text-right"><b> Total</b></td>
                                <th id="grandTotalPreview">{{ $view_seats->seat_price * 4 }} Tk</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
                <form action="{{ route('all-seats.store') }}" method="post">
                    @csrf
{{--                    <input type="hidden" name="trip_route_id" value="1">--}}
                    <input type="hidden" name="id" value="{{ $view_seats->id }}">
                    <input type="hidden" name="bus_number" value="{{ $view_seats->bus_number }}">
                    <input type="hidden" name="bus_name" value="{{ $view_seats->bus_name }}">
                    <input type="hidden" name="route_name" value="{{ $view_seats->route_name }}">
                    <input type="hidden" name="total_seat" value="4">
                    <input type="hidden" name="seat_number" value="B3, B4, C3, C4, ">
                    <input type="hidden" name="price" value="{{ $view_seats->seat_price }}">
{{--                    <input type="hidden" name="total_fare" value="200">--}}
{{--                    <input type="hidden" name="booking_date" value="2020-02-26 11:00:02">--}}
                    <button type="Submit" class="btn btn-block">Buy Ticket</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
