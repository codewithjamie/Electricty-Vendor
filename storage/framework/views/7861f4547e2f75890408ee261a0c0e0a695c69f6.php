<?php $__env->startSection('page_title', "Buypowernow"." | ". $disco_path->name); ?>

<?php $__env->startSection('content'); ?>
<div class="page container wrapper">
    <div class="row">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <!--Header  -->
        <div class="container wrapper header">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-lg-offset-7 col-md-offset-7">
                    <?php if(Route::has('login')): ?>
                    <div class="top-right">
                        <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->userid == "1"): ?>
                        <a href="javascript:;" style="color: white"><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></a> <span style="color: white">|</span>
                        <a href="/dashboard" style="color: white">Dashboard</a><span style="color: white"> | </span>
                        <a href="/dashboard/transaction" style="color: white">Transaction</a><span style="color: white"> | </span>
                        <a href="/logout" style="color: white">Sign-out</a>
                        <?php elseif(Auth::user()->userid == "2"): ?>
                        <a href="javascript:;" style="color: white"><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></a><span style="color: white"> | </span>
                        <a href="/logout" style="color: white">Sign-out</a>
                        <?php else: ?>
                        <a href="javascript:;" style="color: white"><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></a><span style="color: white"> | </span>
                        <a href="/dashboard" style="color: white">Dashboard</a><span style="color: white"> | </span>
                        <a href="/dashboard/transaction" style="color: white">Transactions</a><span style="color: white"> | </span>
                        <a href="/dashboard/wallet" style="color: white">0.00NGN</a><span style="color: white"> | </span>
                        <a href="/logout" style="color: white">Sign-out</a>
                        <?php endif; ?>
                        <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" style="color: white">Login</a> <span style="color: white"> | </span>

                        <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>" style="color: white">Register</a>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="logo col-xs-4 col-xs-offset-2">
                        <a href="/"><img src="/resources/frontend2/images/logo-white.png" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header  -->
        <!--Main Site  -->
        <div class="container wrapper">
            <div class="row">
                <!--order form-->
                <div class="quick-form-side col-lg-3 text-center" id="quick-load">
                    <div id="divLoading"></div>
                    <h3>What do you want to do</h3>
                    <form method="POST" action="https://vtpass.com/quick" accept-charset="UTF-8" id="&quot;quick-form"><input name="_token" type="hidden" value="lahduUKkcqOb5cxy3seXDqBwbZScfqoo7fVrOSwm">
                        <div class="form-group col-lg-12">
                            <select class="form-control " id="category">
                                <option value="0" selected="selected">What do you want to</option>
                                <option value="1">Buy Phone Airtime</option>
                                <option value="3">Buy Internet Data</option>
                                <option value="6">Pay TV Subcription</option>
                                <option value="7">Pay Electricity Bills</option>
                                <option value="15">Buy Auto Insurance Payments</option>
                                <option value="8">Education Payments</option>
                                <option value="13">Buy Event Ticket</option>
                                <option value="14">Other Services/Merchants</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-12">
                            <select class="form-control" id="services" name="slug" required>
                                <option value="">Select Above First</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-info btn-block">Go</button>
                            <br>
                        </div>
                    </form>
                    <div class="side-icons ">
                        <p>Available Payment Options</p>
                        <img src="/resources/frontend2/images/side-mastercard.png" class="payicon">
                        <img src="/resources/frontend2/images/side-visa.png" class="payicon">
                        <img src="/resources/frontend2/images/side-verve.png" class="payicon">
                    </div>
                    <div class="form-group">
                        <h3>
                            Become A Merchant
                        </h3>
                    </div>
                </div>
               
                <div class="col-lg-8 col-md-8 col-xs-12  ">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center" style="font-size: 20px;">
                            <span><?php echo e($disco_path->name); ?><span>
                                    <img src="/storage/<?php echo e($disco_path->image); ?>" alt="<?php echo e($disco_path->image); ?>" width="100%" height="70" class="product-image ">
                                </span>
                            </span>
                        </div>
                        <div class="panel-body">
                            <p>Eko Electric Payment - PHCN</p>
                            <ul style="list-style-type: square;">
                                <li>
                                    <span> Select "Prepaid" if you load tken on your meter.</span>
                                </li>
                                <li>
                                    <span> Select "Postpaid" if you get a bill at the end of the month.</span>
                                </li>
                            </ul>
                            <form method="POST" action="https://vtpass.com/initiate-buy-transaction/14" accept-charset="UTF-8" class="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="metertype" class="control-label">Meter Type</label>
                                            <select data-shb-product-option="data-shb-product-option" class="form-control selectpicker" id="s_option_1 metertype" required="" data-live-search="true" name="metertype">
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
                                            <input type="reset" value="Cancel" class="btn btn-danger  pull-left">
                                            <input type="submit" value="Continue" class="btn btn-info pull-right">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <hr style="width: 80%; border: 1px solid rgb(185, 181, 181);">
                                        <div class="">
                                        <?php echo e($disco_path->name); ?> Covers:  <?php $__currentLoopData = json_decode($disco_path->locations); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($location. " | "); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Main Site  -->
        <!--Home bottom  -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views/discos.blade.php ENDPATH**/ ?>