<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="mb-40 student-details">
        <div class="container-fluid p-0">
            <div class="row">

                <div class="col-lg-12">

                    <?php if(permissionCheck('vdocipher.settingUpdate')): ?>
                        <form class="form-horizontal" action="<?php echo e(route('vdocipher.settingUpdate')); ?>" method="POST">
                            <?php endif; ?>
                            <?php echo csrf_field(); ?>
                            <div class="white-box">

                                <div class="col-md-12 p-0">

                                    <div class="row mb-30">
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for=""><?php echo e(__('setting.API Secret')); ?> *</label>
                                                        <input class="primary_input_field" placeholder="-" type="text"
                                                               name="api_secret"
                                                               value="<?php echo e(saasEnv('VDOCIPHER_API_SECRET')); ?>">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <code><a target="_blank"
                                                             href="https://www.vdocipher.com/dashboard/config/apikeys"><?php echo e(__('setting.Click Here to Get VdoCipher Api Key')); ?></a></code>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="row justify-content-center">

                                                <?php if(session()->has('message-success')): ?>
                                                    <p class=" text-success">
                                                        <?php echo e(session()->get('message-success')); ?>

                                                    </p>
                                                <?php elseif(session()->has('message-danger')): ?>
                                                    <p class=" text-danger">
                                                        <?php echo e(session()->get('message-danger')); ?>

                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    $tooltip = "";
                                    if(permissionCheck('vdocipher.settingUpdate')){
                                        $tooltip = "";
                                    }else{
                                        $tooltip = "You have no permission to Update";
                                    }
                                ?>
                                <div class="row mt-40">
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="primary-btn fix-gr-bg" data-bs-toggle="tooltip"
                                                title="<?php echo e($tooltip); ?>">
                                            <i class="ti-check"></i>
                                            <?php echo e(__('common.Update')); ?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/VdoCipher/Resources/views/setting.blade.php ENDPATH**/ ?>