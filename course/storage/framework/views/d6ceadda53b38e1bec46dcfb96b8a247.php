<?php $__env->startSection('mainContent'); ?>
    <?php echo generateBreadcrumb(); ?>

    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">

                            <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'qa.setting',
                            'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>



                            <div class="white-box">
                                <div class="add-visitor">
                                    <div class="row">
                                        <div class="col-lg-12 mb-10">
                                            <div class="primary_input">
                                                <div class="row">
                                                    <div class="col-md-4 ">
                                                        <div class="primary_input">
                                                            <label class="primary_input_label"
                                                                   for=""><?php echo e(__('courses.Assign question answerers')); ?></label>
                                                            <select name="assign_question_answerers_role"
                                                                    class="primary_select mb-25">
                                                                <option
                                                                    value=""><?php echo e(__("common.Select")); ?> <?php echo e(__("common.Role")); ?></option>
                                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option
                                                                        value="<?php echo e($role->id); ?>" <?php echo e(Settings('assign_question_answerers_role')==$role->id ? 'selected' : ''); ?>><?php echo e($role->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 ">
                                                        <div class="  ">
                                                            <p><?php echo e(__('courses.Real time update')); ?></p>


                                                            <div class="d-flex    mt-3">
                                                                <div class="d-flex mr-20">

                                                                    <label class="primary_checkbox d-flex mr-12 ">
                                                                        <input class="real_time_qa_upda"
                                                                               name="real_time_qa_update"
                                                                               type="radio" id="real_time_qa_update_yes"
                                                                               value="1"
                                                                            <?php echo e(Settings('real_time_qa_update') == '1' ? 'checked' : ''); ?>

                                                                        >
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class=" "
                                                                           for="real_time_qa_update_yes"><?php echo app('translator')->get('common.Yes'); ?></label>


                                                                </div>
                                                                <div class="d-flex mr-20">
                                                                    <label class="primary_checkbox d-flex mr-12 ">
                                                                        <input class="real_time_qa_upda"
                                                                               name="real_time_qa_update"
                                                                               type="radio" id="real_time_qa_update_no"
                                                                               value="0"
                                                                            <?php echo e(Settings('real_time_qa_update') != '1' ? 'checked' : ''); ?> >
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <label class=" "
                                                                           for="real_time_qa_update_no"><?php echo app('translator')->get('common.No'); ?></label>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="row <?php echo e(Settings('real_time_qa_update')==1?'':'d-none'); ?> mt-3 mt-lg-0"
                                                    id="pusher">
                                                    <div class="col-xl-6">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label"
                                                                   for=""><?php echo e(__('setting.pusher_app_id')); ?></label>
                                                            <input class="primary_input_field" placeholder="-"
                                                                   type="text"
                                                                   name="pusher_app_id"
                                                                   value="<?php echo e(env('PUSHER_APP_ID')); ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label"
                                                                   for=""><?php echo e(__('setting.pusher_app_key')); ?></label>
                                                            <input class="primary_input_field" placeholder="-"
                                                                   type="text"
                                                                   name="pusher_app_key"
                                                                   value="<?php echo e(env('PUSHER_APP_KEY')); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label"
                                                                   for=""><?php echo e(__('setting.pusher_app_secret')); ?></label>
                                                            <input class="primary_input_field" placeholder="-"
                                                                   type="text"
                                                                   name="pusher_app_secret"
                                                                   value="<?php echo e(env('PUSHER_APP_SECRET')); ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label"
                                                                   for=""><?php echo e(__('setting.pusher_app_cluster')); ?></label>
                                                            <input class="primary_input_field" placeholder="-"
                                                                   type="text"
                                                                   name="pusher_app_cluster"
                                                                   value="<?php echo e(env('PUSHER_APP_CLUSTER')); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row ">
                                        <div class="submit_btn text-center">
                                            <button type="submit" class="primary-btn fix-gr-bg  "
                                                    data-bs-toggle="tooltip"><i
                                                    class="ti-check"></i> <?php echo e(__('common.Update')); ?></button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo e(Form::close()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function () {
            let pusherEl = $('#pusher');

            $(document).on('click', '.real_time_qa_update', function () {
                let method = $('input[name="real_time_qa_update"]:checked').val();

                console.log(method)
                if (method == '1') {
                    pusherEl.removeClass('d-none');
                } else {
                    pusherEl.addClass('d-none');

                }
            })

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/qa/setting.blade.php ENDPATH**/ ?>