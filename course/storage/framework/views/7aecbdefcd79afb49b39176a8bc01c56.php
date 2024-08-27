<?php
    $table_name='home_page_faqs';
?>
<?php $__env->startSection('table'); ?>
    <?php echo e($table_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <?php
        $LanguageList = getLanguageList();
    ?>
    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-12">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-md-flex">
                                        <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('frontend.FAQ List')); ?></h3>

                                        <ul class="d-flex">
                                            <li><a class="primary-btn radius_30px   fix-gr-bg"
                                                   data-bs-toggle="modal"
                                                   id="add_faq_btn"
                                                   data-bs-target="#add_faq" href="#"><i
                                                        class="ti-plus"></i><?php echo e(__('frontend.Add FAQ')); ?></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="QA_section QA_section_heading_custom check_box_table">
                                    <div class="QA_table ">
                                        <!-- table-responsive -->
                                        <div class="">
                                            <table id="lms_table" class="table Crm_table_active3 ">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"><?php echo e(__('frontend.Question')); ?></th>
                                                    <th scope="col"><?php echo e(__('frontend.Answer')); ?></th>
                                                    <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                                    <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr data-item="<?php echo e($faq->id); ?>">
                                                        <td>
                                                            <i class="ti-menu"></i>
                                                        </td>
                                                        <td><?php echo e(@$faq->question); ?></td>
                                                        <td><?php echo @$faq->answer; ?></td>
                                                        <td class="nowrap">
                                                            <label class="switch_toggle">
                                                                <input type="checkbox"
                                                                       class="status_enable_disable"
                                                                       <?php if(@$faq->status == 1): ?> checked
                                                                       <?php endif; ?> value="<?php echo e(@$faq->id); ?>">
                                                                <i class="slider round"></i>
                                                            </label>
                                                        </td>

                                                        <td>
                                                            <div class="dropdown CRM_dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle"
                                                                        type="button"
                                                                        id="dropdownMenu2" data-bs-toggle="dropdown"
                                                                        aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <?php echo e(__('common.Action')); ?>

                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                     aria-labelledby="dropdownMenu2">

                                                                    <button
                                                                        data-id="<?php echo e($faq->id); ?>"
                                                                        class="dropdown-item editfaq"
                                                                        type="button"><?php echo e(__('common.Edit')); ?></button>


                                                                    <button class="dropdown-item deletefaq"
                                                                            data-id="<?php echo e($faq->id); ?>"
                                                                            type="button"><?php echo e(__('common.Delete')); ?></button>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade admin-query" id="add_faq">
                    <div class="modal-dialog modal_1000px modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><?php echo e(__('frontend.Add FAQ')); ?></h4>
                                <button type="button" class="close " data-bs-dismiss="modal">
                                    <i class="ti-close "></i>
                                </button>
                            </div>

                            <div class="modal-body student-details header-menu">
                                <form action="<?php echo e(route('frontend.faq.store')); ?>" method="POST"
                                      enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>


                                    <div class="row pt-0">
                                        <?php if(isModuleActive('FrontendMultiLang')): ?>
                                            <ul class="nav nav-tabs no-bottom-border  mt-sm-md-20 mb-10 ms-3"
                                                role="tablist">
                                                <?php $__currentLoopData = $LanguageList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="nav-item">
                                                        <a class="nav-link  <?php if(auth()->user()->language_code == $language->code): ?> active <?php endif; ?>"
                                                           href="#element<?php echo e('_add_'.$language->code); ?>"
                                                           role="tab"
                                                           data-bs-toggle="tab"><?php echo e($language->native); ?>  </a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                    <div class="tab-content">
                                        <?php $__currentLoopData = $LanguageList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div role="tabpanel"
                                                 class="tab-pane fade <?php if(auth()->user()->language_code == $language->code): ?> show active <?php endif; ?>  "
                                                 id="element<?php echo e('_add_'.$language->code); ?>">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label"
                                                                   for=""><?php echo e(__('frontend.Question')); ?> <strong
                                                                    class="text-danger">*</strong></label>
                                                            <input class="primary_input_field"
                                                                   name="question[<?php echo e($language->code); ?>]"
                                                                   placeholder="-"
                                                                   type="text" id="addQuestion"
                                                                   value="<?php echo e(old('question.'.$language->code)); ?>" <?php echo e($errors->first('question') ? 'autofocus' : ''); ?>>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="primary_input mb-35">
                                                            <label class="primary_input_label"
                                                                   for=""><?php echo e(__('frontend.Answer')); ?> <strong
                                                                    class="text-danger">*</strong></label>
                                                            <textarea class="lms_summernote"
                                                                      name="answer[<?php echo e($language->code); ?>]"
                                                                      id="addAnswer" cols="30"
                                                                      rows="10"><?php echo e(old('answer.'.$language->code)); ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                    <div class="col-lg-12 text-center pt_15">
                                        <div class="d-flex justify-content-center">
                                            <button class="primary-btn semi_large2  fix-gr-bg" id="save_button_parent"
                                                    type="submit"><i
                                                    class="ti-check"></i> <?php echo e(__('common.Save')); ?> <?php echo e(__('frontend.FAQ')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade admin-query" id="editfaq">
                    <div class="modal-dialog modal_1000px modal-dialog-centered" id="editFaqBody">
                    </div>
                </div>
                <div class="modal fade admin-query" id="deletefaq">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><?php echo e(__('common.Delete')); ?> <?php echo e(__('frontend.FAQ')); ?> </h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                        class="ti-close "></i></button>
                            </div>

                            <div class="modal-body">
                                <form action="<?php echo e(route('frontend.faq.destroy')); ?>" method="post">
                                    <?php echo csrf_field(); ?>

                                    <div class="text-center">

                                        <h4><?php echo e(__('common.Are you sure to delete ?')); ?> </h4>
                                    </div>
                                    <input type="hidden" name="id" value="" id="faqDeleteId">
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
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('frontendmanage::faq.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/FrontendManage/Resources/views/faq/index.blade.php ENDPATH**/ ?>