<?php $__env->startPush('styles'); ?>
    <style>
        .UppyDragDrop {
            height: 500px;
        }

        .uppy-Dashboard-inner {
            width: 100% !important;
            height: 500px !important;
        }

        .uppy-Dashboard-AddFiles-info {
            display: none !important;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php echo e(generateBreadcrumb()); ?>

    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="mt-15 mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('setting.File Upload')); ?></h4>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('setting.media-manager.store')); ?>" method="post"
                                  enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="UppyDragDrop"></div>
                                        <div class="for-ProgressBar"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>

        let strings = {
            uploading: '<?php echo e(__('setting.uploading')); ?>',
            cancelUpload: '<?php echo e(__('setting.Cancel upload')); ?>',
            chooseFiles: '<?php echo e(__('setting.Choose files')); ?>',
            addedNumFiles: '<?php echo e(__('setting.Added')); ?> %{numFiles} <?php echo e(__('setting.files')); ?>',
            addingMoreFiles: '<?php echo e(__('setting.Adding more files')); ?>',
            done: '<?php echo e(__('setting.Done')); ?>',
            complete: '<?php echo e(__('setting.Complete')); ?>',
            addMore: '<?php echo e(__('setting.Add more')); ?>',
            uploadComplete: '<?php echo e(__('setting.Upload complete')); ?>',
            browseFiles: '<?php echo e(__('setting.Browse Files')); ?>',
            dropPasteFiles: '<?php echo e(__('setting.Drop files here')); ?> <?php echo e(__('common.Or')); ?>  %{browseFiles}',

        };

        window.addEventListener('DOMContentLoaded', function () {
            'use strict';
            var uppy = new Uppy.Core({
                debug: true,
                autoProceed: true,
                restrictions: {
                    maxFileSize: <?php echo e(getMaxUploadFileSize()); ?>,
                    maxNumberOfFiles: 20,
                    minNumberOfFiles: 1,
                    // allowedFileTypes: ['image/*']
                }
            });
            uppy.use(Uppy.Dashboard, {
                inline: true,
                locale: {
                    strings: strings,
                },
                target: '.UppyDragDrop'
            });
            uppy.use(Uppy.ProgressBar, {
                target: '.for-ProgressBar',
                hideAfterFinish: true,
                locale: {
                    strings: strings,
                },
            });
            let store_url = '<?php echo e(route('setting.media-manager.store')); ?>';
            let token = '<?php echo e(csrf_token()); ?>';
            uppy.use(Uppy.XHRUpload, {
                endpoint: store_url,
                formData: true,
                fieldName: 'file',
                headers: {
                    'X-CSRF-TOKEN': token,
                },
            });

            uppy.on('upload-success', function (response) {

            });

            window.uppy = uppy;
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/Setting/Resources/views/storage/create.blade.php ENDPATH**/ ?>