<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="mb-4">Resorts in <?php echo e($destination->name); ?></h2>
    <div class="row">
    <?php $__currentLoopData = $destination->resorts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resort): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                <img src="<?php echo e(asset('storage/' . $resort->picture)); ?>" alt="<?php echo e($resort->name); ?>" width="100">
                <div class="card-body">
                        <h5 class="card-title"><?php echo e($resort->name); ?></h5>
                        <div class="d-flex justify-content-between">
                            <a href="<?php echo e(route('user.menus', $resort->id)); ?>" class="btn btn-outline-primary">View Menu</a>
                            <a href="<?php echo e(route('user.booking', $resort->id)); ?>" class="btn btn-outline-success">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <a href="<?php echo e(route('user.home')); ?>" class="btn btn-secondary mt-4">← Back to Destinations</a>
</div>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/pouty/resort/resort_listing/resources/views/user/resorts.blade.php ENDPATH**/ ?>