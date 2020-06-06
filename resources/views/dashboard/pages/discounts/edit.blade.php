@section('page_title', 'BuyPowerNow - Edit Commission')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-auto">
                <a class="text-600" href="/dashboard/discounts" data-toggle="tooltip" data-placement="top" title="return back"><span class="fas fa-arrow-circle-left"></span></a>
                <span>Back</span>
            </div>
        </div>
    </div>
</div>

<form action="/discounts/update-discount/{{ $discounts->id }}" method="post">
@csrf
@method('PATCH')
    <div class="row no-gutters">
        <div class="col-lg-12 pr-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Discount Details</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="product">Name</label>
                                <input class="form-control text-primary @error('product') is-invalid @enderror" id="product" name="product" type="text" value="{{ old('product')  ?? $discounts->product }}">
                                @error('product')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="product">Percentage<span class="text-muted">(%)</span></label>
                                <input class="form-control text-primary @error('percentage') is-invalid @enderror" id="percentage" name="percentage" type="text"  value="{{ old('percentage')  ?? $discounts->percentage }}">
                                @error('percentage')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="product">Status</label>
                                <select class="form-control text-primary @error('status') is-invalid @enderror" id="status" name="status">
                                    <option value=""> {{ old('status')  ?? $discounts->status ?? "--select option --"}}</option>
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