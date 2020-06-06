@section('page_title', 'BuyPowerNow - Edit Commission')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-auto">
                <a class="text-600" href="/dashboard/commissions" data-toggle="tooltip" data-placement="top" title="return back"><span class="fas fa-arrow-circle-left"></span></a>
                <span>Back</span>
            </div>
        </div>
    </div>
</div>

<form action="/commissions/update-commission/{{ $commissions->id }}" method="post">
@csrf
@method('PATCH')
    <div class="row no-gutters">
        <div class="col-lg-12 pr-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Commission Details</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control text-primary @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name')  ?? $commissions->name }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Percentage<span class="text-muted">(%)</span></label>
                                <input class="form-control text-primary @error('percentage') is-invalid @enderror" id="percentage" name="percentage" type="text"  value="{{ old('percentage')  ?? $commissions->percentage }}">
                                @error('percentage')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Status</label>
                                <select class="form-control text-primary @error('status') is-invalid @enderror" id="status" name="status">
                                    <option value=""> {{ old('status')  ?? $commissions->status ?? "--select option --"}}</option>
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3"></div>
        <div class="col-6">
            <button class="btn btn-info btn-block" type="submit">Save</button>
        </div>
        <div class="col-3"></div>
    </div>
</form>
@endsection