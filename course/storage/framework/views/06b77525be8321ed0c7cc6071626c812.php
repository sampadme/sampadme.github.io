<div class="dropdown CRM_dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button"
            id="dropdownMenu2" data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false">
        <?php echo e(trans('common.Action')); ?>

    </button>
    <div class="dropdown-menu dropdown-menu-right"
         aria-labelledby="dropdownMenu2">


        <?php if(request('location')!='invite'): ?>
            <a target="_blank"
               href="<?php echo e(courseDetailsUrl($query->id, $query->type, $query->slug)); ?>"
               class="dropdown-item"
            > <?php echo e(trans('courses.Frontend View')); ?></a>

            <?php if(permissionCheck('courseDetails') &&  $query->type == 1): ?>
                <a href="<?php echo e(route('courseDetails', [$query->id])); ?>" class="dropdown-item">
                    <?php echo e(__('courses.Add Lesson')); ?></a>
            <?php endif; ?>
            <?php
                if (@$query->discount_price != null) {
                     $course_price = $query->discount_price;
                 } else {
                     $course_price = $query->price;
                 }
            ?>
            <?php if(permissionCheck('courseDetails') && isModuleActive('EarlyBird') && $course_price>0): ?>
                <a href="<?php echo e(route('courseDetails', [$query->id])); ?>?type=earlyBirdPrice" class="dropdown-item">
                    <?php echo e(__('price_plan.Price Plan')); ?>

                </a>
            <?php endif; ?>


            <?php if($query->feature == 0): ?>
                <a href="<?php echo e(route('courseMakeAsFeature', [$query->id, 'make'])); ?>" class="dropdown-item">
                    <?php echo e(trans('courses.Mark As Feature')); ?>

                </a>
            <?php else: ?>
                <a href="<?php echo e(route('courseMakeAsFeature', [$query->id, 'remove'])); ?>" class="dropdown-item">
                    <?php echo e(trans('courses.Remove Feature')); ?>

                </a>
            <?php endif; ?>


            <?php if(permissionCheck('course.edit')): ?>
                <a href="<?php echo e(route('courseDetails', [$query->id]) . '?type=courseDetails'); ?>" class="dropdown-item">
                    <?php echo e(__('common.Edit')); ?>

                </a>
            <?php endif; ?>

            <?php if(permissionCheck('course.view')): ?>
                <a href="<?php echo e(route('courseDetails', [$query->id])); ?>" class="dropdown-item">
                    <?php echo e(trans('common.View')); ?>

                </a>
            <?php endif; ?>

            <?php if(permissionCheck('course.delete')): ?>
                <a onclick="confirm_modal('<?php echo e(route('course.delete', $query->id)); ?>')"
                   class="dropdown-item edit_brand"><?php echo e(trans('common.Delete')); ?></a>
            <?php endif; ?>

            <?php if(permissionCheck('course.enrolled_students') && $query->type == 1): ?>
                <a href="<?php echo e(route('course.enrolled_students', $query->id)); ?>" class="dropdown-item edit_brand">
                    <?php echo e(trans('student.Students')); ?>

                </a>
            <?php endif; ?>

            <?php if(isModuleActive('UpcomingCourse') && permissionCheck('admin.upcoming_courses.followers') && $query->is_upcoming_course): ?>
                <a href="<?php echo e(route('admin.upcoming_courses.followers', $query->id)); ?>"
                   class="dropdown-item"><?php echo e(trans('courses.Followers')); ?></a>
            <?php endif; ?>
            <?php if(isModuleActive('UpcomingCourse') && permissionCheck('admin.upcoming_courses.pre_booking') && $query->is_upcoming_course && $query->is_allow_prebooking): ?>
                <a href="<?php echo e(route('admin.upcoming_courses.pre_booking', $query->id)); ?>"
                   class="dropdown-item"><?php echo e(trans('courses.Prebooking')); ?></a>
            <?php endif; ?>

            <?php if(isModuleActive('UpcomingCourse') && permissionCheck('admin.upcoming_courses.publish') && $query->is_upcoming_course && $query->publish_status == 'pending'): ?>
                <a href="<?php echo e(route('admin.upcoming_courses.publish', $query->id)); ?>"
                   class="dropdown-item publish_course"><?php echo e(trans('courses.Publish')); ?></a>
            <?php endif; ?>

        <?php endif; ?>
        <?php if(isModuleActive('CourseInvitation') && permissionCheck('course.courseInvitation') && $query->type == 1): ?>
            <a href="<?php echo e(route('course.courseInvitation', $query->id)); ?>"
               class="dropdown-item edit_brand"><?php echo e(trans('common.Send Invitation')); ?></a>
        <?php endif; ?>
    </div>
</div>


<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/components/_course_action_td.blade.php ENDPATH**/ ?>