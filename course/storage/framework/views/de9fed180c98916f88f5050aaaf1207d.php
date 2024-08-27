<div class="col-lg-12 text-end d-flex gap-10 justify-content-end flex-wrap mb-3">
    <?php if(auth()->user()->role_id==1): ?>
        <a class="primary-btn radius_30px   fix-gr-bg"
           href="<?php echo e(url('public/backend/img/google_drive.pdf')); ?>"
           download="google_drive.pdf"><i
                class="ti-file"></i><?php echo e(__('setting.Documentation')); ?></a>
    <?php endif; ?>
    <?php if(auth()->user()->googleToken): ?>
        <div class="dropdown CRM_dropdown ml-10">
            <button class="btn btn-secondary dropdown-toggle" type="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                <?php echo e(auth()->user()->googleToken->google_email); ?>

            </button>
            <div class="dropdown-menu dropdown-menu-right"
                 aria-labelledby="dropdownMenu2">
                <a href="<?php echo e(route('setting.google.login')); ?>"
                   class="dropdown-item"><?php echo e(__('setting.Switch Account')); ?></a>
                <a href="<?php echo e(route('setting.google.logout')); ?>"
                   class="dropdown-item"><?php echo e(__('common.Logout')); ?></a>
            </div>
        </div>
    <?php else: ?>
        <a href="<?php echo e(route('setting.google.login')); ?>"
           class="primary-btn radius_30px   fix-gr-bg"><i
                class="ti-google"></i> <?php echo e(trans('common.Login')); ?>

        </a>
    <?php endif; ?>
</div>
<input type="hidden" name="google" value="1">
<div class="col-xl-12">
    <div class="primary_input mb-25">
        <label class="primary_input_label"
               for=""><?php echo e(__('setting.Client ID')); ?>

            *</label>
        <input class="primary_input_field" placeholder="-" type="text"
               name="gdrive_client_id"
               value="<?php echo e(config('filesystems.disks.google.clientId')); ?>">
    </div>
</div>

<div class="col-xl-12">
    <div class="primary_input mb-25">
        <label class="primary_input_label"
               for=""><?php echo e(__("setting.Client Secret")); ?>

            *</label>
        <input class="primary_input_field" placeholder="-" type="text"
               name="gdrive_client_secret"
               value="<?php echo e(config('filesystems.disks.google.clientSecret')); ?>">
    </div>
</div>


<div class="col-lg-12">
    <span><?php echo e(__('setting.Callback URL')); ?>: </span>
    <code>
        <?php echo e(route('setting.google.callback')); ?>

    </code>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/storage/partials/_gdrive_form.blade.php ENDPATH**/ ?>