<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
      <div class="row">
        <div class="col-sm-12">
          <table class="table">
            <tr>
              <th>ID</th>
              <th>Book Name</th>
              <th>Category</th>
              <th>Author Name</th>
              <th>Price</th>
            </tr>
            <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class = "text-center">
                <td><?php echo e($book->id); ?></td>
                <td><?php echo e($book->name); ?></td>
                <td><?php echo e($book->category); ?></td>
                <td><?php echo e($book->author); ?></td>
                <td><?php echo e($book->price); ?></td>
             </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>
      </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>