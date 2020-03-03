
<div class="row">
    <?php $__currentLoopData = $show_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $panelName => $panel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="collapsible">

            <?php echo e(Html::section($language_file,$panelName)); ?>


            <div class="panel-content">
                <?php $__currentLoopData = $panel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fieldName => $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php echo e(Html::renderField($entity,$fieldName,$options,$language_file)); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo $__env->make('core::crud.partial.entity_created_at', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>


