@section('page_title', 'BuyPowerNow - All Discos')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <h5 class="pl-3 text-muted"><b>Discos</b></h5>
            <div class="col-sm-auto">
                <span>Create Disco</span>
                <a class="text-600" href="/dashboard/discos/create-disco" data-toggle="tooltip" data-placement="top" title="Create Disco"><span class="fas fa-plus-square"></span></a>
            </div>
        </div>
    </div>
</div>
@if(!empty($discos) && $discos->count())
@foreach ($discos as $disco)
<div class="card mb-3">
    <div class="card-body p-0 overflow-hidden">
        <div class="row no-gutters">
            <div class="col-12 p-3">
                <div class="p-1">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="position-relative h-sm-100"><a class="d-block h-100" href="javascript:;">
                                    <img class="img-fluid " src="/storage/{{$disco->image}}" alt="{{ $disco->image }}" />
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1" href="product-details.html">{{ $disco->name }}</a></h5>
                                    <l class="fs--1 mb-2 mb-md-3">
                                        <a class="text-500" href="javscript:;">
                                            @foreach (json_decode($disco->locations) as $location)
                                            {{ $location. "," }}
                                            @endforeach
                                        </a>
                                        </p>
                                        <p>
                                            {{$disco->description}}
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Commission:: {{ $disco->commission."%" ?? "No commission"}}</li>
                                            <li class="list-group-item">Discounts:: {{ $disco->discount."%" ?? "No discount"}}</li>
                                        </ul>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between flex-column">
                                    <div class="mt-md-2">
                                        <a class="btn btn-sm btn-falcon-info border-300 d-lg-block mt-2 mr-2 mr-lg-0" href="/dashboard/discos/edit-disco/{{$disco->id}}">
                                            <span class="far fa-edit"></span>
                                            <span class="ml-2 d-none d-md-inline-block">Edit</span>
                                        </a>
                                        <a class="btn btn-sm btn-falcon-danger d-lg-block mt-2" href="javascript:;" data-toggle="modal" data-target="#delete-modal{{ $disco->id }}">
                                            <span class="fas fa-trash"> </span>
                                            <span class="ml-2 d-none d-md-inline-block">Delete</span>
                                        </a>

                                        <div class="modal modal-fixed-right fade" id="delete-modal{{ $disco->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalRightLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-vertical" role="document">
                                                <div class="modal-content border-0 min-vh-100">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalRightLabel">Delete {{ $disco->name }}</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body py-5 text-center"><img class="img-fluid" src="https://icons.veryicon.com/png/System/Oxygen/Status%20user%20trash%20full.png" alt="">
                                                        <form id="delete" action="/dashboard/discos/delete-disco/{{ $disco->id }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class=" pt-4 mt-4"></div>
                                                            <button type="submit" class="btn btn-outline-danger " data-id="{{ $disco->id }}" class="text-danger">
                                                                DELETE
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<div class="col-md-12">
    <h1>No data</h1>
</div>
@endif
@endsection