<!-- SMTP form  -->
<?php if(permissionCheck('setting.email_credentials_update')): ?>
    <form action="<?php echo e(route('updateEmailSetting')); ?>" method="post">
        <?php endif; ?>
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="2" id="">
        <div class="row">
            <div class="col-xl-6">
                <div class="primary_input mb-25">
                    <label class="primary_input_label" for=""><?php echo e(__('setting.From Name')); ?>*</label>
                    <input class="primary_input_field"
                           <?php echo e($errors->has('from_name') ? ' autofocus' : ''); ?> placeholder="" type="text"
                           name="from_name" value="<?php echo e(@$smtp_mail_setting->from_name); ?>">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="primary_input mb-25">
                    <label class="primary_input_label" for=""><?php echo e(__('setting.From Mail')); ?>*</label>
                    <input class="primary_input_field"
                           <?php echo e($errors->has('from_email') ? ' autofocus' : ''); ?> placeholder="" type="email"
                           name="from_email" value="<?php echo e(@$smtp_mail_setting->from_email); ?>">
                </div>
            </div>
        </div>
        <div class="row" id="smtp">
            <div class="col-xl-6">
                <div class="primary_input mb-25">
                    <label class="primary_input_label" for=""><?php echo e(__('setting.Mail Driver')); ?>*</label>
                    <input class="primary_input_field"
                           <?php echo e($errors->has('mail_driver') ? ' autofocus' : ''); ?> placeholder="" type="text" readonly
                           name="mail_driver" value="smtp">
                </div>
            </div>

            <div class="col-xl-6">
                <div class="primary_input mb-25">
                    <label class="primary_input_label" for=""><?php echo e(__('setting.Mail Host')); ?></label>
                    <input class="primary_input_field" placeholder="-" type="text" name="mail_host"
                           value="<?php echo e(@$smtp_mail_setting->mail_host); ?>">
                </div>
            </div>

            <div class="col-xl-6">
                <div class="primary_input mb-25">
                    <label class="primary_input_label" for=""><?php echo e(__('setting.Mail Port')); ?>*</label>
                    <input class="primary_input_field"
                           <?php echo e($errors->has('mail_port') ? ' autofocus' : ''); ?> placeholder="" type="text"
                           name="mail_port" value="<?php echo e(@$smtp_mail_setting->mail_port); ?>">
                </div>
            </div>

            <div class="col-xl-6">
                <div class="primary_input mb-25">
                    <label class="primary_input_label" for=""><?php echo e(__('setting.Mail Username')); ?></label>
                    <input class="primary_input_field" placeholder="-" type="text" name="mail_username"
                           value="<?php echo e(@$smtp_mail_setting->mail_username); ?>">
                </div>
            </div>


            <div class="col-xl-6">
                <div class="primary_input mb-25">
                    
                    <label class="primary_input_label" for=""><?php echo e(__('setting.Mail Password')); ?></label>
                    <input class="primary_input_field" placeholder="-" type="text" name="mail_password"
                           value="<?php echo e(@$smtp_mail_setting->mail_password); ?>">
                </div>
            </div>

            <div class="col-xl-6">
                <div class="primary_input">
                    <label class="primary_input_label" for=""><?php echo e(__('setting.Mail Encryption')); ?></label>
                    <select name="mail_encryption" class="primary_select mb-25">
                        <option value="ssl" <?php if(@$smtp_mail_setting->mail_encryption == "ssl"): ?> selected <?php endif; ?>>SSL
                        </option>
                        <option value="tls" <?php if(@$smtp_mail_setting->mail_encryption == "tls"): ?> selected <?php endif; ?>>TLS
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="primary_input">
                    <label class="primary_input_label"
                           for=""><?php echo e(__('common.Active')); ?> <?php echo e(__('common.Status')); ?></label>
                    <select name="active_status" class="primary_select mb-25">
                        <option value="1"
                                <?php if(@$smtp_mail_setting->active_status==1): ?> selected <?php endif; ?>><?php echo e(__('common.Active')); ?></option>
                        <option value="0"
                                <?php if(@$smtp_mail_setting->active_status==0): ?> selected <?php endif; ?>><?php echo e(__('common.Deactive')); ?></option>
                    </select>
                </div>
            </div>


        </div>

        <div class="row">
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
            </div>
        </div>
    </form>

    <!--/ SMTP_form  -->
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/page_components/smtp_mail_setup.blade.php ENDPATH**/ ?>