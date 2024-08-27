<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/student_list.css')); ?><?php echo e(assetVersion()); ?>"/>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('table'); ?>
    <?php
        $table_name='users';
    ?>
    <?php echo e($table_name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>

    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">

            <div class="white-box">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="box_header common_table_header">
                            <div class="main-title d-md-flex">
                                <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('quiz.Instructor')); ?> <?php echo e(__('common.List')); ?></h3>
                                <?php if(permissionCheck('instructor.store')): ?>
                                    <ul class="d-flex">
                                        <li>
                                            <?php if(isModuleActive('Appointment')): ?>
                                                <a class="primary-btn radius_30px   fix-gr-bg"
                                                   id="add_instructor_btn"
                                                   href="<?php echo e(route('appointment.instructor.create')); ?>"><i
                                                        class="ti-plus"></i><?php echo e(__('instructor.Add Instructor')); ?></a>
                                            <?php else: ?>
                                                <a class="primary-btn radius_30px   fix-gr-bg"
                                                   href="<?php echo e(route('instructor.store')); ?>"><i
                                                        class="ti-plus"></i><?php echo e(__('instructor.Add Instructor')); ?></a>
                                            <?php endif; ?>

                                        </li>
                                    </ul>
                                <?php endif; ?>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="QA_section QA_section_heading_custom check_box_table">
                            <div class="QA_table ">
                                <!-- table-responsive -->
                                <div class="">
                                    <table id="lms_table" class="table Crm_table_active3">
                                        <thead>
                                        <tr>
                                            <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Image')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Name')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Email')); ?></th>
                                            <?php if(isModuleActive('OrgInstructorPolicy')): ?>
                                                <th scope="col"><?php echo e(__('policy.Group')); ?> <?php echo e(__('policy.Policy')); ?></th>
                                            <?php endif; ?>
                                            <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Modal Item_Details -->
                    <!-- new product -->


                    <div class="modal fade admin-query" id="deleteInstructor">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="<?php echo e(route('instructor.delete')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo e(__('common.Delete')); ?> <?php echo e(__('quiz.Instructor')); ?> </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                                class="ti-close "></i></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="text-center">

                                            <h4><?php echo e(__('common.Are you sure to delete ?')); ?></h4>
                                        </div>
                                        <input type="hidden" name="id" value="" id="instructorDeleteId">

                                        <div class="mt-40 d-flex justify-content-between">
                                            <button type="button" class="primary-btn tr-bg"
                                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>
                                            <button class="primary-btn fix-gr-bg"
                                                    type="submit"><?php echo e(__('common.Delete')); ?></button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php if($errors->any()): ?>
        <script type="application/javascript">
            <?php if(Session::has('type')): ?>
            <?php if(Session::get('type')=="store"): ?>
            $('#add_instructor').modal('show');
            <?php else: ?>
            $('#editInstructor').modal('show');
            <?php endif; ?>
            <?php endif; ?>
        </script>
    <?php endif; ?>

    <?php
        $url = route('getAllInstructorData');
    ?>

    <script type="application/javascript">

        dataTableOptions.serverSide = true
        dataTableOptions.processing = true
        dataTableOptions.ajax = '<?php echo $url; ?>';
        dataTableOptions.columns = [
            {data: 'DT_RowIndex', name: 'id'},
            {data: 'image', name: 'image', orderable: false},
            {data: 'name', name: 'name', orderable: true},
            {data: 'email', name: 'email', orderable: true},
                <?php if(isModuleActive('OrgInstructorPolicy')): ?>
            {
                data: 'group_policy', name: 'group_policy', orderable: true
            },
                <?php endif; ?>
            {
                data: 'status', name: 'status', orderable: false
            },
            {data: 'action', name: 'action', orderable: false},
        ]

        dataTableOptions = updateColumnExportOption(dataTableOptions, [0, 2, 3,]);

        let table = $('#lms_table').DataTable(dataTableOptions);


    </script>
    <script type="application/javascript"
            src="<?php echo e(asset('public/backend/js/instructor_list.js')); ?><?php echo e(assetVersion()); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/SystemSetting/Providers/../Resources/views/instructor.blade.php ENDPATH**/ ?>