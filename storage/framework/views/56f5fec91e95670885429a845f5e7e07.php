<?php $__env->startSection('title', 'All Menus'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-3">
    <h2>All Menus</h2>
    <a href="<?php echo e(route('menus.create')); ?>" class="btn btn-primary">Add Menu</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Resort</th>
            <th>Name</th>
            <th>Description</th>
            <th>Picture</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($menu->id); ?></td>
                <td><?php echo e($menu->resort->name ?? 'N/A'); ?></td>
                <td><?php echo e($menu->name); ?></td>
                <td><?php echo e($menu->description); ?></td>
                <td>
                    <?php if($menu->picture): ?>
                        <img src="<?php echo e(asset('storage/' . $menu->picture)); ?>" width="100">
                    <?php else: ?>
                        No image
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('menus.edit', $menu->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?php echo e(route('menus.destroy', $menu->id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this menu item?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/pouty/resort/resort_listing/resources/views/admin/menus/index.blade.php ENDPATH**/ ?>