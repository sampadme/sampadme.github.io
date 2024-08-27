<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('Modules/SidebarManager/Resources/assets/css/style.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('Modules/SidebarManager/Resources/assets/css/icon-picker.css')); ?>"/>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('mainContent'); ?>
    <?php
        $LanguageList = getLanguageList();
    ?>
    <?php echo e(generateBreadcrumb()); ?>

    <div class="role_permission_wrap">
        <div class="permission_title d-flex flex-wrap justify-content-between mb_20">
            <h4>
                <?php echo e(trans('setting.Sidebar Manager')); ?>

            </h4>
            <a href="<?php echo e(route('sidebar-manager.resetPermissionCache')); ?>" id=" "
               class="primary-btn radius_30px   fix-gr-bg"><?php echo e(__('setting.Clear Cache')); ?></a>
            <a href="#" id="resetMenu"
               class="primary-btn radius_30px   fix-gr-bg"><?php echo e(__('setting.Reset to default')); ?></a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 mb_20">
            <div class="white-box available_box  student-details ">
                <div class="add-visitor">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header pt-0 pb-0" id="headingOne">
                                <h5 class="mb-0 create-title" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">
                                    <button class="btn btn-link add_btn_link">
                                        <?php echo e(__('common.Add')); ?>       <?php echo e(__('common.Section')); ?>

                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <form action="" id="addSectionForm">
                                        <div class="row pt-0">
                                            <?php if(isModuleActive('FrontendMultiLang') || isModuleActive('Org')): ?>
                                                <ul class="nav nav-tabs no-bottom-border  mt-sm-md-20 mb-10 ms-3"
                                                    role="tablist">
                                                    <?php $__currentLoopData = $LanguageList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="nav-item">
                                                            <a class="nav-link  <?php if(auth()->user()->language_code == $language->code): ?> active <?php endif; ?>"
                                                               href="#element<?php echo e($language->code); ?>"
                                                               role="tab"
                                                               data-bs-toggle="tab"><?php echo e($language->native); ?>  </a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                        <div id="row_element_div">
                                            <div class="tab-content">
                                                <?php $__currentLoopData = $LanguageList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div role="tabpanel"
                                                         class="tab-pane fade <?php if(auth()->user()->language_code == $language->code): ?> show active <?php endif; ?>  "
                                                         id="element<?php echo e($language->code); ?>">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="primary_input mb-25">
                                                                    <label class="primary_input_label"
                                                                           for="name"><?php echo e(__('common.Name')); ?> <span
                                                                            class="textdanger">*</span>
                                                                    </label>
                                                                    <input class="primary_input_field name section_name"
                                                                           type="text"
                                                                           id=""
                                                                           name="name[<?php echo e($language->code); ?>]"
                                                                           autocomplete="off"
                                                                           placeholder="<?php echo e(__('common.Name')); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label"
                                                                   for=""><?php echo e(__('common.Icon')); ?>


                                                                <span
                                                                    class="textdanger">*</span>
                                                            </label>
                                                            <input class="primary_input_field" placeholder=""
                                                                   type="text" id="sectionIcon"
                                                                   name="icon"
                                                                   value=" ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                                <button id="addSectionBtn" type="button"
                                                        class="primary-btn fix-gr-bg submit_btn "
                                                        data-bs-toggle="tooltip"
                                                        title="" data-original-title="">
                                                    <i class="ti-check"></i>
                                                    <?php echo e(__('common.Save')); ?> </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php if(isModuleActive('Org')): ?>
                            <div class="card mt-2">
                                <div class="card-header pt-0 pb-0" id="headingTwo">
                                    <h5 class="mb-0 create-title" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <button class="btn btn-link add_btn_link">
                                            <?php echo e(__('common.Add')); ?>       <?php echo e(__('common.Menu')); ?>

                                        </button>
                                    </h5>
                                </div>
                                <?php if(isModuleActive('Org') || isModuleActive('FrontendMultiLang')): ?>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            <form action="" id="addMenuForm">

                                                <div class="row pt-0">
                                                    <?php if(isModuleActive('FrontendMultiLang') || isModuleActive('Org')): ?>
                                                        <ul class="nav nav-tabs no-bottom-border  mt-sm-md-20 mb-10 ms-3"
                                                            role="tablist">
                                                            <?php $__currentLoopData = $LanguageList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li class="nav-item">
                                                                    <a class="nav-link  <?php if(auth()->user()->language_code == $language->code): ?> active <?php endif; ?>"
                                                                       href="#element1<?php echo e($language->code); ?>"
                                                                       role="tab"
                                                                       data-bs-toggle="tab"><?php echo e($language->native); ?>  </a>
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    <?php endif; ?>

                                                    <div class="col-lg-12">
                                                        <div class="tab-content">
                                                            <?php $__currentLoopData = $LanguageList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div role="tabpanel"
                                                                     class="tab-pane fade <?php if(auth()->user()->language_code == $language->code): ?> show active <?php endif; ?>  "
                                                                     id="element1<?php echo e($language->code); ?>">


                                                                    <div class="primary_input mb-25">
                                                                        <label class="primary_input_label"
                                                                               for="name"><?php echo e(__('common.Label')); ?> <span
                                                                                class="textdanger">*</span>
                                                                        </label>
                                                                        <input
                                                                            class="primary_input_field name menu_name"
                                                                            type="text"
                                                                            name="label[<?php echo e($language->code); ?>]"
                                                                            autocomplete="off"
                                                                            placeholder="<?php echo e(__('common.Label')); ?>">
                                                                    </div>


                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label"
                                                                   for="name"><?php echo e(__('common.Route')); ?> <?php echo e(__('common.Name')); ?>


                                                                <span
                                                                    class="textdanger">*</span>
                                                            </label>
                                                            <input class="primary_input_field name route_name"
                                                                   type="text"

                                                                   name="route" autocomplete="off"
                                                                   placeholder="<?php echo e(__('common.Route')); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 text-center">
                                                        <button id="addMenuBtn" type="button"
                                                                class="primary-btn fix-gr-bg submit_btn"
                                                                data-bs-toggle="tooltip"
                                                                title="" data-original-title="">
                                                            <i class="ti-check"></i>
                                                            <?php echo e(__('common.Save')); ?> </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mt_20" id="available_menu_div">
                        <?php echo $__env->make('sidebarmanager::components.available_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb_20">
            <div class="white-box">
                <input type="hidden" name="data" id="items-data" value="">
                <div class="add-visitor" id="menu_idv">
                    <?php echo $__env->make('sidebarmanager::components.components', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="white-box">
                <div class="add-visitor" id="live_preview_div">
                    <?php echo $__env->make('sidebarmanager::components.live_preview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>

    



    <input type="hidden" id="order_change_url" value="<?php echo e(route('sidebar-manager.menu-update')); ?>">
    <input type="hidden" id="reset_sidebar_url" value="<?php echo e(route("sidebar-manager.reset-own-menu")); ?>">
    <input type="hidden" id="section_store_url" value="<?php echo e(route("sidebar-manager.section.store")); ?>">
    <input type="hidden" id="section_delete_url" value="<?php echo e(route("sidebar-manager.delete-section")); ?>">
    <input type="hidden" id="menu_delete_url" value="<?php echo e(route("sidebar-manager.menu-store")); ?>">
    <input type="hidden" id="menu_remove_url" value="<?php echo e(route("sidebar-manager.menu-remove")); ?>">
    <input type="hidden" id="menu_section_url" value="<?php echo e(route("sidebar-manager.section-edit")); ?>">
    <input type="hidden" id="menu_edit_url" value="<?php echo e(route("sidebar-manager.menu-edit")); ?>">
    <input type="hidden" id="section_sort_url" value="<?php echo e(route("sidebar-manager.sort-section")); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startPush('scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?php echo e(asset('Modules/SidebarManager/Resources/assets/js/icon-picker.js')); ?>"></script>

    <script>
        $(document).on('mouseover', 'body', function () {
            $('#sectionIcon').iconpicker({
                animation: true,
                hideOnSelect: true
            });
        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/SidebarManager/Resources/views/index.blade.php ENDPATH**/ ?>