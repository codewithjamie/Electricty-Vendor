@section('page_title', 'BuyPowerNow - Settings | About')
@extends('layouts.dashboard-layout')
@section('content')
<form action="/discos/store-disco" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row no-gutters">
        <div class="col-lg-12 pr-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">About </h5>
                </div>
                <div class="card-body bg-light">
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input class="form-control  @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder=" Title" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" rows="6">{{ old('description') }} </textarea>
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
        
        <button class="btn btn-falcon-info " type="submit">Save</button>
        
    </div>
</form>
@endsection