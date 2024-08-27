<h4><?php echo e(__('common.Live Preview')); ?></h4>
<div class="mt_30">

    <nav class="preview_menu_wrapper">
        <ul id="previewMenu">


            <?php if(isset($sections)): ?>
                <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $count = $section->permissions->count();
                        if ($count == 0){
                            continue;
                        }
                    ?>
                    <li class="preview_section">
                        <?php echo e($section->name); ?>

                    </li>
                    <?php if($section->activeMenus->count()): ?>
                        <?php $__currentLoopData = $section->activeMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(!$menu->module ||  isModuleActive($menu->module)): ?>
                                <?php
                                    $submenus =$section->activeSubmenus->where('parent_route',$menu->route)->where('parent_route','!=','dashboard');
                                     if ($menu->theme && $menu->theme!=currentTheme()){
                                                    continue;
                                                }

                                ?>

                                <li class="">
                                    <a href="#"
                                       class="<?php if($submenus->count()): ?> has-arrow <?php endif; ?>">
                                        <div class="nav_icon_small">
                                            <span
                                                class="<?php echo e($menu->icon??'fas fa-th'); ?>"></span>
                                        </div>
                                        <div class="nav_title">
                                            <span><?php echo e($menu->name); ?></span>
                                        </div>
                                    </a>
                                    <?php if($submenus->count()): ?>
                                        <ul>
                                            <?php $__currentLoopData = $submenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <?php if(!$submenu->module ||  isModuleActive($submenu->module)): ?>
                                                    <?php
                                                        if ($submenu->theme && $submenu->theme!=currentTheme()){
                                                              continue;
                                                          }
                                                    ?>
                                                    <li>
                                                        <a href="#">
                                                            <?php echo e($submenu->name); ?>

                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>

                                    <?php endif; ?>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </nav>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/SidebarManager/Resources/views/components/live_preview.blade.php ENDPATH**/ ?>