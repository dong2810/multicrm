<?php $__env->startSection('content'); ?>

    <?php if($settingsMode): ?>
        <div class="block-header">
            <h2><?php echo app('translator')->getFromJson('settings::settings.module'); ?></h2>
        </div>
    <?php endif; ?>

    <?php if(!$disableWidgets): ?>
        <?php if ($__env->exists($moduleName.'::index-top')) echo $__env->make($moduleName.'::index-top', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>

    <div class="row">

            <?php if($settingsMode): ?>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 no-vert-padding" >
                    <?php echo $__env->make('settings::partial.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            <?php endif; ?>

            <?php if($settingsMode): ?>
                    <div  class="col-lg-9 col-md-9 col-sm-9 col-xs-12 no-vert-padding">
            <?php endif; ?>



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>

                            <div class="header-buttons">
                                <?php if($settingsPermission != '' && Auth::user()->hasPermissionTo($settingsPermission)): ?>
                                    <?php if(count($moduleSettingsLinks) > 0 ): ?>
                                    <div class="btn-group btn-crud pull-right">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?php echo app('translator')->getFromJson('core::core.settings'); ?> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <?php $__currentLoopData = $moduleSettingsLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <li>
                                                 <a href="<?php echo e(route($link['route'])); ?>"><?php echo e(trans($language_file.'.'.$link['label'])); ?></a>
                                             </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <?php if(!empty($indexActionButtons)): ?>
                                    <div class="btn-group btn-crud pull-right">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?php echo app('translator')->getFromJson('core::core.more'); ?> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <?php $__currentLoopData = $indexActionButtons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <?php echo e(Html::link($link['href'],$link['label'],$link['attr'])); ?>

                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>


                                <?php if($permissions['create'] == '' or Auth::user()->hasPermissionTo($permissions['create'])): ?>
                                    <a href="<?php echo e(route($routes['create'])); ?>" title="<?php echo app('translator')->getFromJson('core::core.crud.create'); ?>" class="btn btn-primary btn-create btn-crud"><?php echo app('translator')->getFromJson('core::core.crud.create'); ?></a>
                                <?php endif; ?>


                                <?php echo $__env->make('core::extension.advanced_view.advanced_views',['dataTable' => $dataTable,'hasQueryFilters' => $dataTable->hasQueryFilters,'advancedViewsEnabled' => $advancedViewsEnabled], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                <?php if($settingsBackRoute != ''): ?>
                                    <a href="<?php echo e(route($settingsBackRoute)); ?>" title="<?php echo app('translator')->getFromJson('core::core.crud.back'); ?>" class="btn btn-default btn-crud"><?php echo app('translator')->getFromJson('core::core.crud.back'); ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="header-text">

                                <?php echo app('translator')->getFromJson($language_file.'.module'); ?>  - <?php echo app('translator')->getFromJson('core::core.crud.list'); ?>
                                <small><?php echo app('translator')->getFromJson($language_file.'.module_description'); ?></small>
                            </div>

                        </h2>
                    </div>
                    <div class="body">


                        <?php if($dataTable->hasQueryFilters): ?>
                            <?php echo $__env->make('core::crud.partial.query_filter_builder_in_index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endif; ?>

                        <?php if($showMassActionButtons && isset($massActionButtons)  && Auth::user()->hasPermissionTo($permissions['destroy']) ): ?>
                            <div id="index-mass-action" class="pull-left btn-mass-action" style="display: none;">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Mass Action<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <?php $__currentLoopData = $massActionButtons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actionButton): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e(Html::link($actionButton['href'],$actionButton['label'],$actionButton['attr'])); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                </div>
                            </div>
                        <?php endif; ?>


                        <div class="table-responsive  col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <?php if($indexTabButtons): ?>
                            <ul class="nav nav-tabs" role="tablist" style=" margin-bottom: 10px">
                                <?php $__currentLoopData = $indexTabButtons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li role="presentation" class="<?php echo e(isset($tab['default']) ? "active" : ''); ?>"><?php echo e(Html::link($tab['href'],$tab['label'],$tab['attr'])); ?></li>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                            <?php endif; ?>

                            <?php echo $dataTable->table(['width' => '100%']); ?>

                        </div>

                        <div data-create-route="<?php echo e(route($routes['create'],['mode'=>'modal'])); ?>" id="modal_quick_create" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        <h4 class="modal-title"><?php echo app('translator')->getFromJson($language_file.'.module'); ?> - <?php echo app('translator')->getFromJson('core::core.crud.create'); ?></h4>

                                    </div>
                                    <div class="modal-body">

                                    </div>
                                </div>
                            </div>
                        </div>

                            <div data-create-route="<?php echo e(route($routes['create'],['mode'=>'modal','action'=>'mass_update'])); ?>" id="modal_mass_update" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                            <h4 class="modal-title"><?php echo app('translator')->getFromJson($language_file.'.module'); ?> - <?php echo app('translator')->getFromJson('core::core.crud.mass_update'); ?></h4>

                                        </div>
                                        <div class="modal-body">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php echo $__env->make('core::crud.partial.csv_import', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('core::crud.module.quick_edit', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    </div>
                </div>


            </div>



            <?php if($settingsMode): ?>
                    </div>
            <?php endif; ?>
    </div>


    <?php if(!$disableWidgets): ?>
        <?php if ($__env->exists($moduleName.'::index-bottom')) echo $__env->make($moduleName.'::index-bottom', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>

    <?php echo $__env->make('core::extension.advanced_view.advanced_view_modal',
        ['dataTable' => $dataTable,
         'hasQueryFilters' => $dataTable->hasQueryFilters,
         'advancedViewsEnabled' => $advancedViewsEnabled,
         'availableColumns' => $availableColumns
         ], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <?php $__currentLoopData = $cssFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="stylesheet" href="<?php echo Module::asset($moduleName.':css/'.$file); ?>"></link>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php $__currentLoopData = $jsFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jsFile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script src="<?php echo Module::asset($moduleName.':js/'.$jsFile); ?>"></script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>