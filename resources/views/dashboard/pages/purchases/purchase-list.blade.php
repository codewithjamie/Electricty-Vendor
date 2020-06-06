@section('page_title', 'BuyPowerNow - Purchase List')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Purchases</h5>
    </div>

    <div class="card-body bg-light px-0">
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>id</th>
                    <th>product</th>
                    <th>percentage <span class="text-muted">(%)</span></th>
                    <th>status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($purchases) && $purchases->count())
                @foreach($purchases as $purchase)
                <tr>
                    <td>{{ $purchase->id }}</td>
                    <td>{{ $purchase->product }}</td>
                    <td>{{ $purchase->percentage }}</td>
                    <td>{{ $purchase->status }}</td>
                    <td>
                        <a href="/dashboard/purchases/edit/{{ $purchase->id }}" class="btn btn-falcon-primary"><span class="fa fa-edit"></span></a>
                        <a class="btn btn-falcon-danger btn-icon btn-xs" href="javascript:;" data-toggle="modal" data-target="#delete-modal{{ $purchase->id }}">
                            <i class="fa fa-trash "></i>
                        </a>

                        <div class="modal modal-fixed-right fade" id="delete-modal{{ $purchase->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalRightLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-vertical" role="document">
                                <div class="modal-content border-0 min-vh-100">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalRightLabel">Delete {{ $purchase->name }}</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body py-5 text-center"><img class="img-fluid" src="/assets/img/illustrations/modal-right.png" alt="">
                                        <form id="delete" action="/purchases/delete-purchase/{{ $purchase->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-success btn-icon btn-sm" data-id="{{ $purchase->id }}" class="text-danger">
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
                <td>No data found </td>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection