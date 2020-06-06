@section('page_title', 'BuyPowerNow - New Disco')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-auto">
                <a class="text-600" href="/dashboard/discos/all" data-toggle="tooltip" data-placement="top" title="return back"><span class="fas fa-arrow-circle-left"></span></a>
                <span>Back</span>
            </div>
        </div>
    </div>
</div>

<form action="/discos/store-disco/" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row no-gutters">
        <div class="col-lg-8 pr-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Disco Details</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input class="form-control  @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder=" Title" value="{{ old('name')  }}">
                                @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Image</label>
                                <div class="custom-file">
                                    <input class="custom-file-input  @error('image') is-invalid @enderror" id="customFile" type="file" name="image">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    @if ($errors->has('image'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="multiple-select">Select Locations</label>
                                <select class="js-example-basic-single  @error('locations') is-invalid @enderror" id="locations" name="locations[]" multiple="multiple">
                                    <?php

                                    use Illuminate\Support\Facades\DB;

                                    $states = DB::table('states')
                                        ->where('country_id', '=', 160)
                                        ->get();

                                    foreach ($states as $state) {
                                    ?>
                                        <option value="{{ $state->name }}" style="color: black">{{ $state->name }}</option>
                                    <?php
                                    }
                                    ?>

                                </select>
                                @if ($errors->has('locations'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('locations') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea class="form-control  @error('description') is-invalid @enderror" cols="6" row="6" name="description">{{ old('description')  }}</textarea>                                
                                @if ($errors->has('description'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 pl-lg-2">
            <div class="sticky-top sticky-sidebar">
                <div class="card mb-3 mb-lg-0">
                    <div class="card-header">
                        <h5 class="mb-0">Other Info</h5>
                    </div>
                    <div class="card-body bg-light">
                        <div class="form-group">
                            <label for="name">Url</label>
                            <input class="form-control  @error('slug') is-invalid @enderror" name="slug" type="text" placeholder=" Url" value="{{ old('slug')  }}">
                            <span style="font-size: 0.7em">example: demo-url</span>
                            @if ($errors->has('slug'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('slug') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="start-date">Commission<span class="text-muted">(%)</span></label>
                                <a class="btn btn-link btn-sm pr-0" href="/dashboard/commissions/create" type="button">Add New</a>
                            </div>
                            <select class="form-control text-muted" name="commission">
                                <option value="">Commission </option>
                                <?php
                                $commissions = App\Commissions::all();

                                foreach ($commissions as $commission) {
                                ?>

                                    <option value="{{ $commission->name }}" style="color: black">{{ $commission->name }}</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="mb-0" for="sponsors">Discounts</label>
                                <a class="btn btn-link btn-sm pr-0" href="/dashboard/discounts/create" type="button">Add New</a>
                            </div>
                            <select class="form-control text-muted" name="discount">
                                <option value="">Discount </option>
                                <?php
                                $discounts = App\Discount::all();

                                foreach ($discounts as $discount) {
                                ?>

                                    <option value="{{ $discount->product }}" style="color: black">{{ $discount->product }}</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-1"></div>
        <div class="col-6 pt-2">
            <button class="btn btn-falcon-info btn-block" type="submit">Save</button>
        </div>
        <div class="col-1"></div>
    </div>
</form>

@endsection