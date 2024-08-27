<?php $__env->startPush('styles'); ?>
    <style>
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            width: 100%;
            height: 46px;
            line-height: 46px;
            font-size: 13px;
            padding: 3px 20px;
            padding-left: 20px;
            font-weight: 300;
            border-radius: 30px;
            color: var(--base_color);
            border: 1px solid #ECEEF4
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 46px;
            position: absolute;
            top: 1px;
            right: 20px;
            width: 20px;
            color: var(--text-color);
        }

        .select2-dropdown {
            background-color: white;
            border: 1px solid var(--backend-border-color);
            border-radius: 4px;
            box-sizing: border-box;
            display: block;
            position: absolute;
            left: -100000px;
            width: 100%;
            width: 100%;
            background: var(--bg_white);
            overflow: auto !important;
            border-radius: 0px 0px 10px 10px;
            margin-top: 1px;
            z-index: 9999 !important;
            border: 0;
            box-shadow: 0px 10px 20px rgb(108 39 255 / 30%);
            z-index: 1051;
            min-width: 200px;
        }

        .select2-search--dropdown .select2-search__field {
            padding: 4px;
            width: 100%;
            box-sizing: border-box;
            box-sizing: border-box;
            background-color: #fff;
            border: 1px solid rgba(130, 139, 178, 0.3) !important;
            border-radius: 3px;
            box-shadow: none;
            color: #333;
            display: inline-block;
            vertical-align: middle;
            padding: 0px 8px;
            width: 100% !important;
            height: 46px;
            line-height: 46px;
            outline: 0 !important;
        }

        .select2-container {
            width: 100% !important;
            min-width: 90px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 40px;
        }


        .makeResize.responsiveResize.col-xl-6 {
            /*margin-top: 30px;*/
        }

        #durationBox {
            /*margin-top: 30px;*/
        }

        @media (max-width: 1199px) {
            .responsiveResize2 {
                margin-top: 30px;
            }
        }
    </style>
<?php $__env->stopPush(); ?>
<?php
    $table_name='courses';
?>
<?php $__env->startSection('table'); ?>
    <?php echo e($table_name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php
        $required_type =false;
        if(isModuleActive('Org')){
            $required_type =true;
        }
    ?>
    <?php echo generateBreadcrumb(); ?>

    <section class="admin-visitor-area up_st_admin_visitor">


        <div class="white_box mb_30  student-details header-menu">
            <div class="white_box_tittle list_header">
                <h4><?php echo e(__('common.Add New')); ?> <?php echo e(__('quiz.Topic')); ?></h4>
            </div>
            <div class="col-lg-12">


                <input type="hidden" id="url" value="<?php echo e(url('/')); ?>">

                <form action="<?php echo e(route('AdminSaveCourse')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="<?php echo e($required_type?'col-xl-4':'col-xl-6'); ?>  ">
                            <div class="primary_input ">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <label class="primary_input_label"
                                               for=""> <?php echo e(__('courses.Type')); ?> <strong class="text-danger">*</strong>
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-25">
                                        <label class="primary_checkbox d-flex mr-12">
                                            <input type="radio" id="type1"
                                                   name="type"
                                                   value="1"
                                                   <?php if(empty(old('type'))): ?>checked <?php else: ?>
                                                <?php echo e(old('type')==1?"checked":""); ?>

                                                <?php endif; ?>>
                                            <span class="checkmark me-2"></span><?php echo e(__('courses.Course')); ?>

                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-25">
                                        <label class="primary_checkbox d-flex mr-12">
                                            <input type="radio" id="type2"
                                                   name="type"
                                                   value="2" <?php echo e(old('type')==2?"checked":""); ?>>
                                            <span class="checkmark me-2"></span> <?php echo e(__('quiz.Quiz')); ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if($required_type): ?>
                            <div class="<?php echo e($required_type?'col-xl-4':'col-xl-6'); ?> ">
                                <div class="primary_input ">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <label class="primary_input_label"
                                                   for=""> <?php echo e(__('courses.Required Type')); ?> <strong
                                                    class="text-danger">*</strong> </label>
                                        </div>
                                        <div class="col-md-4  col-sm-6 mb-25">
                                            <label class="primary_checkbox d-flex mr-12">
                                                <input type="radio" id=""
                                                       name="required_type"
                                                       value="1"
                                                       checked>
                                                <span class="checkmark me-2"></span><?php echo e(__('courses.Compulsory')); ?>

                                            </label>
                                        </div>
                                        <div class="col-md-4 col-sm-6 mb-25">
                                            <label class="primary_checkbox d-flex mr-12">
                                                <input type="radio"
                                                       name="required_type"
                                                       value="0">
                                                <span class="checkmark me-2"></span> <?php echo e(__('courses.Open')); ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class=" <?php echo e($required_type?'col-xl-4':'col-xl-6'); ?> " id="dripCheck">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label mt-1"
                                       for=""> <?php echo e(__('common.Drip Content')); ?></label>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mb-25">
                                        <label class="primary_checkbox d-flex mr-12">
                                            <input type="radio" class="drip0"
                                                   id="drip0" name="drip"
                                                   value="0" checked>
                                            <span class="checkmark me-2"></span> <?php echo e(__('common.No')); ?>

                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-25">
                                        <label class="primary_checkbox d-flex mr-12">
                                            <input type="radio" class=" drip1"
                                                   id="drip1" name="drip"
                                                   value="1">
                                            <span class="checkmark me-2"></span> <?php echo e(__('common.Yes')); ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if(\Illuminate\Support\Facades\Auth::user()->role_id!=2): ?>
                            <div class="col-xl-6">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for="assign_instructor"><?php echo e(__('courses.Assign Instructor')); ?> </label>
                                    <select class="primary_select category_id" name="assign_instructor"
                                            id="assign_instructor" <?php echo e($errors->has('assign_instructor') ? 'autofocus' : ''); ?>>
                                        <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Instructor')); ?>"
                                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Instructor')); ?> </option>
                                        <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($instructor->id); ?>"><?php echo e(@$instructor->name); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="assistant_instructors"><?php echo e(__('courses.Assistant Instructor')); ?> </label>
                                <select name="assistant_instructors[]" id="assistant_instructors"
                                        class="multypol_check_select active mb-15 e1"
                                        multiple>
                                    <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($instructor->id); ?>"><?php echo e(@$instructor->name); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                    </div>
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

                                    <div
                                        class="col-xl-12">
                                        <div class="primary_input mb-25">
                                            <label class="primary_input_label d-flex"
                                                   for=""><?php echo e(__('quiz.Topic')); ?> <?php echo e(__('common.Title')); ?> <span
                                                    class="required_mark">*</span>
                                                <?php if ($__env->exists('aicontent::inc.button' , ['selected_template' => 1,'slug'=>'course-title'])) echo $__env->make('aicontent::inc.button' , ['selected_template' => 1,'slug'=>'course-title'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </label>

                                            <input class="primary_input_field" name="title[<?php echo e($language->code); ?>]"
                                                   placeholder="-"
                                                   id="addTitle"
                                                   type="text" <?php echo e($errors->has('title') ? 'autofocus' : ''); ?>

                                                   value="<?php echo e(old('title.'.$language->code)); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="primary_input mb-35">
                                            <label class="primary_input_label d-flex"
                                                   for=""><?php echo e(__('courses.Course')); ?> <?php echo e(__('courses.Requirements')); ?>

                                                <?php if ($__env->exists('aicontent::inc.button' , ['selected_template' => 4,'slug'=>'course-requirements'])) echo $__env->make('aicontent::inc.button' , ['selected_template' => 4,'slug'=>'course-requirements'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </label>
                                            <textarea class="lms_summernote"
                                                      name="requirements[<?php echo e($language->code); ?>]"
                                                      id="addRequirements" cols="30"
                                                      rows="10"><?php echo old('requirements.'.$language->code); ?></textarea>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="primary_input mb-35">
                                            <label class="primary_input_label d-flex"
                                                   for=""><?php echo e(__('courses.Course')); ?> <?php echo e(__('courses.Description')); ?>

                                                <?php if ($__env->exists('aicontent::inc.button' , ['selected_template' => 3,'slug'=>'course-long-description'])) echo $__env->make('aicontent::inc.button' , ['selected_template' => 3,'slug'=>'course-long-description'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </label>
                                            <textarea class="lms_summernote"
                                                      name="about[<?php echo e($language->code); ?>]" id="addAbout"
                                                      cols="30"
                                                      rows="10"><?php echo old('about.'.$language->code); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="primary_input mb-35">
                                            <label class="primary_input_label d-flex"
                                                   for=""><?php echo e(__('courses.Course')); ?> <?php echo e(__('courses.Outcomes')); ?>

                                                <?php if ($__env->exists('aicontent::inc.button' , ['selected_template' => 5,'slug'=>'course-outlines'])) echo $__env->make('aicontent::inc.button' , ['selected_template' => 5,'slug'=>'course-outlines'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </label>
                                            <textarea class="lms_summernote"
                                                      name="outcomes[<?php echo e($language->code); ?>]"
                                                      id="addOutcomes"
                                                      cols="30"
                                                      rows="10"><?php echo old('outcomes.'.$language->code); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <?php
                        if (courseSetting()->show_mode_of_delivery == 1 || isModuleActive('Org')) {
                            $col_size = 4;
                        } elseif (currentTheme()=='tvt'){
                            $col_size = 3;
                        }else {
                            $col_size = 6;
                        }
                    ?>
                    <div class="row">

                        <?php if(currentTheme()=='tvt'): ?>
                            <div class="col-xl-<?php echo e($col_size); ?>  mb_30">
                                <label class="primary_input_label d-flex"
                                       for=""><?php echo e(__('courses.School Subject')); ?>

                                </label>
                                <select class="primary_select school_subject_id" name="school_subject_id"
                                        id="school_subject_id" <?php echo e($errors->has('category') ? 'autofocus' : ''); ?>>
                                    <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.School Subject')); ?> *"
                                            value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.School Subject')); ?> </option>
                                    <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        <?php endif; ?>
                        <div class="col-xl-<?php echo e($col_size); ?> courseBox mb_30">
                            <label class="primary_input_label d-flex"
                                   for=""><?php echo e(__('quiz.Category')); ?> <span
                                    class="required_mark">*</span>
                            </label>
                            <select class="primary_select category_id" name="category"
                                    id="category_id" <?php echo e($errors->has('category') ? 'autofocus' : ''); ?>>
                                <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('quiz.Category')); ?>"
                                        value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('quiz.Category')); ?> <span
                                        class="required_mark">*</span></option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($category->parent_id==0): ?>
                                        <?php echo $__env->make('backend.categories._single_select_option',['category'=>$category,'level'=>1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-xl-<?php echo e($col_size); ?> courseBox mb_30" id="subCategoryDiv">
                            <label class="primary_input_label d-flex"
                                   for=""> <?php echo e(__('courses.Sub Category')); ?>

                            </label>
                            <select class="primary_select" name="sub_category"
                                    id="subcategory_id" <?php echo e($errors->has('sub_category') ? 'autofocus' : ''); ?>>
                                <option
                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Sub Category')); ?>  "
                                    value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Sub Category')); ?>

                                </option>
                            </select>
                        </div>

                        <?php if(courseSetting()->show_mode_of_delivery==1 || isModuleActive('Org')): ?>
                            <div class="col-xl-<?php echo e($col_size); ?>   mb_30">
                                <label class="primary_input_label d-flex"
                                       for=""><?php echo e(__('courses.Mode of Delivery')); ?> <span class="required_mark">*</span>
                                </label>
                                <select class="primary_select mode_of_delivery " name="mode_of_delivery" required>
                                    <option
                                        data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Mode of Delivery')); ?>*"
                                        value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Mode of Delivery')); ?>*
                                    </option>
                                    <option value="1" selected><?php echo e(__('courses.Online')); ?></option>
                                    <?php if(!isModuleActive('Org')): ?>
                                        <option value="2"><?php echo e(__('courses.Distance Learning')); ?></option>
                                        <option value="3"><?php echo e(__('courses.Face-to-Face')); ?></option>
                                    <?php else: ?>
                                        <option value="3"><?php echo e(__('courses.Offline')); ?></option>
                                    <?php endif; ?>

                                </select>
                            </div>
                        <?php endif; ?>
                        <div class="col-xl-4   quizBox" style="display: none">
                            <label class="primary_input_label d-flex"
                                   for=""><?php echo e(__('quiz.Quiz')); ?> <span class="required_mark">*</span>
                            </label>
                            <select class="primary_select" name="quiz"
                                    id="quiz_id" <?php echo e($errors->has('quiz') ? 'autofocus' : ''); ?>>
                                <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('quiz.Quiz')); ?> "
                                        value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('quiz.Quiz')); ?> </option>
                                <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($quiz->id); ?>"><?php echo e(@$quiz->title); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>


                        <div class="col-xl-4 makeResize ">
                            <label class="primary_input_label d-flex"
                                   for=""><?php echo e(__('courses.Level')); ?><span class="required_mark">*</span>
                            </label>
                            <select class="primary_select" name="level">
                                <option
                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Level')); ?>"
                                    value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Level')); ?>

                                </option>
                                <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        value="<?php echo e($level->id); ?>" <?php echo e(old('level')==$level->id?"selected":""); ?> ><?php echo e($level->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                        <div class="col-xl-4 makeResize responsiveResize" id="">
                            <label class="primary_input_label d-flex"
                                   for=""><?php echo e(__('common.Language')); ?><span class="required_mark">*</span>
                            </label>
                            <select class="primary_select mb-25" name="language"
                                    id="" <?php echo e($errors->has('language') ? 'autofocus' : ''); ?>>
                                <option
                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('common.Language')); ?> *"
                                    value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('common.Language')); ?></option>
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        value="<?php echo e($language->id); ?>" <?php echo e(old('language')==$language->id?"selected":""); ?> <?php echo e(auth()->user()->language_id==$language->id?'selected':''); ?>><?php echo e($language->native); ?></option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-xl-4 makeResize responsiveResize" id="durationBox">
                            <label class="primary_input_label d-flex"
                                   for=""><?php echo e(__('common.Duration')); ?> (<?php echo e(__('common.In Minute')); ?>)
                            </label>
                            <div class="primary_input mb-25">
                                <input class="primary_input_field" name="duration"
                                       placeholder="<?php echo e(__('common.Duration')); ?> (<?php echo e(__('common.In Minute')); ?>)"
                                       id="addDuration"
                                       min="0" step="any" type="number"
                                       value="<?php echo e(old('duration')); ?>" <?php echo e($errors->has('duration') ? 'autofocus' : ''); ?>>
                            </div>
                        </div>
                        <?php if(isModuleActive('Org')): ?>
                            <div class="col-xl-4 makeResize responsiveResize" id="">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label d-flex"
                                           for=""><?php echo e(__('org.Leaderboard point')); ?>

                                    </label>
                                    <input class="primary_input_field" name="org_leaderboard_point"
                                           placeholder="<?php echo e(__('org.Leaderboard point')); ?>"
                                           id=""
                                           min="0" step="any" type="number"
                                           value="<?php echo e(old('org_leaderboard_point')); ?>" <?php echo e($errors->has('org_leaderboard_point') ? 'autofocus' : ''); ?>>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-6 courseBox">
                        <div class="primary_input mb-25">

                            <div class="row pt-2">
                                <div class="col-md-6 mb-25">
                                    <label class="primary_input_label mt-1"
                                           for=""> <?php echo e(__('common.Complete course sequence')); ?></label>
                                </div>
                                <div class="col-md-3 mb-25">
                                    <label class="primary_checkbox d-flex mr-12">
                                        <input type="radio" class="  complete_order0"
                                               id="complete_order0" name="complete_order"
                                               value="0" checked>
                                        <span class="checkmark me-2"></span> <?php echo e(__('common.No')); ?></label>
                                </div>
                                <div class="col-md-3 mb-25">
                                    <label class="primary_checkbox d-flex mr-12">
                                        <input type="radio" class="complete_order1"
                                               id="complete_order1" name="complete_order"
                                               value="1">
                                        <span class="checkmark me-2"></span><?php echo e(__('common.Yes')); ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none">
                        <div class="col-lg-6 ">
                            <div class="checkbox_wrap d-flex align-items-center ">
                                <label for="course_1" class="switch_toggle me-2">
                                    <input type="checkbox" id="course_1">
                                    <i class="slider round"></i>
                                </label>
                                <label
                                    class="mb-0"><?php echo e(__('courses.This course is a top course')); ?></label>
                            </div>
                        </div>
                    </div>
                    <?php if(showEcommerce()): ?>
                        <div class="row mt-20">
                            <div class="col-lg-4 mb-25">
                                <div class="checkbox_wrap d-flex align-items-center mt-40">
                                    <label for="course_2" class="switch_toggle me-2">
                                        <input type="checkbox" id="course_2" value="1" name="is_free">
                                        <i class="slider round"></i>
                                    </label>
                                    <label
                                        class="mb-0"><?php echo e(__('courses.This course is a free course')); ?></label>
                                </div>
                            </div>
                            <div class="col-xl-4" id="price_div">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for=""><?php echo e(__('courses.Price')); ?></label>
                                    <input class="primary_input_field" name="price" min="0" placeholder="-"
                                           id="addPrice"
                                           type="number" value="<?php echo e(old('price')); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20" id="discountDiv">
                            <div class="col-lg-4">
                                <div class="checkbox_wrap d-flex align-items-center mt-40">
                                    <label for="course_3" class="switch_toggle me-2">
                                        <input type="checkbox" id="course_3" value="1" name="is_discount">
                                        <i class="slider round"></i>
                                    </label>
                                    <label
                                        class="mb-0"><?php echo e(__('courses.This course has discounted price')); ?></label>
                                </div>
                            </div>
                            <div class="col-xl-4" id="discount_price_div" style="display: none">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for=""><?php echo e(__('courses.Discount')); ?> <?php echo e(__('courses.Price')); ?></label>
                                    <input class="primary_input_field" min="0" name="discount_price" placeholder="-"
                                           id="addDiscount"
                                           type="number" value="<?php echo e(old('discount_price')); ?>">
                                </div>
                            </div>
                        </div>



                        <div class="row mt-20">
                            <div class="col-lg-6 mb-25">
                                <div class="checkbox_wrap d-flex align-items-center mt-40">
                                    <label for="iap" class="switch_toggle me-2">
                                        <input type="checkbox" id="iap" value="1" name="iap">
                                        <i class="slider round"></i>
                                    </label>
                                    <label
                                        class="mb-0"><?php echo e(__('courses.This course is a In App purchase course')); ?></label>
                                </div>
                            </div>
                            <div class="col-xl-6 d-none" id="iap_div">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for=""><?php echo e(__('courses.In App purchase product ID')); ?></label>
                                    <input class="primary_input_field" name="iap_product_id" placeholder="-"
                                           id=""
                                           type="text" value="<?php echo e(old('iap_product_id')); ?>">
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>
                    <div class="row mt-20 mb-10 videoOption">
                        <div class="col-lg-6">
                            <div class="checkbox_wrap d-flex align-items-center mt-40">
                                <label for="show_overview_media" class="switch_toggle me-2">
                                    <input type="checkbox" id="show_overview_media" value="1"
                                           name="show_overview_media">
                                    <i class="slider round"></i>
                                </label>
                                <label
                                    class="mb-0"><?php echo e(__('courses.Show Overview Video')); ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-20 videoOption" id="overview_host_section" style="display: none">
                        <div class="col-xl-4 mt-25">
                            <select class="primary_select category_id " name="host"
                                    id="">
                                <option
                                    data-display="<?php echo e(__('courses.Course overview host')); ?> *"
                                    value=""><?php echo e(__('courses.Course overview host')); ?>

                                </option>
                                <option data-display="<?php echo e(__('courses.Image Preview')); ?>"
                                        value="ImagePreview" <?php echo e(@$course->host=="ImagePreview"?'selected':''); ?>><?php echo e(__('courses.Image Preview')); ?>

                                </option>

                                <option <?php echo e(@$course->host=="Youtube"?'selected':''); ?> value="Youtube">
                                    <?php echo e(__('courses.Youtube')); ?>

                                </option>
                                <option value="VdoCipher" <?php echo e(@$course->host=="VdoCipher"?'selected':''); ?>>
                                    VdoCipher
                                </option>

                                <option value="Vimeo" <?php echo e(@$course->host=="Vimeo"?'selected':''); ?>>
                                    <?php echo e(__('courses.Vimeo')); ?>

                                </option>

                                <option value="Self" <?php echo e(@$course->host=="Self"?'selected':''); ?>>
                                    <?php echo e(__('courses.Self')); ?>

                                </option>


                            </select>
                        </div>
                        <div class="col-xl-8 ">
                            <div class="input-effect videoUrl"
                                 style="display:<?php if((isset($course) && (@$course->host!="Youtube")) || !isset($course)): ?> none  <?php endif; ?>">
                                <label><?php echo e(__('courses.Video URL')); ?>

                                    <span class="required_mark">*</span></label>
                                <input
                                    id=""
                                    class="primary_input_field youtubeVideo name<?php echo e($errors->has('trailer_link') ? ' is-invalid' : ''); ?>"
                                    type="text" name="trailer_link"
                                    placeholder="<?php echo e(__('courses.Video URL')); ?>"
                                    autocomplete="off"
                                    value="" <?php echo e($errors->has('trailer_link') ? 'autofocus' : ''); ?>>
                                <span class="focus-border"></span>
                                <?php if($errors->has('trailer_link')): ?>
                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('trailer_link')); ?></strong>
                                            </span>
                                <?php endif; ?>
                            </div>

                            <div class="row  vimeoUrl" id=""
                                 style="display: <?php if((isset($course) && (@$course->host!="Vimeo")) || !isset($course)): ?> none  <?php endif; ?>">
                                <div class="col-lg-12" id="">
                                    <label class="primary_input_label"
                                           for=""><?php echo e(__('courses.Vimeo Video')); ?></label>


                                    <?php if(config('vimeo.connections.main.upload_type')=="Direct"): ?>
                                        <div class="primary_file_uploader">
                                            <input class="primary-input filePlaceholder" type="text"
                                                   id=""
                                                   <?php echo e($errors->has('image') ? 'autofocus' : ''); ?>

                                                   placeholder="<?php echo e(__('courses.Browse Video file')); ?>"
                                                   readonly="">
                                            <button class="" type="button">
                                                <label class="primary-btn small fix-gr-bg"
                                                       for="document_file_thumb_vimeo_add"><?php echo e(__('common.Browse')); ?></label>
                                                <input type="file" class="d-none fileUpload" name="vimeo"
                                                       id="document_file_thumb_vimeo_add">
                                            </button>
                                        </div>
                                    <?php else: ?>
                                        <select class="select2 vimeoVideo vimeoList "
                                                name="vimeo"
                                                id="">
                                            <option
                                                data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>"
                                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>

                                            </option>
                                        </select>
                                    <?php endif; ?>
                                    <?php if($errors->has('vimeo')): ?>
                                        <span
                                            class="invalid-feedback invalid-select"
                                            role="alert">
                                            <strong><?php echo e($errors->first('vimeo')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row VdoCipherUrl"
                                 style="display: <?php if((isset($course) && ($course->trailer_link!="VdoCipher")) || !isset($editLesson)): ?> none  <?php endif; ?>">
                                <div class="input-effect " id=""
                                >
                                    <div class="" id="">
                                        <label class="primary_input_label"
                                               for=""><?php echo e(__('courses.VdoCipher Video')); ?></label>
                                        <select class="select2 vdocipherList " name="vdocipher"
                                                id="VdoCipherVideo">
                                            <option
                                                data-display="<?php echo e(__('common.Select')); ?> video "
                                                value=""><?php echo e(__('common.Select')); ?> video
                                            </option>
                                            <?php $__currentLoopData = $vdocipher_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vdo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(isset($editLesson)): ?>
                                                    <option
                                                        value="<?php echo e(@$vdo->id); ?>" <?php echo e($vdo->id==$editLesson->video_url?'selected':''); ?>><?php echo e(@$vdo->title); ?></option>
                                                <?php else: ?>
                                                    <option
                                                        value="<?php echo e(@$vdo->id); ?>"><?php echo e(@$vdo->title); ?></option>
                                                <?php endif; ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if($errors->has('vdocipher')): ?>
                                            <span class="invalid-feedback invalid-select"
                                                  role="alert">
                                               <strong><?php echo e($errors->first('vdocipher')); ?></strong>
                                           </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row  videofileupload" id=""
                                 style="display: <?php if((isset($course) && ((@$course->host=="Vimeo") ||  (@$course->host=="Youtube")) ) || !isset($course)): ?> none  <?php endif; ?>">

                                <div class="col-xl-12">
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'file','type' => 'video','label' => ''.e(__('courses.Video File')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'file','type' => 'video','label' => ''.e(__('courses.Video File')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isModuleActive("SupportTicket")): ?>
                        <div class="row mt-20 mb-10">
                            <div class="col-lg-6">
                                <div class="checkbox_wrap d-flex align-items-center mt-40">
                                    <label for="support" class="switch_toggle me-1">
                                        <input type="checkbox" name="support"
                                               class="support" id="support" value="1">
                                        <i class="slider round"></i>
                                    </label>
                                    <label class="mb-0"><?php echo e(__('common.Support')); ?></label>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(isModuleActive('UpcomingCourse')): ?>
                        <div class="row mt-20">
                            <div class="col-lg-3 mb-25">
                                <div class="checkbox_wrap d-flex align-items-center mt-40">
                                    <label for="is_upcoming_course" class="switch_toggle me-2">
                                        <input <?php echo e(old('is_upcoming_course') == 1?'checked':''); ?> type="checkbox"
                                               id="is_upcoming_course" value="1" name="is_upcoming_course">
                                        <i class="slider round"></i>
                                    </label>
                                    <label
                                        class="mb-0"><?php echo e(__('courses.Is upcoming course?')); ?></label>
                                </div>
                            </div>

                            <div class="col-xl-3 upcoming_course_div publish_date_div">
                                <div class="primary_input mb-15">
                                    <label class="primary_input_label"
                                           for=""><?php echo e(__('courses.Publish Date')); ?>

                                    </label>
                                    <div class="primary_datepicker_input">
                                        <div class="g-0  input-right-icon">
                                            <div class="col">
                                                <div class="">
                                                    <input placeholder="<?php echo e(__('courses.Publish Date')); ?>"
                                                           class="primary_input_field primary-input date form-control"
                                                           id="publish_date" type="text" name="publish_date"
                                                           value="<?php echo e(old('publish_date')); ?>"
                                                           autocomplete="off">
                                                </div>
                                            </div>
                                            <button class="" type="button">
                                                <i class="ti-calendar" id="start-date-icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-25 upcoming_course_div">
                                <div class="checkbox_wrap d-flex align-items-center mt-40">
                                    <label for="is_allow_prebooking" class="switch_toggle me-2">
                                        <input <?php echo e(old('is_allow_prebooking') == 1?'checked':''); ?> type="checkbox"
                                               id="is_allow_prebooking" value="1" name="is_allow_prebooking">
                                        <i class="slider round"></i>
                                    </label>
                                    <label
                                        class="mb-0"><?php echo e(__('courses.Is Allow Prebooking?')); ?></label>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-25 upcoming_course_div booking_amount_div">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for="booking_amount"><?php echo e(__('courses.Booking Amount')); ?> <span
                                            class="required_mark">*</span></label>
                                    <input class="primary_input_field booking_amount_field" name="booking_amount"
                                           placeholder="<?php echo e(__('courses.Booking Amount')); ?>"
                                           id="booking_amount"
                                           type="number"
                                           value="<?php echo e(old('booking_amount')); ?>">
                                </div>
                            </div>

                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-xl-4 mt-25">
                            <label><?php echo e(__('courses.View Scope')); ?> </label>
                            <select class="primary_select " name="scope"
                                    id="">
                                <option
                                    value="1" <?php echo e(@$course->scope=="1"?'selected':''); ?>><?php echo e(__('courses.Public')); ?>

                                </option>

                                <option <?php echo e(@$course->scope=="0"?'selected':''); ?> value="0">
                                    <?php echo e(__('courses.Private')); ?>

                                </option>

                            </select>
                        </div>

                        <div class="col-xl-4 mt-25">
                            <label><?php echo e(_trans('courses.Access Limit')); ?> <?php echo e(_trans('courses.In Days')); ?>

                                (<small><?php echo e(_trans('courses.0 means Unlimited')); ?></small> )</label>
                            <input class="primary_input_field " name="access_limit"
                                   placeholder="<?php echo e(_trans('courses.Access Limit')); ?>"
                                   id="access_limit"
                                   type="number"
                                   value="<?php echo e(old('access_limit')); ?>">
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col-xl-6">
                            <div class=" mb-35">
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'image','type' => 'image','label' => ''.e(__('courses.Course Thumbnail')).'','note' => ''.e(__('student.Recommended size')).' (1170x600)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'image','type' => 'image','label' => ''.e(__('courses.Course Thumbnail')).'','note' => ''.e(__('student.Recommended size')).' (1170x600)']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                            </div>
                        </div>
                        <?php if(\Illuminate\Support\Facades\Auth::user()->subscription_api_status==1): ?>
                            <div class="col-xl-6">
                                <label class="primary_input_label"
                                       for=""><?php echo e(__('newsletter.Subscription List')); ?>

                                </label>
                                <select class="primary_select"
                                        name="subscription_list" <?php echo e($errors->has('subscription_list') ? 'autofocus' : ''); ?>>
                                    <option
                                        data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('newsletter.Subscription List')); ?>"
                                        value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('newsletter.Subscription List')); ?>


                                    </option>
                                    <?php $__currentLoopData = $sub_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($list['id']); ?>">
                                            <?php echo e($list['name']); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if(Settings('frontend_active_theme')=="edume"): ?>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for=""><?php echo e(__('courses.Key Point')); ?> (1)</label>
                                    <input class="primary_input_field" name="what_learn1" placeholder="-"
                                           type="text" value="<?php echo e(old('what_learn1')); ?>">
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for=""><?php echo e(__('courses.Key Point')); ?> (2) </label>
                                    <input class="primary_input_field" name="what_learn2" placeholder="-"
                                           type="text" value="<?php echo e(old('what_learn2')); ?>">
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label d-flex"
                                       for=""><?php echo e(__('courses.Meta keywords')); ?>

                                    <?php if ($__env->exists('aicontent::inc.button' , ['selected_template' => 6,'slug'=>'course-meta-keywords'])) echo $__env->make('aicontent::inc.button' , ['selected_template' => 6,'slug'=>'course-meta-keywords'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </label>
                                <input class="primary_input_field" name="meta_keywords" placeholder="-"
                                       id="addMeta"
                                       type="text" value="<?php echo e(old('meta_keywords')); ?>">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label d-flex"
                                       for=""><?php echo e(__('courses.Meta description')); ?>

                                    <?php if ($__env->exists('aicontent::inc.button' , ['selected_template' =>7,'slug'=>'course-meta-description'])) echo $__env->make('aicontent::inc.button' , ['selected_template' =>7,'slug'=>'course-meta-description'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </label>
                                <textarea id="my-textarea" class="primary_input_field" id
                                          name="meta_description" style="height: 200px"
                                          rows="3"><?php echo e(old('meta_keywords')); ?></textarea>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-12 text-center pt_15">
                        <div class="d-flex justify-content-center">
                            <button class="primary-btn semi_large2  fix-gr-bg" id="save_button_parent"
                                    type="submit"><i
                                    class="ti-check"></i> <?php echo e(__('common.Add')); ?> <?php echo e(__('courses.Course')); ?>

                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section>
    <?php echo $__env->make('backend.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        let show_overview_media = $('#show_overview_media');
        let overview_host_section = $('#overview_host_section');
        show_overview_media.change(function () {
            if (show_overview_media.is(':checked')) {
                overview_host_section.show();
            } else {
                overview_host_section.hide();
            }
        });
    </script>
    <script>
        let show_mode_of_delivery = $('#show_mode_of_delivery');
        let mode_of_delivery_options = $('#mode_of_delivery_options');
        show_mode_of_delivery.change(function () {
            if (show_mode_of_delivery.is(':checked')) {
                mode_of_delivery_options.show();
            } else {
                mode_of_delivery_options.hide();
            }
        });


        $('.mode_of_delivery').change(function () {
            let option = $(".mode_of_delivery option:selected").val();
            if (option == 3) {
                $('.quizBox').hide();
            } else {
                if ($('#type2').is(':checked')) {
                    $('.quizBox').show();
                }
            }
        });

        $('#iap').change(function () {
            if ($('#iap').is(':checked')) {
                $('#iap_div').removeClass('d-none');
            } else {
                $('#iap_div').addClass('d-none');
            }
        });
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>

    <script src="<?php echo e(asset('/')); ?>/Modules/CourseSetting/Resources/assets/js/course.js"></script>



    <script>
        let vdocipherList = $('.vdocipherList');

        vdocipherList.select2({
            ajax: {
                url: '<?php echo e(route('getAllVdocipherData')); ?>',
                type: "GET",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    var query = {
                        search: params.term,
                        page: params.page || 1,
                        // id: $('#country').find(':selected').val(),
                    }
                    return query;
                },
                cache: false
            }
        });

        $('.vimeoList').select2({
            ajax: {
                url: '<?php echo e(route('getAllVimeoData')); ?>',
                type: "GET",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        search: params.term,
                        page: params.page || 1,
                    }
                },
                cache: false
            }
        });
    </script>
    <?php if(isModuleActive('UpcomingCourse')): ?>
        <script>
            upcomingCourseDivToggle();

            $(document).on('change', '#is_upcoming_course', function (event) {
                upcomingCourseDivToggle();
            });

            $(document).on('change', '#is_allow_prebooking', function (event) {
                upcomingCourseDivToggle();
            });

            function upcomingCourseDivToggle() {
                if ($('#is_upcoming_course').is(':checked')) {
                    $('.upcoming_course_div').removeClass('d-none');
                } else {
                    $('.upcoming_course_div').addClass('d-none');
                }
                allowPreBooking();
            }

            function allowPreBooking() {
                if ($('#is_allow_prebooking').is(':checked')) {
                    $('.booking_amount_div').removeClass('d-none');
                } else {
                    $('.booking_amount_div').addClass('d-none');
                }
            }


        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/add_course.blade.php ENDPATH**/ ?>