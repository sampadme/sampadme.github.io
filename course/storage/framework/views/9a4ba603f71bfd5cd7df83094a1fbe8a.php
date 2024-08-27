<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="white-box">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="box_header">
                            <div class="main-title">
                                <h3 class="mb-0"><?php echo e(__('setting.Activation')); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <?php echo $__env->make('setting::page_components.activation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('setting::page_components.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('setting::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/activation.blade.php ENDPATH**/ ?>