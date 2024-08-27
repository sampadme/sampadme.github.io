<?php $__env->startSection('mainContent'); ?>
    <style>
        .white-box.single-summery {
            padding: 21px 0px;
        }

        .white-box.single-summery h1 {
            font-size: 20px;
        }
    </style>

    <?php echo generateBreadcrumb(); ?>


    <div class="row justify-content-center">

        <div class="col-lg-12">
            <div class="row row-gap-4">
                <div class="col-md-4 col-lg-3 col-sm-6">
                    <a class="white-box single-summery d-block btn-ajax"
                       href="<?php echo e(route('setting.utilities', ['utilities' => 'optimize_clear'])); ?>">
                        <div class="d-block mt-10 text-center ">
                            <h3><i class="ti-cloud font_30"></i></h3>
                            <h1 class="gradient-color2 total_purchase"><?php echo e(__('setting.Clear Cache')); ?></h1>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-lg-3 col-sm-6">
                    <a class="white-box single-summery d-block btn-ajax"
                       href="<?php echo e(route('setting.utilities', ['utilities' => 'clear_log'])); ?>">
                        <div class="d-block mt-10 text-center ">
                            <h3><i class="ti-receipt font_30"></i></h3>
                            <h1 class="gradient-color2 total_purchase"><?php echo e(__('setting.Clear Log')); ?></h1>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-lg-3 col-sm-6">
                    <a class="white-box single-summery d-block btn-ajax"
                       href="<?php echo e(route('setting.utilities', ['utilities' => 'change_debug'])); ?>">
                        <div class="d-block mt-10 text-center ">
                            <h3><i class="ti-blackboard font_30"></i></h3>
                            <h1 class="gradient-color2 total_purchase"> <?php echo e(__((env('APP_DEBUG') ? "Disable" : "Enable" ).' App Debug')); ?></h1>
                        </div>
                    </a>
                </div>


                <div class="col-md-4 col-lg-3 col-sm-6">
                    <a class="white-box single-summery d-block btn-ajax"
                       href="<?php echo e(route('setting.utilities', ['utilities' => 'force_https'])); ?>">
                        <div class="d-block mt-10 text-center ">
                            <h3><i class="ti-lock font_30"></i></h3>
                            <h1 class="gradient-color2 total_purchase"> <?php echo e(__((env('FORCE_HTTPS') ? "Disable" : "Enable" ).' Force HTTPS')); ?></h1>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-lg-3 col-sm-6">
                    <a class="white-box single-summery d-block btn-ajax" id="import_database_card" href="#"
                       data-bs-toggle="modal" data-bs-target="#ImportDatabaseModal">
                        <div class="d-block mt-10 text-center ">
                            <h3><i class="fas fa-database font_30"></i></h3>
                            <h1 class="gradient-color2 total_purchase"> <?php echo e(__('setting.Import Demo Database')); ?></h1>
                        </div>
                    </a>
                </div>


                <div class="col-md-4 col-lg-3 col-sm-6">
                    <a class="white-box single-summery d-block btn-ajax" id="reset_database_card" href="#"
                       data-bs-toggle="modal" data-bs-target="#resetModal"
                    >
                        <div class="d-block mt-10 text-center ">
                            <h3><i class="fas fa-database font_30"></i></h3>
                            <h1 class="gradient-color2 total_purchase"> <?php echo e(__('setting.Reset Database')); ?></h1>
                        </div>
                    </a>
                </div>
                <?php if(!$hasPassportInstall): ?>
                    <div class="col-md-4 col-lg-3 col-sm-6">
                        <a class="white-box single-summery d-block btn-ajax"
                           href="<?php echo e(route('setting.utilities', ['utilities' => 'passport'])); ?>">
                            <div class="d-block mt-10 text-center ">
                                <h3><i class="ti-rocket font_30"></i></h3>
                                <h1 class="gradient-color2 total_purchase"> <?php echo e(__('setting.Passport install')); ?></h1>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if(config('app.demo_mode')): ?>
                    <div class="col-md-4 col-lg-3 col-sm-6">
                        <a class="white-box single-summery d-block btn-ajax"
                           href="<?php echo e(route('setting.utilities', ['utilities' => 'reset_demo'])); ?>">
                            <div class="d-block mt-10 text-center ">
                                <h3><i class="ti-reload font_30"></i></h3>
                                <h1 class="gradient-color2 total_purchase"> <?php echo e(__('setting.Reset demo')); ?></h1>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <div class="alert alert-warning mt-30 text-center">
                        <?php echo e(__('setting.It can take some times to execute operation. please wait until completed operation')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>



    
    <div class="modal fade admin-query" id="resetModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo app('translator')->get('setting.Reset Database'); ?></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="ti-close"></i></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <strong><?php echo e(__('setting.reset_database_note')); ?></strong>
                        <h4><?php echo app('translator')->get('setting.Are you sure to reset database'); ?>?</h4>
                    </div>
                    <div class="mt-40 justify-content-between">
                        <form id="activate_form" action="<?php echo e(route('utilities.resetDatabase')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="primary_input mb-25">
                                        <label class="primary_input_label"
                                               for="title"><?php echo e(__('common.Enter Password')); ?> <span
                                                class="text-danger">*</span></label>
                                        <input required type="password" id="password"
                                               class="primary_input_field" name="password" autocomplete="off"
                                               value="" placeholder="<?php echo e(__('common.Enter Password')); ?> ">

                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="primary_input">
                                    <button type="submit" class="primary-btn fix-gr-bg"
                                            id="save_button_parent"><?php echo e(__('setting.Reset Database')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div class="modal fade admin-query" id="ImportDatabaseModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo app('translator')->get('setting.import_demo_database'); ?></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="ti-close"></i></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <strong><?php echo e(__('setting.import_demo_note')); ?></strong>
                        <h4><?php echo app('translator')->get('setting.are_you_sure_to_import_demo_database'); ?></h4>
                    </div>

                    <div class="mt-40 justify-content-between">
                        <form id="activate_form" action="<?php echo e(route('utilities.importDemoDatabase')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="primary_input mb-25">
                                        <label class="primary_input_label"
                                               for="title"><?php echo e(__('common.Enter Password')); ?> <span
                                                class="text-danger">*</span></label>
                                        <input required type="password" id="password"
                                               class="primary_input_field" name="password" autocomplete="off"
                                               value="" placeholder="<?php echo e(__('common.Enter Password')); ?> ">

                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="primary_input">
                                    <button type="submit" class="primary-btn fix-gr-bg"
                                            id="save_button_parent"><?php echo e(__('setting.Import Database')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/utilities.blade.php ENDPATH**/ ?>