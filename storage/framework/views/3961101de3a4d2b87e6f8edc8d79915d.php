<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="mb-4">Attraction Destinations</h2>
    <div class="row">
        <?php $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <?php if($destination->picture): ?>
                        <img src="<?php echo e(asset('storage/' . $destination->picture)); ?>" class="card-img-top" alt="<?php echo e($destination->name); ?>">
                    <?php else: ?>
                        <img src="https://via.placeholder.com/400x200?text=No+Image" class="card-img-top" alt="No image">
                    <?php endif; ?>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title"><?php echo e($destination->name); ?></h5>
                        <p class="card-text">Resorts Available (<?php echo e($destination->resorts->count()); ?>)</p>
                        <a href="<?php echo e(route('user.resorts', $destination->id)); ?>" class="btn btn-primary mt-auto">View Resorts</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/pouty/resort/resort_listing/resources/views/user/destinations/index.blade.php ENDPATH**/ ?>