<?php
    $id='assignment_'.uniqid();
?>
<div class="mt-20 ">
    <?php if(isset($edit)): ?>
        <form action="<?php echo e(route('course_assignment_update')); ?>" method="POST" id="coupon-form" name="coupon-form"
              enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
            <?php else: ?>
                <form action="<?php echo e(route('course_assignment_store')); ?>" method="POST" id="coupon-form"
                      name="coupon-form" enctype="multipart/form-data">
                    <?php endif; ?>
                    <?php echo csrf_field(); ?>

                    <input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
                    <input type="hidden" name="course_id" value="<?php echo e(@$course->id); ?>">
                    <input type="hidden" name="chapter_id" value="<?php echo e(@$chapter->id); ?>">
                    <input type="hidden" name="assignment_from" value="2">
                    <div class="row">

                        
                        <div class="col-xl-12">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="title"><?php echo e(__('common.Title')); ?> <strong
                                        class="text-danger">*</strong></label>
                                <input name="title" id="title"
                                       class="primary_input_field name <?php echo e(@$errors->has('title') ? ' is-invalid' : ''); ?>"
                                       placeholder="<?php echo e(__('common.Title')); ?>"
                                       type="text"
                                       value="<?php echo e(isset($edit)?$edit->title:''); ?>" <?php echo e($errors->has('title') ? 'autofocus' : ''); ?>>
                                <?php if($errors->has('title')): ?>
                                    <span class="invalid-feedback d-block mb-10" role="alert">
                                                                    <strong><?php echo e(@$errors->first('title')); ?></strong>
                                                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        
                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="number"><?php echo e(__('assignment.Marks')); ?><strong
                                        class="text-danger">*</strong> </label>
                                <input name="marks"
                                       class="primary_input_field name <?php echo e(@$errors->has('marks') ? ' is-invalid' : ''); ?>"
                                       placeholder="<?php echo e(__('assignment.Marks')); ?>"
                                       type="text" id="number" min="0" step="any"
                                       <?php echo e($errors->has('marks') ? 'autofocus' : ''); ?>

                                       value="<?php echo e(isset($edit)?$edit->marks:old('marks')); ?>">
                                <?php if($errors->has('marks')): ?>
                                    <span class="invalid-feedback d-block mb-10" role="alert">
                                                                <strong><?php echo e(@$errors->first('marks')); ?></strong>
                                                            </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        
                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="number2"><?php echo e(__('assignment.Min Percentage')); ?>

                                    <strong
                                        class="text-danger">*</strong></label>
                                <input name="min_parcentage"
                                       <?php echo e($errors->has('min_parcentage') ? 'autofocus' : ''); ?>

                                       class="primary_input_field name <?php echo e(@$errors->has('code') ? ' is-invalid' : ''); ?>"
                                       placeholder="<?php echo e(__('assignment.Min Percentage')); ?>"
                                       type="number" id="number2" min="0" step="any"
                                       value="<?php echo e(isset($edit)?$edit->min_parcentage:old('min_parcentage')); ?>">
                                <?php if($errors->has('min_parcentage')): ?>
                                    <span class="invalid-feedback d-block mb-10" role="alert">
                                                                <strong><?php echo e(@$errors->first('min_parcentage')); ?></strong>
                                                            </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        
                        <div class="col-xl-6">
                            <div class=" mb-35">
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'attachment','mediaId' => ''.e(isset($edit)?$edit->attachment_media?->media_id:'').'','label' => ''.e(__('assignment.Attachment')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'attachment','media_id' => ''.e(isset($edit)?$edit->attachment_media?->media_id:'').'','label' => ''.e(__('assignment.Attachment')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="col-xl-6">
                            <div class="primary_input mb-15">
                                <label class="primary_input_label"
                                       for="start_date"><?php echo e(__('assignment.Submit Date')); ?></label>
                                <div class="primary_datepicker_input">
                                    <div class="g-0  input-right-icon">
                                        <div class="col">
                                            <div class="">
                                                <input placeholder="<?php echo e(__('assignment.Submit Date')); ?>"
                                                       class="primary_input_field primary-input date form-control  <?php echo e(@$errors->has('last_date_submission') ? ' is-invalid' : ''); ?>"
                                                       id="start_date" type="text"
                                                       name="last_date_submission"
                                                       value="<?php echo e(isset($edit)?  date('m/d/Y', strtotime(@$edit->last_date_submission)) : date('m/d/Y')); ?>"
                                                       autocomplete="off" required>
                                            </div>
                                        </div>
                                        <button class="" type="button">
                                            <i class="ti-calendar"></i>
                                        </button>
                                    </div>
                                    <?php if($errors->has('start_date')): ?>
                                        <span class="invalid-feedback d-block mb-10"
                                              role="alert">
                                                    <strong><?php echo e(@$errors->first('start_date')); ?></strong>
                                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        
                        <div class="col-lg-12">
                            <div class="input-effect">
                                <label class="primary_input_label"> <?php echo e(__('assignment.Description')); ?> *</label>
                                <textarea
                                    class="primary_textarea <?php echo e(@$errors->has('description') ? ' is-invalid' : ''); ?>"
                                    cols="30" rows="10"
                                    name="description"><?php echo e(isset($edit)? $edit->description:(old('description')!=''?(old('description')):'')); ?></textarea>

                                <span class="focus-border textarea"></span>
                                <?php if($errors->has('description')): ?>
                                    <span
                                        class="error text-danger"><strong><?php echo e($errors->first('description')); ?></strong></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-effect mt-2 pt-1">
                                <div class="" id="">
                                    <label class="primary_input_label mt-1"
                                           for=""><?php echo e(__('courses.Privacy')); ?>

                                        <span class="required_mark">*</span> </label>
                                    <select class="primary_select" name="is_lock">
                                        <option
                                            data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?> "
                                            value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?> </option>
                                        <?php if(isset($lesson)): ?>
                                            <option value="0"
                                                    <?php if( @$lesson->is_lock==0): ?> selected <?php endif; ?> ><?php echo e(__('courses.Unlock')); ?></option>
                                            <option value="1"
                                                    <?php if(@$lesson->is_lock==1): ?> selected <?php endif; ?> ><?php echo e(__('courses.Locked')); ?></option>
                                        <?php else: ?>
                                            <option
                                                value="0"><?php echo e(__('courses.Unlock')); ?></option>
                                            <option value="1"
                                                    selected><?php echo e(__('courses.Locked')); ?></option>
                                        <?php endif; ?>


                                    </select>
                                    <?php if($errors->has('is_lock')): ?>
                                        <span class="invalid-feedback invalid-select"
                                              role="alert">
                                                                <strong><?php echo e($errors->first('is_lock')); ?></strong>
                                                            </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-12 text-center">
                            <div class="d-flex justify-content-center pt_20">
                                <button type="submit" class="primary-btn semi_large fix-gr-bg"
                                        data-bs-toggle="tooltip" title=""
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
                </form>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/parts_of_course_details/add_assignment_section_inside.blade.php ENDPATH**/ ?>