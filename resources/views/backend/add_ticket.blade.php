@extends('backend.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="card-content table-full-width">
                            <h4 class="card-title" style="text-align: center">Ticket Price</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('add.ticket.details') }}" method="post" class="form-group">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="seat_price" class="form-control" placeholder="Add price" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="route_name" class="form-control" placeholder="Route Name" required>
                                            </div>
                                            <div class="col-md-6">
                                                <br><input type="text" name="bus_name" class="form-control" placeholder="Bus Name" required>
                                            </div>
                                            <div class="col-md-6">
                                                <br><input type="text" name="bus_number" class="form-control" placeholder="Bus Number" required>
                                            </div>
                                            <div class="col-md-6">
                                                <br><input type="text" name="dep_time" class="form-control" placeholder="Dep Time" required>
                                            </div>
                                            <div class="col-md-6">
                                                <br><input type="text" name="arr_time" class="form-control" placeholder="Arrived Time" required>
                                            </div>
                                            <div class="col-md-6">
                                                <br><input type="number" name="total_seat" class="form-control" placeholder="Total Seat" required>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
