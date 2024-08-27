<link href="<?php echo e(asset('public/backend/css/summernote-bs4.min.css')); ?><?php echo e(assetVersion()); ?>" rel="stylesheet">
<style>
    .cs_modal .modal-body p {
        text-align: unset;
    }
</style>
<div class="modal cs_modala fade" id="qnamodal" tabindex="-1" aria-labelledby="qnamodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="qnamodalLabel"><?php echo e(__('frontend.Question and Answer')); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="ti-close "></i></button>
            </div>
            <div class="modal-body">
                <div class="conversition_box" id="qnaList">
                    <?php $__currentLoopData = $lesson_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qna): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make(theme('partials._single_qna'),['qna'=>$qna], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php if($isEnrolled): ?>
                    <div class="row">
                        <div class="col-lg-12" id="mainComment">
                            <form action="#" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" id="qaStoreID" value="<?php echo e(route('myQA.store')); ?>">
                                <input type="hidden" id="qa_course_id" value="<?php echo e($course->id); ?>">
                                <input type="hidden" id="qa_lesson_id" value="<?php echo e($lesson->id); ?>">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="section_title3 mb_20">
                                            <h3><?php echo e(__('frontend.Leave a question/comment')); ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_input mb_25">
                                        <textarea
                                            class="lms_summernote"
                                            id="qna_editor" cols="30"
                                            rows="20"
                                            placeholder="<?php echo e(__('frontend.Leave a question/comment')); ?>"
                                            name="text"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb_30">
                                        <button type="button" class="theme_btn height_50" id="QuestionSubmit">
                                            <i class="fas fa-comments"></i>
                                            <?php echo e(__('frontend.Question')); ?>

                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="plz_write_qus" value="<?php echo e(__('frontend.Please write your question')); ?>">
<input type="hidden" id="operation_success" value="<?php echo e(__('common.Operation successful')); ?>">
<input type="hidden" id="success_msg" value="<?php echo e(__('common.Success')); ?>">
<?php if(Settings('real_time_qa_update') == 1): ?>

    <script src="<?php echo e(asset('public/js/pusher.min.js')); ?>"></script>

    <script>

        let pusher = new Pusher('<?php echo e(config('broadcasting.connections.pusher.key')); ?>', {
            cluster: '<?php echo e(config('broadcasting.connections.pusher.options.cluster')); ?>'
        });


        let channel = pusher.subscribe('new-notification-channel');

        channel.bind('new-notification', function (data) {
            if (data.user == <?php echo e(auth()->check()?auth()->user()->id:0); ?>) {
                loadQna();
                if (data.login_user_id != '<?php echo e(auth()->check()?auth()->user()->id:0); ?>') {
                    toastr.success("<?php echo e(__('frontend.New notification')); ?>");
                }

            }
        });


        function loadQna() {
            let list = $("#qnaList");
            list.html('')
            list.load("<?php echo e(route('myQA.loadQna',[$course->id,$lesson->id])); ?>");

        }

    </script>
<?php endif; ?>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/frontend/infixlmstheme/partials/_qna_modal.blade.php ENDPATH**/ ?>