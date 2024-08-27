<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="mb-40 student-details">
        <div class="container-fluid p-0">
            <div class="row">

                <div class="col-lg-12">
                    <form class="form-horizontal" action="<?php echo e(route('setting.captcha')); ?>" method="POST">

                        <?php echo csrf_field(); ?>
                        <div class="white-box">
                            <div class="row">
                                <div class="main-title ps-3">
                                    <h3 class="mb-0"><?php echo e(__('setting.Captcha')); ?> <?php echo e(__('setting.Setting')); ?></h3>
                                </div>
                            </div>
                            <div class="col-lg-12 text-end">
                                <code><?php echo e(__('setting.NB: Using Google reCaptcha v2 (invisible & checkbox)')); ?>| <a
                                        target="_blank"
                                        href="https://www.google.com/recaptcha/admin"><?php echo e(__('setting.Click Here to Get Keys')); ?></a></code>
                            </div>
                            <div class="col-md-12 p-0">

                                <div class="row mb-30">
                                    <div class="col-md-12">

                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                           for=""><?php echo e(__('setting.No Captcha Site Key')); ?></label>
                                                    <input class="primary_input_field" placeholder="-" type="text"
                                                           name="site_key"
                                                           value="<?php echo e(saasEnv('NOCAPTCHA_SITEKEY')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                           for=""><?php echo e(__('setting.No Captcha Secret Key')); ?>  </label>
                                                    <input class="primary_input_field" placeholder="-" type="text"
                                                           name="secret_key"
                                                           value="<?php echo e(saasEnv('NOCAPTCHA_SECRET')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label pb-3 mb-0"
                                                           for=""><?php echo e(__('setting.Is Invisible')); ?>  </label>


                                                    <div class="row">
                                                        <div class="col-md-6 mb-25">
                                                            <label class="primary_checkbox d-flex mr-12"
                                                                   for="yes_is_invisible">
                                                                <input type="radio"
                                                                       class="common-radio "
                                                                       id="yes_is_invisible"
                                                                       name="is_invisible"
                                                                       <?php echo e(saasEnv('NOCAPTCHA_IS_INVISIBLE')=='true'?'checked':''); ?>

                                                                       value="1">
                                                                <span
                                                                    class="checkmark me-2"></span> <?php echo e(__('common.Yes')); ?>

                                                            </label>
                                                        </div>
                                                        <div class="col-md-6 mb-25">
                                                            <label class="primary_checkbox d-flex mr-12"
                                                                   for="no_is_invisible">
                                                                <input type="radio"
                                                                       class="common-radio "
                                                                       id="no_is_invisible"
                                                                       name="is_invisible"
                                                                       <?php echo e(saasEnv('NOCAPTCHA_IS_INVISIBLE')!='true'?'checked':''); ?>

                                                                       value="0">
                                                                <span class="checkmark me-2"></span> <?php echo e(__('common.No')); ?>

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="primary_input mb-25">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-1">
                                                            <label class="primary_input_label"
                                                                   for=""> <?php echo e(__('setting.Captcha')); ?> <?php echo e(__('setting.For')); ?> <?php echo e(__('setting.Login Page')); ?></label>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-25">
                                                                    <label class="primary_checkbox d-flex mr-12"
                                                                           for="yes_login">
                                                                        <input type="radio"
                                                                               class="common-radio "
                                                                               id="yes_login"
                                                                               name="login_status"
                                                                               <?php echo e(saasEnv('NOCAPTCHA_FOR_LOGIN')=='true'?'checked':''); ?>

                                                                               value="1">
                                                                        <span
                                                                            class="checkmark me-2"></span><?php echo e(__('common.Yes')); ?>

                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 mb-25">
                                                                    <label class="primary_checkbox d-flex mr-12"
                                                                           for="no_login">
                                                                        <input type="radio"
                                                                               class="common-radio "
                                                                               id="no_login"
                                                                               name="login_status"
                                                                               <?php echo e(saasEnv('NOCAPTCHA_FOR_LOGIN')!='true'?'checked':''); ?>

                                                                               value="0">
                                                                        <span
                                                                            class="checkmark me-2"></span> <?php echo e(__('common.No')); ?>

                                                                    </label>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="primary_input mb-25">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-1">
                                                            <label class="primary_input_label"
                                                                   for=""> <?php echo e(__('setting.Captcha')); ?> <?php echo e(__('setting.For')); ?> <?php echo e(__('setting.Register Page')); ?></label>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-25">
                                                                    <label class="primary_checkbox d-flex mr-12
"
                                                                           for="yes_reg">
                                                                        <input type="radio"
                                                                               class="common-radio "
                                                                               id="yes_reg"
                                                                               name="reg_status"
                                                                               <?php echo e(saasEnv('NOCAPTCHA_FOR_REG')=='true'?'checked':''); ?>

                                                                               value="1">
                                                                        <span
                                                                            class="checkmark me-2"></span> <?php echo e(__('common.Yes')); ?>

                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 mb-25">
                                                                    <label class="primary_checkbox d-flex mr-12
"
                                                                           for="no_reg">
                                                                        <input type="radio"
                                                                               class="common-radio "
                                                                               id="no_reg"
                                                                               name="reg_status"
                                                                               <?php echo e(saasEnv('NOCAPTCHA_FOR_REG')!='true'?'checked':''); ?>

                                                                               value="0">
                                                                        <span
                                                                            class="checkmark me-2"></span> <?php echo e(__('common.No')); ?>

                                                                    </label>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="primary_input mb-25">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-1">
                                                            <label class="primary_input_label"
                                                                   for=""> <?php echo e(__('setting.Captcha')); ?> <?php echo e(__('setting.For')); ?> <?php echo e(__('setting.Contact Page')); ?></label>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-25">
                                                                    <label class="primary_checkbox d-flex mr-12"
                                                                           for="contact_yes">
                                                                        <input type="radio"
                                                                               class="common-radio "
                                                                               id="contact_yes"
                                                                               name="contact_status"
                                                                               <?php echo e(saasEnv('NOCAPTCHA_FOR_CONTACT')=='true'?'checked':''); ?>

                                                                               value="1">
                                                                        <span
                                                                            class="checkmark me-2"></span> <?php echo e(__('common.Yes')); ?>

                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 mb-25">
                                                                    <label class="primary_checkbox d-flex mr-12"
                                                                           for="contact_no">
                                                                        <input type="radio"
                                                                               class="common-radio "
                                                                               id="contact_no"
                                                                               name="contact_status"
                                                                               <?php echo e(saasEnv('NOCAPTCHA_FOR_CONTACT')!='true'?'checked':''); ?>

                                                                               value="0">

                                                                        <span
                                                                            class="checkmark me-2"></span> <?php echo e(__('common.No')); ?>

                                                                    </label>
                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
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

                            <div class="row mt-40">
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="primary-btn fix-gr-bg" data-bs-toggle="tooltip"
                                    >
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
<?php $__env->startPush('scripts'); ?>
    <script>
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(".imagePreview1").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $(".imgInput1").change(function () {

            readURL1(this);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/captcha.blade.php ENDPATH**/ ?>