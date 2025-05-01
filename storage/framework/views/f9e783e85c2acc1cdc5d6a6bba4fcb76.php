<?php $__env->startSection('title', 'Edit Menu'); ?>

<?php $__env->startSection('content'); ?>
<h2>Edit Menu</h2>

<form action="<?php echo e(route('menus.update', $menu->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="mb-3">
        <label for="resort_id" class="form-label">Resort</label>
        <select name="resort_id" class="form-select" required>
            <?php $__currentLoopData = $resorts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resort): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($resort->id); ?>" <?php echo e($menu->resort_id == $resort->id ? 'selected' : ''); ?>>
                    <?php echo e($resort->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Menu Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo e($menu->name); ?>" required>
    </div>

    <div class="mb-3">
        <label for="picture" class="form-label">Picture</label>
        <input type="file" class="form-control" name="picture">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control" required><?php echo e($menu->description); ?></textarea>
    </div>

    <button class="btn btn-primary">Update Menu</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/pouty/resort/resort_listing/resources/views/admin/menus/edit.blade.php ENDPATH**/ ?>