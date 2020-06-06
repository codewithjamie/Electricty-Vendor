<?php $__env->startSection('page_title', 'BuyPowerNow - User Logs'); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">User Logs</h5>
    </div>
    <div class="card-body bg-light px-0">
        <div class="row">
            <div class="col-12">
                <div class="dashboard-data-table">
                    <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":false,"searching":false,"pageLength":8,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ — <a href=\"#!\" class=\"font-weight-semi-bold\"> view all <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"}}'>
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort pr-1 align-middle">Email</th>
                                <th class="sort pr-1 align-middle">Login time</th>
                                <th class="sort pr-1 align-middle">Ip</th>
                                <th class="sort pr-1 align-middle"></th>
                            </tr>
                        </thead>
                        <tbody id="purchases">
                        <?php if(!empty($data) && $data->count()): ?>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="btn-reveal-trigger">
                                    <td class="align-middle"><?php echo e($data->email ?? "null"); ?></td>
                                    <td class="align-middle"><?php echo e($data->login_time ?? "null"); ?></td>                                                                        
                                    <td class="align-middle"><?php echo e($data->login_ip ?? "null"); ?></td>                                                                        
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?> 
                            <td class="align-middle">No data</td>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views/dashboard/pages/users/user-logs.blade.php ENDPATH**/ ?>