<?php if($entity->$fieldName != null  ): ?>
    <?php if(isset($options['dont_translate'])): ?>
        <?php echo e(optional($entity->{$options['relation']})->{$options['column']}); ?>

    <?php else: ?>
        <?php echo e(optional($entity->{$options['relation']})->{$options['column']}); ?>

    <?php endif; ?>
<?php endif; ?>
