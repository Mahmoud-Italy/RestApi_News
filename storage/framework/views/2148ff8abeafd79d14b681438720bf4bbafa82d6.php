<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Api Documention</title>
  <link href="<?php echo e(url('api/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('api/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo e(url('api/vendor/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('api/css/sb-admin.css')); ?>" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  <?php echo $__env->make('api/docs/navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="content-wrapper">
    <div class="container-fluid">
        
          <?php echo $__env->make('api/sections/categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->make('api/sections/news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center"></div>
      </div>
    </footer>
    

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  </div>

    <script src="<?php echo e(url('api/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('api/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('api/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(url('api/vendor/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(url('api/vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(url('api/js/sb-admin.min.js')); ?>"></script>
    <script src="<?php echo e(url('api/js/sb-admin-datatables.min.js')); ?>"></script>
    <script src="<?php echo e(url('api/js/smooth.js')); ?>"></script>
    <script>
      $(function(){
          $(".hasLi").click(function(){
             $(".hasLi").removeClass('active');
             $(this).addClass('active');
          });
      });
    </script>
</body>
</html>

<?php /* /Users/apple/Sites/dev/RestApi_Task/resources/views/api/docs/app.blade.php */ ?>