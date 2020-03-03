<?php if($include_scripts): ?>
    <?php echo $__env->make('calendar::fullcalendar.files', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#<?php echo e($id); ?>').fullCalendar(<?php echo $options; ?>);
    });
</script>
