<?php $__env->startSection('title', 'Create Destination'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="mb-4">Create New Destination</h2>

    <form method="POST" action="<?php echo e(route('destinations.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="name" class="form-label">Destination Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="file" name="picture" id="picture" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Destination</button>
        <a href="<?php echo e(route('destinations.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/pouty/resort/resort_listing/resources/views/admin/destinations/create.blade.php ENDPATH**/ ?>