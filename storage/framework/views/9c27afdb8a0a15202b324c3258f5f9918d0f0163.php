<div class="row">


    <?php echo form_start($form); ?>


    <?php $__currentLoopData = $show_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $panelName => $panel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="collapsible">
            <?php echo e(Html::section($language_file,$panelName,$sectionButtons)); ?>


            <div class="panel-content">
                <?php $__currentLoopData = $panel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fieldName => $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($form->{$fieldName}!= null && !isset($options['hide_in_form']) && !isset($options['hide_in_edit']) ): ?>
                        <div class="<?php echo e(isset($options['col-class']) ? $options['col-class'] : 'col-lg-6 col-md-6 col-sm-6 col-xs-6'); ?>">

                            <?php echo form_row($form->{$fieldName}); ?>

                        </div>
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo form_end($form, $renderRest = true); ?>


</div>

</div>



<?php if( $modal_form ): ?>
    <?php $__currentLoopData = $jsFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jsFile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script src="<?php echo Module::asset($moduleName.':js/'.$jsFile); ?>"></script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php if($form_request != null && $modal_form): ?>
    <?php echo JsValidator::formRequest($form_request, '#'.$formId); ?>

<?php endif; ?>
