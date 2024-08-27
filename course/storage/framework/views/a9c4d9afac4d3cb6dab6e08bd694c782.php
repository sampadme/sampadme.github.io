<div role="tabpanel" class="tab-pane fade  <?php if($type=="drip"): ?> show active <?php endif; ?> "
     id="drip">

    <div class="QA_section QA_section_heading_custom check_box_table  pt-20">
        <div class="QA_table ">
            <form action="<?php echo e(route('setCourseDripContent')); ?>" method="post">
                <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>">
                <?php echo csrf_field(); ?>
                <table class="table  pt-0">
                    <thead>
                    <tr>
                        <th><?php echo e(__('common.Name')); ?></th>
                        <th><?php echo e(__('common.Specific Date')); ?></th>
                        <th></th>
                        <th><?php echo e(__('common.Days After Enrollment')); ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if(count($chapters)==0): ?>
                        <tr>
                            <td colspan="3"
                                class="text-center"><?php echo e(__('courses.No Data Found')); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php
                        $i=0;
                    ?>
                    <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = $chapter->lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <input type="hidden" name="lesson_id[]"
                                   value="<?php echo e(@$lesson->id); ?>">
                            <tr>
                                <td>
                                    <?php if($lesson->is_quiz==1): ?>

                                        <span> <i class="ti-check-box"></i>   <?php echo e($key+1); ?>. <?php echo e(@$lesson['quiz'][0]['title']); ?> </span>

                                    <?php else: ?>

                                        <span> <i class="ti-control-play"></i>  <?php echo e($key+1); ?>. <?php echo e($lesson['name']); ?> [<?php echo e(MinuteFormat($lesson['duration'])); ?>] </span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input type="text"
                                           class="primary_input_field primary-input date form-control"
                                           placeholder="<?php echo e(__('common.Select Date')); ?>"
                                           readonly
                                           name="lesson_date[]"
                                           value="<?php echo e(@$lesson->unlock_date!=""?date('m/d/Y',strtotime($lesson->unlock_date)):""); ?>">
                                </td>
                                <td>
                                    <div class="row">


                                        <div class="form-check p-1">
                                            <input
                                                class="form-check-input  common-radio"
                                                type="radio"
                                                name="drip_type[<?php echo e($i); ?>]"
                                                id="select_drip_<?php echo e($i); ?>1"
                                                value="1"
                                                <?php if(!empty($lesson->unlock_date)): ?>checked <?php endif; ?>>
                                            <label class="form-check-label"
                                                   for="select_drip_<?php echo e($i); ?>1">
                                                <?php echo e(__('common.Date')); ?>

                                            </label>
                                        </div>
                                        <div class="form-check  p-1">
                                            <input
                                                class="form-check-input common-radio"
                                                type="radio"
                                                name="drip_type[<?php echo e($i); ?>]"
                                                id="select_drip_<?php echo e($i); ?>2"
                                                <?php if(empty($lesson->unlock_date)): ?>checked
                                                <?php endif; ?>
                                                value="2">
                                            <label class="form-check-label"
                                                   for="select_drip_<?php echo e($i); ?>2">
                                                <?php echo e(__('common.Days')); ?>

                                            </label>
                                        </div>

                                    </div>
                                </td>
                                <td>
                                    <input type="number" min="1" max="365"
                                           class="form-control"
                                           placeholder="<?php echo e(__('common.Days')); ?>"
                                           name="lesson_day[]"
                                           value="<?php echo e(@$lesson['unlock_days']); ?>">
                                </td>

                            </tr>
                            <?php
                                $i++;
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                    <?php if(count($chapters)!=0): ?>
                        <tr>
                            <td colspan="3">
                                <button class="primary-btn fix-gr-bg" type="submit"
                                        data-bs-toggle="tooltip">
                                    <i class="ti-check"></i>
                                    <?php echo e(__('common.Save')); ?>

                                </button>
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tfoot>
                </table>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/parts_of_course_details/_course_details_drip_tab.blade.php ENDPATH**/ ?>