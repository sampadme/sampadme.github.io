<?php if(isModuleActive('EarlyBird') && $course_price>0): ?>
    <div role="tabpanel"
         class="tab-pane fade  <?php if($type=="earlyBirdPrice"): ?> show active <?php endif; ?> "
         id="earlyBirdPrice">
        <div class="">
            <div class="">

                <?php if ($__env->exists('earlybird::inc.price_plan_list', ['price_plans' => $course->pricePlans, 'product' => $course])) echo $__env->make('earlybird::inc.price_plan_list', ['price_plans' => $course->pricePlans, 'product' => $course], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/parts_of_course_details/_course_details_early_bird_tab.blade.php ENDPATH**/ ?>