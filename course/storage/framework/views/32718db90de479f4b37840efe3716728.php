<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/student_list.css')); ?>"/>
<?php $__env->stopPush(); ?>
<?php
    $table_name='users'
?>
<?php $__env->startSection('table'); ?>
    <?php echo e($table_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>

    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="white-box">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="mb_30">
                            <form action="<?php echo e(route('student.student_field_store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="">
                                            <div class="white_box_tittle list_header">
                                                <h4><?php echo e(__('common.Input Field Showing in Registration')); ?></h4>
                                            </div>
                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.company')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="show_company"
                                                           value="1" <?php echo e($field->show_company ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>

                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.gender')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="show_gender"
                                                           value="1" <?php echo e($field->show_gender ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>

                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.student_type')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="show_student_type"
                                                           value="1" <?php echo e($field->show_student_type ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>

                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.identification_number')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="show_identification_number"
                                                           value="1" <?php echo e($field->show_identification_number ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>

                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.job_title')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="show_job_title"
                                                           value="1" <?php echo e($field->show_job_title ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>

                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.Date of Birth')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="show_dob"
                                                           value="1" <?php echo e($field->show_dob ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>


                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.Phone')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="show_phone"
                                                           value="1" <?php echo e($field->show_phone ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>
                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('student.Institute')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="show_institute"
                                                           value="1" <?php echo e($field->show_institute ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="">
                                            <div class="white_box_tittle list_header">
                                                <h4><?php echo e(__('common.Required Field')); ?></h4>
                                            </div>
                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.company')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="required_company"
                                                           value="1" <?php echo e($field->required_company ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>

                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.gender')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="required_gender"
                                                           value="1" <?php echo e($field->required_gender ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>

                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.student_type')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="required_student_type"
                                                           value="1" <?php echo e($field->required_student_type ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>

                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.identification_number')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="required_identification_number"
                                                           value="1" <?php echo e($field->required_identification_number ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>

                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.job_title')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="required_job_title"
                                                           value="1" <?php echo e($field->required_job_title ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>

                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.Date of Birth')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="required_dob"
                                                           value="1" <?php echo e($field->required_dob ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>


                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('common.Phone')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="required_phone"
                                                           value="1" <?php echo e($field->required_phone ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>

                                            <div class=" d-flex justify-content-between mb-3">
                                                <p><?php echo e(__('student.Institute')); ?></p>
                                                <label class="switch_toggle">
                                                    <input type="checkbox" class="status_enable_disable"
                                                           name="required_institute"
                                                           value="1" <?php echo e($field->required_institute ? 'checked' : ''); ?>>
                                                    <i class="slider round"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="m-auto">
                                        <button type="submit" class="primary-btn fix-gr-bg">
                                            <i class="ti-check"></i>
                                            <?php echo e(__('common.Update')); ?>

                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Add Modal Item_Details -->
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/StudentSetting/Providers/../Resources/views/field_setting.blade.php ENDPATH**/ ?>