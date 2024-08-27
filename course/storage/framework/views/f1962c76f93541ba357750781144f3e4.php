<?php
    $table_name='categories';
?>
<?php $__env->startSection('table'); ?>
    <?php echo e($table_name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php echo $__env->make("backend.partials.alertMessage", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
        $LanguageList = getLanguageList();
    ?>
    <?php echo generateBreadcrumb(); ?>

    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-3">
                    <div class="white-box mb_30  student-details header-menu">
                        <div class="box_header common_table_header">
                            <div class="main-title d-flex mb-0">
                                <h3 class="mb-0"> <?php if(!isset($edit)): ?>
                                        <?php echo e(__('courses.Add New Category')); ?>

                                    <?php else: ?>
                                        <?php echo e(__('courses.Update Category')); ?>

                                    <?php endif; ?></h3>
                                <?php if(isset($edit)): ?>
                                    <?php if(permissionCheck('course.category.store')): ?>
                                        <a href="<?php echo e(route('course.category')); ?>"
                                           class="primary-btn small fix-gr-bg ml-4 d-flex justify-content-center align-items-center"
                                           style="line-height: 25px;"
                                           title="<?php echo e(__('courses.Add New')); ?>">+</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row pt-0">
                            <?php if(isModuleActive('FrontendMultiLang')): ?>
                                <ul class="nav nav-tabs no-bottom-border  mt-sm-md-20 mb-10 ml-3"
                                    role="tablist">
                                    <?php $__currentLoopData = $LanguageList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="nav-item">
                                            <a class="nav-link  <?php if(auth()->user()->language_code == $language->code): ?> active <?php endif; ?>"
                                               href="#element<?php echo e($language->code); ?>"
                                               role="tab"
                                               data-bs-toggle="tab"><?php echo e($language->native); ?>  </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </div>


                        <?php if(isset($edit)): ?>
                            <form action="<?php echo e(route('course.category.update')); ?>" method="POST"
                                  id="category-form"
                                  name="category-form" enctype="multipart/form-data">
                                <input type="hidden" name="id"
                                       value="<?php echo e($edit->id); ?>">
                                <?php else: ?>
                                    <?php if(permissionCheck('course.category.store')): ?>
                                        <form action="<?php echo e(route('course.category.store')); ?>" method="POST"
                                              id="category-form" name="category-form"
                                              enctype="multipart/form-data">
                                            <?php endif; ?>
                                            <?php endif; ?>
                                            <?php echo csrf_field(); ?>

                                            <div class="tab-content">
                                                <?php $__currentLoopData = $LanguageList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div role="tabpanel"
                                                         class="tab-pane fade <?php if(auth()->user()->language_code == $language->code): ?> show active <?php endif; ?>  "
                                                         id="element<?php echo e($language->code); ?>">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="primary_input mb-25">
                                                                    <label class="primary_input_label"
                                                                           for="nameInput"><?php echo e(__('common.Name')); ?>

                                                                        <strong
                                                                            class="text-danger">*</strong></label>
                                                                    <input name="name[<?php echo e($language->code); ?>]"
                                                                           id="nameInput"
                                                                           class="primary_input_field name <?php echo e(@$errors->has('name') ? ' is-invalid' : ''); ?>"
                                                                           placeholder="<?php echo e(__('common.Name')); ?>"
                                                                           type="text"
                                                                           value="<?php echo e(isset($edit)?$edit->getTranslation('name',$language->code):old('name.'.$language->code)); ?>">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="primary_input mb-25">
                                                                    <label class="primary_input_label"
                                                                           for="descriptionInput"><?php echo e(__('common.Description')); ?>  </label>
                                                                    <input name="description[<?php echo e($language->code); ?>]"
                                                                           id="descriptionInput"
                                                                           class="primary_input_field description <?php echo e(@$errors->has('description') ? ' is-invalid' : ''); ?>"
                                                                           placeholder="<?php echo e(__('common.Description')); ?>"
                                                                           type="text"
                                                                           value="<?php echo e(isset($edit)?$edit->getTranslation('description',$language->code):old('description'.$language->code)); ?>" <?php echo e($errors->has('description') ? 'autofocus' : ''); ?>>
                                                                    <?php if($errors->has('description')): ?>
                                                                        <span class="invalid-feedback d-block mb-10"
                                                                              role="alert">
                                                                <strong><?php echo e(@$errors->first('description')); ?></strong>
                                                            </span>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="row">

                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for="parent"><?php echo e(__('common.Parent')); ?></label>
                                                        <select class="primary_select mb-25" name="parent"
                                                                id="parent">
                                                            <option value=""><?php echo e(__('common.None')); ?></option>
                                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if(isset($edit) && $category->id==$edit->id): ?>
                                                                    <?php
                                                                        continue;
                                                                    ?>
                                                                <?php endif; ?>
                                                                <option
                                                                    value="<?php echo e($category->id); ?>"
                                                                    <?php echo e(isset($edit)?($edit->parent_id==$category->id?'selected':old('parent')):old('parent')); ?>

                                                                ><?php echo e($category->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for="position_order"><?php echo e(__('courses.Position Order')); ?></label>
                                                        <select class="primary_select mb-25"
                                                                name="position_order"
                                                                id="position_order">
                                                            <?php for($i=1; $i<=$max_id; $i++): ?>
                                                                <option
                                                                    value="<?php echo e($i); ?>" <?php echo e(isset($edit)?($edit->position_order==$i?'selected':old('position_order')):old('position_order')); ?> >
                                                                    <?php echo e($i); ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for="status"><?php echo e(__('courses.Status')); ?></label>
                                                        <select class="primary_select mb-25" name="status"
                                                                id="status"
                                                        >
                                                            <option
                                                                value="1" <?php echo e(isset($edit)?($edit->status==1?'selected':''):''); ?>><?php echo e(__('common.Active')); ?></option>
                                                            <option
                                                                value="0" <?php echo e(isset($edit)?($edit->status==0?'selected':''):''); ?>><?php echo e(__('common.Inactive')); ?></option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mt-10">
                                                    <div class="mb-15">
                                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'image','type' => 'image','mediaId' => ''.e(isset($edit)?$edit->image_media?->media_id:'').'','label' => ''.e(__('frontendmanage.Icon')).'','note' => ''.e(__('courses.Recommended size 200px x 200px')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'image','type' => 'image','media_id' => ''.e(isset($edit)?$edit->image_media?->media_id:'').'','label' => ''.e(__('frontendmanage.Icon')).'','note' => ''.e(__('courses.Recommended size 200px x 200px')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="mb-15">
                                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['type' => 'image','name' => 'thumbnail','mediaId' => ''.e(isset($edit)?$edit->thumbnail_media?->media_id:'').'','label' => ''.e(__('courses.Thumbnail Image')).' ','note' => ''.e(__('courses.Recommended size 1140px x 300px')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'image','name' => 'thumbnail','media_id' => ''.e(isset($edit)?$edit->thumbnail_media?->media_id:'').'','label' => ''.e(__('courses.Thumbnail Image')).' ','note' => ''.e(__('courses.Recommended size 1140px x 300px')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    

                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    

                                                </div>
                                                <?php
                                                    $tooltip = "";
                                                    if(permissionCheck('course.category.store')){
                                                          $tooltip = "";
                                                      }else{
                                                          $tooltip = trans("courses.You have no permission to add");
                                                      }
                                                ?>
                                                <div class="col-lg-12 text-center">
                                                    <div class="d-flex justify-content-center pt_20">
                                                        <button type="submit"
                                                                class="primary-btn semi_large fix-gr-bg"
                                                                data-bs-toggle="tooltip" title="<?php echo e(@$tooltip); ?>"
                                                                id="save_button_parent">
                                                            <i class=" fa fa-check "></i>
                                                            <?php if(!isset($edit)): ?>
                                                                <?php echo e(__('common.Save')); ?>

                                                            <?php else: ?>
                                                                <?php echo e(__('common.Update')); ?>

                                                            <?php endif; ?>
                                                        </button>


                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="white-box">
                        <div class="box_header common_table_header">
                            <div class="main-title d-flex flex-wrap mb-0">
                                <h3 class="mb-0"><?php echo e(__('courses.Category List')); ?></h3>
                            </div>
                        </div>
                        <div class="  QA_section QA_section_heading_custom check_box_table">
                            <div class="QA_table ">
                                <!-- table-responsive -->
                                <div class="">
                                    <table id="lms_table" class="table table-data">
                                        <thead>
                                        <tr>
                                            <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Name')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Parent')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Position')); ?> <?php echo e(__('common.ID')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Description')); ?></th>
                                            <th scope="col"><?php echo e(__('frontendmanage.Icon')); ?></th>
                                            <th scope="col"><?php echo e(__('courses.Thumbnail Image')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e(++$key); ?></td>
                                                <td> <?php echo e(checkParent($category)); ?> <?php echo e(@$category->name); ?></td>
                                                <td><?php echo e(@$category->parent->name); ?></td>
                                                <td><?php echo e(@$category->position_order); ?></td>
                                                <td><?php echo e(@$category->description); ?></td>
                                                <td>
                                                    <div>
                                                        <img style="width: 70px !important;"
                                                             src="<?php if(isset($category->image)): ?><?php echo e(url(@$category->image)); ?><?php endif; ?>"
                                                             alt=""
                                                             class="img img-responsive m-2">
                                                    </div>
                                                </td>

                                                <td>
                                                    <img
                                                        src="<?php if(isset($category->thumbnail)): ?><?php echo e(url(@$category->thumbnail)); ?><?php endif; ?>"
                                                        alt=""
                                                        class="img img-responsive m-2"
                                                        style="width: 70px !important; ">
                                                </td>
                                                <td class="nowrap">
                                                    <?php
                                                        if(isModuleActive('Organization')){

                                                            $org_id = $category->organization_id;
                                                        }else{
                                                            $org_id = null;
                                                        }

                                                    ?>
                                                    <?php if (isset($component)) { $__componentOriginala97154f7fc4a6c86651af7d45de58019 = $component; } ?>
<?php $component = App\View\Components\Backend\Status::resolve(['org' => $org_id,'id' => $category->id,'status' => $category->status,'route' => 'course.category.status_update'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Backend\Status::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97154f7fc4a6c86651af7d45de58019)): ?>
<?php $component = $__componentOriginala97154f7fc4a6c86651af7d45de58019; ?>
<?php unset($__componentOriginala97154f7fc4a6c86651af7d45de58019); ?>
<?php endif; ?>

                                                </td>

                                                <td>
                                                    <?php
                                                        $hasPermission =true;
                                                        $user =\Illuminate\Support\Facades\Auth::user();
                                                        if($user->role_id==2 && $user->id!=$category->user_id){
                                                            $hasPermission= false;
                                                        }
                                                    ?>
                                                    <div class="dropdown CRM_dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                                id="dropdownMenu1<?php echo e(@$category->id); ?>"
                                                                data-bs-toggle="dropdown"
                                                                aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <?php echo e(__('common.Select')); ?>

                                                        </button>


                                                        <div class="dropdown-menu dropdown-menu-right"
                                                             aria-labelledby="dropdownMenu1<?php echo e(@$category->id); ?>">
                                                            <?php if(permissionCheck('course.category.edit') && orgPermission($category->organization_id) && $hasPermission): ?>
                                                                <a class="dropdown-item edit_brand"
                                                                   href="<?php echo e(route('course.category.edit',$category->id)); ?>"><?php echo e(__('common.Edit')); ?></a>
                                                            <?php endif; ?>
                                                            <?php if(permissionCheck('course.category.delete') && orgPermission($category->organization_id) && $hasPermission): ?>
                                                                <a onclick="confirm_modal('<?php echo e(route('course.category.delete', $category->id)); ?>');"
                                                                   class="dropdown-item edit_brand"><?php echo e(__('common.Delete')); ?></a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <input type="hidden" name="status_route" class="status_route" value="<?php echo e(route('course.category.status_update')); ?>">
    <?php echo $__env->make('backend.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('public/backend/js/category.js')); ?><?php echo e(assetVersion()); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/backend/categories/index.blade.php ENDPATH**/ ?>