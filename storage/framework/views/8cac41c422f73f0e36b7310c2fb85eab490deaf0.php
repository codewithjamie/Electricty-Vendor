<?php $__env->startSection('page_title', 'BuyPowerNow - All commission'); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <h5 class="pl-3 text-muted"><b>Commissions</b></h5>
            <div class="col-sm-auto">
                <span>Create commission</span>
                <a class="text-600" href="/dashboard/commissions/create" data-toggle="tooltip" data-placement="top" title="Create commission"><span class="fas fa-plus-square"></span></a>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <div class="row justify-content-between align-items-center">
            <!-- <h5 class="pl-3"><b>List</b></h5> -->
            <div class="col-sm-auto">
                <a class="text-600" data-toggle="tooltip" data-placement="top" title=""><span class="fas fa-list"></span></a>
            </div>
        </div>
    </div>
    <div class="card-body bg-light">
        <div class="row no-gutters">
            <div class="col-12 p-3">
                <div class="p-1">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Percentage</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($commissions) && $commissions->count()): ?>
                            <?php $__currentLoopData = $commissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($commission->id); ?></td>
                                <td><?php echo e($commission->name); ?></td>
                                <td><?php echo e($commission->percentage); ?></td>
                                <td><?php echo e($commission->status); ?></td>
                                <td>
                                    <a href="/dashboard/commissions/edit/<?php echo e($commission->id); ?>" class="btn btn-falcon-primary"><span class="fa fa-edit"></span></a>
                                    <a class="btn btn-falcon-danger btn-icon btn-xs" href="javascript:;" data-toggle="modal" data-target="#delete-modal<?php echo e($commission->id); ?>">
                                        <i class="fa fa-trash "></i>
                                    </a>

                                    <div class="modal modal-fixed-right fade" id="delete-modal<?php echo e($commission->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalRightLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-vertical" role="document">
                                            <div class="modal-content border-0 min-vh-100">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalRightLabel">Delete <?php echo e($commission->name); ?></h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body py-5 text-center"><img class="img-fluid" src="/assets/img/illustrations/modal-right.png" alt="">
                                                <form id="delete" action="/commissions/delete-commission/<?php echo e($commission->id); ?>" method="POST">
                                                          <?php echo csrf_field(); ?>
                                                          <?php echo method_field('DELETE'); ?>
                                                          <button type="submit" class="btn btn-outline-success btn-icon btn-sm" data-id="<?php echo e($commission->id); ?>" class="text-danger">
                                                              DELETE
                                                          </button>
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <td>No data stored</td>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-footer pt-4 pb-4 mt-4 mp-4">
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views/dashboard/pages/commissions/all.blade.php ENDPATH**/ ?>