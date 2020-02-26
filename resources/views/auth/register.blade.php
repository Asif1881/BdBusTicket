@extends('frontend.layout.layout')
@section('content')
    <section id="breadcrumb">
        <div class="overly"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 text-center">
                    <div class="breadcrumbinfo">
                        <article>
                            <h2>সাইন আপ</h2>
                            <a href="{{ route('bd-bus.index') }}">হোম</a> <span>/</span>
                            <a class="active" href="{{ route('register') }}">সাইন আপ</a>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--================================
        contact us  part start
    =====================================-->
    <section id="contact-main">

        <div class="contact-form">
            <div class="container">
                <div class="row contact-form-area">
                    <div class="col-lg-8 offset-2 contact-form">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Name</h5>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>E-mail Address</h5>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h5>Password</h5>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Confirm Password</h5>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="col-md-12">
                                    <div class="margin-bottom-30"></div>
                                    <button type="submit" class="btn btn-contact btn-continue btn-block">Sign Up</button>
                                </div>
                            </div>
                            <div class="form-row  margin-top-30">
                                <div class="col-md-6">
                                    <span>Already Registered <a href="{{ route('login') }}" class="lostpass">Sign In</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--================================
        contact us part end
    =====================================-->
@endsection
