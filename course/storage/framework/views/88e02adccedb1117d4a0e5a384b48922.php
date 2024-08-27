<div>
    <?php if(orgPermission($org_id) && (permissionCheck($route) || empty($route))): ?>
        <label class="switch_toggle">
            <input type="checkbox"
                   class="status_enable_disable"
                   <?php if($status == 1): ?> checked
                   <?php endif; ?> value="<?php echo e($id); ?>">
            <i class="slider round"></i>
        </label>
    <?php else: ?>
        <?php echo e($status==1?trans('common.Active'):trans('common.Inactive')); ?>

    <?php endif; ?>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/backend/components/status.blade.php ENDPATH**/ ?>