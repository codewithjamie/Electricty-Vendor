@section('page_title', 'BuyPowerNow - Deposits List')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Deposits</h5>
    </div>

    <div class="card-body bg-light px-0">
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Account No</th>
                    <th>Transaction ID</th>
                    <th>Amount <span class="text-muted">(NGN)</span></th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($deposits) && $deposits->count())
                @foreach($deposits as $deposit)
                <tr class="pl-3">
                    <td >{{ $deposit->name }}</td>
                    <td>{{ $deposit->email }}</td>
                    <td>{{ $deposit->accountno }}</td>
                    <td>{{ $deposit->transid }}</td>
                    <td>{{ $deposit->amount }}</td>
                    <td>{{ $deposit->status }}</td>                   
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