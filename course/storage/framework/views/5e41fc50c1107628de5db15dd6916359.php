<?php echo $__env->make('backend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('mainContent'); ?>

<?php echo $__env->make('backend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/backend/master.blade.php ENDPATH**/ ?>