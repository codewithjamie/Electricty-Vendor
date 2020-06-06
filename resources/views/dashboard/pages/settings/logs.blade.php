@section('page_title', 'BuyPowerNow - Activity Log')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Logs</h5>
    </div>
    <div class="card-body bg-light px-0">
        <div class="row">
            <div class="col-12">
                <div class="dashboard-data-table">
                    <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":false,"searching":false,"pageLength":8,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ — <a href=\"#!\" class=\"font-weight-semi-bold\"> view all <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"}}'>
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort pr-1 align-middle">Email</th>
                                <th class="sort pr-1 align-middle">Status</th>
                                <th class="sort pr-1 align-middle">Account</th>
                                <th class="sort pr-1 align-middle"></th>
                                <th class="sort pr-1 align-middle">Login Time</th>
                                <!-- <th class="sort pr-1 align-middle">Action</th> -->
                            </tr>
                        </thead>
                        <tbody id="purchases">
                            @foreach ($activitylogs as $log)
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle">{{$log->email}}</td>
                                <td class="align-middle">
                                    <span class="badge badge rounded-capsule badge-soft-success">
                                        active<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                    </span>
                                </td>
                                <td class="align-middle">
                                    @if ($log->userid == "1")
                                    admin <span class="ml-1 fas fa-user text-primary" data-fa-transform="shrink-2"></span>
                                    @elseif ($log->userid == "2")
                                    user <span class="ml-1 fas fa-user text-primary" data-fa-transform="shrink-2"></span>
                                    @else
                                    agent <span class="ml-1 fas fa-user text-primary" data-fa-transform="shrink-2"></span>
                                    @endif
                                </td>
                                <td class="align-middle">{{$log->status}}</td>
                                <td class="align-middle">{{$log->login_time}}</td>                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection