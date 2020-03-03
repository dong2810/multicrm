<?php if ($showLabel && $showField): ?>
<?php if ($options['wrapper'] !== false): ?>
<div class="input-group form-group form-float manyToOne">
    <?php endif; ?>
    <?php endif; ?>

    <div class="form-line">

        <?php if ($showLabel && $options['label'] !== false && $options['label_show']): ?>
    <?= Form::customLabel($name, $options['label'], $options['label_attr']) ?>
<?php endif; ?>

        <?php if ($showField): ?>
        <?= Form::hidden($name, $options['value'], ['class' => 'true_value'])?>

        <?php if(!isset($options['hidden'])): ?>
        <?= Form::input('text', $name . '_display', $options['display_value'], ['id' => $name . '_display', 'class' => 'form-control manyToOne display_value', 'disabled' => 'disabled']) ?>

        <div class="input-group-addon">
            <i data-related-field="<?php echo e($name); ?>" class="material-icons clear-relation-button">clear</i>
            <i data-related-field="<?php echo e($name); ?>" data-route="<?php echo e($options['search_route']); ?>"
               data-modal-title="<?php echo e(trans($options['modal_title'])); ?>" data-display="<?php echo e($options['relation_field']); ?>"
               class="material-icons search-relation-button">search</i>
        </div>
        <?php endif; ?>

        <?php include(base_path() . '/resources/views/vendor/laravel-form-builder/help_block.php') ?>

        <?php endif; ?>

        <div class="many-to-one">
        <?php include(base_path() . '/resources/views/vendor/laravel-form-builder/errors.php') ?>
        </div>
    </div>
        <?php /*without the next &nbsp; the error field on validation is not shown*/ ?>
&nbsp;
    <?php if ($showLabel && $showField): ?>
    <?php if ($options['wrapper'] !== false): ?>
</div>

<?php endif; ?>
<?php endif; ?>
