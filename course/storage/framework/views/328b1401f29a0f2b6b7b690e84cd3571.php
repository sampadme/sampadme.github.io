<h4><?php echo e(__('common.Available menu items')); ?></h4>
<div class="">
    <div class="row">
        <div class="col-xl-12">
            <!-- menu_setup_wrap  -->
            <div class="dd available_list  menu_item_div menu-list" data-section="1">
                <div class="  available-items-container unused_menu" data-id="remove"

                     data-section_id="remove"
                     id="available_list">
                    <?php
                        $hasIds =[];
                    ?>
                    <?php if(isset($unused_menus)): ?>
                        <?php if($unused_menus->count()): ?>

                            <?php $__currentLoopData = $unused_menus->where('type',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $hasIds[]=$menu->id;
                                ?>
                                <?php if(!$menu->module ||  isModuleActive($menu->module)): ?>
                                    <?php

                                        $submenus =$unused_menus->where('type',2)->where('parent_route',$menu->route)->where('parent_route','!=','dashboard');
                                           if ($menu->theme && $menu->theme!=currentTheme()){
                                            continue;
                                        }
                                    ?>
                                    <ol class="dd-list">
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
                                                           <i class="ti-pencil-alt p-2"></i>
                                                        </a>

                                                   </span>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <ol class="dd-list">
                                                <?php if($menu->route!='dashboard'): ?>
                                                    <?php $__currentLoopData = $submenus->where('type',2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php
                                                            $hasIds[]=$submenu->id;
                                                        ?>
                                                        <?php if(!$submenu->module ||  isModuleActive($submenu->module)): ?>
                                                            <?php
                                                                $other_ids[]=$submenu->id;
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
                                                                            <div class="float-start">
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
                                                           <i class="ti-pencil-alt p-2"></i>
                                                        </a>

                                                   </span>


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
                                    </ol>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                            <?php $__currentLoopData = $unused_menus->whereNotIn('id',$hasIds); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if(!$menu->module ||  isModuleActive($menu->module)): ?>
                                    <?php

                                        $submenus =$unused_menus->where('type',2)->where('parent_route',$menu->route)->where('parent_route','!=','dashboard');
                                           if ($menu->theme && $menu->theme!=currentTheme()){
                                            continue;
                                        }
                                    ?>
                                    <ol class="dd-list">
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
                                                           <i class="ti-pencil-alt p-2"></i>
                                                        </a>

                                                   </span>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </li>
                                    </ol>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php else: ?>
                            <ol class="dd-list">
                            </ol>

                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/SidebarManager/Resources/views/components/available_list.blade.php ENDPATH**/ ?>