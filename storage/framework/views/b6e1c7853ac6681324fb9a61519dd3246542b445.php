<div class="header">
    <h2>
        <div class="header-buttons">



            <?php if(!$disableNextPrev): ?>
                <div class="btn-group next-prev-btn-group" role="group">

                    <?php if($prev_record): ?>
                        <a href="<?php echo e(route($routes['show'],$prev_record)); ?>"
                           title="<?php echo app('translator')->getFromJson('core::core.crud.prev'); ?>"
                           class="btn btn-primary waves-effect btn-crud btn-prev"><?php echo app('translator')->getFromJson('core::core.crud.prev'); ?></a>
                    <?php endif; ?>

                    <?php if($next_record): ?>
                        <a href="<?php echo e(route($routes['show'],$next_record)); ?>"
                           title="<?php echo app('translator')->getFromJson('core::core.crud.next'); ?>"
                           class="btn btn-primary waves-effect btn-crud btn-next"><?php echo app('translator')->getFromJson('core::core.crud.next'); ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="btn-group btn-crud pull-right">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo app('translator')->getFromJson('core::core.more'); ?> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <?php $__currentLoopData = $actionButtons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <?php echo e(Html::link($link['href'],$link['label'],$link['attr'])); ?>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($permissions['destroy'] == '' or Auth::user()->hasPermissionTo($permissions['destroy'])): ?>
                        <li>
                            <?php echo Form::open(['route' => [$routes['destroy'], $entity], 'method' => 'delete']); ?>


                            <?php echo Form::button(trans('core::core.crud.delete'), [ 'type' => 'submit', 'class' => '"btn btn-block btn-link  waves-effect waves-block', 'onclick' => "return confirm($.i18n._('are_you_sure'))" ]); ?>


                            <?php echo Form::close(); ?>


                        </li>
                    <?php endif; ?>

                </ul>
            </div>

            <a href="<?php echo e(route($routes['index'])); ?>"
               class="btn btn-primary waves-effect btn-back btn-crud"><?php echo app('translator')->getFromJson('core::core.crud.back'); ?></a>

            <?php if($permissions['update'] == '' or Auth::user()->hasPermissionTo($permissions['update'])): ?>
                <a href="<?php echo e(route($routes['edit'],$entity)); ?>"
                   class="btn btn-primary waves-effect btn-edit btn-crud"><?php echo app('translator')->getFromJson('core::core.crud.edit'); ?></a>
            <?php endif; ?>

        </div>

        <?php if($moduleDictionary || $settingsMode): ?>
            <?php echo $__env->make('core::crud.partial.card.card-title', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php else: ?>
            <?php echo $__env->first([$moduleName.'::card-title', 'core::crud.partial.card.card-title'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>


    </h2>
</div>