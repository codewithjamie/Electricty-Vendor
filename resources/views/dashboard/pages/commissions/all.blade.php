@section('page_title', 'BuyPowerNow - All commission')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <h5 class="pl-3 text-muted"><b>Commissions</b></h5>
            <div class="col-sm-auto">
                <span>Create commission</span>
                <a class="text-600" href="/dashboard/commissions/create" data-toggle="tooltip" data-placement="top" title="Create commission"><span class="fas fa-plus-square"></span></a>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <div class="row justify-content-between align-items-center">
            <!-- <h5 class="pl-3"><b>List</b></h5> -->
            <div class="col-sm-auto">
                <a class="text-600" data-toggle="tooltip" data-placement="top" title=""><span class="fas fa-list"></span></a>
            </div>
        </div>
    </div>
    <div class="card-body bg-light">
        <div class="row no-gutters">
            <div class="col-12 p-3">
                <div class="p-1">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Percentage</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($commissions) && $commissions->count())
                            @foreach($commissions as $commission)
                            <tr>
                                <td>{{ $commission->id  }}</td>
                                <td>{{ $commission->name }}</td>
                                <td>{{ $commission->percentage }}</td>
                                <td>{{ $commission->status }}</td>
                                <td>
                                    <a href="/dashboard/commissions/edit/{{ $commission->id }}" class="btn btn-falcon-primary"><span class="fa fa-edit"></span></a>
                                    <a class="btn btn-falcon-danger btn-icon btn-xs" href="javascript:;" data-toggle="modal" data-target="#delete-modal{{ $commission->id }}">
                                        <i class="fa fa-trash "></i>
                                    </a>

                                    <div class="modal modal-fixed-right fade" id="delete-modal{{ $commission->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalRightLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-vertical" role="document">
                                            <div class="modal-content border-0 min-vh-100">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalRightLabel">Delete {{ $commission->name }}</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body py-5 text-center"><img class="img-fluid" src="/assets/img/illustrations/modal-right.png" alt="">
                                                <form id="delete" action="/commissions/delete-commission/{{ $commission->id }}" method="POST">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="submit" class="btn btn-outline-success btn-icon btn-sm" data-id="{{ $commission->id }}" class="text-danger">
                                                              DELETE
                                                          </button>
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <td>No data stored</td>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-footer pt-4 pb-4 mt-4 mp-4">
</div>
@endsection