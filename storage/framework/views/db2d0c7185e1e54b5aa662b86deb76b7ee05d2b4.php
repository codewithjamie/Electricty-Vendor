<?php $__env->startSection('page_title', 'BuyPowerNow - All Discos'); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <h5 class="pl-3 text-muted"><b>Discos</b></h5>
            <div class="col-sm-auto">
                <span>Create Disco</span>
                <a class="text-600" href="/dashboard/discos/create-disco" data-toggle="tooltip" data-placement="top" title="Create Disco"><span class="fas fa-plus-square"></span></a>
            </div>
        </div>
    </div>
</div>
<?php if(!empty($discos) && $discos->count()): ?>
<?php $__currentLoopData = $discos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card mb-3">
    <div class="card-body p-0 overflow-hidden">
        <div class="row no-gutters">
            <div class="col-12 p-3">
                <div class="p-1">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="position-relative h-sm-100"><a class="d-block h-100" href="javascript:;">
                                    <img class="img-fluid " src="/storage/<?php echo e($disco->image); ?>" alt="<?php echo e($disco->image); ?>" />
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1" href="product-details.html"><?php echo e($disco->name); ?></a></h5>
                                    <l class="fs--1 mb-2 mb-md-3">
                                        <a class="text-500" href="javscript:;">
                                            <?php $__currentLoopData = json_decode($disco->locations); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($location. ","); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </a>
                                        </p>
                                        <p>
                                            <?php echo e($disco->description); ?>

                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Commission:: <?php echo e($disco->commission."%" ?? "No commission"); ?></li>
                                            <li class="list-group-item">Discounts:: <?php echo e($disco->discount."%" ?? "No discount"); ?></li>
                                        </ul>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between flex-column">
                                    <div class="mt-md-2">
                                        <a class="btn btn-sm btn-falcon-info border-300 d-lg-block mt-2 mr-2 mr-lg-0" href="/dashboard/discos/edit-disco/<?php echo e($disco->id); ?>">
                                            <span class="far fa-edit"></span>
                                            <span class="ml-2 d-none d-md-inline-block">Edit</span>
                                        </a>
                                        <a class="btn btn-sm btn-falcon-danger d-lg-block mt-2" href="javascript:;" data-toggle="modal" data-target="#delete-modal<?php echo e($disco->id); ?>">
                                            <span class="fas fa-trash"> </span>
                                            <span class="ml-2 d-none d-md-inline-block">Delete</span>
                                        </a>

                                        <div class="modal modal-fixed-right fade" id="delete-modal<?php echo e($disco->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalRightLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-vertical" role="document">
                                                <div class="modal-content border-0 min-vh-100">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalRightLabel">Delete <?php echo e($disco->name); ?></h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body py-5 text-center"><img class="img-fluid" src="https://icons.veryicon.com/png/System/Oxygen/Status%20user%20trash%20full.png" alt="">
                                                        <form id="delete" action="/dashboard/discos/delete-disco/<?php echo e($disco->id); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <div class=" pt-4 mt-4"></div>
                                                            <button type="submit" class="btn btn-outline-danger " data-id="<?php echo e($disco->id); ?>" class="text-danger">
                                                                DELETE
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<div class="col-md-12">
    <h1>No data</h1>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views/dashboard/pages/discos/all.blade.php ENDPATH**/ ?>