<div class="main-title mb-20">
    <div class="main-title mb-20">
        <h3 class="mb-0"><?php echo e(__('setting.General')); ?></h3>
    </div>
    <?php if(permissionCheck('settings.general_setting_update')): ?>
        <form action="" id="form_data_id" method="POST" enctype="multipart/form-data">
            <?php endif; ?>
            <?php echo csrf_field(); ?>
            <div class="General_system_wrap_area">
                <div class="single_system_wrap">
                    <div class=" mb-25">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'logo','type' => 'image','mediaId' => ''.e(isset($logo)?$logo->value_media?->media_id:'').'','label' => ''.e(__('setting.Header Logo')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('230x90')).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'logo','type' => 'image','media_id' => ''.e(isset($logo)?$logo->value_media?->media_id:'').'','label' => ''.e(__('setting.Header Logo')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('230x90')).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                    <div class=" mb-25">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'logo2','type' => 'image','mediaId' => ''.e(isset($logo2)?$logo2->value_media?->media_id:'').'','label' => ''.e(__('setting.Footer Logo')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('230x90')).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'logo2','type' => 'image','media_id' => ''.e(isset($logo2)?$logo2->value_media?->media_id:'').'','label' => ''.e(__('setting.Footer Logo')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('230x90')).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                    <div class=" mb-25">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'logo3','type' => 'image','mediaId' => ''.e(isset($logo3)?$logo3->value_media?->media_id:'').'','label' => ''.e(__('setting.Upload Student Panel Logo')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('230x90')).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'logo3','type' => 'image','media_id' => ''.e(isset($logo3)?$logo3->value_media?->media_id:'').'','label' => ''.e(__('setting.Upload Student Panel Logo')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('230x90')).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                    <div class=" mb-25">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'favicon','type' => 'image','mediaId' => ''.e(isset($favicon)?$favicon->value_media?->media_id:'').'','label' => ''.e(__('setting.Fav Icon')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('16x16')).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'favicon','type' => 'image','media_id' => ''.e(isset($favicon)?$favicon->value_media?->media_id:'').'','label' => ''.e(__('setting.Fav Icon')).'','note' => ''.e(__('student.Recommended size')).' ('.e(translatedNumber('16x16')).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                </div>

                <div class="single_system_wrap">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label" for=""><?php echo e(__('setting.Site Title')); ?></label>
                                <input class="primary_input_field" placeholder="Infix CRM" type="text" id="site_title"
                                       name="site_title" value="<?php echo e(Settings('site_title')); ?>">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label" for=""><?php echo e(__('common.Email')); ?></label>
                                <input class="primary_input_field" placeholder="demo@infix.com" type="email" id="email"
                                       name="email" value="<?php echo e(Settings('email')); ?>">
                            </div>
                        </div>


                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label" for=""><?php echo e(__('common.Phone')); ?></label>
                                <input class="primary_input_field" placeholder="-" type="text" id="phone" name="phone"
                                       value="<?php echo e(Settings('phone')); ?>">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label" for=""><?php echo e(__('common.Country')); ?></label>
                                <select class="primary_select mb-25" name="country_id" id="country_id">
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->id); ?>"
                                                <?php if(Settings('country_id')   == $country->id): ?> selected <?php endif; ?>><?php echo e($country->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label" for=""><?php echo e(__('common.Zip Code')); ?></label>
                                <input class="primary_input_field" placeholder="-" type="text" id="zip_code"
                                       name="zip_code" value="<?php echo e(Settings('zip_code')); ?>">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for=""><?php echo e(__('setting.System Default Language')); ?></label>
                                <select class="primary_select mb-25" name="language_id" id="language_id">
                                    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($language->id); ?>"
                                                <?php if(Settings('language_code')  == $language->code): ?> selected <?php endif; ?>><?php echo e($language->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label" for=""><?php echo e(__('setting.Date Format')); ?></label>
                                <select class="primary_select mb-25" name="date_format_id" id="date_format_id">
                                    <?php $__currentLoopData = $date_formats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dateFormat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($dateFormat->id); ?>"
                                                <?php if(Settings('date_format_id')  == $dateFormat->id): ?> selected <?php endif; ?>><?php echo e($dateFormat->normal_view); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                        
                        
                        

                        
                        
                        

                        
                        
                        

                        
                        
                        
                        
                        
                        
                        
                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label" for=""><?php echo e(__('setting.Time Zone')); ?></label>
                                <select class="primary_select mb-25" name="time_zone_id" id="time_zone_id">
                                    <?php $__currentLoopData = $timeZones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $timeZone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($timeZone->id); ?>"
                                                <?php if(Settings('time_zone_id') == $timeZone->id): ?> selected <?php endif; ?>><?php echo e($timeZone->time_zone); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>


                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for=""><?php echo e(__('setting.Public Student Registration')); ?></label>
                                <select class="primary_select mb-25" name="student_reg" id="student_reg">
                                    <option value="1"
                                            <?php if(Settings('student_reg') == 1): ?> selected <?php endif; ?>><?php echo e(__('common.Enable')); ?></option>
                                    <option value="0"
                                            <?php if(Settings('student_reg') == 0): ?> selected <?php endif; ?>><?php echo e(__('common.Disable')); ?></option>

                                </select>
                            </div>
                        </div>
                        <?php if(isModuleActive('Org')): ?>
                            <div class="col-xl-6 org_branch_div">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for=""><?php echo e(__('org.Select Default Branch For Register')); ?></label>
                                    <select class="primary_select mb-25" name="org_student_default_branch">
                                        <option value=""><?php echo e(__('org.Select Default Branch')); ?></option>
                                        <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                <?php echo e($branch->code == Settings('org_student_default_branch')?'selected':''); ?> value="<?php echo e($branch->code); ?>">
                                                <?php echo e($branch->group); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for=""><?php echo e(__('setting.Public Instructor Registration')); ?></label>
                                <select class="primary_select mb-25" name="instructor_reg" id="instructor_reg">
                                    <option value="1"
                                            <?php if(Settings('instructor_reg') == 1): ?> selected <?php endif; ?>><?php echo e(__('common.Enable')); ?></option>
                                    <option value="0"
                                            <?php if(Settings('instructor_reg') == 0): ?> selected <?php endif; ?>><?php echo e(__('common.Disable')); ?></option>

                                </select>
                            </div>
                        </div>


                        
                        
                        
                        
                        
                        
                        
                        
                        


                        
                        
                        


                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label" for="address"><?php echo e(__('common.Address')); ?></label>
                                <input class="primary_input_field" placeholder="-" type="text" id="address"
                                       name="address" value="<?php echo e(Settings('address')); ?>">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="currency_conversion"><?php echo e(__('setting.Students Active Device Limit')); ?></label>
                                <select class="primary_select mb-25" name="device_limit"
                                        id="currency_conversion">
                                    <option value="0"
                                            <?php if(Settings('device_limit') == 0): ?> selected <?php endif; ?>> <?php echo e(__('common.Unlimited')); ?>

                                    </option>
                                    <?php for($i=1;$i<=20;$i++): ?>
                                        <option value="<?php echo e($i); ?>"
                                                <?php if(Settings('device_limit') == $i): ?> selected <?php endif; ?>><?php echo e(translatedNumber($i)); ?>

                                        </option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="device_limit_time"><?php echo e(__('setting.Inactive Logout Time')); ?>

                                    <small>(<?php echo e(__('setting.In Minute')); ?>)</small>

                                </label>
                                <input class="primary_input_field" placeholder="0 means Unlimited" type="number" min="0"
                                       id="device_limit_time"
                                       name="device_limit_time" value="<?php echo e(Settings('device_limit_time')); ?>">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="allow_force_logout"><?php echo e(__('setting.Allow force logout')); ?>

                                </label>
                                <select class="primary_select mb-25" name="allow_force_logout"
                                        id="allow_force_logout">
                                    <option value="1" <?php echo e(Settings('allow_force_logout') == 1 ? 'selected' : ''); ?>>
                                        <?php echo e(__('common.Yes')); ?>

                                    </option>

                                    <option value="0" <?php echo e(Settings('allow_force_logout') != 1 ? 'selected' : ''); ?>>
                                        <?php echo e(__('common.No')); ?>

                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="category_show"><?php echo e(__('setting.Category Show In Frontend')); ?> </label>
                                <select class="primary_select mb-25" name="category_show"
                                        id="category_show">
                                    <option value="1"
                                            <?php if(Settings('category_show') == 1): ?> selected <?php endif; ?>><?php echo e(__('common.Show')); ?>

                                    </option>

                                    <option value="0"
                                            <?php if(Settings('category_show') == 0): ?> selected <?php endif; ?>><?php echo e(__('common.Hide')); ?>

                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="hide_menu_search_box"><?php echo e(__('setting.Hide menu Search Box In Frontend')); ?> </label>
                                <select class="primary_select mb-25" name="hide_menu_search_box"
                                        id="hide_menu_search_box">
                                    <option value="1"
                                            <?php if(Settings('hide_menu_search_box') == 1): ?> selected <?php endif; ?>><?php echo e(__('common.Yes')); ?>

                                    </option>

                                    <option value="0"
                                            <?php if(Settings('hide_menu_search_box') == 0): ?> selected <?php endif; ?>><?php echo e(__('common.No')); ?>

                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="google_analytics"><?php echo e(__('setting.Hide Footer From Mobile')); ?>  </label>
                                <select class="primary_select mb-25" name="footer_show"
                                        id="currency_conversion">
                                    <option value="1"
                                            <?php if(Settings('footer_show') == 1): ?> selected <?php endif; ?>><?php echo e(__('common.Show')); ?>

                                    </option>

                                    <option value="0"
                                            <?php if(Settings('footer_show') == 0): ?> selected <?php endif; ?>><?php echo e(__('common.Hide')); ?>

                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="show_cart"><?php echo e(__('setting.Show Cart  In Frontend')); ?>  </label>
                                <select class="primary_select mb-25" name="show_cart"
                                        id="show_cart">
                                    <option value="1"
                                            <?php if(Settings('show_cart') == 1): ?> selected <?php endif; ?>><?php echo e(__('common.Show')); ?>

                                    </option>

                                    <option value="0"
                                            <?php if(Settings('show_cart') == 0): ?> selected <?php endif; ?>><?php echo e(__('common.Hide')); ?>

                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="student_dashboard_card_view"><?php echo e(__('setting.Student Dashboard Info In Card View')); ?>  </label>
                                <select class="primary_select mb-25" name="student_dashboard_card_view"
                                        id="student_dashboard_card_view">
                                    <option value="1"
                                            <?php if(Settings('student_dashboard_card_view') == 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.Yes')); ?>

                                    </option>

                                    <option value="0"
                                            <?php if(Settings('student_dashboard_card_view') == 0): ?> selected <?php endif; ?>>   <?php echo e(__('common.No')); ?>

                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="hide_ecommerce"><?php echo e(__('setting.Hide Ecommerce')); ?>  </label>
                                <select class="primary_select mb-25" name="hide_ecommerce"
                                        id="hide_ecommerce">

                                    <option value="0"
                                            <?php if(Settings('hide_ecommerce') == 0): ?> selected <?php endif; ?>>   <?php echo e(__('common.No')); ?>

                                    </option>
                                    <option value="1"
                                            <?php if(Settings('hide_ecommerce') == 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.Yes')); ?>

                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="hide_blog_comment"><?php echo e(__('setting.Hide Blog Comment')); ?>  </label>
                                <select class="primary_select mb-25" name="hide_blog_comment"
                                        id="hide_blog_comment">

                                    <option value="0"
                                            <?php if(Settings('hide_blog_comment') == 0): ?> selected <?php endif; ?>>   <?php echo e(__('common.No')); ?>

                                    </option>
                                    <option value="1"
                                            <?php if(Settings('hide_blog_comment') == 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.Yes')); ?>

                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="hide_social_share_btn"><?php echo e(__('setting.Hide Social Share Button')); ?>  </label>
                                <select class="primary_select mb-25" name="hide_social_share_btn"
                                        id="hide_social_share_btn">

                                    <option value="0"
                                            <?php if(Settings('hide_social_share_btn') == 0): ?> selected <?php endif; ?>>   <?php echo e(__('common.No')); ?>

                                    </option>
                                    <option value="1"
                                            <?php if(Settings('hide_social_share_btn') == 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.Yes')); ?>

                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="hide_total_enrollment_count"><?php echo e(__('setting.Hide Total Enrollment Count')); ?>  </label>
                                <select class="primary_select mb-25" name="hide_total_enrollment_count"
                                        id="hide_total_enrollment_count">

                                    <option value="0"
                                            <?php if(Settings('hide_total_enrollment_count') == 0): ?> selected <?php endif; ?>>   <?php echo e(__('common.No')); ?>

                                    </option>
                                    <option value="1"
                                            <?php if(Settings('hide_total_enrollment_count') == 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.Yes')); ?>

                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="start_site"><?php echo e(__('setting.Starting site')); ?>  </label>
                                <select class="primary_select mb-25" name="start_site"
                                        id="start_site">

                                    <option value="loginpage"
                                            <?php if(Settings('start_site') == 'loginpage'): ?> selected <?php endif; ?>> <?php echo e(__('setting.Login Page')); ?>

                                    </option>
                                    <option value="homepage"
                                            <?php if(Settings('start_site') == 'homepage'): ?> selected <?php endif; ?>> <?php echo e(__('setting.Home Page')); ?>

                                    </option>

                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="navigate_user_after_login"><?php echo e(__('setting.Navigate User After Login')); ?>  </label>
                                <select class="primary_select mb-25" name="navigate_user_after_login"
                                        id="navigate_user_after_login">

                                    <option value="dashboard"
                                            <?php if(Settings('navigate_user_after_login') == 'dashboard'): ?> selected <?php endif; ?>>
                                        <?php echo e(__('common.Dashboard')); ?>

                                    </option>
                                    <option value="homepage"
                                            <?php if(Settings('navigate_user_after_login') == 'homepage'): ?> selected <?php endif; ?>> <?php echo e(__('setting.Home Page')); ?>

                                    </option>

                                </select>
                            </div>
                        </div>
                        <?php if(isModuleActive('Org')): ?>
                            <div class="col-xl-6">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for="customize_org_chart_branch_navigate"><?php echo e(__('org.Navigate after login for special Org chart branch')); ?>  </label>
                                    <select class="primary_select mb-25" name="customize_org_chart_branch_navigate"
                                            id="customize_org_chart_branch_navigate">

                                        <option value="0"
                                                <?php if(Settings('customize_org_chart_branch_navigate') == '0'): ?> selected <?php endif; ?>> <?php echo e(__('common.No')); ?>

                                        </option>
                                        <option value="1"
                                                <?php if(Settings('customize_org_chart_branch_navigate') == '1'): ?> selected <?php endif; ?>> <?php echo e(__('common.Yes')); ?>

                                        </option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-xl-6 org_branch_special_div">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for=""><?php echo e(__('org.Select special Org Chart branch')); ?></label>
                                    <select class="primary_select mb-25" name="org_student_special_branch">
                                        <option value=""><?php echo e(__('org.Select special Org Chart branch')); ?></option>
                                        <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                <?php echo e($branch->code == Settings('org_student_special_branch')?'selected':''); ?> value="<?php echo e($branch->code); ?>">
                                                <?php echo e($branch->group); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                            </div>

                            <div class="col-xl-6 org_branch_special_div">
                                <div class="primary_input mb-25">
                                    <label class="primary_input_label"
                                           for="navigate_user_after_login"><?php echo e(__('org.Navigate special branch After Login')); ?>  </label>
                                    <select class="primary_select mb-25" name="navigate_special_branch_after_login"
                                            id="navigate_special_branch_after_login">
                                        <option value="homepage"
                                                <?php if(Settings('navigate_special_branch_after_login') == 'homepage'): ?> selected <?php endif; ?>> <?php echo e(__('setting.Home Page')); ?>

                                        </option>
                                        <option value="dashboard"
                                                <?php if(Settings('navigate_special_branch_after_login') == 'dashboard'): ?> selected <?php endif; ?>>
                                            <?php echo e(__('common.Dashboard')); ?>

                                        </option>


                                    </select>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-xl-6">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="mobile_app_only_mode"><?php echo e(__('setting.Mobile App Only Mode')); ?>  </label>
                                <select class="primary_select mb-25" name="mobile_app_only_mode"
                                        id="mobile_app_only_mode">

                                    <option value="0"
                                            <?php if(Settings('mobile_app_only_mode') == 0): ?> selected <?php endif; ?>>   <?php echo e(__('common.No')); ?>

                                    </option>
                                    <option value="1"
                                            <?php if(Settings('mobile_app_only_mode') == 1): ?> selected <?php endif; ?>>   <?php echo e(__('common.Yes')); ?>

                                    </option>

                                </select>
                            </div>
                        </div>


                        <div class="col-xl-12">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="company_info"><?php echo e(__('setting.Company Information')); ?>   </label>
                                <textarea class="primary_textarea" placeholder="Company Info" id="company_info"
                                          cols="30" rows="10"
                                          name="company_info"><?php echo e(Settings('company_info')); ?></textarea>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="copyright_text"><?php echo e(__('setting.Backend')); ?> <?php echo e(__('setting.Copyright Text')); ?></label>
                                <input class="primary_input_field" placeholder="-" type="text" id="copyright_text"
                                       name="copyright_text" value="<?php echo e(Settings('copyright_text')); ?>">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
                $tooltip = "";
                if(!permissionCheck('settings.general_setting_update')){
                    $tooltip = "You have no permission to add";
                }
            ?>
            <div class="submit_btn d-flex justify-content-center text-center mt-4">
                <button class="primary-btn fix-gr-bg" type="submit" data-bs-toggle="tooltip" title="<?php echo e($tooltip); ?>"
                        id="general_info_sbmt_btn"><i class="ti-check"></i> <?php echo e(__('common.Save')); ?></button>
            </div>
        </form>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/page_components/general_settings.blade.php ENDPATH**/ ?>