<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="mb-4">Menu at <?php echo e($resort->name); ?></h2>
    <div class="row">
    <?php $__currentLoopData = $resort->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($menu->name); ?></h5>
                        <p class="card-text"><?php echo e($menu->description); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <a href="<?php echo e(route('user.resorts', $resort->destination_id)); ?>" class="btn btn-secondary">← Back to Resorts</a>
</div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/pouty/resort/resort_listing/resources/views/user/menus.blade.php ENDPATH**/ ?>