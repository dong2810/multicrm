<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right entity-created-at">
    <div>
        <?php echo app('translator')->getFromJson('core::core.created_on'); ?>: <strong><?php echo e(\Modules\Platform\Core\Helper\UserHelper::formatUserDateTime($entity->created_at)); ?></strong>
        <?php if($actityLogDatatable != null && $entity->activity->first() != null  ): ?>
            <?php if($entity->activity->first()->causer): ?>
                <?php echo app('translator')->getFromJson('core::core.by'); ?> <strong><?php echo e($entity->activity->first()->causer->name); ?></strong>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div>
        <?php echo app('translator')->getFromJson('core::core.updated_at'); ?>: <strong><?php echo e(\Modules\Platform\Core\Helper\UserHelper::formatUserDateTime($entity->updated_at)); ?></strong>
        <?php if($actityLogDatatable != null && $entity->activity->last() != null   ): ?>
            <?php if($entity->activity->last()->causer): ?>
                <?php echo app('translator')->getFromJson('core::core.by'); ?> <strong><?php echo e($entity->activity->last()->causer->name); ?></strong>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
