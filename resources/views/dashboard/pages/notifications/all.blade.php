@section('page_title', 'BuyPowerNow - Notification')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <h5 class="pl-3 text-muted"><b>Notification</b></h5>
            <div class="col-sm-auto">
                <span>Create Notification</span>
                <a class="text-600" data-toggle="modal" data-target="#exampleModalRight"><span class="fas fa-plus-square"></span></a>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-fixed-right fade" id="exampleModalRight" tabindex="-1" role="dialog" aria-labelledby="exampleModalRightLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content border-0 min-vh-100">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalRightLabel">Create Notification</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body py-5 text-center">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="/dashboard/create-notification">
                            @csrf
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" type="text" placeholder="Title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="custom-select custom-select mb-3 @error('type') is-invalid @enderror" id="type" name="type">
                                    <option selected="">Open this select menu</option>
                                    <option value="Important">Important</option>
                                    <option value="Less-important">Less Important</option>
                                    <option value="Warning">Warning</option>
                                </select>
                                @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="3" name="content"></textarea>
                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <button class="btn btn-falcon-info " type="submit">Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Type</th>
            <th>Title</th>
            <th>Content</th>
            <th>Posted-by</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($notifications) && $notifications->count())
        @foreach($notifications as $notification)
        <tr>
            <td>{{ $notification->type }}</td>
            <td>{{ $notification->title }}</td>
            <td>{{ $notification->content }}</td>
            <td>{{ $notification->email }}</td>
            <td>
                <a href="" data-toggle="modal" data-target="#editModal{{ $notification->id }}" class="text-info"><span class="fa fa-edit"></span></a>
                <a class="text-danger" href="javascript:;" data-toggle="modal" data-target="#delete-modal{{ $notification->id }}">
                    <i class="fa fa-trash "></i>
                </a>

                <div class="modal modal-fixed-right fade" id="delete-modal{{ $notification->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalRightLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-vertical" role="document">
                        <div class="modal-content border-0 min-vh-100">
                            <div class="modal-body py-5 text-center">
                                <img class="img-fluid" src="/assets/img/illustrations/trash.png" alt="">
                                <form id="delete" action="/dashboard/delete-notification/{{ $notification->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-icon btn-sm" style="margin-top: 5%;" data-id="{{ $notification->id }}" class="text-danger">
                                        DELETE
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal modal-fixed-right fade" id="editModal{{ $notification->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalRightLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-vertical" role="document">
                        <div class="modal-content border-0 min-vh-100">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalRightLabel">Edit Notification</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body py-5 text-center">
                                <div class="row">
                                    <div class="col-12">
                                        <form method="post" action="/dashboard/update-notification/{{ $notification->id }}">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group">
                                                <label for="name">Title</label>
                                                <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" type="text" placeholder="Title" value="{{ old('title') ?? $notification->title }}">
                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="custom-select custom-select mb-3 @error('type') is-invalid @enderror" id="type" name="type">
                                                    <option selected="">{{ $notification->type }}</option>
                                                    <option>--------------------------</option>
                                                    <option value="Important">Important</option>
                                                    <option value="Less-important">Less Important</option>
                                                    <option value="Warning">Warning</option>
                                                </select>
                                                @error('type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Content</label>
                                                <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="3" name="content">{{ old('content') ?? $notification->content}}</textarea>
                                                @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <button class="btn btn-falcon-info " type="submit">Save </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
        @endif
        </tr>
    </tbody>
</table>




<script>
    var title_hold = document.getElementById('title').value;
    var type_hold = document.getElementById('type').value;
    var content_hold = document.getElementById('content').value;

    $("#submit").click(function(e) {
        e.preventDefault();
        console.log('here')
    })
</script>
@endsection