<?php $__env->startSection('content'); ?>
<body class="login-img3-body" style=" background: url(images/bgmg.jpg)">

    <div class="container">

      <form class="login-form" method="POST" action="<?php echo e(route('register')); ?>"> 
      <?php echo e(csrf_field()); ?>       
        <div class="login-wrap">
            <p class="login-img"><i class="fa fa-user" aria-hidden="true"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                <select class="form-control" name="cell_id">
                    <option value="0" disabled selected>Hitamo akagali</option>
                    <?php $__currentLoopData = $cells; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cell->id); ?>" <?php if(isset($_POST['cell_id']) AND $_POST['cell_id'] == $cell->id){echo 'selected';}?>><?php echo e($cell->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="input-group<?php echo e($errors->has('first_name') ? ' has-error' : ''); ?>">
              <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Izina rya mbere" id="name"  name="first_name" value="<?php echo e(old('last_name')); ?>" required autofocus>
                <?php if($errors->has('first_name')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('first_name')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="input-group<?php echo e($errors->has('last_name') ? ' has-error' : ''); ?>">
              <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Irindi zina" id="name"  name="last_name" value="<?php echo e(old('first_name')); ?>" required autofocus>
               <?php if($errors->has('last_name')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('last_name')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="input-group<?php echo e($errors->has('phone_number') ? ' has-error' : ''); ?>">
              <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Nimero za Telefone" id="name"  name="phone_number" value="<?php echo e(old('phone_number')); ?>" required autofocus>
               <?php if($errors->has('phone_number')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('phone_number')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
           
            <div class="input-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="email" class="form-control" placeholder="E-mail yawe"  id="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                 <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="input-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></i></span>
                <input type="password" class="form-control" placeholder="Ijambo ry'Urufunguzo" id="password" name="password" required autofocus >
                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="Subiramo jambo ry'urufunguzo" id="password-confirm" name="password_confirmation" required autofocus>
            </div>
            <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
            </label> -->
            <button class="btn btn-primary btn-lg btn-block" type="submit">Iyandikishe</button>
            <a href="/login"> <center > Usanzwe Ufite Konte? <strong style="color: green;"> Injira </strong></center></a>
            <!-- <button class="btn btn-info btn-lg btn-block" type="submit">HAVE ACCOUNT</button> -->
        </div>
      </form>
  </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>