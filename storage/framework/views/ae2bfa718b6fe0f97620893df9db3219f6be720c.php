<?php echo Form::open(['route' => [$route], 'method' => 'post','class'=>'link-selected']); ?>


<?php echo e(Form::hidden('entityId',$entityId)); ?>

<?php echo e(Form::hidden('relationEntityIds')); ?>

<?php echo e(Form::hidden('modalName','modal_'.$tabkey)); ?>

<?php echo e(Form::hidden('linkedName','linked_'.$tabkey)); ?>


<?php echo Form::button(trans('core::core.add_selected'), [
    'type' => 'submit',
    'class' => 'btn btn-primary link-selected',
    'title' => trans('core::core.unlink_relation'),
    'onclick' => "return confirm($.i18n._('are_you_sure'))"
]); ?>


<?php echo Form::close(); ?>

