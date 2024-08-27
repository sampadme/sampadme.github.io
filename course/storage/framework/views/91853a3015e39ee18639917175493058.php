<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="mb-40 student-details">
        <div class="container-fluid p-0">
            <div class="row">

                <div class="col-lg-12">

                    <?php if(permissionCheck('gdrive.setting.update')): ?>
                        <form class="form-horizontal" action="<?php echo e(route('gdrive.setting.update')); ?>" method="POST"
                              enctype="multipart/form-data">
                            <?php endif; ?>
                            <?php echo csrf_field(); ?>
                            <div class="white-box">

                                <div class="row   mb-3 pb-3">

                                    <?php if(auth()->user()->role_id==1): ?>

                                        <?php if ($__env->exists('setting::storage.partials._gdrive_form')) echo $__env->make('setting::storage.partials._gdrive_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <div class=" ">
                                            <div class="col-lg-12 text-center">
                                                <button type="submit" class="primary-btn fix-gr-bg"
                                                        data-bs-toggle="tooltip">
                                                    <i class="ti-check"></i>
                                                    <?php echo e(__('common.Update')); ?>

                                                </button>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <table class="">


                                            <tbody>
                                            <tr>
                                                <th><?php echo e(__('common.Status')); ?> :</th>
                                                <td>
                                                    <?php if(auth()->user()->googleToken): ?>
                                                        <?php echo e(trans('common.Connected')); ?>

                                                    <?php else: ?>
                                                        <?php echo e(trans('setting.Google Drive login is required')); ?>

                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    <?php endif; ?>
                                </div>


                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/gdrive-setting.blade.php ENDPATH**/ ?>