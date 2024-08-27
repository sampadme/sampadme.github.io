<div>
    <?php if($newsletterSetting): ?>
        <?php if($newsletterSetting->home_status==1): ?>
            <div class="footer_top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer__cta">
                                <div class="thumb">
                                    <img src="<?php echo e(asset(@$frontendContent->subscribe_logo)); ?>" alt="" class="w-100">
                                </div>
                                <div class="cta_content">
                                    <h3><?php echo e(@$frontendContent->subscribe_title); ?></h3>
                                    <p><?php echo e(@$frontendContent->subscribe_sub_title); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="subcribe-form theme_mailChimp">
                                <form action="<?php echo e(route('subscribe')); ?>"
                                      method="POST" class="subscription relative"><?php echo csrf_field(); ?>
                                    <input name="email" class="form-control"
                                           placeholder="<?php echo e(__('frontend.Enter e-mail Address')); ?>"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = '<?php echo e(__('frontend.Email')); ?>'"
                                           required="" type="email" value="<?php echo e(old('email')); ?>">

                                    <button type="submit"><?php echo e(__('frontend.Subscribe Now')); ?></button>
                                    <div class="info">
                                        <?php if(isset($errors) && $errors->any()): ?>
                                            <span class="text-danger" role="alert"><?php echo e($errors->first('email')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/frontend/infixlmstheme/components/footer-news-letter.blade.php ENDPATH**/ ?>