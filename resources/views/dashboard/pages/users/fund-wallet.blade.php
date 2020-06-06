@section('page_title', 'BuyPowerNow - Fund Wallet')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <a href="/dashboard/users/view-user/{{ $data->id }}" class="py-3 pl-3" style="color: black"><span class="fas fa-arrow-left"></span> back </a>
    <div class="card-header">
        <h5 class="mb-0">Fund {!! $data->fname !!} {!! $data->lname !!} Account</h5>
    </div>
    <div class="card-body bg-light">
        <form method="post" action="/fund-account">
            @csrf
            <div class="row">
                <div class="col-md-6 col-xl-6 col-sm-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" name="name"  type="text" value="{{ $data->fname }} {{ $data->lname }} ">                
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="readonly">Email</label>
                        <input class="form-control"   name="email" type="text" value="{{ $data->email }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="readonly">Account Number</label>
                        <input class="form-control"   type="text" name="accountno" value="{{ $data->accountno }}">
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