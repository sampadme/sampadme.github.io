<li class="mega_menu_dropdown <?php echo e($level>3?'third_sub':''); ?> ">
    <a href="<?php echo e(route('categoryCourse',[$category->id,$category->slug])); ?>"><?php echo e($category->name); ?></a>
    <?php if(isset($category->childs)): ?>
        <?php if(count($category->childs)!=0): ?>
            <ul>
                <li>
                    <div class="menu_dropdown_iner d-flex  pe-0">
                        <div class="single_menu_dropdown">

                            
                            <ul>
                                <?php $__currentLoopData = $category->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <?php echo $__env->make(theme('partials._category'),['category'=>$child,'level'=>$level + 1 ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>

                        </div>

                    </div>
                </li>
            </ul>
        <?php endif; ?>
    <?php endif; ?>
</li>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/frontend/infixlmstheme/partials/_category.blade.php ENDPATH**/ ?>