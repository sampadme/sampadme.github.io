<?php use Illuminate\Support\Facades\Auth; ?>

<?php
    $table_name='institutes';
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
            <div class="row">
                <div class="col-xl-3">
                    <div class="white-box mb_30  student-details header-menu">
                        <div class="box_header common_table_header">
                            <div class="main-title d-flex mb-0">
                                <h3 class="mb-0"> <?php if(!isset($edit)): ?>
                                        <?php echo e(__('common.New')); ?>  <?php echo e(__('student.Institute')); ?>

                                    <?php else: ?>
                                        <?php echo e(__('common.Update')); ?>  <?php echo e(__('student.Institute')); ?>

                                    <?php endif; ?></h3>
                                <?php if(isset($edit)): ?>
                                    <a href="<?php echo e(route('student.institute.index')); ?>"
                                       class="primary-btn small fix-gr-bg ml-4 d-flex justify-content-center align-items-center"
                                       style="line-height: 25px;"
                                       title="<?php echo e(__('courses.Add New')); ?>">+</a>
                                <?php endif; ?>
                            </div>
                        </div>


                        <form
                            action="<?php echo e(isset($edit)?route('student.institute.update',$edit->id):route('student.institute.store')); ?>"
                            method="POST"
                            id="category-form"
                            name="category-form" enctype="multipart/form-data">
                            <input type="hidden" name="id"
                                   value="<?php echo e($edit->id??''); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="primary_input mb-25">
                                        <label class="primary_input_label"
                                               for="nameInput"><?php echo e(__('common.Name')); ?>

                                            <strong
                                                class="text-danger">*</strong></label>
                                        <input name="name"
                                               id="nameInput"
                                               class="primary_input_field name <?php echo e(@$errors->has('name') ? ' is-invalid' : ''); ?>"
                                               placeholder="<?php echo e(__('common.Name')); ?>"
                                               type="text"
                                               value="<?php echo e(isset($edit)?$edit->name:''); ?>">

                                    </div>
                                    <div class="primary_input mb-25">
                                        <label class="primary_input_label"
                                               for="nameInput"><?php echo e(__('common.Address')); ?>

                                        </label>
                                        <input name="address"
                                               id="nameInput"
                                               class="primary_input_field name  "
                                               placeholder="<?php echo e(__('common.Address')); ?>"
                                               type="text"
                                               value="<?php echo e(isset($edit)?$edit->address:''); ?>">

                                    </div>
                                </div>
                            </div>
                            <div class="row">


                                <div class="col-lg-12 text-center">
                                    <div class="d-flex justify-content-center pt_20">
                                        <button type="submit"
                                                class="primary-btn semi_large fix-gr-bg"
                                                id="save_button_parent">
                                            <i class=" fa fa-check "></i>
                                            <?php if(!isset($edit)): ?>
                                                <?php echo e(__('common.Save')); ?>

                                            <?php else: ?>
                                                <?php echo e(__('common.Update')); ?>

                                            <?php endif; ?>
                                        </button>


                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="white-box">
                        <div class="box_header common_table_header">
                            <div class="main-title d-flex flex-wrap mb-0">
                                <h3 class="mb-0"><?php echo e(__('student.Institute List')); ?></h3>
                            </div>
                        </div>
                        <div class="  QA_section QA_section_heading_custom check_box_table">
                            <div class="QA_table ">
                                <!-- table-responsive -->
                                <div class="">
                                    <table id="lms_table" class="table table-data">
                                        <thead>
                                        <tr>
                                            <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Name')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Address')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $institutes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $institute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e(++$key); ?></td>
                                                <td> <?php echo e(@$institute->name); ?></td>
                                                <td> <?php echo e(@$institute->address); ?></td>


                                                <td class="nowrap">
                                                    <?php if (isset($component)) { $__componentOriginala97154f7fc4a6c86651af7d45de58019 = $component; } ?>
<?php $component = App\View\Components\Backend\Status::resolve(['id' => $institute->id,'status' => $institute->status,'route' => 'course.category.status_update'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Backend\Status::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97154f7fc4a6c86651af7d45de58019)): ?>
<?php $component = $__componentOriginala97154f7fc4a6c86651af7d45de58019; ?>
<?php unset($__componentOriginala97154f7fc4a6c86651af7d45de58019); ?>
<?php endif; ?>

                                                </td>

                                                <td>
                                                    <div class="dropdown CRM_dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                                id="dropdownMenu1<?php echo e(@$institute->id); ?>"
                                                                data-bs-toggle="dropdown"
                                                                aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <?php echo e(__('common.Select')); ?>

                                                        </button>


                                                        <div class="dropdown-menu dropdown-menu-right"
                                                             aria-labelledby="dropdownMenu1<?php echo e(@$institute->id); ?>">
                                                            <a class="dropdown-item edit_brand"
                                                               href="<?php echo e(route('student.institute.edit',$institute->id)); ?>"><?php echo e(__('common.Edit')); ?></a>
                                                            <a onclick="confirm_modal('<?php echo e(route('student.institute.delete', $institute->id)); ?>');"
                                                               class="dropdown-item edit_brand"><?php echo e(__('common.Delete')); ?></a>
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


    <?php echo $__env->make('backend.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('public/backend/js/category.js')); ?><?php echo e(assetVersion()); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/StudentSetting/Providers/../Resources/views/institutes.blade.php ENDPATH**/ ?>