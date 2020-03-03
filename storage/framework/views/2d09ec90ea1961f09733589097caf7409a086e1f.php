<?php if($datatable->hasQueryFilters): ?>
    <a data-filter-id="queryFilter_<?php echo e($datatable->getTableAttribute('id')); ?>" href="#" title="<?php echo app('translator')->getFromJson('core::core.advanced_view.advanced_filters'); ?>" class="btn btn-primary btn-xs btn-crud btn-show-filters"><?php echo app('translator')->getFromJson('core::core.advanced_view.advanced_filters'); ?></a>

    <div data-table-id="<?php echo e($datatable->getTableAttribute('id')); ?>" style="display: none" class="query-filter-builder" id="queryFilter_<?php echo e($datatable->getTableAttribute('id')); ?>">
        <button class="btn btn-primary btn-xs btn-get"><?php echo app('translator')->getFromJson('core::core.apply_filters'); ?></button>
        <button class="btn btn-warning btn-xs btn-reset"><?php echo app('translator')->getFromJson('core::core.reset'); ?></button>
        <button class="btn btn-warning btn-xs btn-hide" ><?php echo app('translator')->getFromJson('core::core.close'); ?></button>
    </div>

<?php endif; ?>
