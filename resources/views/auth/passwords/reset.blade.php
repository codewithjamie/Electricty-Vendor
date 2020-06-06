@section('page_title', 'BuyPowerNow - Reset password')
@extends('layouts.auth-layout')
@section('content')
<main class="main" id="top">
    <div class="container-fluid">
        <div class="row min-vh-100 flex-center no-gutters">
            <div class="col-lg-8 col-xxl-5 py-3"><img class="bg-auth-circle-shape" src="/assets/img/illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="/assets/img/illustrations/shape-1.png" alt="" width="150">
                <div class="card overflow-hidden z-index-1">
                    <div class="card-body p-0">
                        <div class="row no-gutters h-100">
                            <div class="col-md-5 text-white text-center bg-card-gradient">
                                <div class="position-relative p-4 pt-md-5 pb-md-7">
                                    <div class="bg-holder bg-auth-card-shape" style="background-image:url(/assets/img/illustrations/half-circle.png);"></div>                                
                                </div>
                            </div>
                            <div class="col-md-7 d-flex flex-center">
                                <div class="p-4 p-md-5 flex-grow-1">
                                    <h3>Reset password</h3>
                                    <form method="POST" action="{{ route('password.update') }}" class="mt-3">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <div class="form-group">
                                            <label for="card-email">Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="card-reset-password">New Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="card-reset-confirm-password">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Set password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection