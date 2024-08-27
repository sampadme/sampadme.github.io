<div>
    <?php if(showEcommerce()): ?>
        <span class="prise_tag">

               <?php if((int)$discount!=0): ?>
                <span class="prev_prise">
                  <?php echo e(getPriceFormat($price)); ?>

                  </span>
            <?php endif; ?>

              <span>
            <?php if((int)$discount!=0): ?>
                      <?php echo e(getPriceFormat($discount)); ?>

                  <?php else: ?>
                      <?php echo e(getPriceFormat($price)); ?>

                  <?php endif; ?>

          </span>
</span>
    <?php endif; ?>
</div>
<?php /**PATH /home/admin/web/sampad.me/public_html/course/resources/views/frontend/infixlmstheme/components/price-tag.blade.php ENDPATH**/ ?>