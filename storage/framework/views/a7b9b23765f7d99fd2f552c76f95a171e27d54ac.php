<a href="<?php echo e($url); ?>" title="<?php echo e($name); ?>" class="<?php echo e(isset($cssClass) ? $cssClass : ''); ?>">
    <?php if(isset($icon)): ?>
        <?php if(\Stringy\Stringy::create($icon)->startsWith('fa')): ?>
            <div class="menu-fa-icon">
                <i class="<?php echo e($icon); ?>"></i>
            </div>

            <span><?php echo e($name); ?></span>
        <?php else: ?>
            <i class="material-icons"><?php echo e($icon); ?></i>
            <span><?php echo e($name); ?></span>
        <?php endif; ?>

    <?php else: ?>
        <?php echo e($name); ?>

    <?php endif; ?>
</a>