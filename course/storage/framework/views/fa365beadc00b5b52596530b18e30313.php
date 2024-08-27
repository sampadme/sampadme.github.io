<?php
    $url =route('qa.questions.data');

?>

<?php $__env->startSection('table'); ?>
    lesson_questions
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php echo generateBreadcrumb(); ?>

    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="white-box">

                <div class="row justify-content-center mt-20">

                    <div class="col-lg-12">
                        <div class="QA_section QA_section_heading_custom check_box_table">
                            <div class="QA_table">

                                <div class="white-box">
                                    <table id="lms_table" class="table classList">
                                        <thead>
                                        <tr>
                                            <th scope="col"> <?php echo e(__('common.SL')); ?></th>
                                            <th scope="col"> <?php echo e(__('courses.Course')); ?></th>
                                            <th scope="col"> <?php echo e(__('courses.Lesson')); ?></th>
                                            <th scope="col"> <?php echo e(__('common.User')); ?></th>
                                            <th scope="col"> <?php echo e(__('common.Question')); ?></th>
                                            <th scope="col"><?php echo e(__("frontend.Replied")); ?></th>
                                            <th scope="col"><?php echo e(__('frontend.Reserved')); ?></th>

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


                </div>


            </div>
        </div>
    </section>
    <?php echo $__env->make('backend.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

    

    <script src="<?php echo e(asset('public/js/pusher.min.js')); ?>"></script>
    <script>
        Pusher.logToConsole = false;
        let pusher = new Pusher('<?php echo e(config('broadcasting.connections.pusher.key')); ?>', {
            cluster: '<?php echo e(config('broadcasting.connections.pusher.options.cluster')); ?>'
        });
        let channel = pusher.subscribe('new-notification-channel');


        dataTableOptions.serverSide = true
        dataTableOptions.processing = true
        dataTableOptions.ajax = '<?php echo $url; ?>';
        dataTableOptions.columns = [
            {data: 'DT_RowIndex', name: 'id'},
            {data: 'course_id', name: 'course_id'},
            {data: 'lesson_id', name: 'lesson_id'},
            {data: 'user_id', name: 'user_id'},
            {data: 'text', name: 'text'},
            {data: 'total_replies', name: 'total_replies'},
            {data: 'reserved', name: 'reserved'},
            {data: 'status', name: 'search_status', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false},
        ]

        dataTableOptions = updateColumnExportOption(dataTableOptions, [0, 1, 2, 3, 4, 5, 6]);

        let table = $('.classList').DataTable(dataTableOptions);


        channel.bind('new-notification', function (data) {
            table.ajax.reload();
            if (data.login_user_id != '<?php echo e(auth()->id()); ?>' && data.type != 'Reply') {


                $.ajax({
                    url: '<?php echo e(route('getNotificationUpdate')); ?>',
                    method: 'GET',
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (response) {
                        console.log(response.total);
                        $('.Notification_body').html(response.notification_body);
                        $('.notification_count').html(response.total);
                        toastr.success("<?php echo e(__('frontend.New notification')); ?>");

                    },
                    error: function (response) {
                    }
                });
            }

        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/qa/index.blade.php ENDPATH**/ ?>