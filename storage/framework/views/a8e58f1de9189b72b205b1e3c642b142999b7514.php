<?php $__env->startSection('page_title', 'BuyPowerNow - New Disco'); ?>

<?php $__env->startSection('content'); ?>
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
    <?php echo csrf_field(); ?>
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
                                <input class="form-control  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" type="text" placeholder=" Title" value="<?php echo e(old('name')); ?>">
                                <?php if($errors->has('name')): ?>
                                <div class="invalid-feedback">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Image</label>
                                <div class="custom-file">
                                    <input class="custom-file-input  <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="customFile" type="file" name="image">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <?php if($errors->has('image')): ?>
                                    <div class="invalid-feedback">
                                        <strong><?php echo e($errors->first('image')); ?></strong>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="multiple-select">Select Locations</label>
                                <select class="js-example-basic-single  <?php $__errorArgs = ['locations'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="locations" name="locations[]" multiple="multiple">
                                    <?php

                                    use Illuminate\Support\Facades\DB;

                                    $states = DB::table('states')
                                        ->where('country_id', '=', 160)
                                        ->get();

                                    foreach ($states as $state) {
                                    ?>
                                        <option value="<?php echo e($state->name); ?>" style="color: black"><?php echo e($state->name); ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                                <?php if($errors->has('locations')): ?>
                                <div class="invalid-feedback">
                                    <strong><?php echo e($errors->first('locations')); ?></strong>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea class="form-control  <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" cols="6" row="6" name="description"><?php echo e(old('description')); ?></textarea>                                
                                <?php if($errors->has('description')): ?>
                                <div class="invalid-feedback">
                                    <strong><?php echo e($errors->first('description')); ?></strong>
                                </div>
                                <?php endif; ?>
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
                            <input class="form-control  <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="slug" type="text" placeholder=" Url" value="<?php echo e(old('slug')); ?>">
                            <span style="font-size: 0.7em">example: demo-url</span>
                            <?php if($errors->has('slug')): ?>
                            <div class="invalid-feedback">
                                <strong><?php echo e($errors->first('slug')); ?></strong>
                            </div>
                            <?php endif; ?>
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

                                    <option value="<?php echo e($commission->name); ?>" style="color: black"><?php echo e($commission->name); ?></option>
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

                                    <option value="<?php echo e($discount->product); ?>" style="color: black"><?php echo e($discount->product); ?></option>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views/dashboard/pages/discos/new-discos.blade.php ENDPATH**/ ?>