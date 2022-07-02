<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <!------ imports ---------->
</head>

<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title" style="padding-left:100px;" ><?php echo $__env->yieldContent('form-tittle'); ?>
                    <div style="text-align: right;" class="col-lg-4">
                    </div>
                </div>
            </div>

            <div style="padding-top:30px" class="panel-body">

                <?php if($errors->all()): ?>
                    <div class="alert alert-danger float-right" role="alert">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>

                <?php if(session('mensagem')): ?>
                    <div class="alert alert-success float-right" role="alert">
                        <?php echo e(session('mensagem')); ?>

                    </div>
                <?php endif; ?>

                <?php echo $__env->yieldContent('form'); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\projeto_laravel\resources\views/template/layout.blade.php ENDPATH**/ ?>