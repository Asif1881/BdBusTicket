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
            <div class="col-12 text-center">
                <h4>BUS COMPANY</h4>
                <div class="margin-bottom-10"></div>
                <h6>Bus Operator</h6>
                <div class="margin-bottom-10"></div>

                <p><strong><span class="text-danger">Route Name:</span> ROUTE 01
                    </strong></p>
                <div class="margin-bottom-10"></div>

                <p>Dep Time: 11:02 AM <span class="text-success">(26 Feb 2020)</span></p>
                <div class="margin-bottom-5"></div>
                <strong>Total Seat: 41</strong>
                <div class="margin-bottom-5"></div>
                <strong>Ticket Price : 50 USD</strong>
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

                <form action="#" class="price-details" id="bookingFrm" method="post" accept-charset="utf-8">
                    <input type="hidden" name="_token" value="PiCxnFDq8Oe8XexEujBHLmWQQeT4WpTJPAj6HbEh">
                    <div class="form-group">
                        <label><strong>Choose Boarding Point <span class="text-danger">*</span></strong></label>
                        <select name="boarding" id="stoppage" class="form-control form-control-lg boarding_point select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                            <option value="">Boarding Point</option>
                            <option value="point1">point1</option>
                            <option value="point2">point2</option>
                            <option value="point3">point3</option>
                        </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 508px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-stoppage-container"><span class="select2-selection__rendered" id="select2-stoppage-container" title="Boarding Point">Boarding Point</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>


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
                                <th id="grandTotalPreview">200 USD</th>
                            </tr>
                            </tbody>
                        </table>

                        <input type="hidden" name="trip_route_id" value="1">
                        <input type="hidden" name="fleet_registration_id" value="1">
                        <input type="hidden" name="trip_id_no" value="1891">
                        <input type="hidden" name="id_no" value="1581829953">
                        <input type="hidden" name="fleet_type_id" value="1">
                        <input type="hidden" name="total_seat" value="4">
                        <input type="hidden" name="seat_number" value="B3, B4, C3, C4, ">
                        <input type="hidden" name="price" value="50">
                        <input type="hidden" name="total_fare" value="200">
                        <input type="hidden" name="booking_date" value="2020-02-26 11:00:02">

                    </div>
                    <button id="submit-btn" class="btn btn-block">Continue</button>
                </form>



            </div>


        </div>
    </div>
</div>
@endsection
