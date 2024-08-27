<div role="tabpanel"
     class="tab-pane fade
                                            <?php if($type == 'courseDetails'): ?> show active <?php endif; ?>
                                             "
     id="indivitual_email_sms">
    <div class="white-box  ">
        <form action="<?php echo e(route('AdminUpdateCourse')); ?>" method="POST"
              enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="<?php echo e($required_type ? 'col-xl-4' : 'col-xl-6'); ?>  ">
                    <label class="primary_input_label mt-1" for="">
                        <?php echo e(__('courses.Type')); ?> <strong
                            class="text-danger">*</strong></label>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-25">
                            <label class="primary_checkbox d-flex mr-12"
                                   for="type<?php echo e(@$course->id); ?>1">
                                <input type="radio" class="common-radio type1"
                                       id="type<?php echo e(@$course->id); ?>1" name="type"
                                       value="1"
                                    <?php echo e(@$course->type == 1 ? 'checked' : ''); ?>>

                                <span class="checkmark me-2"></span>
                                <?php echo e(__('courses.Course')); ?>

                            </label>
                        </div>

                        <div class="col-md-4 col-sm-6 mb-25">
                            <label class="primary_checkbox d-flex mr-12"
                                   for="type<?php echo e(@$course->id); ?>2">
                                <input type="radio" class="common-radio type2"
                                       id="type<?php echo e(@$course->id); ?>2" name="type"
                                       value="2"
                                    <?php echo e(@$course->type == 2 ? 'checked' : ''); ?>>

                                <span
                                    class="checkmark me-2"></span><?php echo e(__('quiz.Quiz')); ?>

                            </label>
                        </div>
                    </div>

                </div>

                <?php if($required_type): ?>
                    <div class="<?php echo e($required_type ? 'col-xl-4' : 'col-xl-6'); ?> ">
                        <div class="primary_input ">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <label class="primary_input_label" for="">
                                        <?php echo e(__('courses.Required Type')); ?>

                                        <strong class="text-danger">*</strong>
                                    </label>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-25">
                                    <label class="primary_checkbox d-flex mr-12">
                                        <input type="radio" id=""
                                               name="required_type" value="1"
                                            <?php echo e($course->required_type == 1 ? 'checked' : ''); ?>>
                                        <span
                                            class="checkmark me-2"></span><?php echo e(__('courses.Compulsory')); ?>

                                    </label>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-25">
                                    <label class="primary_checkbox d-flex mr-12">
                                        <input type="radio" name="required_type"
                                               value="0"
                                            <?php echo e($course->required_type == 0 ? 'checked' : ''); ?>>
                                        <span class="checkmark me-2"></span>
                                        <?php echo e(__('courses.Open')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div
                    class="<?php echo e($required_type ? 'col-xl-4' : 'col-xl-6'); ?> dripCheck"
                    <?php if($course->type != 1): ?> style="display: none" <?php endif; ?>>
                    <div class="primary_input mb-25">
                        <label class="primary_input_label mt-1" for="">
                            <?php echo e(__('common.Drip Content')); ?></label>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 mb-25">
                                <label class="primary_checkbox d-flex mr-12"
                                       for="drip<?php echo e(@$course->id); ?>0">
                                    <input type="radio" class="common-radio drip0"
                                           id="drip<?php echo e(@$course->id); ?>0" name="drip"
                                           value="0"
                                        <?php echo e(@$course->drip == 0 ? 'checked' : ''); ?>>

                                    <span class="checkmark me-2"></span>
                                    <?php echo e(__('common.No')); ?>

                                </label>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-25">
                                <label class="primary_checkbox d-flex mr-12"
                                       for="drip<?php echo e(@$course->id); ?>1">
                                    <input type="radio" class="   drip1"
                                           id="drip<?php echo e(@$course->id); ?>1" name="drip"
                                           value="1"
                                        <?php echo e(@$course->drip == 1 ? 'checked' : ''); ?>>
                                    <span class="checkmark me-2"></span>
                                    <?php echo e(__('common.Yes')); ?>

                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if(\Illuminate\Support\Facades\Auth::user()->role_id != 2): ?>
                    <div class="col-xl-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="assign_instructor"><?php echo e(__('courses.Assign Instructor')); ?>

                            </label>
                            <select class="primary_select category_id"
                                    name="assign_instructor" id="assign_instructor"
                                <?php echo e($errors->has('assign_instructor') ? 'autofocus' : ''); ?>>
                                <option
                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Instructor')); ?>"
                                    value=""><?php echo e(__('common.Select')); ?>

                                    <?php echo e(__('courses.Instructor')); ?> </option>
                                <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($instructor->id); ?>"
                                        <?php echo e($instructor->id == $course->user_id ? 'selected' : ''); ?>>
                                        <?php echo e(@$instructor->name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-xl-6">
                    <div class="primary_input mb-25">
                        <label class="primary_input_label"
                               for="assistant_instructors"><?php echo e(__('courses.Assistant Instructor')); ?>

                        </label>
                        <select name="assistant_instructors[]"
                                id="assistant_instructors"
                                class="multypol_check_select active mb-15 e1"
                                multiple>
                            <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($instructor->id); ?>"
                                    <?php echo e(!empty($course->assistantInstructorsIds) && in_array($instructor->id, $course->assistantInstructorsIds) ? 'selected' : ''); ?>>
                                    <?php echo e(@$instructor->name); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>


            </div>
            <input type="hidden" name="id" class="course_id"
                   value="<?php echo e(@$course->id); ?>">
            <div class="col-xl-12 p-0">
                <div class="row pt-0">
                    <?php if(isModuleActive('FrontendMultiLang')): ?>
                        <ul class="nav nav-tabs no-bottom-border  mt-sm-md-20 mb-10 ms-3"
                            role="tablist">
                            <?php $__currentLoopData = $LanguageList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a class="nav-link  <?php if(auth()->user()->language_code == $language->code): ?> active <?php endif; ?>"
                                       href="#element_course<?php echo e($language->code); ?>"
                                       role="tab"
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
                             id="element_course<?php echo e($language->code); ?>">
                            <div class="row">

                                <div class="col-xl-12">
                                    <div class="primary_input mb-25">
                                        <label class="primary_input_label mt-1"
                                               for=""><?php echo e(__('courses.Course Title')); ?>

                                        </label>
                                        <input class="primary_input_field"
                                               name="title[<?php echo e($language->code); ?>]"
                                               value="<?php echo e($course->getTranslation('title', $language->code)); ?>"
                                               placeholder="-" type="text">
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="primary_input mb-35">
                                        <label class="primary_input_label"
                                               for="about"><?php echo e(__('courses.Course')); ?> <?php echo e(__('courses.Requirements')); ?>  </label>
                                        <textarea
                                            class="lms_summernote"
                                            name="requirements[<?php echo e($language->code); ?>]"

                                            id="about" cols="30"
                                            rows="10"><?php echo @$course->getTranslation('requirements',$language->code); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="primary_input mb-35">
                                        <label class="primary_input_label mt-1"
                                               for=""><?php echo e(__('courses.Course')); ?> <?php echo e(__('courses.Description')); ?>  </label>
                                        <textarea
                                            class="lms_summernote"
                                            name="about[<?php echo e($language->code); ?>]"
                                            name="" id=""
                                            cols="30"
                                            rows="10"><?php echo @$course->getTranslation('about',$language->code); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="primary_input mb-35">
                                        <label class="primary_input_label"
                                               for="about"><?php echo e(__('courses.Course')); ?> <?php echo e(__('courses.Outcomes')); ?>  </label>
                                        <textarea
                                            class="lms_summernote"
                                            name="outcomes[<?php echo e($language->code); ?>]"

                                            id="about" cols="30"
                                            rows="10"><?php echo @$course->getTranslation('outcomes',$language->code); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="row">

                    <?php
                        if (courseSetting()->show_mode_of_delivery == 1 || isModuleActive('Org')) {
                            $col_size = 4;
                        } elseif (currentTheme()=='tvt'){
                            $col_size = 3;
                        }else {
                            $col_size = 6;
                        }
                    ?>

                    <?php if(currentTheme()=='tvt'): ?>
                        <div class="col-xl-<?php echo e($col_size); ?>  mb_30">
                            <select class="primary_select school_subject_id"
                                    name="school_subject_id"
                                    id="school_subject_id" <?php echo e($errors->has('school_subject_id') ? 'autofocus' : ''); ?>>
                                <option
                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.School Subject')); ?> *"
                                    value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.School Subject')); ?> </option>
                                <?php if(isset($subjects)): ?>
                                    <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            <?php echo e($course->school_subject_id==$subject->id?'selected':''); ?>

                                            value="<?php echo e($subject->id); ?>"><?php echo e($subject->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    <?php endif; ?>

                    <div class="col-xl-<?php echo e($col_size); ?> courseBox mb-25">
                        <select class="primary_select edit_category_id"
                                data-course_id="<?php echo e(@$course->id); ?>" name="category"
                                id="course">
                            <option
                                data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('quiz.Category')); ?>"
                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('quiz.Category')); ?> </option>
                            <?php
                                request()->replace(['category'=>$course->category_id]);
                            ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($category->parent_id==0): ?>
                                    <?php echo $__env->make('backend.categories._single_select_option',['category'=>$category,'level'=>1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-xl-<?php echo e($col_size); ?> courseBox mb-25"
                         id="edit_subCategoryDiv<?php echo e(@$course->id); ?>">
                        <select class="primary_select " name="sub_category"
                                id="edit_subcategory_id<?php echo e(@$course->id); ?>">
                            <option
                                data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Sub Category')); ?>"
                                value=""><?php echo e(__('common.Select')); ?>

                                <?php echo e(__('courses.Sub Category')); ?>

                            </option>
                            <?php if(!empty($course->subcategory_id) || $course->subcategory_id!=0): ?>
                                <option value="<?php echo e(@$course->subcategory_id); ?>"
                                        selected>
                                    <?php echo e(@$course->subCategory->name); ?></option>
                                <?php if(isset($course->category->subcategories)): ?>
                                    <?php $__currentLoopData = $course->category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($course->subcategory_id != $sub->id): ?>
                                            <option value="<?php echo e(@$sub->id); ?>">
                                                <?php echo e(@$sub->name); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <?php if(courseSetting()->show_mode_of_delivery == 1 || isModuleActive('Org')): ?>
                        <div class="col-xl-<?php echo e($col_size); ?>   mb-25">
                            <select class="primary_select mode_of_delivery"
                                    name="mode_of_delivery">
                                <option
                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Mode of Delivery')); ?>*"
                                    value=""><?php echo e(__('common.Select')); ?>

                                    <?php echo e(__('courses.Mode of Delivery')); ?>

                                    *
                                </option>
                                <option value="1"
                                    <?php echo e($course->mode_of_delivery == 1 ? 'selected' : ''); ?>>
                                    <?php echo e(__('courses.Online')); ?></option>

                                <?php if(!isModuleActive('Org')): ?>
                                    <option value="2"
                                        <?php echo e($course->mode_of_delivery == 2 ? 'selected' : ''); ?>>
                                        <?php echo e(__('courses.Distance Learning')); ?></option>
                                    <option value="3"
                                        <?php echo e($course->mode_of_delivery == 3 ? 'selected' : ''); ?>>
                                        <?php echo e(__('courses.Face-to-Face')); ?></option>
                                <?php else: ?>
                                    <option value="3"
                                        <?php echo e($course->mode_of_delivery == 3 ? 'selected' : ''); ?>>
                                        <?php echo e(__('courses.Offline')); ?></option>
                                <?php endif; ?>

                            </select>
                        </div>
                    <?php endif; ?>

                    <div class="col-xl-4  quizBox mb-25" style=" display: none">
                        <select class="primary_select" name="quiz" id="quiz_id">
                            <option
                                data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('quiz.Quiz')); ?>"
                                value=""><?php echo e(__('common.Select')); ?>

                                <?php echo e(__('quiz.Quiz')); ?> </option>
                            <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($quiz->id); ?>"
                                        <?php if($quiz->id == $course->quiz_id): ?> selected <?php endif; ?>>
                                    <?php echo e(@$quiz->title); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-xl-4  responsiveResize2  makeResize ">
                        <select class="primary_select" name="level">
                            <option
                                data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Level')); ?>"
                                value=""><?php echo e(__('common.Select')); ?>

                                <?php echo e(__('courses.Level')); ?></option>
                            <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($level->id); ?>"
                                        <?php if(@$course->level == $level->id): ?> selected <?php endif; ?>>
                                    <?php echo e($level->title); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-xl-4 makeResize responsiveResize" id="">
                        <select class="primary_select" name="language"
                                id="">
                            <option
                                data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Language')); ?>"
                                value=""><?php echo e(__('common.Select')); ?>

                                <?php echo e(__('courses.Language')); ?></option>
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($language->id); ?>"
                                        <?php if($language->id == $course->lang_id): ?> selected <?php endif; ?>>
                                    <?php echo e($language->native); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-xl-4 makeResize  responsiveResize mb-25">
                        <div class="primary_input ">
                            <input class="primary_input_field" name="duration"
                                   placeholder="<?php echo e(__('common.Duration')); ?>   (<?php echo e(__('common.In Minute')); ?>)"
                                   min="0" step="any"
                                   type="number" value="<?php echo e(@$course->duration); ?>">
                        </div>
                    </div>
                    <?php if(isModuleActive('Org')): ?>
                        <div class="col-xl-4 makeResize responsiveResize" id="">
                            <div class="primary_input mb-25">

                                <input class="primary_input_field"
                                       name="org_leaderboard_point"
                                       placeholder="<?php echo e(__('org.Leaderboard point')); ?>"
                                       id=""
                                       min="0" step="any" type="number"
                                       value="<?php echo e(old('org_leaderboard_point',@$course->org_leaderboard_point)); ?>" <?php echo e($errors->has('org_leaderboard_point') ? 'autofocus' : ''); ?>>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xl-6 courseBox mb-25">
                    <div class="primary_input  ">

                        <div class="row  ">
                            <div class="col-md-12">
                                <label class="primary_input_label mt-1"
                                       for="">
                                    <?php echo e(__('common.Complete course sequence')); ?></label>
                            </div>
                            <div class="col-md-3 mb-25">
                                <label class="primary_checkbox d-flex mr-12"
                                       for="complete_order0">
                                    <input type="radio"
                                           class="common-radio complete_order0"
                                           id="complete_order0"
                                           name="complete_order"
                                           value="0"
                                        <?php echo e(@$course->complete_order == 0 ? 'checked' : ''); ?>>
                                    <span class="checkmark me-2"></span>
                                    <?php echo e(__('common.No')); ?>

                                </label>
                            </div>
                            <div class="col-md-3 mb-25">

                                <label class="primary_checkbox d-flex mr-12"
                                       for="complete_order1">
                                    <input type="radio"
                                           class="common-radio complete_order1"
                                           id="complete_order1"
                                           name="complete_order"
                                           value="1"
                                        <?php echo e(@$course->complete_order == 1 ? 'checked' : ''); ?>>


                                    <span class="checkmark me-2"></span>
                                    <?php echo e(__('common.Yes')); ?>

                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-none">
                    <div class="col-lg-6">
                        <div class="checkbox_wrap d-flex align-items-center">
                            <label for="course_1" class="switch_toggle me-2">
                                <input type="checkbox" name="isFree" value="1"
                                       id="edit_course_1">
                                <i class="slider round"></i>
                            </label>
                            <label
                                class="mb-0"><?php echo e(__('courses.This course is a top course')); ?></label>
                        </div>
                    </div>
                </div>
                <?php if(showEcommerce()): ?>
                    <div class="row mt-20">
                        <div class="col-lg-6">
                            <div
                                class="checkbox_wrap d-flex align-items-center mt-40">
                                <label for="edit_course_2<?php echo e($course->id); ?>"
                                       class="switch_toggle  me-2">
                                    <input type="checkbox" class="edit_course_2"
                                           id="edit_course_2<?php echo e($course->id); ?>"
                                           name="is_free"
                                           <?php if($course->price == 0): ?> checked <?php endif; ?>
                                           value="1">
                                    
                                    <i class="slider round"></i>
                                </label>
                                <label
                                    class="mb-0"><?php echo e(__('courses.This course is a free course')); ?></label>
                            </div>
                        </div>
                        <div class="col-xl-6" id="edit_price_div">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label mt-1"
                                       for=""><?php echo e(__('courses.Price')); ?></label>
                                <input class="primary_input_field" name="price"
                                       min="0"
                                       placeholder="-" value="<?php echo e(@$course->price); ?>"
                                       type="number">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-20 editDiscountDiv">
                        <div class="col-lg-6">
                            <div
                                class="checkbox_wrap d-flex align-items-center mt-40">
                                <label for="edit_course_3"
                                       class="switch_toggle  me-2">
                                    <input type="checkbox" class="edit_course_3"
                                           name="is_discount"
                                           <?php if($course->discount_price > 0): ?> checked
                                           <?php endif; ?>
                                           id="edit_course_3" value="1">
                                    <i class="slider round"></i>
                                </label>
                                <label
                                    class="mb-0"><?php echo e(__('courses.This course has discounted price')); ?></label>
                            </div>
                        </div>
                        <?php
                            if ($course->discount_price > 0) {
                                $d_price = 'block';
                            } else {
                                $d_price = 'none';
                            }
                        ?>
                        <div class="col-xl-6" id="edit_discount_price_div"
                             style="display: <?php echo e($d_price); ?>">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label mt-1"
                                       for=""><?php echo e(__('courses.Discount')); ?>

                                    <?php echo e(__('courses.Price')); ?></label>
                                <input class="primary_input_field editDiscount"
                                       name="discount_price"
                                       min="0"
                                       value="<?php echo e(@$course->discount_price); ?>"
                                       placeholder="-" type="number">
                            </div>
                        </div>
                    </div>

                    

                    <div class="row mt-20">
                        <div class="col-lg-6 mb-25">
                            <div
                                class="checkbox_wrap d-flex align-items-center mt-40">
                                <label for="iap" class="switch_toggle me-2">
                                    <input type="checkbox" id="iap" value="1"
                                           name="iap" <?php echo e(!empty($course->iap_product_id)?'checked':""); ?>>
                                    <i class="slider round"></i>
                                </label>
                                <label
                                    class="mb-0"><?php echo e(__('courses.This course is a In App purchase course')); ?></label>
                            </div>
                        </div>
                        <div
                            class="col-xl-6  <?php echo e(!empty($course->iap_product_id)?'':"d-none"); ?>"
                            id="iap_div">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for=""><?php echo e(__('courses.In App purchase product ID')); ?></label>
                                <input class="primary_input_field"
                                       name="iap_product_id" placeholder="-"
                                       id=""
                                       type="text"
                                       value="<?php echo e(old('iap_product_id',$course->iap_product_id)); ?>">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isModuleActive("SupportTicket")): ?>
                    <div class="row mt-20 mb-10">
                        <div class="col-lg-6">
                            <div
                                class="checkbox_wrap d-flex align-items-center mt-40">
                                <label for="support" class="switch_toggle me-1">
                                    <input type="checkbox" name="support"
                                           <?php echo e(isset($course) && $course->support == 1 ? 'checked' : ''); ?>

                                           class="support" id="support" value="1">
                                    <i class="slider round"></i>
                                </label>
                                <label
                                    class="mb-0"><?php echo e(__('common.Support')); ?></label>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="videoOption">
                    <div class="row mt-20 mb-10 ">
                        <div class="col-lg-6">
                            <div
                                class="checkbox_wrap d-flex align-items-center mt-40">
                                <label for="show_overview_media"
                                       class="switch_toggle me-2">
                                    <input type="checkbox" id="show_overview_media"
                                           value="1"
                                           <?php echo e($course->show_overview_media==1 ? "checked" : ""); ?> name="show_overview_media">
                                    <i class="slider round"></i>
                                </label>
                                <label
                                    class="mb-0"><?php echo e(__('courses.Show Overview Video')); ?></label>
                            </div>
                        </div>
                    </div>
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

                    <?php $__env->stopPush(); ?>
                    <div class="row mt-20 " id="overview_host_section"
                         style="display: <?php echo e($course->type==2 || $course->show_overview_media==0 ?"none":""); ?>">

                        <div class="col-xl-6  mb-25">

                            <select class="primary_select category_id" data-key="12"
                                    name="host" id="category_id12">
                                <option value=""
                                        data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Host')); ?>"><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Host')); ?></option>

                                <option
                                    data-display="<?php echo e(__('courses.Image Preview')); ?>"
                                    value="ImagePreview" <?php echo e(@$course->host=="ImagePreview"?'selected':''); ?>><?php echo e(__('courses.Image Preview')); ?>

                                </option>

                                <option value="Youtube"
                                        <?php if(@$course->host=='Youtube'): ?> Selected
                                        <?php endif; ?>
                                        <?php if(empty(@$course) && @$course->host=="Youtube"): ?> selected <?php endif; ?>
                                >
                                    Youtube
                                </option>
                                <option value="Vimeo"
                                        <?php if(@$course->host=='Vimeo'): ?> Selected
                                        <?php endif; ?>
                                        <?php if(empty(@$course) && @$course->host=="Vimeo"): ?> selected <?php endif; ?>
                                >
                                    Vimeo
                                </option>
                                <option value="VdoCipher"
                                        <?php if(@$course->host=='VdoCipher'): ?> Selected
                                        <?php endif; ?>
                                        <?php if(empty(@$course) && @$course->host=="VdoCipher"): ?> selected <?php endif; ?>>
                                    VdoCipher
                                </option>
                                <option value="Self"
                                        <?php if(@$course->host=='Self'): ?> Selected
                                        <?php endif; ?>
                                        <?php if(empty(@$course) && @$course->host=="Self"): ?> selected <?php endif; ?>
                                >
                                    Self
                                </option>

                            </select>

                        </div>
                        <?php $__env->startPush('js'); ?>
                            <script>
                                $(document).on('change', '.category_id', function () {
                                    var key = $(this).data('key');
                                    let category_id = $('#category_id' + key).find(":selected").val();

                                    if (category_id === 'Youtube' || category_id === 'URL' || category_id === 'm3u8') {
                                        $("#iframeBox" + key).hide();
                                        $("#videoUrl" + key).show();
                                        $("#vimeoUrl" + key).hide();
                                        $("#VdoCipherUrl" + key).hide();
                                        $("#vimeoVideo" + key).val('');
                                        $("#youtubeVideo" + key).val('');
                                        $("#fileupload" + key).hide();
                                        $("#bunnyStreamUrl" + key).hide();
                                        $("#media_upload" + key).hide();

                                    } else if ((category_id === 'Self') || (category_id === 'Zip') || (category_id === 'GoogleDrive') || (category_id === 'PowerPoint') || (category_id === 'Excel') || (category_id === 'Text') || (category_id === 'Word') || (category_id === 'PDF') || (category_id === 'Image') || (category_id === 'AmazonS3') || (category_id === 'SCORM') || (category_id === 'SCORM-AwsS3') || (category_id === 'XAPI') || (category_id === 'XAPI-AwsS3') || (category_id === 'H5P')) {

                                        $("#iframeBox" + key).hide();
                                        $("#fileupload" + key).show();
                                        $("#videoUrl" + key).hide();
                                        $("#vimeoUrl" + key).hide();
                                        $("#vimeoVideo" + key).val('');
                                        $("#youtubeVideo" + key).val('');
                                        $("#VdoCipherUrl" + key).hide();
                                        $("#bunnyStreamUrl" + key).hide();
                                        $("#media_upload" + key).hide();

                                    } else if (category_id === 'Vimeo') {
                                        $("#iframeBox" + key).hide();
                                        $("#videoUrl" + key).hide();
                                        $("#vimeoUrl" + key).show();
                                        $("#vimeoVideo" + key).val('');
                                        $("#youtubeVideo" + key).val('');
                                        $("#fileupload" + key).hide();
                                        $("#VdoCipherUrl" + key).hide();
                                        $("#bunnyStreamUrl" + key).hide();
                                        $("#media_upload" + key).hide();

                                    } else if (category_id === 'VdoCipher') {
                                        $("#iframeBox" + key).hide();
                                        $("#videoUrl" + key).hide();
                                        $("#vimeoUrl" + key).hide();
                                        $("#VdoCipherUrl" + key).show();
                                        $("#vimeoVideo" + key).val('');
                                        $("#youtubeVideo" + key).val('');
                                        $("#fileupload" + key).hide();
                                        $("#bunnyStreamUrl" + key).hide();
                                        $("#media_upload" + key).hide();

                                    } else if (category_id === 'Iframe') {
                                        $("#iframeBox" + key).show();
                                        $("#videoUrl" + key).hide();
                                        $("#vimeoUrl" + key).hide();
                                        $("#vimeoVideo" + key).val('');
                                        $("#youtubeVideo" + key).val('');
                                        $("#fileupload" + key).hide();
                                        $("#VdoCipherUrl" + key).hide();
                                        $("#bunnyStreamUrl" + key).hide();
                                        $("#media_upload" + key).hide();
                                    } else if (category_id === 'BunnyStorage') {
                                        $("#iframeBox" + key).hide();
                                        $("#videoUrl" + key).hide();
                                        $("#vimeoUrl" + key).hide();
                                        $("#bunnyStreamUrl" + key).show();
                                        $("#vimeoVideo" + key).val('');
                                        $("#youtubeVideo" + key).val('');
                                        $("#fileupload" + key).hide();
                                        $("#VdoCipherUrl" + key).hide();
                                        $("#media_upload" + key).hide();
                                    } else if (category_id === 'Storage') {
                                        $("#iframeBox" + key).hide();
                                        $("#videoUrl" + key).hide();
                                        $("#vimeoUrl" + key).hide();
                                        $("#bunnyStreamUrl" + key).hide();
                                        $("#vimeoVideo" + key).val('');
                                        $("#youtubeVideo" + key).val('');
                                        $("#fileupload" + key).hide();
                                        $("#VdoCipherUrl" + key).hide();
                                        $("#media_upload" + key).show();
                                        // Amaz.uploader.initForInput();

                                    } else {
                                        $("#iframeBox" + key).hide();
                                        $("#videoUrl" + key).hide();
                                        $("#vimeoUrl" + key).hide();
                                        $("#vimeoVideo" + key).val('');
                                        $("#youtubeVideo" + key).val('');
                                        $("#fileupload" + key).hide();
                                        $("#VdoCipherUrl" + key).hide();
                                        $("#bunnyStreamUrl" + key).hide();
                                        $("#media_upload" + key).hide();

                                    }

                                });
                            </script>
                        <?php $__env->stopPush(); ?>
                        <div class="col-xl-6">


                            <div class="input-effect  " id="videoUrl12"
                                 style="display:<?php if((isset($course) && ($course->host!="Youtube")) || !isset($course)): ?> none  <?php endif; ?>">

                                <input class="primary_input_field"
                                       name="trailer_link"
                                       id="youtubeVideo1"
                                       placeholder="<?php echo e(__('courses.Video URL')); ?> *"
                                       value="<?php if(isset($course) && $course->host=="Youtube"): ?><?php echo e($course->trailer_link); ?><?php endif; ?>"
                                       type="text">

                                <span class="focus-border"></span>
                                <?php if($errors->has('video_url')): ?>
                                    <span class="invalid-feedback" role="alert">
                                                                        <strong><?php echo e($errors->first('video_url')); ?></strong>
                                                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="input-effect " id="vimeoUrl12"
                                 style="display: <?php if((isset($course) && ($course->host!="Vimeo")) || !isset($course)): ?> none  <?php endif; ?>">
                                <div class="" id="">

                                    <?php if(config('vimeo.connections.main.upload_type')=="Direct"): ?>
                                        <div class="primary_file_uploader">
                                            <input
                                                class="primary-input filePlaceholder"
                                                type="text"
                                                id=""
                                                <?php echo e($errors->has('image') ? 'autofocus' : ''); ?>

                                                placeholder="<?php echo e(__('courses.Browse Video file')); ?>"
                                                readonly="">
                                            <button class="" type="button">
                                                <label
                                                    class="primary-btn small fix-gr-bg"
                                                    for="document_file_thumb_vimeo_add"><?php echo e(__('common.Browse')); ?></label>
                                                <input type="file"
                                                       class="d-none fileUpload"
                                                       name="vimeo"
                                                       id="document_file_thumb_vimeo_add">
                                            </button>
                                        </div>
                                    <?php else: ?>
                                        <select
                                            class="select2  vimeoList vimeoListForCourse"
                                            name="vimeo"
                                            id="vimeoVideo1">
                                            <option
                                                data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>"
                                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>

                                            </option>

                                            <option
                                                value="<?php echo e($course->trailer_link); ?>"
                                                selected></option>

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

                            <div class="input-effect" id="VdoCipherUrl12"
                                 style="display: <?php if((isset($editLesson) && ($editLesson->host!="VdoCipher")) || !isset($editLesson)): ?> none  <?php endif; ?>">
                                <div class="" id="">

                                    <select
                                        class="select2  vdocipherList vdocipherListForCourse"
                                        name="vdocipher"
                                        id=" ">
                                        <option
                                            data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>"
                                            value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Video')); ?>

                                        </option>
                                        <option value="<?php echo e($course->trailer_link); ?>"
                                                selected></option>
                                    </select>
                                    <?php if($errors->has('vdocipher')): ?>
                                        <span
                                            class="invalid-feedback invalid-select"
                                            role="alert">
                                                                        <strong><?php echo e($errors->first('vdocipher')); ?></strong>
                                                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="input-effect " id="fileupload12"
                                 style="display: <?php if((isset($course) && (($course->host=="Vimeo") ||  ($course->host=="Youtube")) ) || !isset($course)): ?> none  <?php endif; ?>">


                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'file','type' => 'video','mediaId' => ''.e(isset($course)?$course->trailer_link_media?->media_id:'').'','label' => ''.e(__('common.Video File')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'file','type' => 'video','media_id' => ''.e(isset($course)?$course->trailer_link_media?->media_id:'').'','label' => ''.e(__('common.Video File')).'']); ?>
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


                <div class="row">
                    <div class="col-xl-6 mt-20">
                        <label><?php echo e(__('courses.View Scope')); ?> </label>
                        <select class="primary_select " name="scope"
                                id="">
                            <option
                                value="1" <?php echo e(@$course->scope=="1"?'selected':''); ?>><?php echo e(__('courses.Public')); ?>

                            </option>

                            <option
                                <?php echo e(@$course->scope=="0"?'selected':''); ?> value="0">
                                <?php echo e(__('courses.Private')); ?>

                            </option>

                        </select>
                    </div>

                    <div class="col-xl-4 mt-25">
                        <label><?php echo e(_trans('courses.Access Limit')); ?> <?php echo e(_trans('courses.In Days')); ?>

                            (<small><?php echo e(_trans('courses.0 means Unlimited')); ?></small>
                            )</label>
                        <input class="primary_input_field " name="access_limit"
                               placeholder="<?php echo e(_trans('courses.Access Limit')); ?>"
                               id="access_limit"
                               type="number"
                               value="<?php echo e(old('access_limit',$course->access_limit)); ?>">
                    </div>
                </div>
                <?php if(isModuleActive('UpcomingCourse')): ?>
                    <div class="row mt-20">
                        <div class="col-lg-3 mb-25">
                            <div
                                class="checkbox_wrap d-flex align-items-center mt-40">
                                <label for="is_upcoming_course"
                                       class="switch_toggle me-2">
                                    <input
                                        <?php echo e(@$course->is_upcoming_course ?'checked':''); ?> type="checkbox"
                                        id="is_upcoming_course" value="1"
                                        name="is_upcoming_course">
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
                                                <input
                                                    placeholder="<?php echo e(__('courses.Publish Date')); ?>"
                                                    class="primary_input_field primary-input date form-control"
                                                    id="publish_date" type="text"
                                                    name="publish_date"
                                                    value="<?php echo e(@$course->publish_date?date('m/d/Y',strtotime(@$course->publish_date)):""); ?>"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <button class="" type="button">
                                            <i class="ti-calendar"
                                               id="start-date-icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-25 upcoming_course_div">
                            <div
                                class="checkbox_wrap d-flex align-items-center mt-40">
                                <label for="is_allow_prebooking"
                                       class="switch_toggle me-2">
                                    <input
                                        <?php echo e(@$course->is_allow_prebooking ?'checked':''); ?> type="checkbox"
                                        id="is_allow_prebooking" value="1"
                                        name="is_allow_prebooking">
                                    <i class="slider round"></i>
                                </label>
                                <label
                                    class="mb-0"><?php echo e(__('courses.Is Allow Prebooking?')); ?></label>
                            </div>
                        </div>

                        <div
                            class="col-lg-3 mb-25 upcoming_course_div booking_amount_div">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="booking_amount"><?php echo e(__('courses.Booking Amount')); ?>

                                    *</label>
                                <input
                                    class="primary_input_field booking_amount_field"
                                    name="booking_amount"
                                    placeholder="<?php echo e(__('courses.Booking Amount')); ?>"
                                    id="booking_amount"
                                    type="number"
                                    value="<?php echo e(@$course->booking_amount); ?>">
                            </div>
                        </div>

                    </div>
                <?php endif; ?>

                <div class="row mt-20">
                    <div class="col-xl-6">
                        <div class=" mb-35">
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'image','type' => 'image','mediaId' => ''.e(isset($course)?$course->image_media?->media_id:'').'','label' => ''.e(__('courses.Course Thumbnail')).'','note' => ''.e(__('student.Recommended size')).' (1170x600)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'image','type' => 'image','media_id' => ''.e(isset($course)?$course->image_media?->media_id:'').'','label' => ''.e(__('courses.Course Thumbnail')).'','note' => ''.e(__('student.Recommended size')).' (1170x600)']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-12">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label mt-1"
                                   for=""><?php echo e(__('courses.Meta keywords')); ?></label>
                            <input class="primary_input_field" name="meta_keywords"
                                   value="<?php echo e(@$course->meta_keywords); ?>"
                                   placeholder="-" type="text">
                        </div>
                    </div>

                </div>

                <?php if(Settings('frontend_active_theme')=="edume"): ?>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for=""><?php echo e(__('courses.Key Point')); ?>

                                    (1)</label>
                                <input class="primary_input_field"
                                       name="what_learn1" placeholder="-"
                                       type="text"
                                       value="<?php echo e(old('what_learn1',@$course->what_learn1)); ?>">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for=""><?php echo e(__('courses.Key Point')); ?>

                                    (2) </label>
                                <input class="primary_input_field"
                                       name="what_learn2" placeholder="-"
                                       type="text"
                                       value="<?php echo e(old('what_learn2',@$course->what_learn2)); ?>">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row">

                    <div class="col-xl-12">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label mt-1"
                                   for=""><?php echo e(__('courses.Meta description')); ?></label>
                            <textarea id="my-textarea" class="primary_input_field"
                                      name="meta_description" style="height: 200px"
                                      rows="3"><?php echo @$course->meta_description; ?></textarea>
                        </div>

                    </div>

                </div>

                <div class="col-lg-12 text-center pt_15">
                    <div class="d-flex justify-content-center">
                        <button class="primary-btn semi_large2  fix-gr-bg"
                                id="save_button_parent" type="submit"><i
                                class="ti-check"></i> <?php echo e(__('common.Update')); ?> <?php echo e(__('courses.Course')); ?>

                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>


</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/parts_of_course_details/_course_details_tab.blade.php ENDPATH**/ ?>