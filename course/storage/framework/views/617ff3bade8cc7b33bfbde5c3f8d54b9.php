<script src="<?php echo e(asset('public/modules/profile/repeater/repeater.js')); ?>"></script>
<script src="<?php echo e(asset('public/modules/profile/repeater/indicator-repeater.js')); ?>"></script>

<div class="modal fade admin-query" id="payout_account_modal">
    <div class="modal-dialog modal_800px modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <?php if(isset($payout_account)): ?>
                        <?php echo e(__('setting.Edit Payout Account')); ?>

                    <?php else: ?>
                        <?php echo e(__('setting.Add Payout Account')); ?>

                    <?php endif; ?>

                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="ti-close "></i>
                </button>
            </div>

            <div class="modal-body">
                <form action="#" method="POST"
                      id="<?php echo e(isset($payout_account)?"update_payout_form":"create_payout_form"); ?>">
                    <?php if(isset($payout_account)): ?>
                        <?php echo method_field('PATCH'); ?>
                        <input type="hidden" name="id" value="<?php echo e($payout_account->id); ?>" id="rowId">
                    <?php endif; ?>


                    <div class="row">

                        <div class="col-xl-12">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label" for="title"><?php echo e(__('common.Title')); ?> <strong
                                        class="text-danger">*</strong></label>
                                <input name="title" class="primary_input_field"
                                       value="<?php echo e(isset($payout_account)?$payout_account->title:old('title')); ?>"
                                       placeholder="<?php echo e(__('common.Title')); ?>" type="text" id="title">
                                <span class="text-danger" id="error_title"></span>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="  mb-35">
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'logo','required' => 'true','type' => 'image','mediaId' => ''.e(isset($payout_account)?$payout_account->logo_media?->media_id:'').'','label' => ''.e(__('common.Logo')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'logo','required' => 'true','type' => 'image','media_id' => ''.e(isset($payout_account)?$payout_account->logo_media?->media_id:'').'','label' => ''.e(__('common.Logo')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>


                            </div>
                            <span class="text-danger" id="error_logo"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="">
                                <h4 class="text-nowrap"><?php echo e(__('setting.Specifications')); ?></h4>
                            </div>
                            <div class="custom-hr">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 mt-repeater no-extra-space">

                            <div data-repeater-list="specifications">
                                <?php if(isset($payout_account)): ?>
                                    <?php $__currentLoopData = $payout_account->specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div data-repeater-item class="mt-repeater-item">

                                            <div class="mt-repeater-row">

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="primary_input mb-25">
                                                            <label class="primary_input_label"
                                                                   for="specification"> <?php echo e(__('setting.Specification')); ?> </label>
                                                            <input value="<?php echo e($sp->title); ?>" name="specification"
                                                                   class="primary_input_field specification"
                                                                   placeholder="-" type="text">
                                                        </div>
                                                        <span class="text-danger error_specification"></span>
                                                    </div>

                                                    <div class="col-lg-1">
                                                        <div class="position-relative form-group ">
                                                            <a href="javascript:void(0);" data-repeater-delete
                                                               class="primary-btn small icon-only fix-gr-bg mt-35  mt-repeater-delete">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                <div data-repeater-item class="mt-repeater-item">

                                    <div class="mt-repeater-row">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                           for="specification"> <?php echo e(__('setting.Specification')); ?> </label>
                                                    <input name="specification"
                                                           class="primary_input_field specification"
                                                           placeholder="-" type="text">
                                                </div>
                                                <span class="text-danger error_specification"></span>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="position-relative form-group ">
                                                    <a href="javascript:void(0);" data-repeater-delete
                                                       class="primary-btn small icon-only fix-gr-bg mt-35  mt-repeater-delete">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <a href="javascript:void(0);" data-repeater-create
                                       class="primary-btn radius_30px  fix-gr-bg mt-repeater-add w-fit"><i
                                            class="fa fa-plus"></i><?php echo e(__('common.Add More')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-lg-12 text-center">
                            <div class="d-flex justify-content-center pt_20">
                                <button type="submit" class="primary-btn semi_large2 fix-gr-bg" id="save_button_parent">
                                    <i class="ti-check"></i>
                                    <?php if(isset($payout_account)): ?>
                                        <?php echo e(__('common.Update')); ?>

                                    <?php else: ?>
                                        <?php echo e(__('common.Save')); ?>

                                    <?php endif; ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/payout_accounts/form.blade.php ENDPATH**/ ?>