@section('page_title', 'BuyPowerNow - Verification')
@extends('layouts.auth-layout')
@section('content')
<main class="main" id="top">
    <div class="container-fluid">
        <div class="row min-vh-100 flex-center no-gutters">
            <div class="col-lg-8 col-xxl-5 py-3"><img class="bg-auth-circle-shape" src="../../assets/img/illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="../../assets/img/illustrations/shape-1.png" alt="" width="150">
                <div class="card overflow-hidden z-index-1">
                    <div class="card-body p-0">
                        <div class="row no-gutters h-100">
                            <div class="col-md-5 text-white text-center bg-card-gradient">
                                <div class="position-relative p-4 pt-md-5 pb-md-7">
                                    <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../assets/img/illustrations/half-circle.png);"></div>
                                    <!--/.bg-holder-->
                                    <div class="z-index-1 position-relative"><a class="text-white mb-4 text-sans-serif font-weight-extra-bold fs-4 d-inline-block" href="/">{{ config('app.name') }}</a>
                                    </div>
                                </div>
                                <div class="mt-3 mb-4 mt-md-4 mb-md-5">
                                    <p class="pt-3"><a class="btn btn-outline-light mt-2 px-4" href="/login">Return to login</a></p>
                                </div>
                            </div>

                            <div class="col-md-7 d-flex flex-center">
                                <div class="p-4 p-md-5 flex-grow-1">
                                    <h3>{{ __('Verify Your Email Address') }}</h3>

                                    @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                    @endif
                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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