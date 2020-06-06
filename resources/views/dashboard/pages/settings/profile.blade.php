@section('page_title', 'BuyPowerNow - Profile')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-auto">
                <!-- <a class="text-600" href="/dashboard/notifications/create" data-toggle="tooltip" data-placement="top" title="return back"><span class="fas fa-arrow-circle-left"></span></a>
                <span>Create</span> -->
            </div>
        </div>
    </div>
</div>
<div class="row no-gutters">
    <div class="col-lg-8 pr-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Profile Settings</h5>
            </div>
            <div class="card-body bg-light">
                <form method="post" action="{{ route('update.profile') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="first-name">Account Number</label>
                                <input type="text" disabled class="form-control" value="{{ old('accountno') ?? Auth::user()->accountno }}" autocapitalize="on" autocomplete="off" id="user-name" name="accountno" aria-describedby="user-name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="first-name">First Name</label>
                                <input type="text" disabled class="form-control" value="{{ old('fname') ?? Auth::user()->fname }}" autocapitalize="on" autocomplete="off" id="user-name" name="fname" aria-describedby="user-name" placeholder="">
                                @if ($errors->has('fname'))
                                <span class="error" style="color: red">{{ $errors->first('fname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" disabled class="form-control" value="{{ old('lname') ?? Auth::user()->lname }}" autocapitalize="on" autocomplete="off" id="user-name" name="lname" aria-describedby="user-name" placeholder="">
                                @if ($errors->has('lname'))
                                <span class="error" style="color: red">{{ $errors->first('lname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email1">Email</label>
                                <input type="text" disabled class="form-control" value="{{ old('email') ?? Auth::user()->email }}" autocapitalize="on" autocomplete="off" id="user-name" name="email" aria-describedby="user-name" placeholder="EMail">
                                @if ($errors->has('email'))
                                <span class="error" style="color: red">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email1">Gender</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option value="{{ Auth::user()->gender }}">{{ Auth::user()->gender }}</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Select Country</label>
                                <select id="country" name="nationality" class="form-control">
                                    <option value="" selected disabled>Select</option>
                                    <?php
                                    $countries = App\Country::all();
                                    ?>
                                    @foreach($countries as $key => $country)
                                    <option value="{{ $country->id }}"> {{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="title">Select State:</label>
                                <select name="state" id="state" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="title">Select City:</label>
                                <select name="city" id="city" class="form-control">
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email1">Address</label>
                                <input type="text" class="form-control" value="{{ old('address') ?? Auth::user()->address }}" autocapitalize="on" autocomplete="off" id="user-name" name="address" aria-describedby="user-name" placeholder="">
                                @if ($errors->has('address'))
                                <span class="error" style="color: red">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <br>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <hr>
                            <br>
                            <button class="btn btn-falcon-primary btn-block" type="submit">Update </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4 pl-lg-2">
        <div class="sticky-top sticky-sidebar">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Change Password</h5>
                </div>
                <div class="card-body bg-light">
                    <form method="post" action="{{ route('change.password') }}">
                        @csrf
                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right">Current Password</label>
                            <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right">New Password</label>
                            <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right">New Confirm Password</label>
                            <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                        </div>


                        <button class="btn btn-falcon-primary btn-block" type="submit">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
        <div class="col-12 col-sm-auto text-center">
            <!-- <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2019 &copy; <a href="https://themewagon.com/">Themewagon</a></p> -->
        </div>
        <div class="col-12 col-sm-auto text-center">
            <!-- <p class="mb-0 text-600">v2.4.1</p> -->
        </div>
    </div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script type="text/javascript">
    $('#country').change(function() {
        var countryID = $(this).val();
        console.log(countryID)
        if (countryID) {
            $.ajax({
                type: "GET",
                url: "{{url('get-state-list')}}?country_id=" + countryID,
                success: function(res) {
                    if (res) {
                        $("#state").empty();
                        $("#state").append('<option>--Select State--</option>');
                        $.each(res, function(key, value) {
                            $("#state").append('<option value="' + key + ", " + value + '">' + value + '</option>');
                        });

                    } else {
                        $("#state").empty();
                    }
                }
            });
        } else {
            $("#state").empty();
            $("#city").empty();
        }
    });
    $('#state').on('change', function() {
        var stateID = $(this).val();
        if (stateID) {
            $.ajax({
                type: "GET",
                url: "{{url('get-city-list')}}?state_id=" + stateID,
                success: function(res) {
                    if (res) {
                        $("#city").empty();
                        $.each(res, function(key, value) {
                            $("#city").append('<option value="' + key + ", " + value + '">' + value + '</option>');
                        });

                    } else {
                        $("#city").empty();
                    }
                }
            });
        } else {
            $("#city").empty();
        }

    });
    $('#city').on('change', function() {
        var cityID = $(this).val();
        if (cityID) {
            $.ajax({
                type: "GET",
                url: "{{url('get-lga-list')}}?city_id=" + cityID,
                success: function(res) {
                    if (res) {
                        $("#city").empty();
                        $.each(res, function(key, value) {
                            $("#city").append('<option value="' + key + ", " + value + '">' + value + '</option>');
                        });

                    } else {
                        $("#lga").empty();
                    }
                }
            });
        } else {
            $("#lga").empty();
        }

    });
</script>
@endsection