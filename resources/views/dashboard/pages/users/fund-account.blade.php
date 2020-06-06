@section('page_title', 'BuyPowerNow - Fund Wallet')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Fund {!! auth()->user()->fname !!} {!! auth()->user()->lname !!} Account</h5>
    </div>
    <div class="card-body bg-light">
        <form method="post" action="/fund-account">
            @csrf
            <div class="row">
                <div class="col-md-6 col-xl-6 col-sm-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" name="name"  type="text" value="{{ auth()->user()->fname }} {{ auth()->user()->lname }} ">                
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="readonly">Email</label>
                        <input class="form-control"   name="email" type="text" value="{{ auth()->user()->email }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="readonly">Account Number</label>
                        <input class="form-control"   type="text" name="accountno" value="{{ auth()->user()->accountno }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="readonly">Transaction ID</label>
                        <input class="form-control"  type="text" name="transid"  value="{{ $randomNum }}">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">NGN</span></div>
                        <input class="form-control @error('amount') is-invalid @enderror" autocomplete="off" type="text" aria-label="Amount (to the nearest dollar)" name="amount">
                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                        @error('amount')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-falcon-primary btn-block" type="submit">Add Fund </button>
            </div>
        </form>
    </div>
</div>


@endsection