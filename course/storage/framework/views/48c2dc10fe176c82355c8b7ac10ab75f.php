<?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'saveChapter',
'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>


<input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="course_id" value="<?php echo e(@$course->id); ?>">
<input type="hidden" name="input_type" value="1">
<input type="hidden" name="is_lock" value="1">
<div class="section-white-box">
    <div class="add-visitor">
        <div class="input-effect mt-2 pt-1 mb-20">
            <label><?php echo e(__('quiz.Chapter')); ?> <?php echo e(__('common.Name')); ?>

                <span class="required_mark">*</span></label>
            <input
                class="primary_input_field name<?php echo e($errors->has('chapter_name') ? ' is-invalid' : ''); ?>"
                type="text" name="chapter_name" placeholder="<?php echo e(__('common.Title')); ?>"
                autocomplete="off"
                value="">
            <span class="focus-border"></span>
            <?php if($errors->has('chapter_name')): ?>
                <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('chapter_name')); ?></strong>
                            </span>
            <?php endif; ?>
        </div>
        <div class="row mt-40" style="visibility: hidden">
            <div class="col-lg-12 text-center">
                <button type="submit" class="primary-btn fix-gr-bg"
                        data-bs-toggle="tooltip">
                    <i class="ti-check"></i>
                    <?php echo e(__('common.Save')); ?>

                </button>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-lg-12 text-center">
                <button type="submit" class="primary-btn fix-gr-bg"
                        data-bs-toggle="tooltip">
                    <i class="ti-check"></i>
                    <?php echo e(__('common.Save')); ?>

                </button>
            </div>
        </div>

    </div>
</div>
<?php echo e(Form::close()); ?>








<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/parts_of_course_details/chapter_section_add.blade.php ENDPATH**/ ?>