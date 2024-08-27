<div role="tabpanel"
     class="tab-pane fade  <?php if($type=="certificate"): ?> show active <?php endif; ?> "
     id="certificate">

    <div class="main-title">
        <h3><?php echo e(__('subscription.Assign')); ?> <?php echo e(__('certificate.Certificate')); ?></h3>
    </div>
    <div class="">

        <div class="white-box">

            <form action="<?php echo e(route('AdminUpdateCourseCertificate')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="course_id" value="<?php echo e(@$course->id); ?>">
                <div class="row">
                    <div class="col-xl-6 courseBox">
                        <select class="primary_select edit_category_id"
                                data-course_id="<?php echo e(@$course->id); ?>"
                                name="certificate" id="course">
                            <option
                                data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('certificate.Certificate')); ?>"
                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('certificate.Certificate')); ?> </option>
                            <?php $__currentLoopData = $certificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($certificate->id); ?>"
                                        <?php if(isModuleActive('CertificatePro') && Settings('use_certificate_template') == 'pro'): ?>
                                            <?php if($certificate->id==$course->pro_certificate_id): ?> selected <?php endif; ?>><?php echo e(@$certificate->title); ?>

                                    <?php else: ?>
                                        <?php if($certificate->id==$course->certificate_id): ?>
                                            selected
                                        <?php endif; ?>><?php echo e(@$certificate->title); ?>

                                    <?php endif; ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 text-center pt_15">
                    <div class="d-flex justify-content-center">
                        <button class="primary-btn semi_large2  fix-gr-bg"
                                id="save_button_parent" type="submit">
                            <i class="ti-check"></i><?php echo e(__('common.Save')); ?> <?php echo e(__('certificate.Certificate')); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/parts_of_course_details/_course_details_certificate_tab.blade.php ENDPATH**/ ?>