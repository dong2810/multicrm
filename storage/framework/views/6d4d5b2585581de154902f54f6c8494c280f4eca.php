<?php $__env->startSection('content'); ?>

    <?php if($settingsMode): ?>
        <div class="block-header">
            <h2><?php echo app('translator')->getFromJson('settings::settings.module'); ?></h2>
        </div>
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


                    <?php echo $__env->first([$moduleName.'::card-header', 'core::crud.partial.card.card-header'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                <div class="body">
                    <div class="row">


                        <?php if(!$disableTabs): ?>
                        <?php if($relationTabs || $hasExtensions): ?>

                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <ul class="nav nav-tabs tab-nav-right tabs-left" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab_details" data-toggle="tab"
                                           title="<?php echo app('translator')->getFromJson('core::core.tabs.details'); ?>">
                                            <?php if (\Illuminate\Support\Facades\Blade::check('issetbap', $baseIcons,'details_icon')): ?>
                                                <i class="material-icons">folder</i>
                                            <?php endif; ?>
                                            <?php if (\Illuminate\Support\Facades\Blade::check('issetbap', $baseIcons,'details_label')): ?>
                                                <?php echo app('translator')->getFromJson('core::core.tabs.details'); ?>
                                            <?php endif; ?>
                                        </a>
                                    </li>



                                        <?php $__currentLoopData = $relationTabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabKey => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php if(Auth::user()->hasPermissionTo($tab['permissions']['browse'])): ?>
                                                <li role="presentation">

                                                    <a class="relation-tab" data-table-related="<?php echo e($tab['htmlTable']->getTableAttribute('id')); ?>" data-table-new="<?php echo e($tab['newRecordsTable']->getTableAttribute('id')); ?>" data-id="tab_<?php echo e($tabKey); ?>" href="#tab_<?php echo e($tabKey); ?>" data-toggle="tab" title="<?php echo app('translator')->getFromJson($language_file.'.tabs.'.$tabKey); ?>">

                                                        <i class="material-icons"><?php echo e($tab['icon']); ?></i>

                                                        <?php echo app('translator')->getFromJson($language_file.'.tabs.'.$tabKey); ?>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    <?php if($commentableExtension): ?>
                                        <li role="presentation">
                                            <a href="#tab_comments" data-toggle="tab"
                                               title="<?php echo app('translator')->getFromJson('core::core.tabs.comments'); ?>">
                                                <?php if (\Illuminate\Support\Facades\Blade::check('issetbap', $baseIcons,'comments_icon')): ?>
                                                    <i class="material-icons">chat</i>
                                                <?php endif; ?>
                                                <?php if (\Illuminate\Support\Facades\Blade::check('issetbap', $baseIcons,'comments_label')): ?>
                                                    <?php echo app('translator')->getFromJson('core::core.tabs.comments'); ?>
                                                <?php endif; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($attachmentsExtension): ?>
                                        <li role="presentation">
                                            <a href="#tab_attachments" data-toggle="tab"
                                               title="<?php echo app('translator')->getFromJson('core::core.tabs.attachments'); ?>">
                                                <?php if (\Illuminate\Support\Facades\Blade::check('issetbap', $baseIcons,'attachments_icon')): ?>
                                                    <i class="material-icons">attach_file</i>
                                                <?php endif; ?>
                                                <?php if (\Illuminate\Support\Facades\Blade::check('issetbap', $baseIcons,'attachments_label')): ?>
                                                    <?php echo app('translator')->getFromJson('core::core.tabs.attachments'); ?>
                                                <?php endif; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if($actityLogDatatable != null ): ?>
                                        <li role="presentation">
                                            <a href="#tab_updates" data-toggle="tab"
                                               title="<?php echo app('translator')->getFromJson('core::core.tabs.updates'); ?>">
                                                <?php if (\Illuminate\Support\Facades\Blade::check('issetbap', $baseIcons,'activity_log_icon')): ?>
                                                    <i class="material-icons">change_history</i>
                                                <?php endif; ?>
                                                <?php if (\Illuminate\Support\Facades\Blade::check('issetbap', $baseIcons,'activity_log_label')): ?>
                                                    <?php echo app('translator')->getFromJson('core::core.tabs.updates'); ?>
                                                <?php endif; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>

                            </div>

                        <?php endif; ?>
                        <?php endif; ?>

                        <div class="<?php if($disableTabs): ?> col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php else: ?> col-lg-10 col-md-10 col-sm-10 col-xs-10 <?php endif; ?> ">

                            <div class="tab-content">


                                <div role="tabpanel" class="tab-pane active" id="tab_details">



                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <?php $__currentLoopData = $customShowButtons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $btn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo Html::customButton($btn); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>

                                    <?php echo $__env->make('core::crud.module.show_form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                </div>

                                <?php echo $__env->make('core::crud.module.quick_edit', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php echo $__env->make('core::crud.module.quick_show', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                            <?php $__currentLoopData = $relationTabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabKey => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(Auth::user()->hasPermissionTo($tab['permissions']['browse'])): ?>
                                        <div role="tabpanel" class="tab-pane" id="tab_<?php echo e($tabKey); ?>">

                                            <div class="related_module_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                        <?php if($tab['select']['allow']): ?>

                                                            <?php if(Auth::user()->hasPermissionTo($tab['permissions']['update'])): ?>
                                                                <div class="select_relation_wrapper">
                                                                    <a href="#" class="select btn btn-primary waves-effect modal-relation"><?php echo app('translator')->getFromJson('core::core.btn.select'); ?></a>

                                                                    <div id="modal_<?php echo e($tabKey); ?>" class="modal fade" role="dialog">
                                                                        <div class="modal-dialog modal-xl">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                    <?php if(isset($tab['select']['modal_title'])): ?>
                                                                                        <h4 class="modal-title"><?php echo app('translator')->getFromJson($tab['select']['modal_title']); ?></h4>
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                                <div class="modal-body linked-records">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 query-builder-filters">
                                                                                        <?php echo $__env->make('core::crud.partial.query_filter_builder_in_tab',['datatable' => $tab['newRecordsTable'],'entity'=>$entity,'tab'=>$tab], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 linked-records">
                                                                                        <?php echo $__env->make('core::crud.relation.relation',['datatable' => $tab['newRecordsTable'],'entity'=>$entity,'tab'=>$tab], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="modal-footer">

                                                                                    <?php echo $__env->make('core::crud.relation.link',['tabkey'=>$tabKey,'entityId' => $entityIdentifier,'route'=>$tab['route']['bind_selected']], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php endif; ?>
                                                        <?php endif; ?>

                                                        <?php if($tab['create']['allow']): ?>
                                                            <?php if(Auth::user()->hasPermissionTo($tab['permissions']['create'])): ?>
                                                                <div class="create_new_relation_wrapper">



                                                                    <a href="#" class="select btn btn-primary waves-effect modal-new-relation"><?php if(isset($tab['create']['label'])): ?> <?php echo app('translator')->getFromJson($tab['create']['label']); ?> <?php else: ?> <?php echo app('translator')->getFromJson('core::core.btn.new'); ?> <?php endif; ?></a>

                                                                        <div data-create-route="<?php echo e(route($tab['route']['create'],$tab['create']['post_create_bind'])); ?>" id="modal_create_<?php echo e($tabKey); ?>" class="modal fade" role="dialog">
                                                                            <div class="modal-dialog modal-xl">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                        <?php if(isset($tab['create']['modal_title'])): ?>
                                                                                            <h4 class="modal-title"><?php echo app('translator')->getFromJson($tab['create']['modal_title']); ?></h4>
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                    <div class="modal-body">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 linked-records"  id="linked_<?php echo e($tabKey); ?>">
                                                        <?php echo $__env->make('core::crud.relation.relation',['datatable' => $tab['htmlTable'],'entity'=>$entity,'tab'=>$tab], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <?php if($commentableExtension): ?>
                                    <div role="tabpanel" class="tab-pane" id="tab_comments">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <?php echo $__env->make('core::extension.comments.list',['entity'=>$entity], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if($attachmentsExtension): ?>
                                    <div role="tabpanel" class="tab-pane" id="tab_attachments">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <?php echo $__env->make('core::extension.attachments.list',['entity'=>$entity,'permissions'=>$permissions], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        </div>

                                    </div>
                                <?php endif; ?>


                                <?php if($actityLogDatatable !=  null ): ?>
                                    <div role="tabpanel" class="tab-pane" id="tab_updates">

                                        <div class="table-responsive col-lg-12 col-md-12">
                                            <?php echo $__env->make('core::extension.activity_log.table', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>


                        </div>


                    </div>

                </div>
            </div>
        </div>

                <?php if($settingsMode): ?>
            </div>
            <?php endif; ?>
    </div>
    </div>

    <?php $__currentLoopData = $includeViews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make($v, \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>