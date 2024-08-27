<?php
    $table_name = 'course_levels';
?>
<?php $__env->startSection('table'); ?>
    <?php echo e($table_name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>

    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="white-box mb_30  student-details header-menu">
                        <div class="box_header common_table_header">
                            <div class="main-title d-md-flex">
                                <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px">
                                    <?php if(!isset($edit)): ?>
                                        <?php echo e(__('courses.Add New Level')); ?>

                                    <?php else: ?>
                                        <?php echo e(__('courses.Update Level')); ?>

                                    <?php endif; ?>
                                </h3>
                            </div>
                        </div>
                        <?php if(isset($edit)): ?>
                            <?php if(permissionCheck('course-level.update')): ?>
                                <form action="<?php echo e(route('course-level.update', $edit->id)); ?>" method="POST"
                                      id="category-form"
                                      name="category-form" enctype="multipart/form-data">
                                    <?php endif; ?>
                                    <input type="hidden" name="id" value="<?php echo e(@$edit->id); ?>">
                                    <?php echo method_field('PATCH'); ?>
                                    <?php else: ?>
                                        <?php if(permissionCheck('course-level.store')): ?>
                                            <form action="<?php echo e(route('course-level.store')); ?>" method="POST"
                                                  id="category-form"
                                                  name="category-form" enctype="multipart/form-data">
                                                <?php endif; ?>
                                                <?php endif; ?>

                                                <?php echo csrf_field(); ?>
                                                <?php
                                                    $LanguageList = getLanguageList();
                                                ?>
                                                <div class="row pt-0">
                                                    <?php if(isModuleActive('FrontendMultiLang')): ?>
                                                        <ul class="nav nav-tabs no-bottom-border  mt-sm-md-20 mb-10 ms-3"
                                                            role="tablist">
                                                            <?php $__currentLoopData = $LanguageList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li class="nav-item">
                                                                    <a class="nav-link  <?php if(auth()->user()->language_code == $language->code): ?> active <?php endif; ?>"
                                                                       href="#element<?php echo e($language->code); ?>" role="tab"
                                                                       data-bs-toggle="tab"><?php echo e($language->native); ?> </a>
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="tab-content">
                                                    <?php $__currentLoopData = $LanguageList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div role="tabpanel"
                                                             class="tab-pane fade <?php if(auth()->user()->language_code == $language->code): ?> show active <?php endif; ?>  "
                                                             id="element<?php echo e($language->code); ?>">
                                                            <div class="row">


                                                                <div class="col-xl-12">
                                                                    <div class="primary_input mb-25">
                                                                        <label class="primary_input_label"
                                                                               for="nameInput"><?php echo e(__('common.Title')); ?>

                                                                            <strong
                                                                                class="text-danger">*</strong></label>
                                                                        <input name="title[<?php echo e($language->code); ?>]"
                                                                               id="nameInput"
                                                                               class="primary_input_field title <?php echo e(@$errors->has('title') ? ' is-invalid' : ''); ?>"
                                                                               placeholder="<?php echo e(__('common.Title')); ?>"
                                                                               type="text"
                                                                               value="<?php echo e(isset($edit)?$edit->getTranslation('title',$language->code):old('title.'.$language->code)); ?>">

                                                                        <?php if($errors->has('title')): ?>
                                                                            <span class="invalid-feedback d-block mb-10"
                                                                                  role="alert">
                                                        <strong><?php echo e(@$errors->first('title')); ?></strong>
                                                    </span>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>


                                                                <?php
                                                                    $tooltip = '';
                                                                    if (permissionCheck('course-level.store') || permissionCheck('course-level.update')) {
                                                                        $tooltip = '';
                                                                    } else {
                                                                        $tooltip = _trans('courses.You have no permission');
                                                                    }
                                                                ?>
                                                                <div class="col-lg-12 text-center">
                                                                    <div class="d-flex justify-content-center pt_20">
                                                                        <button type="submit"
                                                                                class="primary-btn semi_large fix-gr-bg"
                                                                                data-bs-toggle="tooltip"
                                                                                title="<?php echo e(@$tooltip); ?>"
                                                                                id="save_button_parent">
                                                                            <i class="ti-check"></i>
                                                                            <?php if(!isset($edit)): ?>
                                                                                <?php echo e(__('common.Save')); ?>

                                                                            <?php else: ?>
                                                                                <?php echo e(__('common.Update')); ?>

                                                                            <?php endif; ?>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>

                                            </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="white-box">
                        <div class="box_header common_table_header">
                            <div class="main-title d-md-flex">
                                <h3 class="mb-20">
                                    <?php echo e(__('courses.Level List')); ?>

                                </h3>
                            </div>
                        </div>
                        <div class="QA_section QA_section_heading_custom check_box_table">
                            <div class="QA_table ">
                                <!-- table-responsive -->
                                <div class="">
                                    <table id="lms_table" class="table table-data">
                                        <thead>
                                        <tr>
                                            <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Title')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th class="m-2"><?php echo e(translatedNumber($key + 1)); ?></th>
                                                <td><?php echo e(@$level->title); ?></td>
                                                <td class="nowrap level_status" data-statue_value="<?php echo e($level->status); ?>">
                                                    <?php
                                                        if (isModuleActive('Organization')) {
                                                            $org_id = $level->organization_id;
                                                        } else {
                                                            $org_id = null;
                                                        }

                                                    ?>
                                                    <?php if (isset($component)) { $__componentOriginala97154f7fc4a6c86651af7d45de58019 = $component; } ?>
<?php $component = App\View\Components\Backend\Status::resolve(['org' => $org_id,'id' => $level->id,'status' => $level->status,'route' => 'course-level.changeStatus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Backend\Status::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97154f7fc4a6c86651af7d45de58019)): ?>
<?php $component = $__componentOriginala97154f7fc4a6c86651af7d45de58019; ?>
<?php unset($__componentOriginala97154f7fc4a6c86651af7d45de58019); ?>
<?php endif; ?>
                                                </td>
                                                <td>
                                                    <div class="dropdown CRM_dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                                id="dropdownMenu1<?php echo e(@$level->id); ?>"
                                                                data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <?php echo e(__('common.Select')); ?>

                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                             aria-labelledby="dropdownMenu1<?php echo e(@$level->id); ?>">
                                                            <?php if(permissionCheck('course-level.update') && orgPermission($level->organization_id)): ?>
                                                                <a class="dropdown-item edit_brand"
                                                                   href="<?php echo e(route('course-level.edit', @$level->id)); ?>"><?php echo e(__('common.Edit')); ?></a>
                                                            <?php endif; ?>
                                                            <?php if(permissionCheck('course-level.destroy') && orgPermission($level->organization_id)): ?>
                                                                <a onclick="confirm_modal('<?php echo e(route('course-level.destroy', @$level->id)); ?>');"
                                                                   class="dropdown-item edit_brand"><?php echo e(__('common.Delete')); ?></a>
                                                            <?php endif; ?>
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
    </section>
    <div id="edit_form">

    </div>
    <div id="view_details">

    </div>


    <?php echo $__env->make('backend.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        if ($('#table_id, .table-data').length) {
            $('#table_id, .table-data').DataTable(dataTableOptions);
        }

    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/level.blade.php ENDPATH**/ ?>