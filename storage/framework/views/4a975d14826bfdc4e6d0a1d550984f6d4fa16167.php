<?php $__env->startSection('content'); ?>
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-offset-2">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" style="line-height: 10%;" href="/">Akagari app</a>
                </div>
                <ul class="nav navbar-nav">
                  <li><a href="/topics">Topics</a></li>
                  <li><a href="/action_plans">Action plans</a></li>
                  <li><a href="/suggestions">Suggestions</a></li>
                  <li class="active"><a href="/services">Services</a></li>
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
        <div class="col-md-8 col-xs-offset-2">
            <?php if(session('message')): ?>
                <div class="alert alert-success"><?php echo e(session('message')); ?></div>
            <?php endif; ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of services | <?php echo e(Akagari\Cell::cellName(Auth::user()->cell_id)); ?>

                    <?php if(Auth::user()->user_type == 'admin'): ?>
                        <span class="pull-right"><a href="/services/create">Add a service</a></span>
                    <?php endif; ?>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Message</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter=0; ?>
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$counter); ?></td>
                                    <td><?php echo e($service->name); ?></td>
                                    <td><?php echo e($service->description); ?></td>
                                    <td>
                                        <a onclick="return confirm('Are you sure you want to delete this service?');" href="/services/destroy/<?php echo e($service->id); ?>" class="btn btn-xs btn-danger" title="Delete">
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