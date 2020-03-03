<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h2 id="<?php echo e(sectionSlug($language_file.'.panel.'.$panelName)); ?>" class="card-inside-title">


        <span class="pointer">
            <?php echo app('translator')->getFromJson($language_file.'.panel.'.$panelName); ?>

            <span class="expander">
                <i class="fa fa-angle-up pointer" aria-hidden="true"></i>
            </span>
        </span>

        <div class="section-buttons">
        <?php if(isset($sectionButtons)): ?>
            <?php $__currentLoopData = $sectionButtons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($button['section'] == $panelName): ?>
                    <a title="<?php if(isset($button['title']) && $button['title']): ?> <?php echo app('translator')->getFromJson($language_file.'.'.$button['title']); ?> <?php endif; ?>" id="<?php echo e($button['id']); ?>" class="normal-text <?php echo e($button['class']); ?>" href="<?php echo e($button['href']); ?>">
                        <?php if(isset($button['icon']) && $button['icon']): ?>
                            <i class="<?php echo e($button['icon']); ?>"></i>
                        <?php endif; ?>
                        <?php if(isset($button['label']) && $button['label']): ?>
                            <?php echo app('translator')->getFromJson($language_file.'.'.$button['label']); ?>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </div>


    </h2>


</div>
