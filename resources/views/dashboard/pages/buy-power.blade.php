@section('page_title', 'BuyPowerNow - Buy Power')
@extends('layouts.dashboard-layout')
@section('content')
<div class="card mb-3">
    <div class="card-header bg-grey">
        <div class="row align-items-center justify-content-between">
            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                <h1 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Buy Power</h1>
            </div>
        </div>
    </div>
    <hr>
    <div class="card-body py-4">
        <div class="tab-content">
            <div class="tab-pane active px-sm-3 px-md-5">
                <form id="paymentForm">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="metertype" class="control-label">State</label>
                                <select class="form-control" id="s_option_1 metertype" required="" data-live-search="true" name="state">
                                    <option value="" selected="selected">Select State</option>
                                    <?php

                                    use Illuminate\Support\Facades\DB;

                                    $states = DB::table('states')
                                        ->where('country_id', '=', '160')
                                        ->get();
                                    ?>
                                    @foreach($states as $key => $state)
                                    <option value="{{ $state->name }}"> {{ $state->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="metertype" class="control-label">Meter Type</label>
                                <select class="form-control " id="s_option_1 metertype" required="" data-live-search="true" name="metertype">
                                    <option value="" selected="selected">Please Select metertype</option>
                                    <option value="Prepaid">Prepaid</option>
                                    <option value="Postpaid">Postpaid</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Meter Number" class="control-label">Meter Number</label>
                                <input class="form-control" required="" placeholder="Enter Meter Number" id="meter_number" name="meter_number" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Phone Number" class="control-label"> Phone Number</label>
                                <input class="form-control" required="" placeholder="Enter Phone Number" id="phone" name="phone" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Email Address" class="control-label">Email Address</label>
                                <input class="form-control" required="" placeholder="Your Email" id="ex_form" name="email" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Amount" class="control-label">Amount</label>
                                <input class="form-control" required="" placeholder="Enter Amount" id="s_amount" name="amount" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" value="Continue" class="btn btn-info pull-right">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $("#form").on("submit", function(e) {
        e.preventDefault();
        var email = document.getElementById("email").value;
        var company_name = document.getElementById("company_name").value;
        var contact_officer = document.getElementById("contact_officer").value;
        var address = document.getElementById("address").value;
        var telephone = document.getElementById("telephone").value;
        var website = document.getElementById("website").value;
        var amountToPay = document.getElementById("gTotal").value;

        var handler = PaystackPop.setup({
            key: 'pk_live_3583729d3635074007b60fac193223c82420bc1a',
            email: email,
            amount: amountToPay + "00",
            currency: "NGN",
            company_name: company_name,
            contact_officer: contact_officer,
            phone: telephone,
            address: address,
            website: website,
            ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                "custom_fields": [{
                        "display_name": "Company Name",
                        "variable_name": "company_name",
                        "value": company_name
                    },
                    {
                        "display_name": "Contact Officer",
                        "variable_name": "contact_officer",
                        "value": contact_officer
                    },
                    {
                        "display_name": "Address",
                        "variable_name": "address",
                        "value": address
                    },
                    {
                        "display_name": "Website",
                        "variable_name": "website",
                        "value": website
                    },
                    {
                        "display_name": "Phone",
                        "variable_name": "telephone",
                        "value": telephone
                    },
                    {
                        "amount": "Amount",
                        "amount": "gTotal",
                        "value": amountToPay
                    },
                ]
            },
            callback: function(response) {
                $.ajax({
                    url: "mobilePost.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        swal({
                            title: " Success ",
                            text: 'success. transaction ref is ' + response.reference,
                            type: "success",
                            timer: 3000,
                            showConfirmButton: false
                        });
                        $("#form").reset();
                        location.reload();
                    }
                })
            },
            onClose: function() {
                swal({
                    title: "Error ",
                    text: "Window Closed ",
                    type: "error",
                    timer: 1000,
                    showConfirmButton: false
                });
                // location.reload();
            }
        });
        handler.openIframe();
    })
</script>
@endsection