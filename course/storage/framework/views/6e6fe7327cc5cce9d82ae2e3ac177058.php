<?php $__env->startSection('mainContent'); ?>
    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">


            <div class="white-box">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="box_header common_table_header">
                            <div class="main-title d-md-flex">
                                <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('setting.Geo Location')); ?></h3>

                                <ul class="d-flex">
                                    <li><a class="primary-btn radius_30px fix-gr-bg" href="#" data-bs-toggle="modal"
                                           id="emptyTable"
                                           data-bs-target="#emptyTableModel"><i
                                                class="ti-trash"></i><?php echo e(__('setting.Empty Table')); ?></a></li>
                                </ul>

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
                                            <th scope="col"><?php echo e(__('common.SL')); ?> </th>
                                            <th scope="col"> <?php echo e(__('common.Name')); ?> </th>
                                            <th scope="col"><?php echo e(__('setting.OS')); ?></th>
                                            <th scope="col"><?php echo e(__('setting.Browser')); ?></th>
                                            <th scope="col"><?php echo e(__('setting.IP Address')); ?></th>
                                            <th scope="col"><?php echo e(__('setting.Login At')); ?></th>
                                            <th scope="col"><?php echo e(__('setting.Logout At')); ?></th>
                                            <th scope="col"><?php echo e(__('setting.Country')); ?></th>
                                            <th scope="col"><?php echo e(__('setting.Region')); ?></th>
                                            <th scope="col"><?php echo e(__('setting.City')); ?></th>
                                            <th scope="col"><?php echo e(__('setting.Zip Code')); ?></th>
                                            <th scope="col"><?php echo e(__('setting.Latitude')); ?></th>
                                            <th scope="col"><?php echo e(__('setting.Longitude')); ?></th>
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


    <div class="modal fade admin-query" id="geoLocation">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo e(__('common.Delete')); ?> </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                            class="ti-close "></i></button>
                </div>

                <div class="modal-body">
                    <form action="<?php echo e(route('setting.geoLocation.delete')); ?>" method="post">
                        <?php echo csrf_field(); ?>

                        <div class="text-center">

                            <h4><?php echo e(__('common.Are you sure to delete ?')); ?> </h4>
                        </div>
                        <input type="hidden" name="id" value="" id="ipDeleteId">
                        <div class="mt-40 d-flex justify-content-between">
                            <button type="button" class="primary-btn tr-bg"
                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>

                            <button class="primary-btn fix-gr-bg"
                                    type="submit"><?php echo e(__('common.Delete')); ?></button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade admin-query" id="emptyTableModel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">  <?php echo e(__('setting.Empty Table')); ?> </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                            class="ti-close "></i></button>
                </div>

                <div class="modal-body">
                    <form action="<?php echo e(route('setting.geoLocation.empty')); ?>" method="post">
                        <?php echo csrf_field(); ?>

                        <div class="text-center">

                            <h4><?php echo e(__('common.Are you sure to delete ?')); ?> </h4>
                        </div>

                        <div class="mt-40 d-flex justify-content-between">
                            <button type="button" class="primary-btn tr-bg"
                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>

                            <button class="primary-btn fix-gr-bg"
                                    type="submit"><?php echo e(__('setting.Empty')); ?></button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).on('click', '.geoLocation', function () {

            let id = $(this).data('id');
            $('#ipDeleteId').val(id);
            $("#geoLocation").modal('show');
        })

    </script>


    <?php
        $url = route('setting.geoLocation.data');
    ?>

    <script>

        dataTableOptions.serverSide = true
        dataTableOptions.processing = true
        dataTableOptions.ajax = '<?php echo $url; ?>';
        dataTableOptions.columns = [
            {data: 'DT_RowIndex', name: 'id', orderable: true},
            {data: 'user.name', name: 'user.name'},
            {data: 'os', name: 'os'},
            {data: 'browser', name: 'browser'},
            {data: 'ip', name: 'ip'},
            {data: 'login_at', name: 'login_at'},
            {data: 'logout_at', name: 'logout_at'},

            {data: 'location.countryName', name: 'location', orderable: false, searchable: false},
            {data: 'location.regionName', name: 'location', orderable: false, searchable: false},
            {data: 'location.cityName', name: 'location', orderable: false, searchable: false},
            {data: 'location.zipCode', name: 'location', orderable: false, searchable: false},
            {data: 'location.latitude', name: 'location', orderable: false, searchable: false},
            {data: 'location.longitude', name: 'location', orderable: false, searchable: false},

            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        let table = $('#lms_table').DataTable(dataTableOptions);


    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('setting::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/geoLocation.blade.php ENDPATH**/ ?>