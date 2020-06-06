@section('page_title', 'BuyPowerNow - sale List')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Sales</h5>
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
                @if(!empty($sales) && $sales->count())
                @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->product }}</td>
                    <td>{{ $sale->percentage }}</td>
                    <td>{{ $sale->status }}</td>
                    <td>
                        <a href="/dashboard/sales/edit/{{ $sale->id }}" class="btn btn-falcon-primary"><span class="fa fa-edit"></span></a>
                        <a class="btn btn-falcon-danger btn-icon btn-xs" href="javascript:;" data-toggle="modal" data-target="#delete-modal{{ $sale->id }}">
                            <i class="fa fa-trash "></i>
                        </a>

                        <div class="modal modal-fixed-right fade" id="delete-modal{{ $sale->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalRightLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-vertical" role="document">
                                <div class="modal-content border-0 min-vh-100">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalRightLabel">Delete {{ $sale->name }}</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body py-5 text-center"><img class="img-fluid" src="/assets/img/illustrations/modal-right.png" alt="">
                                        <form id="delete" action="/sales/delete-sale/{{ $sale->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-success btn-icon btn-sm" data-id="{{ $sale->id }}" class="text-danger">
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