<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'label' => __('common.Image File'), 'message',
    'multiple' =>'false',
    'type' =>'',
    'name' =>'image',
    'note'=>'',
    'required'=>'false',
    'media_id'=>null
    ]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'label' => __('common.Image File'), 'message',
    'multiple' =>'false',
    'type' =>'',
    'name' =>'image',
    'note'=>'',
    'required'=>'false',
    'media_id'=>null
    ]); ?>
<?php foreach (array_filter(([
    'label' => __('common.Image File'), 'message',
    'multiple' =>'false',
    'type' =>'',
    'name' =>'image',
    'note'=>'',
    'required'=>'false',
    'media_id'=>null
    ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<div class="primary_input single-uploader">
    <label class="primary_input_label"
           for=""><?php echo e($label); ?> <?php if($required=='true'): ?>
            <span class="required_mark"> *</span>
        <?php endif; ?>
    </label>
    <div class="primary_file_uploader" data-bs-toggle="infixUploader"
         data-multiple="<?php echo e($multiple); ?>" data-type="<?php echo e($type); ?>"
         data-name="<?php echo e($name); ?>">
        <input class="primary-input file_amount" type="text"
               id="file_<?php echo e($name); ?>"
               placeholder="<?php echo e(trans('common.Browse')); ?>"
               readonly="">
        <button class="" type="button">
            <label class="primary-btn small fix-gr-bg"
                   for="file_<?php echo e($name); ?>"
            ><?php echo e(__('common.Browse')); ?> </label>
            <input type="hidden"
                   class="selected_files"
                   value="<?php echo e(@$media_id); ?>">
        </button>
    </div>
    <div class="product_image_all_div">
        <?php if(@$media_id): ?>
            <input type="hidden" name="<?php echo e($name); ?>" class="" value="<?php echo e(@$media_id); ?>">
        <?php endif; ?>
    </div>
    <?php if(!empty($note)): ?>
        <p class="image_size"><?php echo e($note); ?></p>
    <?php endif; ?>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/components/upload-file.blade.php ENDPATH**/ ?>