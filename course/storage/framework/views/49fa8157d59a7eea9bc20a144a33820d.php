
<?php if(isset($bank)): ?>

    <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => array('question-bank-update',$bank->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'id' => 'question_bank'])); ?>


<?php else: ?>
    <?php if(permissionCheck('question-bank.store')): ?>

        <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'question-bank.course',
        'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'question_bank'])); ?>


    <?php endif; ?>
<?php endif; ?>

<input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="course_id" value="<?php echo e(@$course->id); ?>">
<input type="hidden" name="category" value="<?php echo e(@$course->category_id); ?>">
<input type="hidden" name="question_type" value="M">
<input type="hidden" id="quiz_id_inside<?php echo e($chapter->id); ?>" name="quize_id" value="">
<?php if(isset($course->subcategory_id)): ?>
    <input type="hidden" name="sub_category" value="<?php echo e(@$course->subcategory_id); ?>">
<?php endif; ?>
<div class="section-white-box questionBoxDiv">
    <div class="add-visitor">
        <input type="hidden" name="chapterId" value="<?php echo e(@$chapter->id); ?>">
        <div class="row">
            <div class="col-lg-12">

                <div class="row mt-25">
                    <div class="col-lg-12">
                        <div class="input-effect">
                            <label> <?php echo e(__('quiz.Question')); ?> *</label>
                            <textarea <?php echo e($errors->has('question') ? ' autofocus' : ''); ?>

                                      class="primary_input_field name<?php echo e($errors->has('question') ? ' is-invalid' : ''); ?>"
                                      rows="4"
                                      name="question"><?php echo e(isset($bank)? strip_tags($bank->question):(old('question')!=''?(old('question')):'')); ?></textarea>
                            <span class="focus-border textarea"></span>
                            <?php if($errors->has('question')): ?>
                                <span
                                    class="error text-danger"><strong><?php echo e($errors->first('question')); ?></strong></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row mt-25">
                    <div class="col-lg-12">
                        <div class="input-effect">
                            <label> <?php echo e(__('quiz.Marks')); ?> *</label>
                            <input <?php echo e($errors->has('marks') ? ' autofocus' : ''); ?>

                                   class="primary_input_field name<?php echo e($errors->has('marks') ? ' is-invalid' : ''); ?>"
                                   type="number" name="marks"
                                   value="<?php echo e(isset($bank)? $bank->marks:(old('marks')!=''?(old('marks')):'')); ?>">
                            <span class="focus-border"></span>
                            <?php if($errors->has('marks')): ?>
                                <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('marks')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="multiple-choice">
                    <div class="row  mt-25">
                        <div class="col-lg-10">
                            <div class="input-effect">
                                <label> <?php echo e(__('quiz.Number Of Options')); ?>*</label>
                                <input <?php echo e($errors->has('number_of_option') ? ' autofocus' : ''); ?>

                                       class="primary_input_field name<?php echo e($errors->has('number_of_option') ? ' is-invalid' : ''); ?>"
                                       type="number" name="number_of_option" autocomplete="off"
                                       id="number_of_option<?php echo e($chapter->id); ?>"
                                       value="<?php echo e(isset($bank)? $bank->number_of_option: ''); ?>">
                                <span class="focus-border"></span>
                                <?php if($errors->has('number_of_option')): ?>
                                    <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('number_of_option')); ?></strong>
                            </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-2 mt-40">
                            <button type="button" data-chapter_id="<?php echo e($chapter->id); ?>" class="primary-btn small fix-gr-bg"
                                    id="create-option"><?php echo e(__('quiz.Create')); ?> </button>
                        </div>
                    </div>
                </div>
                <div class="multiple-options" id="multiple-options<?php echo e($chapter->id); ?>">
                    <?php
                        $i=0;
                        $multiple_options = [];

                        if(isset($bank)){
                            if($bank->type == "M"){
                                $multiple_options = $bank->questionMu;
                            }
                        }
                    ?>
                    <?php $__currentLoopData = $multiple_options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiple_option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php $i++; ?>
                        <div class='row  mt-25'>
                            <div class='col-lg-10'>
                                <div class='input-effect'>
                                    <label> <?php echo e(__('quiz.Option')); ?> <?php echo e($i); ?></label>
                                    <input class='primary_input_field name' type='text'
                                           name='option[]' autocomplete='off' required
                                           value="<?php echo e($multiple_option->title); ?>">
                                    <span class='focus-border'></span>
                                </div>
                            </div>
                            <div class='col-lg-2 mt-40'>
                                <label class="primary_checkbox d-flex mr-12 "
                                       for="option_check_<?php echo e($i); ?>" <?php echo e(__('quiz.Yes')); ?>>
                                    <input type="checkbox" <?php if($multiple_option->status==1): ?> checked
                                           <?php endif; ?> id="option_check_<?php echo e($i); ?>"
                                           name="option_check_<?php echo e($i); ?>" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                


            </div>
        </div>

        <div class="row mt-40">
            <div class="col-lg-12 text-center">
                <button data-chapter_id="<?php echo e($chapter->id); ?>" type="button"
                        class="primary-btn fix-gr-bg close_question_section"
                        data-bs-toggle="tooltip">
                    <?php echo e(__('common.Close')); ?>

                </button>
                <button type="submit" class="primary-btn fix-gr-bg questionSubmitBtn"
                        data-bs-toggle="tooltip">
                    <i class="ti-check"></i>
                    <?php echo e(__('common.Save')); ?>

                </button>
            </div>
        </div>
    </div>
</div>
<?php echo e(Form::close()); ?>

<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/parts_of_course_details/question_section_inside.blade.php ENDPATH**/ ?>