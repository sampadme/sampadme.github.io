<ul class="Check_sidebar">
    <?php if(isset($result)): ?>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $hasItem=is_array(request('lang_id'));
                if ($hasItem){
                    $langs =request('lang_id');
                }
            ?>
            <li>
                <label class="primary_checkbox d-flex">
                    <input type="checkbox" class="language"
                           value="<?php echo e($lang->id); ?>"
                    <?php if($hasItem): ?>
                        <?php echo e(in_array($lang->id,$langs)?'checked':''); ?>

                        <?php endif; ?>
                    >
                    <span class="checkmark mr_15"></span>
                    <span class="label_name"><?php echo e($lang->name); ?></span>
                </label>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

</ul>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/frontend/infixlmstheme/snippets/components/_single_sidebar_language.blade.php ENDPATH**/ ?>