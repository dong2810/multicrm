<div data-table-id="<?php echo e($dataTable->getTableAttribute('id')); ?>" style="display: none" class="query-filter-builder" id="queryFilter_<?php echo e($dataTable->getTableAttribute('id')); ?>">
    <button class="btn btn-primary btn-xs btn-get"><?php echo app('translator')->getFromJson('core::core.apply_filters'); ?></button>
    <button class="btn btn-warning btn-xs btn-reset"><?php echo app('translator')->getFromJson('core::core.reset'); ?></button>
    <button class="btn btn-warning btn-xs btn-hide" ><?php echo app('translator')->getFromJson('core::core.close'); ?></button>
</div>