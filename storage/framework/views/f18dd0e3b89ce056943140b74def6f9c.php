<?php $__env->startSection('title', 'All Destinations'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-3">
    <h2>All Destinations</h2>
    <a href="<?php echo e(route('destinations.create')); ?>" class="btn btn-primary">Add Destination</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Picture</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($destination->id); ?></td>
                <td><?php echo e($destination->name); ?></td>
                <td><img src="<?php echo e(asset('storage/' . $destination->picture)); ?>" width="100"></td>
                <td>
                    <a href="<?php echo e(route('destinations.edit', $destination->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?php echo e(route('destinations.destroy', $destination->id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/pouty/resort/resort_listing/resources/views/admin/destinations/index.blade.php ENDPATH**/ ?>