<?php $__env->startSection('title', 'Edit Destination'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="mb-4">Edit Destination</h2>

    <form method="POST" action="<?php echo e(route('destinations.update', $destination->id)); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label for="name" class="form-label">Destination Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo e($destination->name); ?>" required>
        </div>

        <div class="mb-3">
            <label for="picture" class="form-label">Change Picture (optional)</label>
            <input type="file" name="picture" id="picture" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Destination</button>
        <a href="<?php echo e(route('destinations.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/pouty/resort/resort_listing/resources/views/admin/destinations/edit.blade.php ENDPATH**/ ?>