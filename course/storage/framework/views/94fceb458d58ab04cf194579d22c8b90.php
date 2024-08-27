<div class="QA_section QA_section_heading_custom check_box_table">
    <div class="QA_table ">
        <!-- table-responsive -->
        <div class="">
            <table id="lms_table" class="table Crm_table_active3">
                <thead>
                <tr>
                    <th scope="col"><?php echo e(__('common.SL')); ?></th>
                    <th scope="col"><?php echo e(__('setting.Type')); ?></th>
                    <th scope="col"><?php echo e(__('setting.Activate')); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $business_settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $business_setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(translatedNumber($key+1)); ?></td>
                        <td><?php echo e(strtoupper(str_replace("_"," ",$business_setting->type))); ?></td>
                        <td>
                            <label class="switch_toggle" for="checkbox<?php echo e($business_setting->id); ?>">
                                <input type="checkbox" id="checkbox<?php echo e($business_setting->id); ?>"
                                       <?php if($business_setting->status == 1): ?> checked
                                       <?php endif; ?> <?php if(!permissionCheck('setting.activation')): ?> disabled
                                       <?php endif; ?>  value="<?php echo e($business_setting->id); ?>"
                                       onchange="update_active_status(this)">
                                <i class="slider round"></i>
                            </label>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/page_components/activation.blade.php ENDPATH**/ ?>