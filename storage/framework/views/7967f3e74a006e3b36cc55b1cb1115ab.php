
<?php $__env->startSection('title'); ?>
    Danh sách sản phẩm
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<a class="btn btn-success" href="<?php echo e(route('product.create')); ?>" >Thêm mới</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
            <th scope="col">image</th>
            <th scope="col">category name</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $listPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($item->id); ?></th>
            <td><?php echo e($item->name); ?></td>
            <td><?php echo e($item->price); ?></td>
            <td><?php echo e($item->quantity); ?></td>
            <td>
                <?php if(!isset($item->image)): ?>
                    Không có hình ảnh
                <?php else: ?>
                    <?php echo e($item->image); ?>

                <?php endif; ?>
            </td>


            <td><?php echo e($listCate[$item->category_id]); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($listPro->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Lab4_php3\Lab4\resources\views/product/index.blade.php ENDPATH**/ ?>