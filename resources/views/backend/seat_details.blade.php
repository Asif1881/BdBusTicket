@extends('backend.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <a href="{{ route('add.ticket') }}" class="btn btn-primary">Add Ticket Price</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="card-content table-full-width">
                            <h4 class="card-title">Ticket Price</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                        <th>Price</th>
                                        <th>Route Name</th>
                                        <th>Bus Name</th>
                                        <th>Dep Time</th>
                                        <th>Arrive Time</th>
                                        <th>Total Seat</th>
                                        <th>Status</th>
                                    </thead>
                                    <tbody>
                                        @if($seat_details)
                                            @foreach($seat_details as $index=>$seat)
                                                <tr class="success">
                                                    <td>{{ $index+1 }}</td>
                                                    <td>{{ $seat->seat_price ?? ""}}</td>
                                                    <td>{{ $seat->route_name ?? ""}}</td>
                                                    <td>{{ $seat->bus_name ?? ""}}</td>
                                                    <td>{{ $seat->dep_time ?? ""}}</td>
                                                    <td>{{ $seat->arr_time ?? ""}}</td>
                                                    <td>{{ $seat->total_seat ?? ""}}</td>
                                                    <td>
                                                        @if($seat->status == 1)
                                                            <span class="badge badge-success">Active</span>
                                                        @else
                                                            <span class="badge badge-success">Active</span>
                                                        @endif
                                                    </td>
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
