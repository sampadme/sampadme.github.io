<div class="modal cs_modal fade admin-query" id="deleteComment" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('common.Delete Confirmation')); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                        class="ti-close "></i></button>
            </div>

            <form action="" id="deleteCommentForm" method="Post">
                <div class="modal-body">
                    <?php echo csrf_field(); ?>
                    <?php echo e(__('common.Are you sure to delete ?')); ?>

                </div>
                <div class="modal-footer justify-content-center">
                    <div class="mt-40">
                        <button type="button" class="theme_line_btn me-2 small_btn2"
                                data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?>

                        </button>
                        <button class="theme_btn  small_btn2"
                                type="submit" id="formSubmitBtn"><?php echo e(__('common.Submit')); ?></button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/frontend/infixlmstheme/partials/_delete_model.blade.php ENDPATH**/ ?>