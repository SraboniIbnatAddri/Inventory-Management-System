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
            <a href="<?php echo e(url('/add-data')); ?>" class="btn btn-primary my-3">Add Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $ReadData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->quantity); ?></td>
                    <td><?php echo e($data->price); ?></td>  
                    <td>
                        <a href="<?php echo e(url('/update-data/'.$data->id)); ?>" class="btn btn-success">Update</a>
                        <a href="<?php echo e(url('/delete-data/'.$data->id)); ?>" class="btn btn-danger">Delete</a>
                    </td>  
                 </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html><?php /**PATH C:\xampp\htdocs\inventory\resources\views/read_data.blade.php ENDPATH**/ ?>