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
                            <h4 class="card-title">All Users</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                    </thead>
                                    <tbody>
                                        @if($users)
                                            @foreach($users as $index=>$user)
                                                <tr class="success">
                                                    <td>{{ $index+1 }}</td>
                                                    <td>{{ $user->name ?? ""}}</td>
                                                    <td>{{ $user->email ?? ""}}</td>
                                                    @if($user->role_id == 3)
                                                        <td>Customer</td>
                                                    @endif
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
