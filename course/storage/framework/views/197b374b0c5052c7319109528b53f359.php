<?php $__env->startSection('mainContent'); ?>
    <?php echo generateBreadcrumb(); ?>


    <section class="mb-20 student-details">
        <div class="container-fluid p-0">
            <div class="row">

                <div class="col-lg-12">


                    <form class="form-horizontal" action="<?php echo e(route('setting.maintenance')); ?>" method="POST"
                          enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>
                        <div class="white-box">

                            <div class="row  ">
                                <div class="main-title ps-3 pt-10">
                                    <h3 class="mb-30"><?php echo e(__('setting.Maintenance')); ?> <?php echo e(__('setting.Setting')); ?></h3>
                                </div>
                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label"
                                                       for=""><?php echo e(__('common.Title')); ?></label>
                                                <input class="primary_input_field" placeholder="-" type="text"
                                                       name="maintenance_title"
                                                       value="<?php echo e($maintenance_title); ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label"
                                                       for=""><?php echo e(__('common.Sub Title')); ?>  </label>
                                                <input class="primary_input_field" placeholder="-" type="text"
                                                       name="maintenance_sub_title"
                                                       value="<?php echo e($maintenance_sub_title); ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 mb-25">
                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'maintenance_banner','type' => 'image','mediaId' => ''.e($maintenance_banner->value_media?->media_id).'','label' => ''.e(__('frontendmanage.Maintenance Page Banner')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'maintenance_banner','type' => 'image','media_id' => ''.e($maintenance_banner->value_media?->media_id).'','label' => ''.e(__('frontendmanage.Maintenance Page Banner')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                        </div>


                                        <div class="col-xl-6 dripCheck">
                                            <div class="primary_input mb-25">
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label class="primary_input_label"
                                                               for="    "> <?php echo e(__('setting.Maintenance')); ?> <?php echo e(__('common.Mode')); ?></label>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-4 mb-25">
                                                                <label class="primary_checkbox d-flex mr-12"
                                                                       for="yes">
                                                                    <input type="radio"
                                                                           class="common-radio "
                                                                           id="yes"
                                                                           name="maintenance_status"
                                                                           <?php echo e($maintenance_status==1?'checked':''); ?>

                                                                           value="1">
                                                                    <span
                                                                        class="checkmark me-2"></span> <?php echo e(__('common.Yes')); ?>

                                                                </label>
                                                            </div>
                                                            <div class="col-md-4 mb-25">
                                                                <label class="primary_checkbox d-flex mr-12"
                                                                       for="no">
                                                                    <input type="radio"
                                                                           class="common-radio "
                                                                           id="no"
                                                                           name="maintenance_status"
                                                                           value="0" <?php echo e($maintenance_status!=1?'checked':''); ?>>
                                                                    <span
                                                                        class="checkmark me-2"></span> <?php echo e(__('common.No')); ?>

                                                                </label>
                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>

                            <div class="row  ">
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="primary-btn fix-gr-bg" data-bs-toggle="tooltip"
                                    >
                                        <i class="ti-check"></i>
                                        <?php echo e(__('common.Update')); ?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(".imagePreview1").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $(".imgInput1").change(function () {

            readURL1(this);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/maintenance.blade.php ENDPATH**/ ?>