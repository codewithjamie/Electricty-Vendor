<?php $__env->startSection('page_title', 'BuyPowerNow - Purchases'); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="card-header">
        <div class="row align-items-center justify-content-between">
            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Purchases</h5>
            </div>
            <div class="col-6 col-sm-auto ml-auto text-right pl-0">
                <div class="d-none" id="purchases-actions">
                    <div class="input-group input-group-sm"><select class="custom-select cus" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>
                            <option value="Refund">Refund</option>
                            <option value="Delete">Delete</option>
                        </select><button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button></div>
                </div>
                <div id="dashboard-actions">
                    <button class="btn btn-falcon-default btn-sm" type="button">
                        <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span>
                        <span class="d-none d-sm-inline-block ml-1">Export</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body px-0 pt-0">
        <div class="dashboard-data-table">
            <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":false,"searching":false,"pageLength":8,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ — <a href=https://prium.github.io/"#!\" class=\"font-weight-semi-bold\"> view all <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"}}'>
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="no-sort pr-1 align-middle data-table-row-bulk-select">
                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select" id="checkbox-bulk-purchases-select" type="checkbox" data-checkbox-body="#purchases" data-checkbox-actions="#purchases-actions" data-checkbox-replaced-element="#dashboard-actions" /><label class="custom-control-label" for="checkbox-bulk-purchases-select"></label></div>
                        </th>
                        <th class="sort pr-1 align-middle">Product Name</th>
                        <th class="sort pr-1 align-middle">Product Details</th>
                        <th class="sort pr-1 align-middle text-center">Status</th>
                        <th class="sort pr-1 align-middle text-right">Amount</th>
                        <th class="no-sort pr-1 align-middle data-table-row-action"></th>
                    </tr>
                </thead>
                <tbody id="purchases">                    
                    <tr class="btn-reveal-trigger">
                        <td class="align-middle">
                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-0" /><label class="custom-control-label" for="checkbox-0"></label></div>
                        </td>
                        <th class="align-middle">Sylvia Plath</th>
                        <td class="align-middle">Slick - Drag &amp; Drop Bootstrap Generator</td>
                        <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>
                        <td class="align-middle text-right">NGN99</td>
                        <td class="align-middle white-space-nowrap">
                            <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown0" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown0">
                                    <div class="bg-white py-2">
                                        <a class="dropdown-item" href="#!">View</a>
                                        <a class="dropdown-item" href="#!">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views/dashboard/pages/purchase-log.blade.php ENDPATH**/ ?>