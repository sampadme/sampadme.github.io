<h4><?php echo e(__('common.Menu List')); ?></h4>
<div class="">


    <?php $__env->startPush('styles'); ?>
        <link href="<?php echo e(asset('public/backend/vendors/nestable/jquery.nestable.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('Modules/SidebarManager/Resources/assets/css/sidebar.css')); ?>" rel="stylesheet">

    <?php $__env->stopPush(); ?>


    <div class="row">
        <div class="col-xl-12 menu_item_div" id="itemDiv">
            <?php if(isset($sections)): ?>
                <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="closed_section" data-id="<?php echo e($section->id); ?>">
                        <div id="accordion" class="dd">
                            <div class="section_nav">
                                <h5><?php echo e($section->name); ?></h5>
                                <div class="setting_icons">
                                     <span class="edit-btn">
                                                             <a class=" btn-modal"
                                                                data-container="#commonModal" type="button"
                                                                href="<?php echo e(route('sidebar-manager.section-edit-form',$section->id)); ?>"
                                                             >
                                                           <i class="ti-pencil-alt"></i>
                                                        </a>

                                                        </span>
                                    <i class="ti-close delete_section" data-id="<?php echo e($section->id); ?>"></i>
                                    <i class="ti-angle-up toggle_up_down"></i>
                                </div>
                            </div>
                        </div>
                        <?php if($section->activeMenus->count()): ?>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="accordion" class="dd menu-list used_menu"
                                                 data-section="<?php echo e($section->id); ?>">
                                                <ol class="dd-list">

                                                    <?php $__currentLoopData = $section->activeMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(!$menu->module ||  isModuleActive($menu->module)): ?>
                                                            <?php
                                                                $submenus =$section->activeSubmenus->where('parent_route',$menu->route)->where('parent_route','!=','dashboard');
                                                                   if ($menu->theme && $menu->theme!=currentTheme()){
                                                                    continue;
                                                                }
                                                            ?>
                                                            <li class="dd-item" data-id="<?php echo e($menu->id); ?>"
                                                                data-section_id="<?php echo e($menu->section_id); ?>"
                                                                data-parent_route="<?php echo e($menu->parent_route); ?>"
                                                            >
                                                                <div class="card accordion_card"
                                                                     id="accordion_<?php echo e($menu->id); ?>">
                                                                    <div class="card-header item_header"
                                                                         id="heading_<?php echo e($menu->id); ?>">
                                                                        <div class="dd-handle">
                                                                            <div class="float-start">
                                                                                <?php echo e($menu->name); ?>

                                                                            </div>
                                                                        </div>
                                                                        <div class="float-end btn_div">
                                                                            <div class="edit_icon">
                           <span class="edit-btn">
                                <a class=" btn-modal"
                                   data-container="#commonModal" type="button"
                                   href="<?php echo e(route('sidebar-manager.menu-edit-form',$menu->id)); ?>"
                                >
                                                           <i class="ti-pencil-alt"></i>
                                                        </a>

                                                   </span>

                                                                                <i class="ti-close remove_menu"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <ol class="dd-list">
                                                                    <?php if($menu->route!='dashboard'): ?>
                                                                        <?php $__currentLoopData = $submenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if(!$submenu->module ||  isModuleActive($submenu->module)): ?>
                                                                                <?php
                                                                                    if ($submenu->theme && $submenu->theme!=currentTheme()){
                                                                                          continue;
                                                                                      }
                                                                                ?>
                                                                                <li class="dd-item"
                                                                                    data-id="<?php echo e($submenu->id); ?>">
                                                                                    <div class="card accordion_card"
                                                                                         id="accordion_<?php echo e($submenu->id); ?>">
                                                                                        <div
                                                                                            class="card-header item_header"
                                                                                            id="heading_<?php echo e($submenu->id); ?>">
                                                                                            <div class="dd-handle">
                                                                                                <div
                                                                                                    class="float-start">
                                                                                                    <?php echo e($submenu->name); ?>


                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="float-end btn_div">
                                                                                                <div
                                                                                                    class="float-end btn_div">
                                                                                                    <div
                                                                                                        class="edit_icon">
                           <span class="edit-btn">
                                <a class=" btn-modal"
                                   data-container="#commonModal" type="button"
                                   href="<?php echo e(route('sidebar-manager.menu-edit-form',$submenu->id)); ?>"
                                >
                                                           <i class="ti-pencil-alt"></i>
                                                        </a>

                                                   </span>

                                                                                                        <i class="ti-close remove_menu"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>
                                                                </ol>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="accordion2" class="dd menu-list used_menu"
                                                 data-section="<?php echo e($section->id); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>


    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('public/backend/vendors/nestable/jquery.nestable.min.js')); ?>"></script>
        <script src="<?php echo e(asset('Modules/SidebarManager/Resources/assets/js/sidebar.js')); ?>"></script>
    <?php $__env->stopPush(); ?>


</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/SidebarManager/Resources/views/components/components.blade.php ENDPATH**/ ?>