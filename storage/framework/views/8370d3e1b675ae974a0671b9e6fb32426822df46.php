<?php if($hasQueryFilters): ?>

<div class="advanced_views">



    <i title="<?php echo app('translator')->getFromJson('core::core.advanced_view.advanced_filters'); ?>" data-filter-id="queryFilter_<?php echo e($dataTable->getTableAttribute('id')); ?>" class="material-icons btn-show-filters">filter_list</i>


    <?php if($advancedViewsEnabled): ?>
    <i data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="<?php echo app('translator')->getFromJson('core::core.advanced_view.list_view_settings'); ?>" class="dropdown-toggle material-icons">view_column</i>

    <ul class="dropdown-menu pull-right">
        <li><a module-name="<?php echo e($moduleName); ?>" table-id="<?php echo e($dataTable->getTableAttribute('id')); ?>" data-table-type="<?php echo e(get_class($dataTableDef)); ?>" class="advanced_views_settings" href="javascript:void(0);"><?php echo app('translator')->getFromJson('core::core.advanced_view.create_new_view'); ?></a></li>

        <?php if($currentView > 0 ): ?>

            <?php if(!empty($currentAdvView) && $currentAdvView->is_public && Auth::user()->hasPermissionTo('advanced_view.manage_public')): ?>
                <li><a table-id="<?php echo e($dataTable->getTableAttribute('id')); ?>" data-table-type="<?php echo e(get_class($dataTableDef)); ?>" data-id="<?php echo e($currentView); ?>" class="edit-list-view" href="javascript:void(0);"><?php echo app('translator')->getFromJson('core::core.advanced_view.edit_view'); ?></a></li>
                <li><a data-id="<?php echo e($currentView); ?>" class="delete-list-view" href="javascript:void(0);"><?php echo app('translator')->getFromJson('core::core.advanced_view.delete'); ?></a></li>
            <?php endif; ?>
            <?php if(!empty($currentAdvView) && !$currentAdvView->is_public): ?>
                    <li><a table-id="<?php echo e($dataTable->getTableAttribute('id')); ?>" data-table-type="<?php echo e(get_class($dataTableDef)); ?>" data-id="<?php echo e($currentView); ?>" class="edit-list-view" href="javascript:void(0);"><?php echo app('translator')->getFromJson('core::core.advanced_view.edit_view'); ?></a></li>
                    <li><a data-id="<?php echo e($currentView); ?>" class="delete-list-view" href="javascript:void(0);"><?php echo app('translator')->getFromJson('core::core.advanced_view.delete'); ?></a></li>
            <?php endif; ?>
        <?php endif; ?>

    </ul>

    <div class="view-list" >


        <select style="display: none" id="advanced_views_select" related-table="<?php echo e($dataTable->getTableAttribute('id')); ?>" name="views" class="select2 advanced_views_select">

            <optgroup label="Public views">
                <option value="0"><?php echo app('translator')->getFromJson('core::core.all_columns'); ?></option>
                <?php $__currentLoopData = $listViews['public']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php if($record->id == $currentView): ?> selected="selected"  <?php endif; ?> value="<?php echo e($record->id); ?>"><?php echo e($record->view_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </optgroup>

            <?php if(count($listViews['private']) > 0 ): ?>
            <optgroup label="Private views">
                <?php $__currentLoopData = $listViews['private']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php if($record->id == $currentView): ?> selected="selected"  <?php endif; ?> value="<?php echo e($record->id); ?>"><?php echo e($record->view_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </optgroup>

            <?php endif; ?>

        </select>
    </div>



    <?php endif; ?>

</div>

<?php endif; ?>
