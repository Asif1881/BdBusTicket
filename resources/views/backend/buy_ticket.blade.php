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
                            <h4 class="card-title">Buy Ticket Details</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
{{--                                        <th>Customer Name</th>--}}
                                        <th>Route Name</th>
                                        <th>Bus Name</th>
                                        <th>Bus Number</th>
                                        <th>Total Seat</th>
                                        <th>Total Price</th>
                                        <th>Seat Numbers</th>
{{--                                        <th>Action</th>--}}
                                    </thead>
                                    <tbody>
                                        @if($buy_tickets)
                                            @foreach($buy_tickets as $index=>$ticket)
                                                <tr class="success">
                                                    <td>{{ $index+1 }}</td>
{{--                                                    <td>{{ $ticket->user->name ?? ""}}</td>--}}
                                                    <td>{{ $ticket->route_name ?? ""}}</td>
                                                    <td>{{ $ticket->bus_name ?? ""}}</td>
                                                    <td>{{ $ticket->bus_number ?? ""}}</td>
                                                    <td>{{ $ticket->total_seat ?? ""}}</td>
                                                    <td>{{ $ticket->price ?? ""}}</td>
                                                    <td>{{ $ticket->seat_number ?? ""}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
