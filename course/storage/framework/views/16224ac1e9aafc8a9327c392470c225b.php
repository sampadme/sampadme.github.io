<!-- SMTP form  -->
<?php if(permissionCheck('setting.email_credentials_update')): ?>
    <form action="<?php echo e(route('updateEmailSetting')); ?>" method="post">
        <?php endif; ?>
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="3" id="">
        <div class="row">
            <div class="col-xl-6">
                <div class="primary_input mb-25">
                    <label class="primary_input_label" for=""><?php echo e(__('setting.From Name')); ?>*</label>
                    <input class="primary_input_field" placeholder=""
                           <?php echo e($errors->has('from_name') ? ' autofocus' : ''); ?> type="text" name="from_name"
                           value="<?php echo e(@$send_grid_mail_setting->from_name); ?>">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="primary_input mb-25">
                    <label class="primary_input_label" for=""><?php echo e(__('setting.From Mail')); ?>*</label>
                    <input class="primary_input_field"
                           <?php echo e($errors->has('from_email') ? ' autofocus' : ''); ?> placeholder="" type="text"
                           name="from_email" value="<?php echo e(@$send_grid_mail_setting->from_email); ?>">
                </div>
            </div>
        </div>
        <input type="hidden" name="mail_driver" value="sendgrid">
        <div class="row">
            <div class="col-xl-6">
                <div class="primary_input mb-25">
                    <label class="primary_input_label" for=""><?php echo e(__('setting.API Key')); ?>*</label>
                    <input class="primary_input_field"
                           <?php echo e($errors->has('api_key') ? ' autofocus' : ''); ?> placeholder="API Key" type="text"
                           name="api_key" value="<?php echo e(@$send_grid_mail_setting->api_key); ?>">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="primary_input">
                    <label class="primary_input_label"
                           for=""><?php echo e(__('common.Active')); ?> <?php echo e(__('common.Status')); ?></label>
                    <select name="active_status" class="primary_select mb-25">
                        <option value="1"
                                <?php if(@$send_grid_mail_setting->active_status==1): ?> selected <?php endif; ?>><?php echo e(__('common.Active')); ?></option>
                        <option value="0"
                                <?php if(@$send_grid_mail_setting->active_status==0): ?> selected <?php endif; ?>><?php echo e(__('common.Deactive')); ?></option>
                    </select>
                </div>
            </div>

            <?php
                $tooltip = "";
                if(permissionCheck('setting.email_credentials_update')){
                    $tooltip = "";
                }else{
                    $tooltip = "You have no permission to Update";
                }
            ?>
            <div class="col-12 mb-45 pt_15">
                <div class="submit_btn text-center">
                    <button class="primary-btn fix-gr-bg" data-bs-toggle="tooltip" title="<?php echo e($tooltip); ?>" type="submit"><i
                            class="ti-check"></i> <?php echo e(__('common.Save')); ?></button>
                </div>
                <span><?php echo e(__('setting.For Details')); ?>

                    <a href="https://sendgrid.com/docs/ui/account-and-settings/api-keys/"
                       target="_blank"><?php echo e(__('setting.Click Here')); ?></a>
                </span>
            </div>
        </div>
    </form>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/page_components/send_grid_mail_setup.blade.php ENDPATH**/ ?>