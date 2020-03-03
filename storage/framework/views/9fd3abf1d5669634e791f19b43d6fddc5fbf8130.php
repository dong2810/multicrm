
<?php if(is_array($entity->$fieldName)): ?>
    <?php echo implode(',',$entity->$fieldName); ?>

<?php else: ?>
    <?php echo e($entity->$fieldName); ?>

<?php endif; ?>

