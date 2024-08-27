<?php $__env->startSection('mainContent'); ?>
    <?php echo generateBreadcrumb(); ?>

    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <div class="white-box mb_30 ">
                        <form action="<?php echo e(route('course.setting')); ?>" method="post" id="coupon-form"
                              name="coupon-form" enctype="multipart/form-data">

                            <?php echo csrf_field(); ?>


                            <div class="row">

                                <div class="col-xl-4">
                                    <div class="primary_input mb-25">
                                        <label class="primary_input_label"
                                               for="show_seek_bar"><?php echo e(__('setting.Show SeekBar In Player')); ?>  </label>
                                        <select class="primary_select mb-25" name="show_seek_bar"
                                                id="show_seek_bar">

                                            <option value="0"
                                                    <?php if(Settings('show_seek_bar') != 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.No')); ?>

                                            </option>
                                            <option value="1"
                                                    <?php if(Settings('show_seek_bar') == 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.Yes')); ?>

                                            </option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="primary_input mb-25">
                                        <label class="primary_input_label"
                                               for="show_drip"><?php echo e(__('common.Drip Content')); ?></label>
                                        <select class="primary_select mb-25" name="show_drip" id="show_drip">
                                            <option value="0"
                                                    <?php if(Settings('show_drip') != 1): ?> selected <?php endif; ?>><?php echo e(__('common.Show All')); ?></option>
                                            <option value="1"
                                                    <?php if(Settings('show_drip') == 1): ?> selected <?php endif; ?>><?php echo e(__('common.Show After Unlock')); ?></option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-xl-4">
                                    <div class="primary_input mb-25">
                                        <label class="primary_input_label"
                                               for="course_approve"><?php echo e(__('setting.Course Approval By Admin')); ?>  </label>
                                        <select class="primary_select mb-25" name="course_approval"
                                                id="course_approval">
                                            <option value="1"
                                                    <?php if(Settings('course_approval') == 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.Yes')); ?>

                                            </option>

                                            <option value="0"
                                                    <?php if(Settings('course_approval') != 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.No')); ?>

                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <?php if(currentTheme()!='tvt'): ?>
                                    <div class="col-xl-4">
                                        <div class="primary_input mb-25">
                                            <label class="primary_input_label"
                                                   for="hide_blog_comment"><?php echo e(__('setting.Hide QA Section')); ?>  </label>
                                            <select class="primary_select mb-25" name="hide_qa_section"
                                                    id="hide_qa_section">

                                                <option value="0"
                                                        <?php if(Settings('hide_qa_section') != 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.No')); ?>

                                                </option>
                                                <option value="1"
                                                        <?php if(Settings('hide_qa_section') == 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.Yes')); ?>

                                                </option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="primary_input mb-25">
                                            <label class="primary_input_label"
                                                   for="hide_review_section"><?php echo e(__('setting.Hide Review Section')); ?>  </label>
                                            <select class="primary_select mb-25" name="hide_review_section"
                                                    id="hide_qa_section">

                                                <option value="0"
                                                        <?php if(Settings('hide_review_section') != 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.No')); ?>

                                                </option>
                                                <option value="1"
                                                        <?php if(Settings('hide_review_section') == 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.Yes')); ?>

                                                </option>

                                            </select>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <div class="col-xl-4">
                                    <div class="primary_input mb-25">
                                        <label class="primary_input_label"
                                               for="mobile_app_only_mode"><?php echo e(__('setting.Youtube Default Player')); ?>  </label>
                                        <select class="primary_select mb-25" name="youtube_default_player"
                                                id="youtube_default_player">

                                            <option value="0"
                                                    <?php if(Settings('youtube_default_player') != 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.No')); ?>

                                            </option>
                                            <option value="1"
                                                    <?php if(Settings('youtube_default_player') == 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.Yes')); ?>

                                            </option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="primary_input mb-25">
                                        <label class="primary_input_label"
                                               for=""><?php echo e(_trans('courses.Send Mail Before Expire')); ?>

                                            (<small><?php echo e(__('courses.In Days')); ?></small>) </label>
                                        <input class="primary_input_field" name="send_mail_before_expire"
                                               id="send_mail_before_expire"
                                               placeholder="-"
                                               value="<?php echo e(Settings('send_mail_before_expire')); ?>"
                                               type="number" <?php echo e($errors->has('send_mail_before_expire') ? 'autofocus' : ''); ?>>

                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-12 text-center">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="primary-btn semi_large fix-gr-bg"
                                                data-bs-toggle="tooltip"
                                                id="save_button_parent">
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

    <?php echo $__env->make('backend.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/setting.blade.php ENDPATH**/ ?>