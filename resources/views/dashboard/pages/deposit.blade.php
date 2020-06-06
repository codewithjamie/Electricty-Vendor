@section('page_title', 'BuyPowerNow - User Dashboard')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <div class="row align-items-center justify-content-between">
            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Deposit</h5>
            </div>
        </div>
    </div>
    <div class="card-body px-0 pt-0">
        <div class="dashboard-data-table">
            <h4 class="pl-4">Credit Wallet </h4>
            <ul class="pl-6">
                <li> Credit your wallet now, and spend from it later. </li>
                <li> No need to enter card details everytime you want to make payment. </li>
                <li> Make payment faster. </li>
            </ul>
            <hr class="pt-4 mt-4">
            <form action="https://sandbox.monnify.com/api/v1/bank-transfer/reserved-accounts" method="post">

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">NGN</span>
                            </div>
                            <input class="form-control" type="text" aria-label="Amount (to the nearest naira)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-falcon-info" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<button onclick="payWithMonnify()">Pay with Monnify</button>
<script type="text/javascript" src="https://sandbox.sdk.monnify.com/plugin/monnify.js"></script>


<script type="text/javascript">
    function payWithMonnify() {
        MonnifySDK.initialize({
            amount: 5000,
            currency: "NGN",
            reference: '' + Math.floor((Math.random() * 1000000000) + 1),
            customerFullName: '{{ Auth::user()->fname }} {{ Auth::user()->lname }}',
            customerEmail: '{{ Auth::user()->email }}',
            customerMobileNumber: "{{ Auth::user()->phone }}",
            apiKey: "MK_TEST_KGUGPB5FPP",
            contractCode: "5577346552",
            paymentDescription: "Deposit",
            isTestMode: true,
            metadata: {
                "name": "{{ Auth::user()->fname }} {{ Auth::user()->lname }}",
                "Account Number": "{{ Auth::user()->accountno }}",
            },
            onComplete: function(response) {
                //Implement what happens when transaction is completed.
                console.log(response);
            },
            onClose: function(data) {
                //Implement what should happen when the modal is closed here
                console.log(data);
            }
        });
    }
</script>
@endsection