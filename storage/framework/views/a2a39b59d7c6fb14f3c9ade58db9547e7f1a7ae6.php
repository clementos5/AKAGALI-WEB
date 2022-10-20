<?php $__env->startSection('content'); ?>
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" style="line-height: 10%;" href="/">Akagari app</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="/users">Users</a></li>
                  <li>
                    <a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>
                </ul>
              </div>
            </nav>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">List of users</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="col-md-4">Filter by</div>
                        <div class="col-md-8">
                            <form action="" method="POST">
                                <select class="form-control" name="filter">
                                    
                                </select>
                            </form>
                        </div>
                    </div>
                    <hr />
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Names</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Cell</th>
                                <th>User type</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter=0; ?>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$counter); ?></td>
                                    <td><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->phone_number); ?></td>
                                    <td><?php echo e(Akagari\Cell::cellName($user->cell_id)); ?></td>
                                    <td><?php echo e($user->user_type); ?></td>
                                    <td>
                                        <a href="/users/<?php echo e($user->id); ?>/details" class="btn btn-xs btn-primary" title="Details">
                                            <i class="fa fa-list"></i>
                                        </a>
                                        <a href="/users/edit/<?php echo e($user->id); ?>" class="btn btn-xs btn-warning" title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this user?');" href="/users/destroy/<?php echo e($user->id); ?>" class="btn btn-xs btn-danger" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>