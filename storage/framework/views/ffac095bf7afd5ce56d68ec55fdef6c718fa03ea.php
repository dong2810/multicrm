
<?php
/**
 * 'entity','fieldName','$options','language_file'
 */
?>
<?php if(isset($options['hide_in_show']) && $options['hide_in_show']): ?>

<?php else: ?>
    <div class="field-wrapper <?php echo e(isset($options['col-class']) ? $options['col-class'] : 'col-lg-6 col-md-6 col-sm-6 col-xs-6'); ?>">
    <?php if(isset($options['hide_label']) && $options['hide_label']): ?>

    <?php else: ?>
        <label class="show-control-label">
            <?php echo app('translator')->getFromJson($language_file.'.form.'.$fieldName); ?>
        </label>
    <?php endif; ?>
       <?php echo $__env->make('core::components.types.'.$options['type'],['entity'=>$entity,'fieldName'=>$fieldName,'options'=>$options], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
<?php endif; ?>

