<div role="tabpanel" class="tab-pane fade  <?php if($type=="files"): ?> show active <?php endif; ?> "
     id="file_list">

    <div class="">
        <div class="row mb_20 mt-20">
            <div class="col-lg-2">

                <ul class="d-flex">
                    <li><a data-bs-toggle="modal" data-bs-target="#addFile"
                           class="primary-btn radius_30px  fix-gr-bg" href="#"><i
                                class="ti-plus"></i><?php echo e(__('common.Add')); ?> <?php echo e(__('common.File')); ?>

                        </a></li>
                </ul>
            </div>
        </div>

        <div class="modal fade admin-query" id="addFile">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo e(__('common.Add')); ?> <?php echo e(__('courses.Exercise')); ?> <?php echo e(__('common.File')); ?></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                class="ti-close "></i></button>
                    </div>

                    <div class="modal-body">
                        <form action="<?php echo e(route('saveFile')); ?>" method="post"
                              enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e(@$course->id); ?>">

                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'file','label' => ''.e(__('common.File')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'file','label' => ''.e(__('common.File')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>


                            <div class="row">
                                <div class="col-xl-12 mt-20">
                                    <div class="primary_input">
                                        
                                        <input class="primary_input_field"
                                               name="fileName" value="" required
                                               placeholder="<?php echo e(__('common.File')); ?> <?php echo e(__('common.Name')); ?> *"
                                               type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="primary_select  mt-20"
                                            name="status"
                                            id="">
                                        <option
                                            data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('common.Status')); ?>"
                                            value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('common.Status')); ?> </option>
                                        <option
                                            value="1"
                                            selected><?php echo e(__('courses.Active')); ?></option>
                                        <option
                                            value="0"><?php echo e(__('courses.Pending')); ?></option>
                                    </select>
                                </div>
                                <div class="col-12 mt-3">
                                    <select
                                        class="primary_select"
                                        name="lock" id="">
                                        <option
                                            data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?>"
                                            value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?> </option>
                                        <option value="0"
                                        ><?php echo e(__('courses.Unlock')); ?></option>
                                        <option value="1"
                                                selected><?php echo e(__('courses.Locked')); ?></option>

                                    </select>
                                </div>
                                <div class="col-12">
                                    <div
                                        class="mt-40 d-flex justify-content-between">
                                        <button type="button"
                                                class="primary-btn tr-bg"
                                                data-bs-dismiss="modal"> <?php echo e(__('common.Cancel')); ?> </button>
                                        <button class="primary-btn fix-gr-bg"
                                                type="submit"><i
                                                class="ti-check"></i> <?php echo e(__('common.Add')); ?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div
            class="QA_section QA_section_heading_custom check_box_table hide_btn_tab">
            <div class="QA_table ">
                <!-- table-responsive -->
                <div class="">
                    <table id="lms_table" class="table ">
                        <thead>
                        <tr>
                            <th scope="col"><?php echo e(__('common.SL')); ?></th>
                            <th scope="col"><?php echo e(__('common.Name')); ?></th>
                            <th scope="col"><?php echo e(__('common.Download')); ?></th>
                            <th scope="col"><?php echo e(__('common.Action')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(count($course_exercises)==0): ?>
                            <tr>
                                <td colspan="4"
                                    class="text-center"><?php echo e(__('courses.No Data Found')); ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php $__currentLoopData = $course_exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $exercise_file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($key+1); ?></th>

                                <td><?php echo e(@$exercise_file->fileName); ?></td>
                                <td>

                                    <?php if(file_exists($exercise_file->file)): ?>

                                        <a style="font-weight: 460"
                                           href="<?php echo e(route('download_course_file',[$exercise_file->id])); ?>"><?php echo e(__('common.Click To Download')); ?></a>

                                    <?php else: ?>
                                        <?php echo e(__('common.File Not Found')); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <!-- shortby  -->
                                    <div class="dropdown CRM_dropdown">
                                        <button
                                            class="btn btn-secondary dropdown-toggle"
                                            type="button"
                                            id="dropdownMenu2"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <?php echo e(__('common.Select')); ?>

                                        </button>
                                        <div
                                            class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenu2">
                                            <a class="dropdown-item fileEditFrom"
                                               data-bs-toggle="modal"
                                               data-item="<?php echo e($exercise_file); ?>"
                                               data-bs-target="#editFile"
                                               href="#"><?php echo e(__('common.Edit')); ?></a>
                                            <a class="dropdown-item"
                                               data-bs-toggle="modal"
                                               data-bs-target="#deleteQuestionGroupModal<?php echo e($exercise_file->id); ?>"
                                               href="#"><?php echo e(__('common.Delete')); ?></a>
                                        </div>
                                    </div>
                                    <!-- shortby  -->
                                </td>
                            </tr>


                            <div class="modal fade admin-query"
                                 id="deleteQuestionGroupModal<?php echo e($exercise_file->id); ?>">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><?php echo e(__('common.Delete')); ?> <?php echo e(__('courses.Exercise')); ?> <?php echo e(__('common.File')); ?></h4>
                                            <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"><i
                                                    class="ti-close "></i></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="text-center">
                                                <h4> <?php echo e(__('common.Are you sure to delete ?')); ?></h4>
                                            </div>

                                            <div
                                                class="mt-40 d-flex justify-content-between">
                                                <button type="button"
                                                        class="primary-btn tr-bg"
                                                        data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>
                                                <?php echo e(Form::open(['route' => 'deleteFile', 'method' => 'post', 'enctype' => 'multipart/form-data'])); ?>

                                                <input type="hidden" name="id"
                                                       value="<?php echo e($exercise_file->id); ?>">
                                                <button
                                                    class="primary-btn fix-gr-bg"
                                                    type="submit"><?php echo e(__('common.Delete')); ?></button>
                                                <?php echo e(Form::close()); ?>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal fade admin-query"
     id="editFile">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo e(__('common.Edit')); ?> <?php echo e(__('courses.Exercise')); ?> <?php echo e(__('common.File')); ?></h4>
                <button type="button" class="btn-close"
                        data-bs-dismiss="modal"><i
                        class="ti-close "></i></button>
            </div>

            <div class="modal-body">
                <form action="<?php echo e(route('updateFile')); ?>"
                      method="post"
                      enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id"
                           value="" class="editFileId">

                    <div class="">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'file','label' => ''.e(__('common.File')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'file','label' => ''.e(__('common.File')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                    <div class="row">

                        <div class="col-xl-12 mt-20">
                            <div class="primary_input">
                                <input
                                    class="primary_input_field editFileName"
                                    name="fileName"
                                    required
                                    value=""

                                    placeholder="<?php echo e(__('common.File')); ?> <?php echo e(__('common.Name')); ?>"
                                    type="text">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-12 mt-20 ">
                            <select
                                class="primary_select editFilePrivacy"
                                name="lock" id="">
                                <option
                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?>"
                                    value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Privacy')); ?> </option>
                                <option value="0"
                                ><?php echo e(__('courses.Unlock')); ?></option>
                                <option value="1"
                                ><?php echo e(__('courses.Locked')); ?></option>

                            </select>
                        </div>
                        <div class="col-12 mt-25">
                            <select
                                class="primary_select editFileStatus"
                                name="status" id="">
                                <option
                                    data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('common.Status')); ?>"
                                    value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('common.Status')); ?> </option>
                                <option value="1"
                                ><?php echo e(__('courses.Active')); ?></option>
                                <option value="0"
                                ><?php echo e(__('courses.Pending')); ?></option>
                            </select>
                        </div>

                    </div>

                    <div
                        class="mt-40 d-flex justify-content-between">
                        <button type="button"
                                class="primary-btn tr-bg"
                                data-bs-dismiss="modal"> <?php echo e(__('common.Cancel')); ?> </button>
                        <button
                            class="primary-btn fix-gr-bg"
                            type="submit"><?php echo e(__('common.Update')); ?></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/CourseSetting/Providers/../Resources/views/parts_of_course_details/_course_details_exercise_file_tab.blade.php ENDPATH**/ ?>