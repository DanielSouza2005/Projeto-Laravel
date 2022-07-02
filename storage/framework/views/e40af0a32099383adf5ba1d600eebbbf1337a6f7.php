<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('form-tittle', 'Login'); ?>
<?php $__env->startSection('form'); ?>
    <form id="loginform" class="form-horizontal" role="form" method="POST" action="<?php echo e(route('login.check')); ?>">
        <?php echo csrf_field(); ?>
        <div style="margin-bottom: 25px" class="form-group col-lg-12">
            <label for="login">Usuário:</label>
            <input type="text" name="login" id="login" class="form-control <?php $__errorArgs = ['login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                autocomplete="login" maxlength="80" value="<?php echo e(old('login')); ?>" placeholder="Digite o usuário">
        </div>

        <div style="margin-bottom: 25px" class="form-group col-lg-12">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control <?php $__errorArgs = ['senha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                autocomplete="senha" maxlength="100" value="<?php echo e(old('senha')); ?>" placeholder="Digite sua senha">
        </div>

        <div class="col-12" style="margin-top:10px; text-align: center;">
            <button id="btn-add" type="submit" class="btn btn-success" style="width: 200px;">Login</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto_laravel\resources\views/login.blade.php ENDPATH**/ ?>