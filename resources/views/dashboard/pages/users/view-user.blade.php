@section('page_title', 'BuyPowerNow - View User')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-2">{{ $data->fname }} {{ $data->lname }} (<a href="mailto:{{$data->email}}">{{$data->email}}</a>)</h5>
            </div>
            <div class="col-auto d-none d-sm-block">
                <?php
                use Illuminate\Support\Facades\DB;

                $balance = DB::table('deposits')
                                ->where('email', '=', $data->email )
                                ->sum('amount');
                ?>
                <button class="btn btn-falcon-info">NGN <?php echo $balance ?></button> |
                <a href="/dashboard/users/fund-wallet/{{ $data->id }}" style="color: grey"> Fund Wallet</a>
            </div>
        </div>
    </div>
    <div class="card-body border-top">
        <div class="media"><span class="fas fa-user text-success mr-2" data-fa-transform="down-5"></span>
            <div class="media-body">
                <p class="mb-0">Account was created</p>
                <p class="fs--1 mb-0 text-600">{{ $data->created_at->diffForHumans() }}</p>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="mb-0">Details</h5>
            </div>
            <!-- <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><span class="fas fa-pencil-alt fs--2 mr-1"></span>Update details</a></div> -->
        </div>
    </div>
    <div class="card-body bg-light border-top">
        <div class="row">
            <div class="col-lg col-xxl-5">
                <h6 class="font-weight-semi-bold ls mb-3 text-uppercase">Account Information</h6>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="font-weight-semi-bold mb-1">ID</p>
                    </div>
                    <div class="col">{{$data->id}}</div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="font-weight-semi-bold mb-1">Created</p>
                    </div>
                    <div class="col">{{$data->created_at}}</div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="font-weight-semi-bold mb-1">Email</p>
                    </div>
                    <div class="col"><a href="mailto:{{$data->email}}">{{$data->email}}</a></div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="font-weight-semi-bold mb-1">Account Number</p>
                    </div>
                    <div class="col">
                        <p class="font-italic text-400 mb-1">{{$data->accountno ?? "empty"}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="font-weight-semi-bold mb-0">Account Name</p>
                    </div>
                    <div class="col">
                        <p class="font-italic text-400 mb-0">{{$data->accountname ?? "empty"}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg col-xxl-5 mt-4 mt-lg-0 offset-xxl-1">
                <h6 class="font-weight-semi-bold ls mb-3 text-uppercase">Personal Information</h6>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="font-weight-semi-bold mb-1">Send email to</p>
                    </div>
                    <div class="col"><a href="mailto:{{$data->email}}">{{$data->email}}</a></div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="font-weight-semi-bold mb-0">Date of Birth</p>
                    </div>
                    <div class="col">
                        <p class="font-italic text-400 mb-0">{{$data->dateofbirth ?? "empty"}}</p>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="font-weight-semi-bold mb-1">Address</p>
                    </div>
                    <div class="col">
                        <p class="mb-1 text-400">{{$data->address ?? "empty"}}</p>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="font-weight-semi-bold mb-0">State</p>
                    </div>
                    <div class="col">
                        <p class="font-weight-semi-bold text-400 mb-0">{{$data->state ?? "empty"}}</p>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-5 col-sm-4">
                        <p class="font-weight-semi-bold mb-0">City</p>
                    </div>
                    <div class="col">
                        <p class="font-weight-semi-bold text-400 mb-0">{{$data->city ?? "empty"}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Logs</h5>
    </div>
    <div class="card-body border-top p-0">
        <div class="row no-gutters align-items-center border-bottom py-2 px-3">
            <div class="col-md mt-1 mt-md-0"><code>{{$data->fname}} {{$data->lname}}</code></div>
            <div class="col-md-auto">
                <p class="mb-0">{!! $data->login_time !!}</p>
            </div>
        </div>
    </div>
    <div class="card-footer bg-light p-0"><a class="btn btn-link btn-block" href="/dashboard/users/user-logs/{{ $data->email }}">View more logs<span class="fas fa-chevron-right fs--2 ml-1"></span></a></div>
</div>
@endsection