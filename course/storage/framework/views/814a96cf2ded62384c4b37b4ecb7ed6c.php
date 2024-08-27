<?php
    $approve = false;
    if (Auth::user()->role_id != 2) {
    $approve = true;
    } else {
    $courseApproval = Settings('course_approval');
    if ($courseApproval == 0) {
    $approve = true;
    }
    }

?>
<?php if($approve): ?>
    <?php
        if (permissionCheck('course.status_update')) {
        $status_enable_eisable = "status_enable_disable";
        } else {
        $status_enable_eisable = "";
        }
        $checked = $query->status == 1 ? "checked" : "";
    ?>

    <label class="switch_toggle">
        <input type="checkbox" class="<?php echo e($status_enable_eisable); ?>"
               value="<?php echo e($query->id); ?>"
            <?php echo e($checked); ?>><i class="slider round"></i></label>
<?php else: ?>
    <?php echo e($query->status == 1 ? trans('common.Approved') : trans('common.Pending')); ?>

<?php endif; ?>


<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/components/_course_status_td.blade.php ENDPATH**/ ?>