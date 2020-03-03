<div id="entity-comments-container">

</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            BAP_Platform.commentsExtension('<?php echo e($entityIdentifier); ?>','<?php echo e(json_encode(get_class($entity))); ?>' );
        });
    </script>

<?php $__env->stopPush(); ?>