    
    <?php $__env->startSection('title','Employees Index'); ?>
    <?php $__env->startSection('content'); ?>
      <div class="row">
        <div class="col-sm-12">
          <table class="table">
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Department</th>
              <th>Phone No.</th>
            </tr>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class = "text-center">
                <td><?php echo e($employee->id); ?></td>
                <td><?php echo e($employee->firstname); ?></td>
                <td><?php echo e($employee->lastname); ?></td>
                <td><?php echo e($employee->department); ?></td>
                <td><?php echo e($employee->phone); ?></td>
                <td><a href="<?php echo e(route('employees.edit',['id'=>$employee->id])); ?>" class = "btn btn-info">Edit</a></td>
                <td><a href="<?php echo e(route('employees.destroy',['id'=>$employee->id])); ?>" class = "btn btn-danger">Delete</a></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>
      </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Shop\resources\views/employee/index.blade.php ENDPATH**/ ?>