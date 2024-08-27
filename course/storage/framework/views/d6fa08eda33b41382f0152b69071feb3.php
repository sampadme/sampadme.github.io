<?php $__env->startSection('mainContent'); ?>
    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if(isset($group) && permissionCheck('question-group.edit')): ?>
                                <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => array('question-group-update',@$group->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data'])); ?>

                            <?php else: ?>
                                <?php if(permissionCheck('question-group.store')): ?>

                                    <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'question-group.store',
                                    'method' => 'POST', 'enctype' => 'multipart/form-data'])); ?>

                                <?php endif; ?>
                            <?php endif; ?>
                            <div class="white-box">
                                <div class="main-title">
                                    <h3 class="mb-20"><?php if(isset($group)): ?>
                                            <?php echo e(__('common.Edit')); ?>

                                        <?php else: ?>
                                            <?php echo e(__('common.Add')); ?>

                                        <?php endif; ?>
                                        <?php echo e(__('quiz.Question Group')); ?>

                                    </h3>
                                </div>
                                <div class="add-visitor">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php if(session()->has('message-success')): ?>
                                                <div class="alert alert-success">
                                                    <?php echo e(session()->get('message-success')); ?>

                                                </div>
                                            <?php elseif(session()->has('message-danger')): ?>
                                                <div class="alert alert-danger">
                                                    <?php echo e(session()->get('message-danger')); ?>

                                                </div>
                                            <?php endif; ?>
                                            <div class="input-effect">
                                                <label><?php echo e(__('coupons.Title')); ?> <span
                                                        class="text-danger">*</span></label>
                                                <input
                                                    class="primary_input_field<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>"
                                                    type="text" name="title" autocomplete="off"
                                                    value="<?php echo e(isset($group)? $group->title:''); ?>">
                                                <input type="hidden" name="id"
                                                       value="<?php echo e(isset($group)? $group->id: ''); ?>">
                                                <span class="focus-border"></span>
                                                <?php if($errors->has('title')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('title')); ?></strong>
                                            </span>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                        $tooltip = "";
                                          if (permissionCheck('question-group.store') || permissionCheck('question-group.edit')){
                                              $tooltip = "";
                                          }else{
                                              $tooltip = "You have no permission to add";
                                            $tooltip = _trans('courses.You have no permission');
                                          }
                                    ?>

                                    <div class="row mt-3">
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="primary-btn fix-gr-bg" data-bs-toggle="tooltip"
                                                    title="<?php echo e($tooltip); ?>">
                                                <i class="ti-check"></i>
                                                <?php if(isset($group)): ?>
                                                    <?php echo e(__('common.Update')); ?>

                                                <?php else: ?>
                                                    <?php echo e(__('common.Save')); ?>

                                                <?php endif; ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo e(Form::close()); ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mt-5 mt-lg-0">
                    <div class="white-box">
                        <div class="main-title">
                            <h3 class="mb-20"><?php echo e(__('quiz.Question Group List')); ?></h3>
                        </div>

                        <div class="QA_section QA_section_heading_custom check_box_table">
                            <div class="QA_table ">
                                <div class="">
                                    <table id="lms_table" class="table Crm_table_active3">
                                        <thead>
                                        <tr>
                                            <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                            <th scope="col"><?php echo e(__('coupons.Title')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th><?php echo e($key+1); ?></th>

                                                <td><?php echo e(@$group->title); ?></td>
                                                <td>
                                                    <?php if((auth()->user()->role_id==2 && $group->user_id == auth()->id()) || auth()->user()->role_id!=2): ?>

                                                        <div class="dropdown CRM_dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle"
                                                                    type="button"
                                                                    id="dropdownMenu2" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                <?php echo e(__('common.Select')); ?>

                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                 aria-labelledby="dropdownMenu2">
                                                                <?php if(permissionCheck('question-group.edit')): ?>
                                                                    <a class="dropdown-item edit_brand"
                                                                       href="<?php echo e(route('question-group.edit',$group->id)); ?>"><?php echo e(__('common.Edit')); ?></a>
                                                                <?php endif; ?>
                                                                <?php if(permissionCheck('question-group.delete')): ?>
                                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                                       data-bs-target="#deleteQuestionGroupModal<?php echo e($group->id); ?>"
                                                                       href="#"><?php echo e(__('common.Delete')); ?></a>
                                                                <?php endif; ?>

                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>


                                            <div class="modal fade admin-query"
                                                 id="deleteQuestionGroupModal<?php echo e($group->id); ?>">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><?php echo e(__('common.Delete')); ?> <?php echo e(__('quiz.Question Group')); ?></h4>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal">
                                                                <i
                                                                    class="ti-close "></i></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="text-center">
                                                                <h4> <?php echo e(__('common.Are you sure to delete ?')); ?></h4>
                                                            </div>

                                                            <div class="mt-40 d-flex justify-content-between">
                                                                <button type="button" class="primary-btn tr-bg"
                                                                        data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>
                                                                <?php echo e(Form::open(['route' => array('question-group-delete',$group->id), 'method' => 'DELETE', 'enctype' => 'multipart/form-data'])); ?>

                                                                <button class="primary-btn fix-gr-bg"
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
            </div>
        </div>
    </section>
    <div id="edit_form">

    </div>
    <div id="view_details">

    </div>
    <input type="hidden" name="status_route" class="status_route" value="<?php echo e(route('coupons.status_update')); ?>">

    
    <?php echo $__env->make('backend.partials.delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('public/backend/js/category.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Quiz/Resources/views/index.blade.php ENDPATH**/ ?>