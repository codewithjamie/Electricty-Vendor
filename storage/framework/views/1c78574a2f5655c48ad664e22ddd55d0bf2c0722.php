<?php $__env->startSection('page_title', 'BuyPowerNow - All Users'); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Users List</h5>
    </div>
    <div class="card-body bg-light px-0">
        <div class="row">
            <div class="col-12">
                <div class="dashboard-data-table">
                    <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":false,"searching":false,"pageLength":8,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ — <a href=\"#!\" class=\"font-weight-semi-bold\"> view all <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"}}'>
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort pr-1 align-middle">Name</th>
                                <th class="sort pr-1 align-middle">Email</th>
                                <th class="sort pr-1 align-middle">Address</th>
                                <th class="sort pr-1 align-middle">Status</th>
                                <th class="sort pr-1 align-middle">Account</th>
                                <th class="sort pr-1 align-middle">Login Time</th>
                                <th class="sort pr-1 align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody id="purchases">
                            <?php if(!empty($users) && $users->count()): ?>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="btn-reveal-trigger">
                                        <td class="align-middle"><?php echo e($user->fname); ?> <?php echo e($user->lname); ?></td>
                                        <td class="align-middle"><?php echo e($user->email ?? "null"); ?></td>
                                        <td class="align-middle"><?php echo e($user->address ?? "null"); ?></td>
                                        <td class="align-middle">
                                            <?php if($user->email_verified_at == null): ?>
                                                <span class="badge badge rounded-capsule badge-soft-danger">
                                                    not verified<span class="ml-1 fas fa-cancel" data-fa-transform="shrink-2"></span>
                                                </span>
                                            <?php else: ?> 
                                                <span class="badge badge rounded-capsule badge-soft-success">
                                                    verified<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span>
                                                    </span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-middle">
                                            <?php if($user->userid == "2"): ?>
                                                <a class="btn btn-sm btn-falcon-info  rounded-capsule mr-1 mb-1" href="javascript:;">
                                                    user <span class="fas fa-user ml-1" data-fa-transform="shrink-3"></span>
                                                </a>                                                
                                            <?php elseif($user->userid == "3"): ?>
                                            <a class="btn btn-sm btn-falcon-warning  rounded-capsule mr-1 mb-1" href="javascript:;">
                                                agent <span class="fas fa-user ml-1" data-fa-transform="shrink-3"></span>
                                            </a>    
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-middle"><?php echo e($user->login_time ?? "not stamped"); ?></td>
                                        <td class="align-middle white-space-nowrap">
                                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown0" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown0">
                                                    <div class="bg-white py-2">
                                                        <a class="dropdown-item" href="/dashboard/users/view-user/<?php echo e($user->id); ?>">View</a>
                                                        <a class="dropdown-item" href="/dashboard/users/edit-user/<?php echo $user->id; ?>">Edit</a>
                                                        <a class="dropdown-item" href="/dashboard/users/fund-wallet/<?php echo $user->id; ?>">Fund Wallet</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="/dashboard/users/delete-user/<?php echo $user->id; ?>">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?> 
                                <td class="align-middle">No User</td>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views//dashboard/pages/users/all-users.blade.php ENDPATH**/ ?>