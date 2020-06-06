<?php $__env->startSection('page_title', 'BuyPowerNow - Fund Wallet'); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <a href="/dashboard/users/view-user/<?php echo e($data->id); ?>" class="py-3 pl-3" style="color: black"><span class="fas fa-arrow-left"></span> back </a>
    <div class="card-header">
        <h5 class="mb-0">Fund <?php echo $data->fname; ?> <?php echo $data->lname; ?> Account</h5>
    </div>
    <div class="card-body bg-light">
        <form method="post" action="/fund-account">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6 col-xl-6 col-sm-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" name="name"  type="text" value="<?php echo e($data->fname); ?> <?php echo e($data->lname); ?> ">                
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="readonly">Email</label>
                        <input class="form-control"   name="email" type="text" value="<?php echo e($data->email); ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="readonly">Account Number</label>
                        <input class="form-control"   type="text" name="accountno" value="<?php echo e($data->accountno); ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="readonly">Transaction ID</label>
                        <input class="form-control"  type="text" name="transid"  value="<?php echo e($randomNum); ?>">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">NGN</span></div>
                        <input class="form-control <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off" type="text" aria-label="Amount (to the nearest dollar)" name="amount">
                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                        <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: red"><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <button class="btn btn-falcon-primary btn-block" type="submit">Add Fund </button>
            </div>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views/dashboard/pages/users/fund-wallet.blade.php ENDPATH**/ ?>