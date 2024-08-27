<table id="lms_table" class="table Crm_table_active3">
    <thead>
    <tr>
        <th scope="col"><?php echo e(__('common.SL')); ?></th>
        <th scope="col"><?php echo e(__('common.Logo')); ?></th>
        <th scope="col"><?php echo e(__('setting.Title')); ?></th>
        <th scope="col"><?php echo e(__('setting.Specifications')); ?></th>
        <th scope="col"><?php echo e(__('common.Action')); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $payout_accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th><?php echo e(translatedNumber($key+1 )); ?></th>
            <td>
                <img class="image_td" src="<?php echo e(showImage($row->logo)); ?>" alt="logo">
            </td>
            <td><?php echo e($row->title); ?></td>
            <td><?php echo e(translatedNumber($row->specifications_count )); ?></td>
            <td>
                <!-- shortby  -->
                <div class="dropdown CRM_dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button"
                            id="dropdownMenu2" data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                        <?php echo e(__('common.Select')); ?>

                    </button>
                    <div class="dropdown-menu dropdown-menu-right"
                         aria-labelledby="dropdownMenu2">

                        <a data-id="<?php echo e($row->id); ?>" href="javascript:void(0);" class="dropdown-item show_payout_item"
                        ><?php echo e(__('common.View')); ?></a>
                        <?php if(permissionCheck('admin.payout_accounts.update')): ?>
                            <a data-id="<?php echo e($row->id); ?>" href="javascript:void(0);" class="dropdown-item edit_payout_item"
                            ><?php echo e(__('common.Edit')); ?></a>
                        <?php endif; ?>


                        <?php if(permissionCheck('admin.payout_accounts.destroy')): ?>
                            <a onclick="confirm_modal('<?php echo e(route('admin.payout_accounts.destroy', $row->id)); ?>');"
                               class="dropdown-item"><?php echo e(__('common.Delete')); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- shortby  -->
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/payout_accounts/list.blade.php ENDPATH**/ ?>