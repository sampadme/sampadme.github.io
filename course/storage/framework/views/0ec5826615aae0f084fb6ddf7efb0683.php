<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="mb-40 student-details">
        <div class="container-fluid p-0">
            <div class="white-box">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="main-title ps-3 pt-0">
                                <h3 class="mb-20"><?php echo e(__('setting.Vimeo Settings')); ?></h3>
                            </div>
                        </div>
                        <?php if(permissionCheck('vimeosetting.update')): ?>
                            <form class="form-horizontal" action="<?php echo e(route('vimeosetting.update')); ?>" method="POST">
                                <?php endif; ?>
                                <?php echo csrf_field(); ?>
                                <div>

                                    <div class="col-md-12 p-0">
                                        <input type="hidden" name="url" id="url" value="<?php echo e(URL::to('/')); ?>">
                                        <input type="hidden" name="id" value="<?php echo e(@$videoSetting->id); ?>">
                                        <div class="row mb-30">
                                            <div class="col-md-12">

                                                <div class="row">
                                                    <?php if(\Illuminate\Support\Facades\Auth::user()->role_id==1): ?>
                                                        <div class="col-xl-6 ">
                                                            <div class="primary_input mb-25">
                                                                <div class="row">
                                                                    <div class="col-md-6">

                                                                        <div class="row">
                                                                            <div class="col-md-12 mb-3">
                                                                                <label class="primary_input_label"
                                                                                       for="    "> <?php echo e(__('setting.Common API User For All User')); ?></label>
                                                                            </div>
                                                                            <div class="col-md-4 mb-25">
                                                                                <label
                                                                                    class="primary_checkbox d-flex mr-12"
                                                                                    for="yes">
                                                                                    <input type="radio"
                                                                                           class="common-radio "
                                                                                           id="yes"
                                                                                           name="common_use"
                                                                                           <?php echo e(config('vimeo.connections.main.common_use')?'checked':''); ?>

                                                                                           value="1">
                                                                                    <span
                                                                                        class="checkmark me-2"></span> <?php echo e(__('common.Yes')); ?>

                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-4 mb-25">
                                                                                <label
                                                                                    class="primary_checkbox d-flex mr-12"
                                                                                    for="no">
                                                                                    <input type="radio"
                                                                                           class="common-radio "
                                                                                           id="no"
                                                                                           name="common_use"
                                                                                           value="0" <?php echo e(!config('vimeo.connections.main.common_use')?'checked':''); ?>>
                                                                                    <span
                                                                                        class="checkmark me-2"></span> <?php echo e(__('common.No')); ?>

                                                                                </label>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="col-xl-6">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label"
                                                                   for=""><?php echo e(__('setting.Vimeo Client')); ?> *</label>
                                                            <input class="primary_input_field" placeholder="-"
                                                                   type="text"
                                                                   name="vimeo_client"
                                                                   value="<?php echo e(!empty($videoSetting)?$videoSetting->vimeo_client:''); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label"
                                                                   for=""><?php echo e(__('setting.Vimeo Secret')); ?> *</label>
                                                            <input class="primary_input_field" placeholder="-"
                                                                   type="text"
                                                                   name="vimeo_secret"
                                                                   value="<?php echo e(!empty($videoSetting)?$videoSetting->vimeo_secret:''); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label"
                                                                   for=""><?php echo e(__('setting.Vimeo Access')); ?> *</label>
                                                            <input class="primary_input_field" placeholder="-"
                                                                   type="text"
                                                                   name="vimeo_access"
                                                                   value="<?php echo e(!empty($videoSetting)?$videoSetting->vimeo_access:''); ?>">
                                                        </div>
                                                    </div>

                                                    <?php if(\Illuminate\Support\Facades\Auth::user()->role_id==1): ?>
                                                        <div class="col-xl-6 ">
                                                            <div class="primary_input mb-25">
                                                                <div class="row">
                                                                    <div class="col-md-6">

                                                                        <div class="row">
                                                                            <div class="col-md-12 mb-3">
                                                                                <label class="primary_input_label"
                                                                                       for="    "> <?php echo e(__('setting.Vimeo Video Upload Type')); ?></label>
                                                                            </div>
                                                                            <div class="col-md-5 mb-25">
                                                                                <label
                                                                                    class="primary_checkbox d-flex mr-12  text-nowrap"
                                                                                    for="upload_type_direct">
                                                                                    <input type="radio"
                                                                                           class="common-radio "
                                                                                           id="upload_type_direct"
                                                                                           name="upload_type"
                                                                                           <?php echo e(config('vimeo.connections.main.upload_type')=="Direct"?'checked':''); ?>

                                                                                           value="Direct">
                                                                                    <span
                                                                                        class="checkmark me-2 "></span> <?php echo e(__('setting.Direct Upload')); ?>

                                                                                </label>
                                                                            </div>
                                                                            <div class="col-md-5 mb-25">
                                                                                <label
                                                                                    class="primary_checkbox d-flex mr-12  text-nowrap"
                                                                                    for="upload_type_list">
                                                                                    <input type="radio"
                                                                                           class="common-radio "
                                                                                           id="upload_type_list"
                                                                                           name="upload_type"
                                                                                           value="List" <?php echo e(config('vimeo.connections.main.upload_type')=="List"?'checked':''); ?>>
                                                                                    <span
                                                                                        class="checkmark me-2 "></span> <?php echo e(__('setting.From List')); ?>

                                                                                </label>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>

                                                    <div class="col-lg-12">
                                                        <code><a target="_blank" title="Google map api key"
                                                                 href="https://developer.vimeo.com/apps/new"><?php echo e(__('setting.Click Here to Get Vimeo Api Key')); ?>

                                                                | <?php echo e(__('setting.Scopes need to allow')); ?>

                                                                <b><?php echo e(__('setting.public')); ?></b>,<b><?php echo e(__('setting.private')); ?></b>,<b><?php echo e(__('setting.edit')); ?></b>,<b><?php echo e(__('setting.upload')); ?> </b></a></code>

                                                        <ul>
                                                            <li>
                                                                <?php echo e(__('setting.For Secure, Change Privacy to')); ?>

                                                                <b><?php echo e(__('setting.Hide From Vimeo')); ?></b>
                                                            </li>
                                                            <li><?php echo e(__('setting.Where can the video be embedded? Set')); ?>

                                                                <b><?php echo e(__('setting.Use Specific domains')); ?></b>
                                                                <?php echo e(__('setting.& register your domain without http/https')); ?>

                                                            </li>
                                                            <li>
                                                                <?php echo e(__('setting.Direct upload is not allow for Vimeo basic plan')); ?>

                                                            </li>

                                                        </ul>
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
                                        if(permissionCheck('vimeosetting.update')){
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
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/VimeoSetting/Resources/views/index.blade.php ENDPATH**/ ?>