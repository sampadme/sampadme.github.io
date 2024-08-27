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
                                        <div class="main-title mb-20">
                                            <div class="main-title mb-20">
                                                <h3 class="mb-0"><?php echo e(__('setting.General')); ?></h3>
                                            </div>

                                            <form action="<?php echo e(route('setting.cookieSettingStore')); ?>" id="" method="POST"
                                                  enctype="multipart/form-data">

                                                <?php echo csrf_field(); ?>

                                                <div class="single_system_wrap">
                                                    <div class="row">


                                                        <div class="col-xl-6">
                                                            <div class=" mb-25">
                                                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'image','required' => 'false','type' => 'image','mediaId' => ''.e(isset($setting)?$setting->image_media?->media_id:'').'','label' => ''.e(__('common.Image')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('100x100')).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'image','required' => 'false','type' => 'image','media_id' => ''.e(isset($setting)?$setting->image_media?->media_id:'').'','label' => ''.e(__('common.Image')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('100x100')).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                            </div>
                                                        </div>


                                                        <div class="col-xl-6 ">
                                                            <div class="primary_input mb-25">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-3">
                                                                        <label class="primary_input_label"
                                                                               for=""> <?php echo e(__('setting.Enable')); ?></label>
                                                                    </div>
                                                                    <div class="col-md-6 mb-25">
                                                                        <label class="primary_checkbox d-flex mr-12"
                                                                               for="type1">
                                                                            <input type="radio"
                                                                                   class="common-radio type1"
                                                                                   id="type1"
                                                                                   name="allow"
                                                                                   value="1" <?php echo e(@$setting->allow==1?"checked":""); ?>>
                                                                            <span
                                                                                class="checkmark me-2"></span> <?php echo e(__('common.Yes')); ?>

                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-6  mb-25">
                                                                        <label class="primary_checkbox d-flex mr-12"
                                                                               for="type2">
                                                                            <input type="radio"
                                                                                   class="common-radio type2"
                                                                                   id="type2"
                                                                                   name="allow"
                                                                                   value="0" <?php echo e(@$setting->allow==0?"checked":""); ?>>
                                                                            <span
                                                                                class="checkmark me-2"></span> <?php echo e(__('common.No')); ?>

                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Accept Button Text')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder=""
                                                                       type="text" id="btn_text"
                                                                       name="btn_text"
                                                                       value="<?php echo e($setting->btn_text); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Customize Button Text')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder=""
                                                                       type="text" id="customize_btn_text"
                                                                       name="customize_btn_text"
                                                                       value="<?php echo e($setting->customize_btn_text); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Background Color')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder="#000000"
                                                                       type="color" id="bg_color"
                                                                       name="bg_color"
                                                                       value="<?php echo e($setting->bg_color); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Button Background Color')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder="#ffffff"
                                                                       type="color" id="text_color"
                                                                       name="text_color"
                                                                       value="<?php echo e($setting->text_color); ?>">
                                                            </div>
                                                        </div>


                                                        <div class="col-xl-12">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Details')); ?></label>
                                                                <textarea name="details"
                                                                          class="lms_summernote"><?php echo $setting->details; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.GDPR')); ?></label>
                                                                <textarea name="gdpr_details"
                                                                          class="lms_summernote"><?php echo $setting->gdpr_details; ?></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Strictly Necessary')); ?></label>
                                                                <textarea name="gdpr_strictly"
                                                                          class="lms_summernote"><?php echo $setting->gdpr_strictly; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Performance Cookies')); ?></label>
                                                                <textarea name="gdpr_performance"
                                                                          class="lms_summernote"><?php echo $setting->gdpr_performance; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Functional Cookies')); ?></label>
                                                                <textarea name="gdpr_functional"
                                                                          class="lms_summernote"><?php echo $setting->gdpr_functional; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Targeting Cookies')); ?></label>
                                                                <textarea name="gdpr_targeting"
                                                                          class="lms_summernote"><?php echo $setting->gdpr_targeting; ?></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Confirm My Choices Button Text')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder=""
                                                                       type="text" id="gdpr_confirm_choice_btn_text"
                                                                       name="gdpr_confirm_choice_btn_text"
                                                                       value="<?php echo e($setting->gdpr_confirm_choice_btn_text); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <div class="primary_input mb-25">
                                                                <label class="primary_input_label"
                                                                       for=""><?php echo e(__('setting.Accept All Button Text')); ?></label>
                                                                <input class="primary_input_field"
                                                                       placeholder=""
                                                                       type="text" id="gdpr_accept_all_btn_text"
                                                                       name="gdpr_accept_all_btn_text"
                                                                       value="<?php echo e($setting->gdpr_accept_all_btn_text); ?>">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="submit_btn text-center  ">
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

<?php echo $__env->make('setting::page_components.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('setting::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/cookie_setting.blade.php ENDPATH**/ ?>