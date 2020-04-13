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
                        <form action="https://ideal.thesoftking.com/bluebus/search" method="get">
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
                        </form>
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
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Route</td>
                                <td>Departure</td>
                                <td>Arrive</td>
                                <td>Bus Name</td>
                                <td>Bus Number</td>
                                <td>Total Seat</td>
                                <td>Price Per Seat</td>
                                <td>View Seats</td>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($ticket_price as $price)
                            <tr>
                                <td>
                                    <div class="t-box-1">
                                        <h5>{{ $price->route_name }}</h5>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{ $price->dep_time }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $price->arr_time }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $price->bus_name }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $price->bus_number }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $price->total_seat }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $price->seat_price }}</h5>
                                </td>

                                <td>
                                    <div class="l-box">
                                        <div class="media">
                                            <div class="media-body align-self-end">
                                                <div class="link">
                                                    <a href="{{ route('view.seats',$price->id) }}" target="_blank">View Seats</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
