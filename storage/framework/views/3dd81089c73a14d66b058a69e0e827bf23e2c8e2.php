
<?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($loop->iteration <= $config['max']): ?>
<div class="<?php echo e($config['coll_class']); ?>">

    <div class="info-box-2 hover-expand-effect <?php echo e(isset($config['dataTableToFilter']) && $config['dataTableToFilter']  != '' ? "filterable-group-widget pointer": ''); ?>" data-col-name="<?php echo e($config['groupBy']); ?>" data-name="<?php echo e($record['title']); ?>" >
        <div class="icon">
            <?php if(!strpos($record['icon'], 'fa-')): ?>
                <i class=" material-icons <?php echo e($record['color']); ?>"><?php echo e($record['icon']); ?></i>
            <?php else: ?>
                <i class="<?php echo e($record['icon']); ?> <?php echo e($record['color']); ?>"></i>
            <?php endif; ?>
        </div>
        <div class="content">

            <div class="text"><?php echo e($record['title']); ?></div>
            <div class="number <?php echo e(!config('bap.disableCountTo') ? 'count-to': ''); ?>" data-from="0" data-to="<?php echo e($record['count']); ?>" data-speed="2000" data-fresh-interval="20"><?php echo e($record['count']); ?></div>
        </div>

    </div>


</div>
<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->startPush('scripts'); ?>

    <?php if($config['dataTableToFilter'] !== '' ): ?>
        <script type="text/javascript">

            $( document ).ready(function() {
                $(document).on('click','.filterable-group-widget', function(attr){

                    var filterColumnName = $(this).attr('data-col-name');

                    var foundColumn = $("#<?php echo e($config['dataTableToFilter']); ?>").DataTable().settings().init().columns.filter(function(element){
                        return element.column_name == filterColumnName;
                    });

                    if(foundColumn[0] != null ) {
                        yadcf.exFilterColumn($("#<?php echo e($config['dataTableToFilter']); ?>").DataTable(), [[foundColumn[0].column_number, $(this).attr('data-name')]]);
                        $("#<?php echo e($config['dataTableToFilter']); ?>").DataTable().ajax.reload(null, false);
                    }
                });
            });
        </script>
    <?php endif; ?>

<?php $__env->stopPush(); ?>
