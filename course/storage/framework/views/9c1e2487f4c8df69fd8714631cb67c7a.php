<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/student_list.css')); ?>"/>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">

            <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'regular_student_import_save',
                                'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'student_form'])); ?>

            <div class="row">
                <div class="col-lg-12">


                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="main-title">
                                    <h3><?php echo e(__('student.Import Student')); ?></h3>
                                </div>
                            </div>
                            <div class="offset-lg-2 col-lg-4 text-end mb-20">

                                <a href="<?php echo e(route('regular_student_excel_download')); ?>"
                                   class="primary-btn tr-bg text-uppercase bord-rad float-end">
                                    <?php echo e(__('common.Download')); ?>

                                    <span class="pl ti-download"></span>
                                </a>
                            </div>

                        </div>

                        <div class="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-title">

                                    </div>
                                </div>
                            </div>


                            <input type="hidden" name="url" id="url" value="<?php echo e(URL::to('/')); ?>">
                            <div class="row   mt-0">
                                <div class="col-lg-12">
                                    <div class="primary_input mb-35">
                                        <label class="primary_input_label"
                                               for=""><?php echo e(__('common.Browse')); ?> <?php echo e(__('common.Excel File')); ?><strong
                                                class="text-danger">*</strong> </label>
                                        <div class="primary_file_uploader">
                                            <input class="primary-input filePlaceholder labelTitle" type="text"
                                                   id=""
                                                   placeholder="<?php echo e(__('common.Browse')); ?> <?php echo e(__('common.Excel File')); ?>"
                                                   readonly="">
                                            <div class="">
                                                <button class="" type="button">
                                                    <label class="primary-btn small fix-gr-bg"
                                                           for="document_file_2"><?php echo e(__('common.Browse')); ?></label>
                                                    <input type="file" class="d-none fileUpload labelTitle"
                                                           name="file"
                                                           id="document_file_2">
                                                </button>

                                            </div>
                                        </div>

                                    </div>


                                </div>

                            </div>

                            <div class="row  ">
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="primary-btn fix-gr-bg">
                                        <i class="ti-check"></i>
                                        <?php echo e(__('student.Import Student')); ?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/StudentSetting/Providers/../Resources/views/regular_student_import.blade.php ENDPATH**/ ?>