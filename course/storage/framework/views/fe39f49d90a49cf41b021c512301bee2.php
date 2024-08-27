<li>
    <a href="<?php echo e(route('categoryCourse',[$category->id,$category->slug])); ?>"><?php echo e($category->name); ?>

        <?php if(isset($category->childs)): ?>
            <?php if(count($category->childs)!=0): ?>
                <i id="dropdown" class="fa fa-caret-down"></i>
            <?php endif; ?>
        <?php endif; ?>
    </a>
    <?php if(isset($category->childs)): ?>
        <?php if(count($category->childs)!=0): ?>
            <ul>
                <?php $__currentLoopData = $category->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php echo $__env->make(theme('partials._mobile_category'),['category'=>$child,'level'=>$level + 1 ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    <?php endif; ?>
</li>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/frontend/infixlmstheme/partials/_mobile_category.blade.php ENDPATH**/ ?>