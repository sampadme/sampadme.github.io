<?php $__env->startSection('og_image'); ?><?php echo e(asset(Settings('logo'))); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo htmlspecialchars_decode($details); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <?php
        $route =request()->route()->getName();
    ?>
    <?php if($route=='blogs'): ?>
        <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/blogs.js')); ?>"></script>
    <?php elseif($route=='contact'): ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(Settings('gmap_key')); ?>"></script>
        <script src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/js/map.js"></script>
    <?php else: ?>
        <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/courses.js')); ?>"></script>
    <?php endif; ?>
    <?php if(isModuleActive("Store") && \Illuminate\Support\Facades\Route::currentRouteName()=="store.products"): ?>
        <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/store.js')); ?>"></script>
    <?php endif; ?>

    <script>
        $('.ui-resizable-resizer').remove()
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('aorapagebuilder::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/AoraPageBuilder/Resources/views/pages/show.blade.php ENDPATH**/ ?>