<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inventory</title>
  </head>
  <body>
    <div class="container">
            <a href="<?php echo e(url('/')); ?>" class="btn btn-primary my-3">Show Data</a>
            <?php if(Session::has('msg')): ?>
                <p class = alert alert-succcess><?php echo e(Session::get('msg')); ?></p>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(url('/store-update-data')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="">Id</label>
                    <input type ="text" class="form control my-3" name="id" value= "<?php echo e($updateData->id); ?>"placeholder="please enter name">
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type ="text" class="form control my-3" name="name" value= "<?php echo e($updateData->name); ?>"placeholder="please enter name">
                </div>
                <div class="form-group">
                    <label for="">Quantity</label>
                    <input type ="quantity" class="form control my-3" name="quantity" value= "<?php echo e($updateData->quantity); ?>"placeholder="please enter quantity">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type ="price" class="form control my-3" name="price" value= "<?php echo e($updateData->price); ?>"placeholder="please enter total price">
                </div>
                <input type="submit" class="btn btn-primary my-3" value="submit">
            </form>

        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html><?php /**PATH C:\xampp\htdocs\inventory\resources\views/update_data.blade.php ENDPATH**/ ?>