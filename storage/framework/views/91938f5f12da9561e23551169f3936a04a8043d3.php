    
    <?php $__env->startSection('title','Edit Employee'); ?>
    <?php $__env->startSection('content'); ?>
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <form action="<?php echo e(route('employees.update')); ?>" method = "post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="firstname">Firstname:</label>
              <input type="text" name = "firstname" id = "firstname" class="form-control" required value = "<?php echo e($employee->firstname); ?>">
            </div>
            <div class="form-group">
              <label for="lastname">Lastname:</label>
              <input type="text" name = "lastname" id = "lastname" class="form-control" required value = "<?php echo e($employee->lastname); ?>">
            </div>
            <div class="form-group">
              <label for="department">Department:</label>
              <input type="text" name = "department" id = "department" class="form-control" required value = "<?php echo e($employee->department); ?>">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number:</label>
              <input type="text" name = "phone" id = "phone" class="form-control" required value = "<?php echo e($employee->phone); ?>">
            </div>
            <input type="hidden" name="id" value = "<?php echo e($employee->id); ?>">
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Shop\resources\views/employee/edit.blade.php ENDPATH**/ ?>