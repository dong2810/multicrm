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
                <div class="header">
                    <h2>
                        <div class="header-buttons">
                            <a href="<?php echo e(route($routes['index'])); ?>" title="<?php echo app('translator')->getFromJson('core::core.crud.back'); ?>" class="btn btn-primary btn-back btn-crud"><?php echo app('translator')->getFromJson('core::core.crud.back'); ?></a>
                        </div>

                        <div class="header-text">
                            <?php echo app('translator')->getFromJson($language_file.'.module'); ?> - <?php echo app('translator')->getFromJson('core::core.crud.create'); ?>
                            <small><?php echo app('translator')->getFromJson($language_file.'.module_description'); ?></small>
                        </div>

                    </h2>


                </div>
                <div class="body">

                    <?php echo $__env->make('core::crud.module.create_form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>

        <?php if($settingsMode): ?>
            </div>
        <?php endif; ?>

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


    <?php if($form_request != null && !$modal_form): ?>
        <?php $__env->startPush('scripts'); ?>
            <?php echo JsValidator::formRequest($form_request, '#module_form'); ?>

        <?php $__env->stopPush(); ?>
    <?php endif; ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>