
<?php $__env->startSection('title'); ?>
    Danh sách danh mục
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<a class="btn btn-success" href="<?php echo e(route('category.create')); ?>" >Thêm mới</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">status</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($category->id); ?></th>
            <td><?php echo e($category->name); ?></td>
            <td><?php echo e($category->status); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Lab4_php3\Lab4\resources\views/category/index.blade.php ENDPATH**/ ?>