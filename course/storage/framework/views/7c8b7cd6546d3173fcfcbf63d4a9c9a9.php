<div class="modal fade admin-query " id="media_modal">
    <div class="modal-dialog modal_1688px modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="box_header_right">
                    <div class="float-lg-right float-none pos_tab_btn justify-content-end">
                        <ul class="nav nav_list" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" href="#order_processing_data" role="tab"
                                   data-bs-toggle="tab" id="product_list_id"
                                   aria-selected="true"><?php echo e(__('common.Selected File')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#order_complete_data" role="tab" data-bs-toggle="tab"
                                   id="product_request_id"
                                   aria-selected="true"><?php echo e(__('common.Upload')); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="button" class="close " data-bs-dismiss="modal">
                    <i class="ti-close "></i>
                </button>
            </div>

            <div class="modal-body">
                <div class="white_boxx m-0">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show" id="order_processing_data">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="header-part-media-modal">
                                        <div class="row align-content-center">
                                            <div class="col-lg-12 d-flex align-items-center gap_20 flex-wrap">
                                                <div class="primary_input max_340px">
                                                    <select class="primary_select " name="Amaz_media_sort"
                                                            id="sortStatus">
                                                        <option value="newest"
                                                                <?php if(request('sort')== 'newest'): ?> selected <?php endif; ?>><?php echo e(__('common.Sort by newest')); ?></option>
                                                        <option value="oldest"
                                                                <?php if(request('sort')== 'oldest'): ?> selected <?php endif; ?>><?php echo e(__('common.Sort by oldest')); ?></option>
                                                        <option value="smallest"
                                                                <?php if(request('sort')== 'smallest'): ?> selected <?php endif; ?>><?php echo e(__('common.Sort by smallest')); ?></option>
                                                        <option value="biggest"
                                                                <?php if(request('sort')== 'biggest'): ?> selected <?php endif; ?>><?php echo e(__('common.Sort by biggest')); ?></option>
                                                    </select>
                                                </div>
                                                <div class="primary_input ">
                                                    <ul id="theme_nav" class="permission_list sms_list ">
                                                        <li class="m-0">
                                                            <label data-id="bg_option"
                                                                   class="primary_checkbox d-flex mr-12">
                                                                <input name="selected_only" id="selected_only" value="1"
                                                                       type="checkbox">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <p><?php echo e(__('common.Selected Only')); ?></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="primary_input flex-fill d-flex justify-content-end">
                                                    <input class="primary_input_field max_340px"
                                                           name="amaz_media_search"
                                                           placeholder="<?php echo e(__('common.Search')); ?>" type="text" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="file-list-div mt-50">
                                        <div class="infixlms_file_wrapper style2 row" id="all_files_div">
                                            <div class="loader_media col-lg-4 col-sm-6">
                                                <div class="hhhdots_1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="order_complete_data">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="AmazUppyDragDrop"></div>
                                    <div class="for-ProgressBar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer p-0 border-0">
                <div class="controll_wrapper d-flex flex-wrap gap_20 w-100 media_list_controller">
                    <div class="select_and_reset_div d-flex align-items-center gap_20 flex-fill p-0">
                        <h4 class=""><span class="upload_files_selected">0</span> <?php echo e(__('common.You have selected')); ?>

                        </h4>
                        <a href="" class="primary_btn_2 reset_selected text-bold"> <?php echo e(__('common.Reset')); ?></a>
                    </div>
                    <div class="next_prev_btn_div  d-flex align-items-center gap_10 p-0 flex-wrap">
                        <button type="button" class="primary_btn_2"
                                id="uploader_prev_btn"><?php echo e(__('common.Previous')); ?></button>
                        <button type="button" class="primary_btn_2"
                                id="uploader_next_btn"><?php echo e(__('common.Next')); ?></button>
                        <button type="button" class="primary_btn_2"
                                data-bs-toggle="infixUploaderAddSelected"><?php echo e(__('common.Add')); ?> <?php echo e(__('common.Files')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->startPush('scripts'); ?>
    <script>

        // $(document).on('click', '.openFilesModal', function (e) {
        //     e.preventDefault();
        //     $('#media_modal').modal('show');
        //     loadData();
        // });
        //
        // function loadData() {
        //
        // }

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/storage/media_modal.blade.php ENDPATH**/ ?>