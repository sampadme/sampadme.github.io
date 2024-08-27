
<?php $__env->startPush('styles'); ?>
    <style>
        .image_td {
            width: 120px;
            height: 90px;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .custom-hr {
            background-color: rgba(0, 0, 0, .1);
            width: 100%;
            height: 2px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="white-box">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12 g-0 ">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-md-flex">
                                        <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('setting.Payout Accounts')); ?></h3>
                                        <ul class="d-flex">
                                            <?php if(permissionCheck('admin.payout_accounts.store')): ?>
                                                <li>
                                                    <a id="add_new_btn" class="primary-btn radius_30px   fix-gr-bg"
                                                       href="javascript:void(0);">
                                                        <i class="ti-plus"></i><?php echo e(__('common.Add New')); ?>

                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="QA_section QA_section_heading_custom check_box_table">
                            <div class="QA_table ">
                                <!-- table-responsive -->
                                <div class="" id="table_list">
                                    <?php echo $__env->make('setting::payout_accounts.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="append_html"></div>
    <input type="hidden" id="payout_account_create_route" value="<?php echo e(route('admin.payout_accounts.create')); ?>">
    <input type="hidden" id="payout_account_store_route" value="<?php echo e(route('admin.payout_accounts.store')); ?>">
    <input type="hidden" id="payout_account_edit_route" value="<?php echo e(route('admin.payout_accounts.edit',':id')); ?>">
    <input type="hidden" id="payout_account_update_route" value="<?php echo e(route('admin.payout_accounts.update',':id')); ?>">
    <input type="hidden" id="payout_account_show_route" value="<?php echo e(route('admin.payout_accounts.show',':id')); ?>">
    <?php echo $__env->make('backend.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('public/modules/settings/payout_accounts.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/payout_accounts/index.blade.php ENDPATH**/ ?>