<?php $__env->startSection('page_title', "Buypowernow"); ?>

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
                        <a href="/logout" style="color: white">Sign-out</a>
                        <?php elseif(Auth::user()->userid == "2"): ?>
                        <a href="javascript:;" style="color: white"><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></a><span style="color: white"> | </span>
                        <a href="/dashboard" style="color: white">Dashboard</a><span style="color: white"> | </span>
                        <a href="/dashboard/transaction" style="color: white">Transactions</a><span style="color: white"> | </span>
                        <a href="/dashboard/wallet" style="color: white">
                            <?php


                    $balance = \DB::table('deposits')
                                ->where('email', '=', auth()->user()->email)
                                ->sum('amount');
                            ?>
                            <?php echo $balance ?>NGN</a><span style="color: white"> | </span>
                        <a href="/logout" style="color: white">Sign-out</a>
                        <?php else: ?>
                        <a href="javascript:;" style="color: white"><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></a><span style="color: white"> | </span>
                        <a href="/dashboard" style="color: white">Dashboard</a><span style="color: white"> | </span>
                        <a href="/dashboard/transaction" style="color: white">Transactions</a><span style="color: white"> | </span>
                        <a href="/dashboard/wallet" style="color: white">
                            <?php

                            $balance = DB::table('deposits')
                                ->where('email', '=', auth()->user()->email)
                                ->sum('amount');
                            ?>
                            <?php echo $balance ?>NGN</a><span style="color: white"> | </span>
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
                                <option value="7">Pay Electricity Bills</option>
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
                            <a href="/register">Become A Merchant</a>
                        </h3>
                    </div>
                </div>

                <!--End Order form-->
                <!--Slide-->
                <div class="slider col-lg-8 col-md-8 col-xl-8 col-sm-8">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="resources/adverts/122299264.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>
                            <div class="item ">
                                <img src="resources/adverts/971809058.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>
                            <div class="item ">
                                <img src="resources/adverts/246016752.jpg" alt="">
                                <div class="carousel-caption"></div>
                            </div>


                            <div style="height: 0px; "></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="javascript:;" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="javascript:;" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--End Slide-->
                <!--End slide area-->
            </div>
        </div>
        <!--End Main Site  -->
        <!--Home bottom  -->

        <div class="container wrapper all-listing " style="background-color: rgb(116, 109, 109);  background-blend-mode: darken ; margin-top: 20px; padding: 50px; background-image: url('./resources/frontend2/images/background.jpg'); background-position: center; background-size: cover;">
            <div class="text-center  pa-5" style="color: white; ">
                <h3>
                    PAY YOUR ELECTRICITY BILLS
                </h3>
            </div>
            <div class="row">
                <?php if(!empty($pages) && $pages->count()): ?>
                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <div class="col-sm-2 col-xs-4 item-holder">
                        <a href="/discos/<?php echo e($page->slug); ?>">
                            <img src="/storage/<?php echo e($page->image); ?>" alt="<?php echo e($page->image); ?>" />
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <div class="jumbotron">
                    <h3 class="text-white text-center">No Disco</h3>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <!--End Main Site  -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views/welcome.blade.php ENDPATH**/ ?>