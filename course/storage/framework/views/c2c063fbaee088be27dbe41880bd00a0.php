<?php $__env->startSection('table'); ?>
    <?php
        $table_name = 'sponsors';
    ?>
    <?php echo e($table_name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-3">
                    <div class="white-box  student-details header-menu ">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-flex flex-wrap mb-0">
                                        <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px">
                                            <?php if(!isset($sponsor)): ?>
                                                <?php echo e(__('sponsor.Add New Sponsor')); ?>

                                            <?php else: ?>
                                                <?php echo e(__('common.Update')); ?>

                                            <?php endif; ?>
                                        </h3>
                                        <?php if(isset($edit)): ?>
                                            <?php if(permissionCheck('frontend.sponsor.store')): ?>
                                                <a href="<?php echo e(route('frontend.sponsors.index')); ?>"
                                                   class="primary-btn small fix-gr-bg ms-3 "
                                                   style="position: absolute;  right: 0;   margin-right: 15px;"
                                                   title="<?php echo e(__('coupons.Add')); ?>">+ </a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if(isset($sponsor)): ?>
                            <form action="<?php echo e(route('frontend.sponsors.update')); ?>" method="POST" id="coupon-form"
                                  name="coupon-form" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($sponsor->id); ?>">
                                <?php else: ?>
                                    <?php if(permissionCheck('sponsor.store')): ?>
                                        <form action="<?php echo e(route('frontend.sponsors.store')); ?>" method="POST"
                                              id="coupon-form"
                                              name="coupon-form" enctype="multipart/form-data">
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
                                                                           for=""><?php echo e(__('sponsor.Title')); ?>

                                                                        <strong class="text-danger">*</strong></label>
                                                                    <input name="title[<?php echo e($language->code); ?>]"
                                                                           id="title"
                                                                           class="primary_input_field name <?php echo e(@$errors->has('title') ? ' is-invalid' : ''); ?>"
                                                                           placeholder="<?php echo e(__('sponsor.Title')); ?>"
                                                                           type="text"
                                                                           value="<?php echo e(isset($sponsor) ? $sponsor->getTranslation('title', $language->code) : old('title.' . auth()->user()->language_code)); ?>"
                                                                        <?php echo e($errors->has('title') ? 'autofocus' : ''); ?>>
                                                                    <?php if($errors->has('title')): ?>
                                                                        <span class="invalid-feedback d-block mb-10"
                                                                              role="alert">
                                                        <strong><?php echo e(@$errors->first('title')); ?></strong>
                                                    </span>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'image','type' => 'image','required' => 'true','mediaId' => ''.e(isset($sponsor)?$sponsor->image_media?->media_id:'').'','label' => ''.e(__('common.Image')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('100x100')).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'image','type' => 'image','required' => 'true','media_id' => ''.e(isset($sponsor)?$sponsor->image_media?->media_id:'').'','label' => ''.e(__('common.Image')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('100x100')).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                </div>

                                                <?php
                                                    if (permissionCheck('sponsor.store') || permissionCheck('frontend.sponsors.edit')) {
                                                        $tooltip = '';
                                                    } else {
                                                        $tooltip = 'You have no permission to add';
                                                    }
                                                ?>
                                                <div class="col-lg-12 text-center">
                                                    <div class="d-flex justify-content-center pt_20">
                                                        <button type="submit" class="primary-btn semi_large fix-gr-bg"
                                                                data-bs-toggle="tooltip"
                                                                title="<?php echo e($tooltip); ?>" id="save_button_parent">
                                                            <i class="ti-check"></i>
                                                            <?php if(!isset($sponsor)): ?>
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
                <div class="col-lg-9 ">
                    <div class="white-box">
                        <div class="main-title">
                            <h3 class="mb-20"><?php echo e(__('sponsor.Sponsor List')); ?></h3>
                        </div>

                        <div class="QA_section QA_section_heading_custom check_box_table">
                            <div class="QA_table ">
                                <!-- table-responsive -->
                                <div class="">
                                    <table id="lms_table" class="table Crm_table_active3">
                                        <thead>
                                        <tr>
                                            <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                            <th scope="col"><?php echo e(__('coupons.Title')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Image')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th><span class="m-3"><?php echo e(translatedNumber($key + 1)); ?></span></th>

                                                <td><?php echo e(@$sponsor->title); ?></td>
                                                <td>
                                                    <div>
                                                        <img style="max-width: 200px" src="<?php echo e(url(@$sponsor->image)); ?>"
                                                             alt="" class="img img-responsive m-2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <label class="switch_toggle">
                                                        <input type="checkbox" class="status_enable_disable"
                                                               <?php if(@$sponsor->status == 1): ?> checked <?php endif; ?>
                                                               value="<?php echo e(@$sponsor->id); ?>">
                                                        <i class="slider round"></i>
                                                    </label>
                                                </td>
                                                <td>
                                                    <!-- shortby  -->
                                                    <div class="dropdown CRM_dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                                id="dropdownMenu2" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <?php echo e(__('common.Select')); ?>

                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                             aria-labelledby="dropdownMenu2">
                                                            <?php if(permissionCheck('frontend.sponsors.edit')): ?>
                                                                <a class="dropdown-item edit_brand"
                                                                   href="<?php echo e(route('frontend.sponsors.edit', $sponsor->id)); ?>"><?php echo e(__('common.Edit')); ?></a>
                                                            <?php endif; ?>
                                                            <?php if(permissionCheck('frontend.sponsors.destroy')): ?>
                                                                <a onclick="confirm_modal('<?php echo e(route('frontend.sponsors.destroy', $sponsor->id)); ?>');"
                                                                   class="dropdown-item edit_brand"><?php echo e(__('common.Delete')); ?></a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <!-- shortby  -->
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/FrontendManage/Resources/views/sponsors.blade.php ENDPATH**/ ?>