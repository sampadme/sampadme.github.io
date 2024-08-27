<?php
    $user = Auth::user();
    if ($user->role_id == 2) {
        $groups = Modules\Quiz\Entities\QuestionGroup::where('active_status', 1)->where('user_id', $user->id)->latest()->get();
    } else {
        $groups = Modules\Quiz\Entities\QuestionGroup::where('active_status', 1)->latest()->get();
    }
?>
<?php if(isset($bank)): ?>

    <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => array('question-bank-update',$bank->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'id' => 'question_bank'])); ?>


<?php else: ?>
    <?php if(permissionCheck('question-bank.store')): ?>

        <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'save-course-quiz',
        'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'question_bank'])); ?>


    <?php endif; ?>
<?php endif; ?>
<input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="course_id" value="<?php echo e(@$course->id); ?>">
<input type="hidden" name="category" value="<?php echo e(@$course->category_id); ?>">
<input type="hidden" name="question_type" value="M">
<?php if(isset($course->subcategory_id)): ?>
    <input type="hidden" name="sub_category" value="<?php echo e(@$course->subcategory_id); ?>">
<?php endif; ?>
<div class="section-white-box">
    <div class="add-visitor">

        <div class="row">
            <div class="col-lg-12">

                <div class="quiz_div">
                    <input type="hidden" name="is_quiz" value="1">
                    <div class="row ">
                        <div class="col-lg-12 ">
                            <label class="primary_input_label mt-3"
                                   for=""> <?php echo e(__('courses.Chapter')); ?>

                                <span class="required_mark">*</span></label>
                            <select class="primary_select " name="chapterId">
                                <option
                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Chapter')); ?>"
                                    value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Chapter')); ?> </option>
                                <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        value="<?php echo e(@$chapter->id); ?>" <?php echo e(isset($editLesson)? ($editLesson->chapter_id == $chapter->id? 'selected':''):''); ?> ><?php echo e(@$chapter->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('chapterId')): ?>
                                <span class="invalid-feedback invalid-select"
                                      role="alert">
                <strong><?php echo e($errors->first('chapterId')); ?></strong>
            </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="input-effect mt_35 ">
                        <div class="col-xl-6 ">
                            <div class="row">
                                <div class="col-md-6">

                                    <input type="radio" class="common-radio type1"
                                           id="type<?php echo e(@$course->id); ?>5" name="type"
                                           value="1" checked>
                                    <label
                                        for="type<?php echo e(@$course->id); ?>5">Existing</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="radio" class="common-radio type2"
                                           id="type<?php echo e(@$course->id); ?>6" name="type"
                                           value="2">
                                    <label
                                        for="type<?php echo e(@$course->id); ?>6">New</label>
                                </div>
                            </div>

                        </div>
                        <?php if($errors->has('quiz')): ?>
                            <span class="invalid-feedback invalid-select" role="alert">
                <strong><?php echo e($errors->first('quiz')); ?></strong>
            </span>
                        <?php endif; ?>
                    </div>

                    <div class="input-effect mt-2 pt-1" id="existing_quiz">
                        <label class="primary_input_label mt-1" for=""> <?php echo e(__('quiz.Quiz')); ?> <span class="required_mark">*</span></label>
                        <select class="primary_select" name="quiz">
                            <option
                                data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('quiz.Quiz')); ?>"
                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('quiz.Quiz')); ?> </option>
                            <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    value="<?php echo e(@$quiz->id); ?>" <?php echo e(isset($editLesson)? ($editLesson->quiz_id == $quiz->id? 'selected':''):''); ?> ><?php echo e(@$quiz->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if($errors->has('quiz')): ?>
                            <span class="invalid-feedback invalid-select" role="alert">
                            <strong><?php echo e($errors->first('quiz')); ?></strong>
                         </span>
                        <?php endif; ?>
                    </div>

                    
                    <div class="new_quiz mt-20" style="display: none">


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
                                               href="#element<?php echo e($language->code); ?>"
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
                                     id="element<?php echo e($language->code); ?>">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-effect mt-3">
                                                <label class="primary_input_label mt-1"
                                                       for=""> <?php echo e(__('quiz.Quiz Title')); ?>

                                                    <span class="required_mark">*</span></label>
                                                <input <?php echo e($errors->has('title') ? ' autofocus' : ''); ?>

                                                       class="primary_input_field name<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>"
                                                       type="text" name="title[<?php echo e($language->code); ?>]" autocomplete="off"
                                                       value="<?php echo e(isset($online_exam)? $online_exam->getTranslation('title',$language->code): ''); ?>">
                                                <input type="hidden" name="id"
                                                       value="<?php echo e(isset($online_exam)? $online_exam->id: ''); ?>">
                                                <span class="focus-border"></span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-15">
                                        <div class="col-lg-12">
                                            <div class="input-effect">
                                                <label class="primary_input_label mt-1"
                                                       for=""><?php echo e(__('quiz.Instruction')); ?>

                                                    <span class="required_mark">*</span></label>
                                                <textarea <?php echo e($errors->has('instruction') ? ' autofocus' : ''); ?>

                                                          class="primary_input_field name<?php echo e($errors->has('instruction') ? ' is-invalid' : ''); ?>"
                                                          cols="0" rows="4"
                                                          name="instruction[<?php echo e($language->code); ?>]"><?php echo e(isset($online_exam)? $online_exam->getTranslation('instruction',$language->code): ''); ?></textarea>
                                                <span class="focus-border textarea"></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="row mt-25">
                            <div class="col-lg-12">
                                <div class="input-effect">
                                    <label class="primary_input_label mt-1" for=""><?php echo e(__('quiz.Minimum Percentage')); ?>

                                        *</label>
                                    <input <?php echo e($errors->has('title') ? ' percentage' : ''); ?>

                                           class="primary_input_field name<?php echo e($errors->has('percentage') ? ' is-invalid' : ''); ?>"
                                           type="number" name="percentage" autocomplete="off"
                                           value="<?php echo e(isset($online_exam)? $online_exam->percentage: old('percentage')); ?>">
                                    <input type="hidden" name="id"
                                           value="<?php echo e(isset($group)? $group->id: ''); ?>">
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('percentage')): ?>
                                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('percentage')); ?></strong>
                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <?php $__env->startPush('js'); ?>
                        <script>
                            $(".quiz_div input[name='type']").click(function () {
                                let new_quiz = $('.new_quiz');
                                let existing_quiz = $('#existing_quiz');
                                if ($('input:radio[name=type]:checked').val() == 1) {
                                    existing_quiz.show();
                                    new_quiz.hide();
                                    // alert($('input:radio[name=type]:checked').val());
                                    //$('#select-table > .roomNumber').attr('enabled',false);
                                } else {
                                    existing_quiz.hide();
                                    new_quiz.show();
                                }
                            });
                        </script>
                    <?php $__env->stopPush(); ?>
                    <div class="input-effect mt-2 pt-1">
                        <div class=" " id="">
                            <label class="primary_input_label "
                                   for=""><?php echo e(__('courses.Privacy')); ?>

                                <span class="required_mark">*</span></label>
                            <select class="primary_select" name="lock">
                                <option
                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?> "
                                    value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?> </option>

                                <option value="0"
                                        <?php if(@$editLesson->is_lock==0): ?> selected <?php endif; ?> ><?php echo e(__('courses.Unlock')); ?></option>

                                <option value="1"
                                        <?php if(!isset($editLesson) || @$editLesson->is_lock==1): ?> selected <?php endif; ?> ><?php echo e(__('courses.Locked')); ?></option>
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

<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/parts_of_course_details/quiz_section.blade.php ENDPATH**/ ?>