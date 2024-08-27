<script>
    (function ($) {
        "use strict";

        $('tbody').sortable({
            cursor: "move",
            update: function (event, ui) {
                let ids = $(this).sortable('toArray', {attribute: 'data-item'});
                console.log(ids);
                if (ids.length > 0) {
                    let data = {
                        '_token': '<?php echo e(csrf_token()); ?>',
                        'ids': ids,
                    }
                    $.post("<?php echo e(route('frontend.changeHomePageFaqPosition')); ?>", data, function (data) {

                    });
                }
            }
        });


        $(document).on('click', '.editfaq', function () {
            let url = '<?php echo e(route('frontend.faq.show')); ?>';
            let id = $(this).data('id');
            $.get(url, {
                'id': id
            }, function (data) {
                $('#editFaqBody').html(data);

                $('.lms_summernote').summernote({
                    tabsize: 2, height: 360, tooltip: false, toolbar: [

                        ['para', ['style', 'ul', 'ol', 'paragraph']],
                        ['font', ['bold', 'underline', 'clear']], ['fontname', ['fontname']], ['color', ['color']], ['para', ['ul', 'ol', 'paragraph']], ['table', ['table']], ['style', ['bold', 'italic', 'underline', 'clear']], ['font', ['strikethrough', 'superscript', 'subscript']], ['fontsize', ['fontsize']], ['color', ['color']], ['height', ['height']], ['insert', ['link', 'picture', 'video', 'math', 'hr']], ['view', ['fullscreen', 'codeview']],]

                })
                $("#editfaq").modal('show');
            });
        });


        $(document).on('click', '.deletefaq', function () {
            let id = $(this).data('id');
            $('#faqDeleteId').val(id);
            $("#deletefaq").modal('show');
        });


        $(document).on('click', '#add_faq_btn', function () {
            $('#addQuestion').val('');
            $('#addAnswer').html('');
        });
    })(jQuery);
</script>



<?php if($errors->any()): ?>
    <script>
        <?php if(Session::has('type')): ?>
        <?php if(Session::get('type')=="store"): ?>
        $('#add_faq').modal('show');
        <?php else: ?>
        $('#editfaq').modal('show');
        <?php endif; ?>
        <?php endif; ?>
    </script>
<?php endif; ?>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/Modules/FrontendManage/Resources/views/faq/script.blade.php ENDPATH**/ ?>