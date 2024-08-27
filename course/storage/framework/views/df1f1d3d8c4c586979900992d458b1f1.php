<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="box_header">
                        <div class="main-title d-flex">

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="">
                        <div class="row">

                            <div class="col-lg-12">
                                <!-- tab-content  -->
                                <div class="tab-content " id="myTabContent">
                                    <!-- General -->
                                    <div class="tab-pane fade white-box show active" id="Activation"
                                         role="tabpanel" aria-labelledby="Activation-tab">
                                        <div class="main-title mb-25">


                                            <form action="<?php echo e(route('setting.cacheSettingStore')); ?>" id="" method="POST"
                                                  enctype="multipart/form-data">

                                                <?php echo csrf_field(); ?>

                                                <div class="single_system_wrap">
                                                    <div class="row">


                                                        <div class="col-xl-6">
                                                            <div class="primary_input mb-25">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-3">
                                                                        <label class="primary_input_label"
                                                                               for=""> <?php echo e(__('setting.Cache Driver')); ?></label>
                                                                    </div>
                                                                    <div class="col-md-3 mb-25">
                                                                        <label class="primary_checkbox d-flex mr-12"
                                                                               for="file">
                                                                            <input type="radio"
                                                                                   class="common-radio driverCheck"
                                                                                   id="file"
                                                                                   name="driver"
                                                                                   value="file" <?php echo e(@$driver=='file'?"checked":""); ?>>
                                                                            <span
                                                                                class="checkmark me-2"></span> <?php echo e(__('setting.File')); ?>

                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-3 mb-25">
                                                                        <label class="primary_checkbox d-flex mr-12"
                                                                               for="array">
                                                                            <input type="radio"
                                                                                   class="common-radio driverCheck"
                                                                                   id="array"
                                                                                   name="driver"
                                                                                   value="array" <?php echo e(@$driver=='array'?"checked":""); ?>>
                                                                            <span
                                                                                class="checkmark me-2"></span> <?php echo e(__('setting.Array')); ?>

                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3 mb-25">
                                                                        <label class="primary_checkbox d-flex mr-12"
                                                                               for="redis"> <input type="radio"
                                                                                                   class="common-radio driverCheck"
                                                                                                   id="redis"
                                                                                                   name="driver"
                                                                                                   value="redis" <?php echo e(@$driver=='redis'?"checked":""); ?>>
                                                                            <span
                                                                                class="checkmark me-2"></span> <?php echo e(__('setting.Redis')); ?>

                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-3 mb-25">
                                                                        <label class="primary_checkbox d-flex mr-12"
                                                                               for="memcached">
                                                                            <input type="radio"
                                                                                   class="common-radio driverCheck"
                                                                                   id="memcached"
                                                                                   name="driver"
                                                                                   value="memcached" <?php echo e(@$driver=='memcached'?"checked":""); ?>>
                                                                            <span
                                                                                class="checkmark me-2"></span> <?php echo e(__('setting.Memcached')); ?>

                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="row redis">
                                                        <div class="col-xl-4">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Redis Host')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder="Redis Host" type="text"
                                                                       id="redis_host"
                                                                       name="redis_host" value="<?php echo e(env('REDIS_HOST')); ?>">
                                                            </div>
                                                        </div>


                                                        <div class="col-xl-4">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Redis Password')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder="Redis Password" type="text"
                                                                       id="redis_password"
                                                                       name="redis_password"
                                                                       value="<?php echo e(env('REDIS_PASSWORD')); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Redis Port')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder="Redis Password" type="text"
                                                                       id="redis_port"
                                                                       name="redis_port" value="<?php echo e(env('REDIS_PORT')); ?>">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row memcached">
                                                        <div class="col-xl-4">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Memcached Persistent ID')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder="Persistent ID" type="text"
                                                                       id="memcached_persistent_id"
                                                                       name="memcached_persistent_id"
                                                                       value="<?php echo e(env('MEMCACHED_PERSISTENT_ID')); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Memcached Host')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder="<?php echo e(__('setting.Memcached Host')); ?>"
                                                                       type="text"
                                                                       id="memcached_host"
                                                                       name="memcached_host"
                                                                       value="<?php echo e(env('MEMCACHED_HOST')); ?>">
                                                            </div>
                                                        </div>


                                                        <div class="col-xl-4">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Memcached Username')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder="<?php echo e(__('setting.Memcached Username')); ?>"
                                                                       type="text"
                                                                       id="memcached_username"
                                                                       name="memcached_username"
                                                                       value="<?php echo e(env('MEMCACHED_USERNAME')); ?>">
                                                            </div>
                                                        </div>


                                                        <div class="col-xl-4">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Memcached Password')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder="<?php echo e(__('setting.Memcached Password')); ?>"
                                                                       type="text"
                                                                       id="memcached_password"
                                                                       name="memcached_password"
                                                                       value="<?php echo e(env('MEMCACHED_PASSWORD')); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Memcached Port')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder="<?php echo e(__('setting.Memcached Port')); ?>"
                                                                       type="text"
                                                                       id="memcached_port"
                                                                       name="memcached_port"
                                                                       value="<?php echo e(env('MEMCACHED_PORT')); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="submit_btn text-center mt-10">
                                                    <button class="primary-btn fix-gr-bg" type="submit"
                                                            data-bs-toggle="tooltip" title=""
                                                            id="general_info_sbmt_btn"><i
                                                            class="ti-check"></i> <?php echo e(__('common.Save')); ?></button>
                                                </div>
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
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        let memcached = $('.memcached');
        memcached.hide();
        let redis = $('.redis');
        redis.hide();


        //
        $(document).on("click", ".driverCheck", function () {
            let driver = $("input[name='driver']:checked").val();
            if (driver === "redis") {
                redis.show();
                memcached.hide();
            } else if (driver === "memcached") {
                redis.hide();
                memcached.show();
            } else {
                redis.hide();
                memcached.hide();
            }
        });

        $("document").ready(function () {
            $("input[name='driver']:checked").trigger('click');

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('setting::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/cache_setting.blade.php ENDPATH**/ ?>