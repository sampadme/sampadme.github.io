<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e($course->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <?php if(isRtl()): ?>
        <link href="<?php echo e(asset('public/frontend/infixlmstheme/css/full_screen_rtl.css')); ?><?php echo e(assetVersion()); ?>"
              rel="stylesheet"/>
    <?php else: ?>
        <link href="<?php echo e(asset('public/frontend/infixlmstheme/css/full_screen.css')); ?><?php echo e(assetVersion()); ?>" rel="stylesheet"/>
    <?php endif; ?>
    
    <link href="<?php echo e(asset('public/backend/css/summernote-bs4.min.css')); ?><?php echo e(assetVersion()); ?>" rel="stylesheet">
    <style>
        .default-font {
            font-family: "Jost", sans-serif;
            font-weight: normal;
            font-style: normal;
            font-weight: 400;
        }

        .primary_checkbox {
            z-index: 99;
        }

        @media (max-width: 767.98px) {
            .contact_btn {
                margin: 0 !important;
                justify-content: space-between;
            }

            #video-placeholder {
                height: 300px;
            }
        }

        .course__play_warp.courseListPlayer:before {
            background-color: transparent;
        }

        @media (max-width: 991.98px) {
            .mobile-min-height {
                height: 330px !important;
            }
        }

        #ExternalHeaderViewerChromeTopBars {
            display: none !important;
        }

        .quiz_questions_wrapper {
            height: 100%;
        }

        .question_number_lists {
            max-height: 320px;
            overflow: auto;
        }

        .logo_img {
            height: 50px !important;
        }

        @media (max-width: 991.98px) {
            .header_area .header__wrapper .header__left .logo_img img {
                padding: .5rem !important
            }
        }

        .inline-YTPlayer {
            height: auto !important;
        }

        .quiz_score_wrapper .quiz_test_body .score_view_wrapper {
            justify-content: space-around;
        }

        html[dir=rtl] .fa-angle-left,
        html[dir=rtl] .fa-angle-right {
            transform: scaleX(-1)
        }

        @media (max-width: 991px) {
            .course_fullview_wrapper .video_iframe {
                position: initial !important;
                height: 400px;
                width: 100%;
            }
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 550px;
            }
        }

        @media (min-width: 1080px) {
            .modal-dialog {
                max-width: 800px;
            }
        }

        .conversition_box .single_comment_box .comment_box_inner .comment_box_info .comment_box_text span {
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 10px;
            margin-top: 2px;
            display: block;
            color: #7b7887;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <?php
        $video_lesson_hosts=['Iframe','Image','PDF','Word','Excel','PowerPoint','Text','Zip','GoogleDrive','H5P'];
    ?>
    <?php $__env->startPush('js'); ?>
        <script>
            $(document).on('click', '.showHistory', function (e) {
                e.preventDefault();
                $("#historyDiv").toggle('slow')
            });
        </script>
        <script>
            var completeRequest = false;
        </script>
    <?php $__env->stopPush(); ?>

    <?php
        if ($lesson->lessonQuiz->random_question==1){
        $questions =$lesson->lessonQuiz->assignRand;
        }else{
        $questions =$lesson->lessonQuiz->assign;
       }
    ?>

    <script>
        <?php if(auth()->check()): ?>
            window.full_name = "<?php echo e(auth()->user()->name); ?>";
        window.course_name = "<?php echo e($course->title); ?>";
        <?php if(isModuleActive('Org')): ?>
            window.org_chart_name = "<?php echo e(auth()->user()->branch->group); ?>";
        <?php endif; ?>
            <?php else: ?>
            window.full_name = "Guest";
        window.course_name = "<?php echo e($course->title); ?>";
        <?php if(isModuleActive('Org')): ?>
            window.org_chart_name = "";
        <?php endif; ?>
        <?php endif; ?>
    </script>
    <header>
        <div id="sticky-header" class="header_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header__wrapper flex-wrap">
                            <div class="header__left d-flex align-items-center">
                                <div class="">
                                    <a class="logo_img" href="<?php echo e(url('/')); ?>">
                                        <img class="p-2" src="<?php echo e(getLogoImage(Settings('logo') )); ?>" width="150"
                                             alt="<?php echo e(Settings('site_name')); ?>">
                                    </a>
                                </div>
                                <div class="category_search d-none d-lg-flex category_box_iner">
                                    <div class="input-group-prepend2 ps-3 ">
                                        <a class="headerTitle"
                                           href="<?php echo e(courseDetailsUrl($course->id, $course->type, $course->slug)); ?>">
                                            <h4 class="headerTitle"><?php echo e($course->title); ?></h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header__right">
                                <div class="contact_wrap d-flex align-items-center flex-wrap mx-0">
                                    <div class="contact_btn d-flex align-items-center flex-wrap">
                                        <?php if(in_array($lesson->host, $video_lesson_hosts)): ?>
                                            <button
                                                class="theme_btn small_btn2 p-2 me-2 mr-lg-4 fs-14 completeAndPlayNext">
                                                <?php echo e(__('frontend.Mark as Complete')); ?></button>
                                        <?php endif; ?>
                                        <?php if(isset($lessons)): ?>
                                            <div class="d-flex aling-items-center">
                                                <label class="lmsSwitch_toggle pe-2" for="autoNext">
                                                    <input type="checkbox" id="autoNext" checked>
                                                    <div class="slider round"></div>
                                                </label>
                                                <span class="ps-2 text-nowrap"><?php echo e(__('frontend.Auto Next')); ?></span>
                                            </div>
                                            <div class="pl-20 text-end ms-3 d-flex align-items-center">
                                                <?php
                                                    $last_key = array_key_last($lesson_ids);
                                                    $last_previous_one = array_key_last($lesson_ids) - 1;
                                                    $current_page = (int) showPicName(Request::url());

                                                    $current_index = array_search(showPicName(Request::url()), $lesson_ids);
                                                ?>
                                                <?php if(0 == array_search($current_page, $lesson_ids)): ?>
                                                    <a href="#" disabled="disabled"
                                                       class="header__common_btn theme_button_disabled disabled">
                                                        <i class="fa fa-angle-left"></i>
                                                    </a>
                                                <?php else: ?>
                                                    <a href="#"
                                                       onclick="goFullScreen(<?php echo e($course->id); ?>,<?php echo e($lesson_ids[$current_index - 1]); ?>)"
                                                       class="header__common_btn"><i class="fa fa-angle-left"></i>
                                                    </a>
                                                <?php endif; ?>
                                                <?php if(array_search($current_page, $lesson_ids) < array_search(end($lesson_ids), $lesson_ids)): ?>
                                                    <a href="#" id="next_lesson_btn"
                                                       onclick="goFullScreen(<?php echo e($course->id); ?>,<?php echo e($lesson_ids[$current_index + 1]); ?>)"
                                                       class="header__common_btn ms-2">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                <?php else: ?>
                                                    <a href="#" disabled
                                                       class="header__common_btn theme_button_disabled ms-2 disabled"
                                                       style="opacity: 1">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                        <a href="javascript:void(0)" class="ms-2 mobile_progress">
                                            <div class="progress p-2" data-percentage="<?php echo e($percentage); ?>">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <div class="progress-value">
                                                    <div class="headerSubProcess">
                                                        <?php echo e($percentage); ?>%
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="header__common_btn dropdown ms-2">
                                            <button
                                                class="d-block w-100 h-100 bg-transparent border-0 dropdown-toggle outline-none border-0 p-0 currentColor"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                       data-bs-target="#ShareLink"><i
                                                            class="fa fa-share fs-12 me-2"></i><?php echo e(__('frontend.Share')); ?>

                                                    </a></li>
                                                <?php if(Auth::check()): ?>
                                                    <?php if(Auth::user()->role_id == 3): ?>
                                                        <?php if(!in_array(Auth::user()->id, $reviewer_user_ids)): ?>
                                                            <li>
                                                                <a href="#" data-bs-toggle="modal"
                                                                   data-bs-target="#courseRating" class="dropdown-item">
                                                                    <i class="fa fa-star me-2 fs-12"></i><?php echo e(__('frontend.Leave a rating')); ?>

                                                                </a>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="course_fullview_wrapper">
        <?php if($lesson->is_quiz == 1): ?>
            <?php if(count($result) != 0): ?>
                <div class="quiz_score_wrapper w-100 mt_70">
                    <?php if(!isset($_GET['done'])): ?>
                        <div class="quiz_test_header">
                            <h3><?php echo e(__('student.Your Exam Score')); ?></h3>
                        </div>
                        <div class="quiz_test_body">
                            <h3><?php echo e(__('student.Congratulations! You’ve completed')); ?> <?php echo e($course->quiz->title); ?></h3>
                            <?php if($result['publish'] == 1): ?>
                                <div class="">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="score_view_wrapper">
                                                <div class="single_score_view">
                                                    <p><?php echo e(__('student.Exam Score')); ?>:</p>
                                                    <ul>
                                                        <li class="mb_15">
                                                            <label class="primary_checkbox2 d-flex">
                                                                <input checked="" type="checkbox" disabled>
                                                                <span class="checkmark mr_10"></span>
                                                                <span class="label_name"><?php echo e($result['totalCorrect']); ?>

                                                                    <?php echo e(__('student.Correct Answer')); ?></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="primary_checkbox2 error_ans d-flex">
                                                                <input checked="" name="qus" type="checkbox"
                                                                       disabled>
                                                                <span class="checkmark mr_10"></span>
                                                                <span class="label_name"><?php echo e($result['totalWrong']); ?>

                                                                    <?php echo e(__('student.Wrong Answer')); ?></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="single_score_view d-flex">
                                                    <div class="row">
                                                        <div class="col md-2">
                                                            <p><?php echo e(__('frontend.Start')); ?></p>
                                                            <span> <?php echo e($result['start_at']); ?> </span>
                                                        </div>
                                                        <div class="col md-2">
                                                            <p><?php echo e(__('frontend.Finish')); ?></p>
                                                            <span> <?php echo e($result['end_at']); ?> </span>
                                                        </div>
                                                        <div class="col md-2">
                                                            <p class="nowrap"><?php echo e(__('frontend.Duration')); ?>

                                                                (<?php echo e(__('frontend.Minute')); ?>)</p>
                                                            <h4 class="f_w_700 "> <?php echo e($result['duration']); ?> </h4>
                                                        </div>
                                                        <div class="col md-2">
                                                            <p><?php echo e(__('frontend.Mark')); ?></p>
                                                            <h4 class="f_w_700 "> <?php echo e($result['score']); ?>

                                                                /<?php echo e($result['totalScore']); ?> </h4>
                                                        </div>
                                                        <div class="col md-2">
                                                            <p><?php echo e(__('frontend.Percentage')); ?></p>
                                                            <h4 class="f_w_700 "> <?php echo e($result['mark']); ?>% </h4>
                                                        </div>
                                                        <div class="col md-2">
                                                            <p><?php echo e(__('frontend.Rating')); ?></p>
                                                            <h4 class="f_w_700 theme_text <?php echo e($result['text_color']); ?>">

                                                                <?php if($result['status'] != 'Failed'): ?>
                                                                    <?php echo e(__('frontend.Passed')); ?>

                                                                <?php else: ?>
                                                                    <?php echo e(__('frontend.Failed')); ?>

                                                                <?php endif; ?>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sumit_skip_btns d-flex align-items-center">
                                    <?php if(isset($result) && $result['status'] != 'Failed'): ?>
                                        <form action="<?php echo e(route('lesson.complete')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" value="<?php echo e($course->id); ?>" name="course_id">
                                            <input type="hidden" value="<?php echo e($lesson->id); ?>" name="lesson_id">
                                            <input type="hidden" value="1" name="status">
                                            <button type="submit"
                                                    class="theme_btn    mr_20"><?php echo e(__('student.Done')); ?></button>
                                        </form>
                                    <?php endif; ?>
                                    <?php if(count($preResult) != 0): ?>
                                        <button type="button"
                                                class="theme_line_btn  showHistory  mr_20"><?php echo e(__('frontend.View History')); ?></button>
                                    <?php endif; ?>
                                    <a href="<?php echo e($lesson->lessonQuiz->show_ans_sheet == 1 ? route('quizResultPreview', $_GET['quiz_result_id'] ?? 0) : '#'); ?>"
                                       data-quiz_test_id="<?php echo e($_GET['quiz_result_id'] ?? 0); ?>"
                                       title="<?php echo e($lesson->lessonQuiz->show_ans_sheet != 1 ? __('quiz.Answer Sheet is currently locked by Teacher') : ''); ?>"
                                       class=" font_1 font_16 f_w_600 theme_text3 "><?php echo e(__('student.See Answer Sheet')); ?></a>
                                </div>
                            <?php else: ?>
                                <span><?php echo e(__('quiz.Please wait till completion marking process')); ?></span>
                            <?php endif; ?>


                            <div id="historyDiv" class="pt-5 " style="display:none;">
                                <?php if(count($preResult) != 0): ?>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th><?php echo e(__('common.Date')); ?></th>
                                            <th><?php echo e(__('quiz.Marks')); ?></th>
                                            <th><?php echo e(__('quiz.Percentage')); ?></th>
                                            <th><?php echo e(__('common.Rating')); ?></th>
                                            <th><?php echo e(__('common.Details')); ?></th>
                                        </tr>
                                        <?php $__currentLoopData = $preResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($pre['date']); ?></td>
                                                <td><?php echo e($pre['score']); ?>/<?php echo e($pre['totalScore']); ?></td>
                                                <td><?php echo e($pre['mark']); ?>%</td>
                                                <td class="<?php echo e($pre['text_color']); ?>">
                                                    <?php if($pre['status'] != 'Failed'): ?>
                                                        <?php echo e(__('frontend.Passed')); ?>

                                                    <?php else: ?>
                                                        <?php echo e(__('frontend.Failed')); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo e($lesson->lessonQuiz->show_ans_sheet == 1 ? route('quizResultPreview', $pre['quiz_test_id']) : '#'); ?>"
                                                       data-quiz_test_id="<?php echo e($pre['quiz_test_id']); ?>"
                                                       title="<?php echo e($lesson->lessonQuiz->show_ans_sheet != 1 ? __('quiz.Answer Sheet is currently locked by Teacher') : ''); ?>"
                                                       class=" font_1 font_16 f_w_600 theme_text3    <?php if($lesson->lessonQuiz->show_ans_with_explanation == 1): ?>
                                       submit_q_btn
                                       <?php endif; ?> "><?php echo e(__('student.See Answer Sheet')); ?></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                <?php endif; ?>
                            </div>
                            <?php if($lesson->lessonQuiz->show_ans_with_explanation == 1): ?>
                                <div class="mt-3">
                                    <?php if (isset($component)) { $__componentOriginal0be2f568d39be9235ff86735be88bf55 = $component; } ?>
<?php $component = App\View\Components\QuizDetailsQuestionList::resolve(['quiz' => $lesson->lessonQuiz] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('quiz-details-question-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\QuizDetailsQuestionList::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0be2f568d39be9235ff86735be88bf55)): ?>
<?php $component = $__componentOriginal0be2f568d39be9235ff86735be88bf55; ?>
<?php unset($__componentOriginal0be2f568d39be9235ff86735be88bf55); ?>
<?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <h3 class="text-center"><?php echo e(__('student.Congratulations! You’ve completed')); ?>

                            <?php echo e($lesson->lessonQuiz->title); ?></h3>

                    <?php endif; ?>
                </div>
            <?php else: ?>
                <div class="quiz_questions_wrapper w-100 mt_70 ms-5 me-5">
                    <!-- quiz_test_header  -->

                    <?php if($alreadyJoin != 0 && $lesson->lessonQuiz->multiple_attend == 0): ?>
                        <div class="quiz_test_header d-flex justify-content-between align-items-center">
                            <div class="quiz_header_left text-center">
                                <h3><?php echo e(__('frontend.Sorry! You already attempted this quiz')); ?></h3>
                            </div>


                        </div>
                    <?php else: ?>
                        <div class="quiz_test_header d-flex justify-content-between align-items-center">
                            <div class="quiz_header_left">
                                <h3><?php echo e($lesson->lessonQuiz->title); ?>

                                </h3>
                            </div>

                            <div class="quiz_header_right">

                                <span class="question_time">
                                    <?php
                                        $timer = 0;

                                        if (!empty($lesson->lessonQuiz->question_time_type == 1)) {
                                            $timer = $lesson->lessonQuiz->question_time;
                                        } else {
                                            $timer = $lesson->lessonQuiz->question_time * count($questions);
                                        }

                                    ?>

                                    <span id="timer"><?php echo e($timer); ?>:00</span> <?php echo e(__('quiz.Min')); ?></span>
                                <p><?php echo e(__('student.Left of this Section')); ?></p>
                            </div>
                        </div>
                        <form action="<?php echo e(route('quizSubmit')); ?>" method="POST" id="quizForm">
                            <input type='hidden' name="from" value="course">
                            <input type="hidden" name="courseId" value="<?php echo e($course->id); ?>">
                            <input type="hidden" name="quizType" value="1">
                            <input type="hidden" name="quizId" value="<?php echo e($lesson->lessonQuiz->id); ?>">
                            <input type="hidden" name="question_review" id="question_review"
                                   value="<?php echo e($lesson->lessonQuiz->question_review); ?>">
                            <input type="hidden" name="start_at" value="">
                            <input type="hidden" name="quiz_test_id" value="">
                            <input type="hidden" name="quiz_start_url" value="<?php echo e(route('quizTestStart')); ?>">
                            <input type="hidden" name="single_quiz_submit_url" value="<?php echo e(route('singleQuizSubmit')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="quiz_test_body ">
                                <div class="tabControl">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="tab-content" id="pills-tabContent">
                                                <?php
                                                    $count = 1;
                                                ?>
                                                <?php if(isset($questions)): ?>
                                                    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php
                                                            $options = [];
                                                            if (isset($assign->questionBank->questionMu)) {
                                                                $options = $assign->questionBank->questionMu;
                                                            }
                                                        ?>
                                                        <div
                                                            class="tab-pane fade  <?php echo e($key == 0 ? 'active show' : ''); ?> singleQuestion"
                                                            data-qus-id="<?php echo e($assign->id); ?>"
                                                            data-qus-type="<?php echo e($assign->questionBank->type); ?>"
                                                            id="pills-<?php echo e($assign->id); ?>" role="tabpanel"
                                                            aria-labelledby="pills-home-tab<?php echo e($assign->id); ?>">
                                                            <div class="question_list_header">

                                                            </div>
                                                            <div class="multypol_qustion mb_30">
                                                                <h4 class="font_18 f_w_700 mb-0"> <?php echo @$assign->questionBank->question; ?>

                                                                </h4>
                                                                <small>(<?php echo e(__('quiz.Choose')); ?> <span
                                                                        class="questionAnsTotal text-danger fw-bold">
                                                                        <?php echo e(count($options->where('status', 1))); ?></span>
                                                                    <?php if(count($options->where('status', 1)) <= 1): ?>
                                                                        <?php echo e(__('quiz.answer')); ?>)
                                                                    <?php else: ?>
                                                                        <?php echo e(__('quiz.answers')); ?>)
                                                                    <?php endif; ?>
                                                                </small>
                                                            </div>
                                                            <input type="hidden" class="question_type"
                                                                   name="type[<?php echo e($assign->questionBank->id); ?>]"
                                                                   value="<?php echo e(@$assign->questionBank->type); ?>">
                                                            <input type="hidden" class="question_id"
                                                                   name="question[<?php echo e($assign->questionBank->id); ?>]"
                                                                   value="<?php echo e(@$assign->questionBank->id); ?>">

                                                            <?php if($assign->questionBank->type == 'M'): ?>
                                                                <ul class="quiz_select">
                                                                    <?php if(isset($assign->questionBank->questionMu)): ?>
                                                                        <?php $__currentLoopData = @$assign->questionBank->questionMu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <li>
                                                                                <label
                                                                                    class="primary_bulet_checkbox d-flex">
                                                                                    <input class="quizAns"
                                                                                           name="ans[<?php echo e($option->question_bank_id); ?>][]"
                                                                                           type="checkbox"
                                                                                           value="<?php echo e($option->id); ?>">

                                                                                    <span
                                                                                        class="checkmark mr_10"></span>
                                                                                    <span
                                                                                        class="label_name"><?php echo e($option->title); ?>

                                                                                    </span>
                                                                                </label>
                                                                            </li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>
                                                                </ul>
                                                            <?php else: ?>
                                                                <div style="margin-bottom: 20px;">
                                                                    <textarea class="textArea lms_summernote quizAns"
                                                                              id="editor<?php echo e($assign->id); ?>" cols="30"
                                                                              rows="10"
                                                                              name="ans[<?php echo e($assign->questionBank->id); ?>]"></textarea>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(!empty($assign->questionBank->image)): ?>
                                                                <div class="ques_thumb mb_50">
                                                                    <img src="<?php echo e(asset($assign->questionBank->image)); ?>"
                                                                         class="img-fluid" alt="">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div
                                                                class="sumit_skip_btns d-flex align-items-center mb_50">
                                                                <?php if(count($questions) != $count): ?>
                                                                    <span class="theme_btn small_btn  mr_20 next"
                                                                          data-question_id="<?php echo e($assign->questionBank->id); ?>"
                                                                          data-assign_id="<?php echo e($assign->id); ?>"
                                                                          data-question_type="<?php echo e($assign->questionBank->type); ?>"
                                                                          id="next"><?php echo e(__('student.Continue')); ?></span>
                                                                    <span
                                                                        class=" font_1 font_16 f_w_600 theme_text3 submit_q_btn skip"
                                                                        id="skip"><?php echo e(__('student.Skip')); ?>

                                                                        <?php echo e(__('frontend.Question')); ?></span>
                                                                <?php else: ?>
                                                                    <button type="button"
                                                                            data-question_id="<?php echo e($assign->questionBank->id); ?>"
                                                                            data-assign_id="<?php echo e($assign->id); ?>"
                                                                            data-question_type="<?php echo e($assign->questionBank->type); ?>"
                                                                            class="submitBtn theme_btn small_btn  mr_20">
                                                                        <?php echo e(__('student.Submit')); ?>

                                                                    </button>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <?php
                                                            $count++;
                                                        ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">

                                            <?php
                                                $count2 = 1;
                                            ?>

                                            <div class="question_list_header">
                                                <div class="question_list_top">
                                                    <p><?php echo e(__('quiz.Question')); ?> <span
                                                            id="currentNumber"><?php echo e($count2); ?></span>
                                                        <?php echo e(__('common.out of')); ?> <?php echo e(count($questions)); ?></p>
                                                </div>
                                            </div>
                                            <div class="nav question_number_lists" id="nav-tab" role="tablist">
                                                <?php if(isset($questions)): ?>
                                                    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a class="nav-link questionLink link_<?php echo e($assign->id); ?> <?php echo e($key2 == 0 ? 'skip_qus' : 'pouse_qus'); ?>"
                                                           data-bs-toggle="tab" href="#pills-<?php echo e($assign->id); ?>"
                                                           role="tab" aria-controls="nav-home"
                                                           data-qus="<?php echo e($assign->id); ?>"
                                                           aria-selected="true"><?php echo e($count2); ?></a>
                                                        <?php
                                                            $count2++;
                                                        ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>



                <?php echo $__env->make(theme('partials._quiz_submit_confirm_modal'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make(theme('partials._quiz_start_confirm_modal'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        <?php elseif($lesson->is_assignment == 1): ?>
            <?php if(isModuleActive('Assignment')): ?>

                <?php

                    $assignment_info = $lesson->assignmentInfo;
                    if (Auth::check()) {
                        $submit_info = Modules\Assignment\Entities\InfixSubmitAssignment::assignmentLastSubmitted($assignment_info->id, Auth::user()->id);

                        if (Auth::user()->role_id == 1) {
                            $sty = '-150px';
                        } else {
                            if ($submit_info != null) {
                                $sty = '50px';
                            } else {
                                $sty = '280px';
                            }
                        }
                    } else {
                        $submit_info = null;
                        if ($submit_info != null) {
                            $sty = '50px';
                        } else {
                            $sty = '280px';
                        }
                    }
                ?>
                <div class="col-lg-12 ps-5">

                    <style>
                        .assignment_info {
                            margin-top: 10px;
                        }
                    </style>
                    <div class="table-responsive-md table-responsive-sm assignment-info-table">
                        <table class="table">
                            <thead>
                            <h3 class="mb-0 "><?php echo e(__('assignment.Assignment')); ?> <?php echo e(__('common.Details')); ?></h3>
                            </thead>
                            <tr class="nowrap">
                                <td>
                                    <?php echo e(__('common.Title')); ?>

                                </td>
                                <td>
                                    : <?php echo e(@$assignment_info->title); ?>

                                </td>
                                <td>
                                    <?php echo e(__('courses.Course')); ?>

                                </td>
                                <td>
                                    <?php if($assignment_info->course->title): ?>
                                        : <?php echo e(@$assignment_info->course->title); ?>

                                    <?php else: ?>
                                        : <?php echo e(__('frontend.Not Assigned')); ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr class="nowrap">
                                <td>
                                    <?php echo e(__('assignment.Marks')); ?>

                                </td>
                                <td>
                                    : <?php echo e(@$assignment_info->marks); ?>

                                </td>
                                <td>
                                    <?php echo e(__('assignment.Min Percentage')); ?>

                                </td>
                                <td>
                                    : <?php echo e(@$assignment_info->min_parcentage); ?>%
                                </td>
                            </tr>
                            <?php if($submit_info != null): ?>
                                <tr class="nowrap">
                                    <td>
                                        <?php echo e(__('assignment.Obtain Marks')); ?>

                                    </td>
                                    <td>
                                        : <?php echo e(@$submit_info->marks); ?>

                                    </td>
                                    <td>
                                        <?php echo e(__('common.Status')); ?>

                                    </td>
                                    <td>
                                        :

                                        <?php if($submit_info->assigned->pass_status == 1): ?>
                                            <?php echo e(__('frontend.Pass')); ?>

                                        <?php elseif($submit_info->assigned->pass_status == 2): ?>
                                            <?php echo e(__('frontend.Fail')); ?>

                                        <?php else: ?>
                                            <?php echo e(__('frontend.Not Marked')); ?>

                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endif; ?>

                            <tr>
                                <td>
                                    <?php echo e(__('assignment.Submit Date')); ?>

                                </td>
                                <td>
                                    : <?php echo e(showDate(@$assignment_info->last_date_submission)); ?>

                                </td>
                                <td>
                                    <?php echo e(__('assignment.Attachment')); ?>

                                </td>
                                <td>
                                    <?php if(file_exists($assignment_info->attachment)): ?>
                                        : <a href="<?php echo e(asset(@$assignment_info->attachment)); ?>"
                                             download="<?php echo e(@$assignment_info->title); ?>_attachment"><?php echo e(__('common.Download')); ?></a>
                                    <?php endif; ?>
                                </td>
                            </tr>

                        </table>
                    </div>


                    <div class="row assignment_info">
                        <div class="col-lg-2">
                            <?php echo e(__('assignment.Description')); ?>

                        </div>
                        <div class="col-lg-12">
                            <?php echo @$assignment_info->description; ?>

                        </div>
                    </div>

                    <?php
                        $todate = today()->format('Y-m-d');
                    ?>
                    <?php if(empty($submit_info)): ?>
                        <?php if(isset($assignment_info->last_date_submission) && Auth::user()->role_id == 3): ?>
                            <?php if(
                                $todate <= $assignment_info->last_date_submission ||
                                    (isset($submit_info) && $submit_info->assigned->pass_status == 0)): ?>
                                <?php echo $__env->make(theme('partials._assignment_submit_section'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if(isset($submit_info) && $submit_info->assigned->pass_status == 0 && Auth::user()->role_id == 3): ?>
                                <?php echo $__env->make(theme('partials._assignment_submit_section'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>

                </div>
            <?php endif; ?>
        <?php else: ?>
            <input type="hidden" id="course_id" value="<?php echo e($lesson->course_id); ?>">
            <script>
                var course_id = document.getElementById('course_id').value;
            </script>
            <?php if($lesson->host == 'Youtube'): ?>
                <?php
                    if (Str::contains($lesson->video_url, '&')) {
                        $video_id = explode('=', $lesson->video_url);
                        $youtube_url = youtubeVideo($video_id[1]);
                    } else {
                        $youtube_url = getVideoId(showPicName(@$lesson->video_url));
                    }
                ?>
                <?php if(Settings('youtube_default_player')): ?>
                    <div style="" id="video-placeholder"></div>
                    <input class="d-none" type="text" id="progress-bar">
                    <input type="hidden" name="" id="youtube_video_id" value="<?php echo e($youtube_url); ?>">

                    <?php $__env->startPush('js'); ?>
                        <script src="https://www.youtube.com/iframe_api" defer></script>
                        <script>
                            var source_video_id = $('#youtube_video_id').val();
                            var player;

                            // val youtube_video_id=$('#youtube_video_id').val();
                            function onYouTubeIframeAPIReady() {
                                player = new YT.Player('video-placeholder', {
                                    videoId: source_video_id,
                                    height: '100%',
                                    width: '100%',
                                    host: '<?php echo e(request()->secure() ? 'https' : 'http'); ?>://www.youtube-nocookie.com',
                                    playerVars: {
                                        color: 'white',
                                        controls: <?php echo e(Settings('show_seek_bar') ? 1 : 0); ?>,
                                        showinfo: 0,
                                        // rel: 0,
                                        modestbranding: 1,
                                        enablejsapi: 1,
                                        iv_load_policy: 3,
                                        html5: 1,
                                        fs: 1,
                                        cc_load_policy: 1,
                                        start: 0,
                                        origin: window.location.host
                                    },
                                    events: {
                                        onReady: initialize

                                    }
                                });

                            }

                            function initialize() {
                                updateTimerDisplay();
                                updateProgressBar();

                                player.playVideo();
                                console.log('play');
                                time_update_interval = setInterval(function () {
                                    updateTimerDisplay();
                                    updateProgressBar();
                                }, 1000)

                            }


                            function updateProgressBar() {
                                $('#progress-bar').val((player.getCurrentTime() / player.getDuration()) * 100);
                            }

                            function updateTimerDisplay() {
                                $('#currentTime').text(formatTime(player.getCurrentTime()));
                                $('#totalTime').text(formatTime(player.getDuration()));
                                //mark as complete before 1 second
                                if (player.getCurrentTime() >= (player.getDuration() - 1)) {
                                    if (!completeRequest) {
                                        lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>);
                                        completeRequest = true;
                                    }

                                }
                            }


                            function formatTime(time) {
                                time = Math.round(time);
                                var minutes = Math.floor(time / 60),
                                    seconds = time - minutes * 60;
                                seconds = seconds < 10 ? '0' + seconds : seconds;
                                return minutes + ":" + seconds;
                            }

                            $('#progress-bar').on('mouseup touchend', function (e) {
                                var newTime = player.getDuration() * (e.target.value / 100);
                                player.seekTo(newTime);
                            });

                            function updateProgressBar() {
                                $('#progress-bar').val((player.getCurrentTime() / player.getDuration()) * 100);
                            }

                        </script>
                    <?php $__env->stopPush(); ?>
                <?php else: ?>
                    <link href="<?php echo e(asset('public/frontend/infixlmstheme/plugins/css/jquery.mb.YTPlayer.min.css')); ?>"
                          media="all" rel="stylesheet" type="text/css">

                    <script src="<?php echo e(asset('public/frontend/infixlmstheme/plugins/jquery.mb.YTPlayer.js')); ?>"></script>

                    <div class="video_iframe d-flex justify-content-center align-items-center" id="video-id"
                         data-property="{videoURL:'http://youtu.be/<?php echo e($youtube_url); ?>',containment:'self',   mute:false, startAt:0, loop:false, opacity:1,seekbar:<?php echo e(Settings('show_seek_bar') ? 'true' : 'false'); ?>}">
                     Loading...
                    </div>
                    <script>
                        jQuery(function () {
                            $("#video-id").YTPlayer();

                            $("#video-id").on("YTPEnd", function (e) {
                                if (!completeRequest) {
                                    lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>);
                                    completeRequest = true;
                                }
                            });
                        });
                    </script>
                <?php endif; ?>
            <?php endif; ?>
            

            <?php if($lesson->host == 'Vimeo'): ?>
                <div class="video_wrapper">
                    <iframe class="video_iframe" id="video-id"
                            src="https://player.vimeo.com/video/<?php echo e(getVideoId(showPicName(@$lesson->video_url))); ?>?autoplay=1&"
                            frameborder="0" controls="1" allowfullscreen></iframe>
                </div>
                <script src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>

                <?php $__env->startPush('js'); ?>
                    <script src='https://player.vimeo.com/api/player.js'></script>
                    <script>
                        $(function () {
                            var iframe = $('#video-id')[0];
                            var player = new Vimeo.Player(iframe);
                            var status = $('.status');


                            player.on('pause', function () {
                                console.log('paused');
                            });

                            player.on('ended', function () {
                                console.log('ended');
                                console.log(completeRequest)
                                if (!completeRequest) {
                                    lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>);
                                    completeRequest = true;
                                }
                                status.text('End');


                            });

                            player.on('timeupdate', function (data) {
                                console.log(data.seconds + 's played');
                            });

                        });
                    </script>
                <?php $__env->stopPush(); ?>
            <?php endif; ?>
            <?php $__env->startPush('js'); ?>
                <script>
                    $("#autoNext").change(function () {
                        if ($(this).is(':checked')) {
                            localStorage.setItem('autoNext', 1);
                        } else {
                            localStorage.setItem('autoNext', 0);

                        }

                    });
                    if (localStorage.getItem('autoNext') == 0) {
                        $("#autoNext").prop('checked', false);
                    }
                    $("#autoNext").trigger('change');

                    function lessonAutoComplete(course_id, lesson_id) {
                        let status = $('#single_lesson_' + lesson_id).find('[type=checkbox]');
                        if (status.is(":checked")) {
                            return true;
                        }
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });


                        $.ajax({
                            type: 'GET',
                            "_token": "<?php echo e(csrf_token()); ?>",
                            url: '<?php echo e(route('lesson.complete.ajax')); ?>',
                            data: {
                                course_id: course_id,
                                lesson_id: lesson_id
                            },
                            success: function (data) {
                                if ($('#autoNext').is(':checked')) {
                                    <?php if(isModuleActive('Org') && $lesson->host == 'SCORM'): ?>
                                    $('#single_lesson_' + lesson_id).find('[type=checkbox]').prop('checked', true);
                                    <?php else: ?>
                                    reaload();
                                    <?php endif; ?>

                                }

                            }
                        });

                        function reaload() {
                            if ($('#next_lesson_btn').length) {
                                jQuery('#next_lesson_btn').click();
                            } else {
                                location.reload();
                            }
                        }

                        if (window.outerWidth < 425) {
                            $('.courseListPlayer').toggleClass("active");
                            $('.course_fullview_wrapper').toggleClass("active");
                        }
                    }
                </script>
            <?php $__env->stopPush(); ?>
            <?php if($lesson->host == 'VdoCipher'): ?>
                <div id="embedBox" class="video_iframe"></div>

                <script>
                    (function (v, i, d, e, o) {
                        v[o] = v[o] || {
                            add: function V(a) {
                                (v[o].d = v[o].d || []).push(a);
                            }
                        };
                        if (!v[o].l) {
                            v[o].l = 1 * new Date();
                            a = i.createElement(d);
                            m = i.getElementsByTagName(d)[0];
                            a.async = 1;
                            a.src = e;
                            m.parentNode.insertBefore(a, m);
                        }
                    })(
                        window,
                        document,
                        "script",
                        "https://cdn-gce.vdocipher.com/playerAssets/1.6.10/vdo.js",
                        "vdo"
                    );
                    vdo.add({
                        otp: "<?php echo e($lesson->otp); ?>",
                        playbackInfo: "<?php echo e($lesson->playbackInfo); ?>",
                        theme: "9ae8bbe8dd964ddc9bdb932cca1cb59a",
                        container: document.querySelector("#embedBox"),
                        autoplay: true
                    });
                </script>

                <script>
                    var isRedirect = false;

                    function onVdoCipherAPIReady() {


                        let video = vdo.getObjects()[0];


                        setInterval(function () {
                            if (video.ended) {
                                if (!isRedirect) {
                                    if (!completeRequest) {
                                        lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>);
                                        completeRequest = true;
                                    }
                                    isRedirect = true;
                                }
                            }
                        }, 1000);
                    }
                </script>
            <?php endif; ?>

            <?php if(isModuleActive('BunnyStorage') && $lesson->host == 'BunnyStorage'): ?>
                <?php
                    $time = \Illuminate\Support\Carbon::now()
                        ->addDay(1)
                        ->unix();
                    if ($lesson->bunnyLesson && $lesson->bunnyLesson->service_type == 'stream') {
                        $url = 'https://iframe.mediadelivery.net/embed/' . $lesson->bunnyLesson->library_id . '/' . $lesson->bunnyLesson->video_id;
                        $sha256 = hash('sha256', $lesson->bunnyLesson->token_authentication_key . $lesson->bunnyLesson->video_id . $time);
                        $url .= '?token=' . $sha256 . '&expires=' . $time . '&autoplay=true&preload=true';
                        $lesson_src = $url;
                    } elseif ($lesson->bunnyLesson && $lesson->bunnyLesson->service_type == 'storage') {
                        $bunnyStreamController = new \Modules\BunnyStorage\Http\Controllers\BunnyStreamController();
                        $path = 'https://' . $lesson->bunnyLesson->zone_name . '.b-cdn.net/' . $lesson->bunnyLesson->name;
                        $url = $bunnyStreamController->sign_bcdn_url($path, $lesson->bunnyLesson->token_authentication_key, $time);
                        $lesson_src = $url;
                    } else {
                        $lesson_src = $lesson->video_url;
                    }
                ?>


                <iframe src="<?php echo e($lesson_src); ?>" loading="lazy" style="border: none; height: 100%; width: 100%;"
                        frameborder="0" controls="1"
                        allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;"
                        allowfullscreen>
                </iframe>
            <?php endif; ?>

            <?php if($lesson->host == 'Self'): ?>
                <video class="" id="video-id" controls autoplay
                       onended="lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>)">
                    <source src="<?php echo e(asset($lesson->video_url)); ?>" type="video/mp4"/>
                    <source src="<?php echo e(asset($lesson->video_url)); ?>" type="video/ogg">
                </video>
            <?php endif; ?>

      <?php if($lesson->host == 'm3u8'): ?>
                <video class="" id="video-id" controls autoplay
                       onended="lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>)">
                    <source src="<?php echo e($lesson->video_url); ?>" type='application/x-mpegURL'/>
                </video>
            <?php endif; ?>



            <?php if($lesson->host == 'URL'): ?>
                <video class="" id="video-id" controls autoplay
                       onended="lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>)">
                    <source src="<?php echo e($lesson->video_url); ?>" type="video/mp4">
                    <source src="<?php echo e($lesson->video_url); ?>" type="video/ogg">
                    Your browser does not support the video.
                </video>
            <?php endif; ?>
            <?php if($lesson->host == 'AmazonS3'): ?>
                <video class=" " id="video-id" controls
                       onended="lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>)">
                    <source src="<?php echo e($lesson->video_url); ?>" type="video/mp4"/>

                </video>
            <?php endif; ?>
            <?php if($lesson->host == 'H5P' && isModuleActive('H5P')): ?>
                <?php echo $__env->make('h5p::player', ['course' => $course, 'lesson' => $lesson], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <?php if($lesson->host == 'XAPI' || $lesson->host == 'XAPI-AwsS3'): ?>
                <iframe id="video-id" class="video_iframe"
                        src="<?php echo e(asset($lesson->video_url)); ?>?actor=%7B%22mbox%22%3A%22mailto%3A<?php echo e(Settings('email')); ?>%22%2C%22name%22%3A%22<?php echo e(Settings('site_title')); ?>%22%2C%22objectType%22%3A%22Agent%22%7D&amp;endpoint=<?php echo e(url('xapi')); ?>&amp;course_id=<?php echo e($course->id); ?>&amp;lesson_id=<?php echo e($lesson->id); ?>&amp;next_lesson=<?php echo e($lesson_ids[$current_index + 1] ?? ''); ?>"></iframe>
            <?php endif; ?>
            <?php if($lesson->host == 'SCORM' || $lesson->host == 'SCORM-AwsS3'): ?>
                <?php if(!empty($lesson->video_url)): ?>
                    <iframe class=" video_iframe" id="video-id" src=""
                            <?php if($lesson->scorm_version == 'scorm_12'): ?> onbeforeunload="API.LMSFinish('');" width="100%"
                            height="100%" onunload="API.LMSFinish('');" <?php endif; ?>></iframe>
                <?php endif; ?>
            <?php endif; ?>

            <?php if($lesson->host == 'Iframe'): ?>
                <?php if(!empty($lesson->video_url)): ?>
                    <iframe class="video_iframe" id="video-id" src="<?php echo e(asset($lesson->video_url)); ?>"></iframe>
                <?php endif; ?>
            <?php endif; ?>


            <?php if($lesson->host == 'Image'): ?>
                <img src="<?php echo e(asset($lesson->video_url)); ?>" alt="" class="w-100  h-100">
            <?php endif; ?>

            <?php if($lesson->host == 'PDF'): ?>
                <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/pdf.min.js')); ?>"></script>
                <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/pdfjs-viewer.js')); ?>"></script>
                <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/zoom.js')); ?>"></script>
                <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/pdfjs-viewer.css')); ?>"/>
                <style>
                    .pdfjs-viewer.h-100 {
                        max-height: calc(100vh - 50px);
                        overflow: auto;
                    }

                    .small_btn_icon {
                        padding: 10px;
                    }
                </style>

                <script>
                    var pdfjsLib = window['pdfjs-dist/build/pdf'];
                    pdfjsLib.GlobalWorkerOptions.workerSrc = '<?php echo e(asset('public/frontend/infixlmstheme/js/pdf.worker.min.js')); ?>';
                </script>
                <div style="border: none;min-height: 400px" class="pdfviewer w-100  h-100">
                    <div class="pdftoolbar text-center row m-0 p-0">
                        <div class="col-12 col-lg-12 my-1">
                            <button class="theme_btn small_btn_icon btn-first" onclick="pdfViewer.first()"><i
                                    class="fa fa-step-backward"></i></button>
                            <button class="theme_btn small_btn_icon btn-prev" onclick="pdfViewer.prev(); return false;">
                                <i class="fa fa-angle-left"></i></button>
                            <span class="pageno"></span>
                            <button class="theme_btn small_btn_icon btn-next" onclick="pdfViewer.next(); return false;">
                                <i class="fa fa-angle-right"></i></button>
                            <button class="theme_btn small_btn_icon btn-last" onclick="pdfViewer.last()"><i
                                    class="fa fa-step-forward"></i></button>
                            <button class="theme_btn small_btn_icon" onclick="pdfViewer.setZoom('out')"><i
                                    class="fa fa-search-minus"></i></button>
                            <span class="zoomval">100%</span>
                            <button class="theme_btn small_btn_icon" onclick="pdfViewer.setZoom('in')"><i
                                    class="fa fa-search-plus"></i></button>
                            <button class="theme_btn small_btn_icon ms-3" onclick="pdfViewer.setZoom('width')"><i
                                    class="fa fa-arrows-alt-h"></i></button>
                            <button class="theme_btn small_btn_icon" onclick="pdfViewer.setZoom('height')"><i
                                    class="fa fa-arrows-alt-v"></i></button>
                            <button class="theme_btn small_btn_icon" onclick="pdfViewer.setZoom('fit')"><i
                                    class="fa fa-expand"></i></button>
                        </div>
                    </div>
                    <div class="pdfjs-viewer h-100">
                    </div>
                </div>

                <script>
                    let pdfViewer = new PDFjsViewer($('.pdfjs-viewer'), {
                        setZoom: -1,
                        maxImageSize: -1,
                        onZoomChange: function (zoom) {
                            zoom = parseInt(zoom * 10000) / 100;
                            $(".zoomval").text(zoom + "%");
                        },
                        onActivePageChanged: function (page, pageno) {
                            $(".pageno").text(pageno + "/" + this.getPageCount());
                        }

                    });
                    pdfViewer.loadDocument("<?php echo e(asset($lesson->video_url)); ?>").then(function () {
                        // pdfViewer.setZoom('width');
                    });
                    enablePinchZoom(pdfViewer)
                </script>
            <?php endif; ?>
            <?php if($lesson->host == 'Word'): ?>
                <iframe class="w-100  h-100 mobile-min-height"
                        src="https://docs.google.com/gview?url=<?php echo e(asset($lesson->video_url)); ?>&embedded=true"></iframe>
            <?php endif; ?>
            <?php if($lesson->host == 'Excel' || $lesson->host == 'PowerPoint'): ?>
                <iframe class="w-100  h-100 mobile-min-height"
                        src="https://view.officeapps.live.com/op/view.aspx?src=<?php echo e(asset($lesson->video_url)); ?>"></iframe>
            <?php endif; ?>

            <?php if($lesson->host == 'GoogleDrive'): ?>
                
                
                <iframe class="w-100  h-100" controlsList="nodownload"
                        src="https://drive.google.com/file/d/<?php echo e($lesson->video_url); ?>/preview"></iframe>
            <?php endif; ?>

            <?php if($lesson->host == 'Text'): ?>
                <div class="w-100  h-100 textViewer">

                </div>
                <script>
                    $(".textViewer").load("<?php echo e(asset($lesson->video_url)); ?>");
                </script>
            <?php endif; ?>


            
            <?php $__env->startPush('js'); ?>
                <?php if($lesson->host == 'Iframe'): ?>
                    <script>
                        $(document).ready(function (e) {
                            if ($('#video-id').length) {
                                var iframe = document.getElementById("video-id");
                                // console.log(iframe);
                                var video = iframe.contentDocument.body.getElementsByTagName("video")[0];
                                var supposedCurrentTime = 0;
                                video.addEventListener('timeupdate', function () {
                                    if (!video.seeking) {
                                        supposedCurrentTime = video.currentTime;
                                    }
                                });
                                // prevent user from seeking
                                video.addEventListener('seeking', function () {
                                    // guard agains infinite recursion:
                                    // user seeks, seeking is fired, currentTime is modified, seeking is fired, current time is modified, ....
                                    var delta = video.currentTime - supposedCurrentTime;
                                    if (Math.abs(delta) > 0.01) {
                                        console.log("Seeking is disabled");
                                        video.currentTime = supposedCurrentTime;
                                    }
                                });
                                // delete the following event handler if rewind is not required
                                video.addEventListener('ended', function () {
                                    if (!completeRequest) {
                                        lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>);
                                        completeRequest = true;
                                    }

                                    // reset state in order to allow for rewind
                                    console.log('video end');
                                    supposedCurrentTime = 0;
                                });
                            }
                        });
                    </script>
                <?php endif; ?>
            <?php $__env->stopPush(); ?>
            <?php if($lesson->host == 'Zip'): ?>
                <style>
                    .parent {
                        position: fixed;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .child {
                        position: relative;
                        font-size: 10vw;
                    }
                </style>
                <div class="w-100 parent  h-100 ">
                    <div class="">
                        <div class="row">
                            <div class="col  text-center">
                                <div class="child">
                                    <a class="theme_btn " href="<?php echo e(asset($lesson->video_url)); ?>"
                                       download=""><?php echo e(__('frontend.Download File')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endif; ?>

        <?php endif; ?>
        


        <input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
        <div class="floating-title position-fixed">
            <p class="font_16 d-flex align-items-center">
                <span class="header__common_btn me-2 play_toggle_btn"><i
                        class="ti-menu-alt"></i></span> <?php echo e(@$total); ?> <?php echo e(__('common.Lessons')); ?>

            </p>
        </div>
        <div class="course__play_warp courseListPlayer ">
            <div class="play_warp_header d-flex justify-content-between">
                <h3 class="font_16 mb-0 lesson_count default-font d-flex align-items-center">
                    <span class="play_toggle_btn header__common_btn me-2 d-none d-lg-flex">
                        <i class="fas fa-expand"></i>
                    </span>
                    
                    <span>
                        <strong class="d-block d-lg-none"><?php echo e($course->title); ?></strong>
                        <span class="d-block">
                            <?php echo e(@$total); ?> <?php echo e(__('common.Lessons')); ?>

                        </span>
                    </span>
                </h3>
                <button class="theme-btn p-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#qnamodal"><?php echo e(__('common.Q&A')); ?></button>

            </div>
            <div class="course__play_list">
                <?php
                    $i = 1;
                ?>
                <div class="theme_according mb_30 accordion" id="accordion1">
                    <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="accordion-item">
                            <div class="accordion-header" id="heading<?php echo e($chapter->id); ?>">
                                <h5 class="mb-0">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo e($chapter->id); ?>" aria-expanded="false"
                                            aria-controls="collapse<?php echo e($chapter->id); ?>">
                                        <?php echo e($chapter->name); ?> <br>
                                        <span class="course_length nowrap">
                                            <?php if(!isModuleActive('Assignment')): ?>
                                                <?php echo e(count($chapter->lessons->where('is_assignment', 0))); ?>

                                            <?php else: ?>
                                                <?php echo e(count($chapter->lessons)); ?>

                                            <?php endif; ?>

                                            <?php echo e(__('frontend.Lectures')); ?>

                                        </span>
                                    </button>
                                </h5>
                            </div>
                            <div class="collapse" id="collapse<?php echo e($chapter->id); ?>"
                                 aria-labelledby="heading<?php echo e($chapter->id); ?>" data-bs-parent="#accordion1">
                                <div class="accordion-body">
                                    <div class="curriculam_list">
                                        <?php if(isset($lessons)): ?>
                                            <?php
                                                // $video_lesson_hosts=['Youtube','Vimeo','Self','URL'];
                                            ?>
                                            <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $singleLesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($singleLesson->chapter_id == $chapter->id): ?>
                                                    <?php
                                                        if ($singleLesson->is_quiz == 1 && $singleLesson->quiz->count() == 0) {
                                                            continue;
                                                        }
                                                        if ($singleLesson->is_assignment == 1 && !isModuleActive('Assignment')) {
                                                            continue;
                                                        }
                                                    ?>
                                                    <div class="single_play_list"
                                                         id="single_lesson_<?php echo e($singleLesson->id); ?>">
                                                        <a class="<?php if(showPicName(Request::url()) == $singleLesson->id): ?> active <?php endif; ?>"
                                                           href="#">

                                                            <?php if($singleLesson->is_quiz == 1): ?>
                                                                <div class="course_play_name">

                                                                    <label class="primary_checkbox d-flex mb-0">
                                                                        <input type="checkbox"
                                                                               <?php echo e($singleLesson->completed && $singleLesson->completed->status == 1 ? 'checked' : ''); ?>

                                                                               disabled>
                                                                        <span class="checkmark mr_15"
                                                                              style="cursor: not-allowed"></span>

                                                                        <i class="ti-check-box"></i>
                                                                    </label>
                                                                    <?php $__currentLoopData = $singleLesson->quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <span class="quizLink"
                                                                              onclick="goFullScreen(<?php echo e($course->id); ?>,<?php echo e($singleLesson->id); ?>)">
                                                                            <span class="quiz_name"><?php echo e($i); ?>.
                                                                                <?php echo e(@$quiz->title); ?></span>
                                                                        </span>
                                                                </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php else: ?>
                                                                <div class="course_play_name">
                                                                    <?php if(request()->route('lesson_id') == $singleLesson->id): ?>
                                                                        <div
                                                                            class="remember_forgot_pass d-flex justify-content-between">
                                                                            <label class="primary_checkbox d-flex mb-0">
                                                                                <?php if($isEnrolled): ?>
                                                                                    <input type="checkbox"
                                                                                           <?php echo e($singleLesson->completed && $singleLesson->completed->status == 1 ? 'checked' : ''); ?>

                                                                                           disabled>
                                                                                    <span style="cursor: not-allowed"
                                                                                          class="checkmark mr_15"></span>
                                                                                    <i class="ti-control-play"></i>
                                                                                <?php else: ?>
                                                                                    <i class="ti-control-play"></i>
                                                                                <?php endif; ?>
                                                                            </label>
                                                                        </div>
                                                                    <?php else: ?>
                                                                        <label class="primary_checkbox d-flex mb-0">
                                                                            <input type="checkbox"
                                                                                <?php echo e($singleLesson->completed && $singleLesson->completed->status == 1 ? 'checked' : ''); ?>>
                                                                            <span style="cursor: not-allowed"
                                                                                  class="checkmark mr_15"></span>

                                                                            <i class="ti-control-play"></i>
                                                                        </label>
                                                                    <?php endif; ?>

                                                                    <span
                                                                        onclick="goFullScreen(<?php echo e($course->id); ?>,<?php echo e($singleLesson->id); ?>)"><?php echo e($i); ?>.
                                                                    <?php echo e($singleLesson->name); ?> </span>
                                                                </div>
                                                                <span
                                                                    class="course_play_duration nowrap"><?php echo e(MinuteFormat($singleLesson->duration)); ?></span>
                                                            <?php endif; ?>
                                                        </a>
                                                    </div>
                                                    <?php
                                                        $i++;
                                                    ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row justify-content-center text-center">
                    <?php if($certificate && !Settings('manually_assign_certificate')): ?>
                        <?php if($quizPass): ?>
                            <?php if(auth()->guard()->check()): ?>
                                <?php if($percentage >= 100): ?>
                                    <?php if(isModuleActive('Survey') && $course->survey): ?>
                                        <?php if(Settings('must_survey_before_certificate')): ?>
                                            <?php if(auth()->user()->attendSurvey($course->survey)): ?>
                                                <a href="<?php echo e(route('getCertificate', [$course->id, $course->title])); ?>"
                                                   class="theme_btn certificate_btn mt-5 mb-5">
                                                    <?php echo e(__('frontend.Get Certificate')); ?>

                                                </a>
                                                <?php if(isModuleActive('MyClass')): ?>
                                                    <a href="<?php echo e(route('get-transcript', [$course->id, auth()->user()->id])); ?>"
                                                       class="theme_btn certificate_btn mt-5 mb-5 ms-2"
                                                       target="__blank"><?php echo e(__('class.Get Transcript')); ?></a>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#assignSubmit"
                                                        class="theme_btn certificate_btn mt-5 mb-5">
                                                    <?php echo e(__('frontend.Survey')); ?>

                                                </button>
                                                <small>
                                                    <?php echo e(__('frontend.You must attend survey before getting certificate')); ?>

                                                </small>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if(!auth()->user()->attendSurvey($course->survey)): ?>
                                                <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#assignSubmit"
                                                        class="theme_btn certificate_btn mt-5 mb-5 me-1">
                                                    <?php echo e(__('frontend.Survey')); ?>

                                                </button>
                                            <?php endif; ?>
                                            <a href="<?php echo e(route('getCertificate', [$course->id, $course->title])); ?>"
                                               class="theme_btn certificate_btn mt-5 mb-5 ms-1">
                                                <?php echo e(__('frontend.Get Certificate')); ?>

                                            </a>
                                            <?php if(isModuleActive('MyClass')): ?>
                                                <a href="<?php echo e(route('get-transcript', [$course->id, auth()->user()->id])); ?>"
                                                   class="theme_btn certificate_btn mt-5 mb-5 ms-2"
                                                   target="__blank"><?php echo e(__('class.Get Transcript')); ?></a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('getCertificate', [$course->id, $course->title])); ?>"
                                           class="theme_btn certificate_btn mt-5 mb-5">
                                            <?php echo e(__('frontend.Get Certificate')); ?>

                                        </a>
                                        <?php if(isModuleActive('MyClass')): ?>
                                            <a href="<?php echo e(route('get-transcript', [$course->id, auth()->user()->id])); ?>"
                                               class="theme_btn certificate_btn mt-5 mb-5 ms-2"
                                               target="__blank"><?php echo e(__('class.Get Transcript')); ?></a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>

                </div>
                <div class="pb-5 mb-5 d-none">
                    <div><?php echo e(__('frontend.Current Time')); ?>: <span id="currentTime">0</span></div>
                    <div><?php echo e(__('frontend.Total Time')); ?> : <span id="totalTime">0</span></div>
                    <div><?php echo e(__('frontend.Status')); ?> : <span class="status"></span></div>
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade " id="ShareLink" tabindex="-1" role="dialog" aria-labelledby=" " aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <?php echo e(__('frontend.Share this course')); ?>


                    </h5>
                </div>

                <div class="modal-body">


                    <div class="row mb-20">
                        <div class="col-md-12">
                            <input type="text" required class="primary_input mb_20" name=""
                                   value="<?php echo e(URL::current()); ?>">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="social_btns ">
                                <a target="_blank"
                                   href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(URL::current()); ?>"
                                   class="social_btn fb_bg"> <i class="fab fa-facebook-f"></i>
                                </a>
                                <a target="_blank"
                                   href="https://twitter.com/intent/tweet?text=<?php echo e($course->title); ?>&amp;url=<?php echo e(URL::current()); ?>"
                                   class="social_btn Twitter_bg"> <i class="fab fa-twitter"></i> </a>
                                <a target="_blank"
                                   href="https://pinterest.com/pin/create/link/?url=<?php echo e(URL::current()); ?>&amp;description=<?php echo e($course->title); ?>"
                                   class="social_btn Pinterest_bg"> <i class="fab fa-pinterest-p"></i> </a>
                                <a target="_blank"
                                   href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(URL::current()); ?>&amp;title=<?php echo e($course->title); ?>&amp;summary=<?php echo e($course->title); ?>"
                                   class="social_btn Linkedin_bg"> <i class="fab fa-linkedin-in"></i> </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div class="modal fade " id="courseRating" tabindex="-1" role="dialog" aria-labelledby=" " aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <?php echo e(__('frontend.Rate this course')); ?>


                    </h5>
                </div>
                <div class="modal-body">


                    <div class="row mb-20">
                        <div class="col-md-12">
                            <div class="rating_star text-end">

                                <?php
                                    $PickId = $course->id;
                                ?>
                                <?php if(Auth::check()): ?>
                                    <?php if(Auth::user()->role_id == 3): ?>
                                        <?php if(!in_array(Auth::user()->id, $reviewer_user_ids)): ?>
                                            <div class="star_icon d-flex align-items-center justify-content-between">
                                                <a class="rating">
                                                    <input type="radio" id="star5" name="rating" value="5"
                                                           class="rating"/><label class="full" for="star5"
                                                                                  id="star5" title="Awesome - 5 stars"
                                                                                  onclick="Rates(5, <?php echo e(@$PickId); ?>)"></label>

                                                    <input type="radio" id="star4" name="rating" value="4"
                                                           class="rating"/><label class="full" for="star4"
                                                                                  title="Pretty good - 4 stars"
                                                                                  onclick="Rates(4, <?php echo e(@$PickId); ?>)"></label>

                                                    <input type="radio" id="star3" name="rating" value="3"
                                                           class="rating"/><label class="full" for="star3"
                                                                                  title="Meh - 3 stars"
                                                                                  onclick="Rates(3, <?php echo e(@$PickId); ?>)"></label>
                                                    <input type="radio" id="star2" name="rating" value="2"
                                                           class="rating"/><label class="full" for="star2"
                                                                                  title="Kinda bad - 2 stars"
                                                                                  onclick="Rates(2, <?php echo e(@$PickId); ?>)"></label>

                                                    <input type="radio" id="star1" name="rating" value="1"
                                                           class="rating"/><label class="full" for="star1"
                                                                                  title="Bad  - 1 star"
                                                                                  onclick="Rates(1,<?php echo e(@$PickId); ?>)"></label>

                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <p class="font_14 f_w_400 mt-0"><a href="<?php echo e(url('login')); ?>"
                                                                       class="theme_color2"><?php echo e(__('frontend.Sign In')); ?></a>
                                        <?php echo e(__('frontend.or')); ?> <a class="theme_color2"
                                                                   href="<?php echo e(url('register')); ?>"><?php echo e(__('frontend.Sign Up')); ?></a>
                                        <?php echo e(__('frontend.as student to post a review')); ?></p>
                                <?php endif; ?>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal cs_modal fade admin-query" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('frontend.Review')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="ti-close "></i></button>
                </div>

                <form action="<?php echo e(route('submitReview')); ?>" method="Post">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="course_id" id="rating_course_id" value="">
                        <input type="hidden" name="rating" id="rating_value" value="">

                        <div class="text-center">
                            <textarea class="form-control" name="review" name="" id=""
                                      placeholder="<?php echo e(__('frontend.Write your review')); ?>" cols="30"
                                      rows="10"><?php echo e(old('review')); ?></textarea>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('review')); ?></span>
                        </div>


                    </div>
                    <div class="modal-footer justify-content-center">
                        <div class="mt-40">
                            <button type="button" class="theme_line_btn me-2"
                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?>

                            </button>
                            <button class="theme_btn " type="submit"><?php echo e(__('common.Submit')); ?></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php echo $__env->make(theme('partials._qna_modal'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="logDisplay">
    </div>
    <?php if(isModuleActive('Survey') && $course->survey): ?>
        <?php echo $__env->make(theme('partials._survey_model'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

    <script>
        $(document).ready(function () {
            if ($('.active').length) {
                let active = $('.active');
                let parent = active.parents('.collapse').first();
                parent.addClass('show');
            }
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {
            let course = '<?php echo e($course->id); ?>';
            let lesson = '<?php echo e($lesson->id); ?>';

            /*       $("iframe").each(function () {
                       //Using closures to capture each one
                       var iframe = $(this);
                       iframe.on("load", function () { //Make sure it is fully loaded
                           iframe.contents().click(function (event) {
                               iframe.trigger("click");
                           });

                       });

                       iframe.click(function () {
                           $.ajax({
                               type: 'POST',
                               "_token": "<?php echo e(csrf_token()); ?>",
                            url: '<?php echo e(route('lesson.complete.ajax')); ?>',
                            data: {course_id: course, lesson_id: lesson},
                            success: function (data) {

                            }
                        });
                    });
                });*/

            if (window.outerWidth < 425) {
                $('.courseListPlayer').toggleClass("active");
                $('.course_fullview_wrapper').toggleClass("active");
            }


            $(".completeAndPlayNext").click(function () {
                $.ajax({
                    type: 'POST',
                    "_token": "<?php echo e(csrf_token()); ?>",
                    url: '<?php echo e(route('lesson.complete.ajax')); ?>',
                    data: {
                        course_id: course,
                        lesson_id: lesson
                    },
                    success: function (data) {
                        if ($('#next_lesson_btn').length) {
                            $('#next_lesson_btn').trigger('click');
                        } else {
                            location.reload();
                        }
                    }
                });
            });
        });
    </script>

    <?php if($lesson->host == 'Self' || $lesson->host == 'm3u8' || $lesson->host == 'AmazonS3' || $lesson->host == 'URL'): ?>
        <script>
            let myFP = fluidPlayer(
                'video-id', {
                    "layoutControls": {
                        "controlBar": {
                            "autoHideTimeout": 3,
                            "animated": true,
                            "autoHide": true
                        },
                        "htmlOnPauseBlock": {
                            "html": null,
                            "height": null,
                            "width": null
                        },
                        "autoPlay": true,
                        "mute": false,
                        "hideWithControls": false,
                        "allowTheatre": false,
                        "playPauseAnimation": true,
                        "playbackRateEnabled": false,
                        "allowDownload": false,
                        "playButtonShowing": true,
                        "fillToContainer": true,
                        "posterImage": ""
                    },
                    "vastOptions": {
                        "adList": [],
                        "adCTAText": false,
                        "adCTATextPosition": ""
                    }
                });
        </script>

        <?php if(!Settings('show_seek_bar')): ?>
            <style>
                div#video-id_fluid_controls_progress_container {
                    display: none;
                }
            </style>
            <script>
                if ($('#video-id').length) {
                    var video = document.getElementById('video-id');
                    var supposedCurrentTime = 0;
                    video.addEventListener('timeupdate', function () {
                        if (!video.seeking) {
                            supposedCurrentTime = video.currentTime;
                        }
                    });
                    // prevent user from seeking
                    video.addEventListener('seeking', function () {
                        // guard agains infinite recursion:
                        // user seeks, seeking is fired, currentTime is modified, seeking is fired, current time is modified, ....
                        var delta = video.currentTime - supposedCurrentTime;
                        if (Math.abs(delta) > 0.01) {
                            console.log("Seeking is disabled");
                            video.currentTime = supposedCurrentTime;
                        }
                    });
                    // delete the following event handler if rewind is not required
                    video.addEventListener('ended', function () {
                        // reset state in order to allow for rewind
                        console.log('video end');
                        if (!completeRequest) {
                            lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>);
                            completeRequest = true;
                        }

                        supposedCurrentTime = 0;
                    });
                }
            </script>
        <?php endif; ?>
    <?php endif; ?>

    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/class_details.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/full_screen_video.js')); ?>"></script>
    <?php if($lesson->is_quiz == 1): ?>
        <?php if(!$result): ?>
            <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/quiz_start.js')); ?>"></script>
        <?php endif; ?>
        <?php echo $__env->make(theme('partials._quiz_exp_script'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <script src="<?php echo e(asset('public/backend/js/summernote-bs4.min.js')); ?>"></script>


    <script>
        function sendFile(files, editor = '#summernote', name) {
            let url = '<?php echo e(url('/')); ?>';
            let formData = new FormData();
            $.each(files, function (i, v) {
                formData.append("files[" + i + "]", v);
            })

            $.ajax({
                url: url + '/summer-note-file-upload',
                type: 'post',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'JSON',
                success: function (response) {
                    let $summernote;
                    if (name) {
                        $summernote = $(editor + "[name='" + name + "']");
                    } else {
                        $summernote = $(editor);
                    }
                    $.each(response, function (i, v) {
                        $summernote.summernote('insertImage', v);
                    })
                },
                error: function (data) {
                    if (data.status === 404) {
                        toastr.error("What you are looking is not found", 'Opps!');
                        return;
                    } else if (data.status === 500) {
                        toastr.error('Something went wrong. If you are seeing this message multiple times, please contact administrator.', 'Opps');
                        return;
                    } else if (data.status === 200) {
                        toastr.error('Something is not right', 'Error');
                        return;
                    }
                    let jsonValue = $.parseJSON(data.responseText);
                    let errors = jsonValue.errors;
                    if (errors) {
                        let i = 0;
                        $.each(errors, function (key, value) {
                            let first_item = Object.keys(errors)[i];
                            let error_el_id = $('#' + first_item);
                            if (error_el_id.length > 0) {
                                error_el_id.parsley().addError('ajax', {
                                    message: value, updateClass: true
                                });
                            }
                            toastr.error(value, 'Validation Error');
                            i++;
                        });
                    } else {
                        toastr.error(jsonValue.message, 'Opps!');
                    }

                }
            });
        }

        if ($('.lms_summernote').length) {
            $('.lms_summernote').summernote({
                codeviewFilter: true,
                codeviewIframeFilter: true,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen']],
                ],
                placeholder: '',
                tabsize: 2,
                height: 188,
                callbacks: {
                    onImageUpload: function (files) {
                        sendFile(files, '.lms_summernote', $(this).attr('name'))
                    }
                },
                tooltip: false
            });
            $(document).ready(function () {
                $('.note-toolbar').find('[data-toggle]').each(function () {
                    $(this).attr('data-bs-toggle', $(this).attr('data-toggle')).removeAttr('data-toggle');
                });
            });
            $(document).ready(function () {
                $('.note-modal').find('[data-dismiss]').each(function () {
                    $(this).attr('data-bs-dismiss', $(this).attr('data-dismiss')).removeAttr('data-dismiss');
                });
            });
        }
        var app_debug = $('.app_debug').val();
        if (!app_debug) {
            $(document).bind("contextmenu", function (e) {
                e.preventDefault();
            });

            $(document).keydown(function (e) {
                if (e.which === 123) {
                    return false;
                }
            });


            document.onkeydown = function (e) {
                if (event.keyCode == 123) {
                    return false;
                }

                if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                    return false;
                }


                if (e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)) {
                    return false;
                }

                if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                    return false;
                }
                if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                    return false;
                }
                if (e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)) {
                    return false;
                }
                if (e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)) {
                    return false;
                }

                if (e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)) {
                    return false;
                }
                if (e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)) {
                    return false;
                }
            }
        }
    </script>
    <?php if($lesson->host == 'XAPI' || $lesson->host == 'XAPI-AwsS3'): ?>
        <script>
            <?php if(!isset($lesson->completed->status)): ?>

            function checkCompleteStatus() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var course_id = "<?php echo e($course->id); ?>";
                var lesson_id = "<?php echo e($lesson->id); ?>";
                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(route('xapi.checkLessonStatus')); ?>',
                    data: {
                        course_id: course_id,
                        lesson_id: lesson_id
                    },
                    success: function (data) {
                        if (data == 1) {
                            if ($('#autoNext').is(':checked')) {
                                if ($('#next_lesson_btn').length) {
                                    jQuery('#next_lesson_btn').click();
                                } else {
                                    location.reload();
                                }
                            }
                        }
                    }
                });
            }

            setInterval(checkCompleteStatus, 2000)
            <?php endif; ?>
        </script>
    <?php endif; ?>

    <?php if(
        $lesson->host == 'SCORM' ||
            $lesson->host == 'SCORM-AwsS3' ||
            $lesson->host == 'XAPI' ||
            $lesson->host == 'XAPI-AwsS3'): ?>
        <script>
            let video_element = $('#video-id');
            let url = "<?php echo e(asset($lesson->video_url)); ?>";
            <?php if(auth()->guard()->check()): ?>
            let full_name = "<?php echo e(auth()->user()->name); ?>";
            <?php if(isModuleActive('Org')): ?>
            let org_chart_name = "<?php echo e(auth()->user()->branch->group); ?>";
            <?php endif; ?>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
            let full_name = "Guest";
            let org_chart_name = "";
            <?php endif; ?>
            let course_name = "<?php echo e($course->title); ?>";




            <?php if($lesson->scorm_version == 'scorm_12'): ?>

            var API = {};

            (function ($) {
                $(document).ready(function () {
                    setupScormApi()
                    video_element.attr('src', url)
                });

                function setupScormApi() {
                    API.LMSInitialize = LMSInitialize;
                    API.LMSGetValue = LMSGetValue;
                    API.LMSSetValue = LMSSetValue;
                    API.LMSCommit = LMSCommit;
                    API.LMSFinish = LMSFinish;
                    API.LMSGetLastError = LMSGetLastError;
                    API.LMSGetDiagnostic = LMSGetDiagnostic;
                    API.LMSGetErrorString = LMSGetErrorString;
                }

                function LMSInitialize(initializeInput) {
                    displayLog("LMSInitialize: " + initializeInput);
                    return true;
                }

                function LMSGetValue(varname) {


                    displayLog("LMSGetValue: " + varname);
                    return varname;
                }

                function LMSSetValue(varname, varvalue) {
                    updateScormReport(varname, varvalue);
                    if (varvalue == 'completed' || varvalue == 'passed') {
                        lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>);
                    }
                    // displayLog("LMSSetValue: " + varname + "=" + varvalue);
                    return "";
                }

                function LMSCommit(commitInput) {
                    displayLog("LMSCommit: " + commitInput);
                    return true;
                }

                function LMSFinish(finishInput) {
                    lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>);
                    displayLog("LMSFinish: " + finishInput);
                    return true;
                }

                function LMSGetLastError() {
                    displayLog("LMSGetLastError: ");
                    return 0;
                }

                function LMSGetDiagnostic(errorCode) {
                    displayLog("LMSGetDiagnostic: " + errorCode);
                    return "";
                }

                function LMSGetErrorString(errorCode) {
                    displayLog("LMSGetErrorString: " + errorCode);
                    return "";
                }

            })(jQuery);
            <?php elseif($lesson->scorm_version == 'scorm_2004'): ?>

            var API_1484_11 = {};

            (function ($) {
                $(document).ready(function () {
                    setupScormApi();
                    video_element.attr('src', url)
                });

                function setupScormApi() {
                    API_1484_11.Initialize = Initialize;
                    API_1484_11.Commit = Commit;
                    API_1484_11.Terminate = Terminate;
                    API_1484_11.GetValue = GetValue;
                    API_1484_11.SetValue = SetValue;
                    API_1484_11.GetErrorString = GetErrorString;
                    API_1484_11.GetDiagnostic = GetDiagnostic;
                    API_1484_11.GetLastError = GetLastError;
                }

                function Initialize(parameter) {
                    displayLog('Initialize ' + parameter)
                    return true
                }

                function Commit(parameter) {
                    displayLog('Commit ' + parameter)
                    return true
                }

                function Terminate(parameter) {
                    
                    displayLog('Terminate ' + parameter)
                    return true
                }

                function GetValue(name) {
                    displayLog('GetValue ' + name)
                    return "";
                }

                function SetValue(name, value) {
                    updateScormReport(name, value);
                    if (value == 'completed' || value == 'passed') {
                        lessonAutoComplete(course_id, <?php echo e(showPicName(Request::url())); ?>);
                    }
                    displayLog('SetValue ' + name + ' = ' + value)
                    return true
                }

                function GetErrorString() {
                    displayLog('GetErrorString')
                    return ''
                }

                function GetDiagnostic() {
                    displayLog('GetDiagnostic')
                    return ''
                }

                function GetLastError() {
                    displayLog('GetLastError')
                    return 0
                }


            })(jQuery);
            <?php endif; ?>


            function displayLog(textToDisplay) {
                console.log(textToDisplay);
            }

            <?php if(isModuleActive('SCORM')): ?>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function updateScormReport(key, value) {
                <?php if(!isset($lesson->completed->status)): ?>

                var course_id = "<?php echo e($course->id); ?>";
                var lesson_id = "<?php echo e($lesson->id); ?>";
                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(route('scorm.report.store')); ?>',
                    data: {
                        course_id: course_id,
                        lesson_id: lesson_id,
                        key: key,
                        value: value
                    },
                    success: function (data) {
                        console.log(data);
                    }
                });
                <?php endif; ?>


            }
            <?php endif; ?>
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(theme('layouts.full_screen_master'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/frontend/infixlmstheme/pages/fullscreen_video.blade.php ENDPATH**/ ?>