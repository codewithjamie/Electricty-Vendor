@section('page_title', 'BuyPowerNow - Active Users')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Inactive Users</h5>
    </div>
    <div class="card-body bg-light px-0">
        <div class="row">
            <div class="col-12">
                <div class="dashboard-data-table">
                    <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":false,"searching":false,"pageLength":8,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ — <a href=\"#!\" class=\"font-weight-semi-bold\"> view all <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"}}'>
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort pr-1 align-middle">Name</th>
                                <th class="sort pr-1 align-middle">Email</th>
                                <th class="sort pr-1 align-middle">Address</th>
                                <th class="sort pr-1 align-middle ">Status</th>
                                <th class="sort pr-1 align-middle"></th>
                            </tr>
                        </thead>
                        <tbody id="purchases">
                        @if(!empty($activeUsers) && $activeUsers->count())
                            @foreach($activeUsers as $user)
                                <tr class="btn-reveal-trigger">
                                    <td class="align-middle">{{$user->fname}} {{ $user->lname}}</td>
                                    <td class="align-middle">{{$user->email ?? "null" }}</td>
                                    <td class="align-middle">{{$user->address ?? "null" }}</td>
                                    <td class="align-middle">
                                        @if ($user->email_verified_at == null)
                                            <span class="badge badge rounded-capsule badge-soft-success">
                                                not verified<span class="ml-1 fas fa-cancel" data-fa-transform="shrink-2"></span>
                                            </span>
                                        @else 
                                            <span class="badge badge rounded-capsule badge-soft-success">
                                                verified<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                </span>
                                        @endif
                                    </td>
                                    <td class="align-middle white-space-nowrap">
                                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown0" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                            <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown0">
                                                <div class="bg-white py-2">
                                                    <a class="dropdown-item" href="/dashboard/users/view-user/{{$user->id}}">View</a>
                                                    <!-- <a class="dropdown-item" href="/dashboard/users/edit-user/">Edit</a> -->
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="/dashboard/users/delete-user/">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else 
                            <td class="align-middle">No User</td>
                        @endif
                        </tbody>
                    </table>
                </div>
                {{$activeUsers->links()}}
            </div>
        </div>
    </div>
</div>

@endsection