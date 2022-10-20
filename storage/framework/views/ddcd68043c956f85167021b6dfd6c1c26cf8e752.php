<?php $__env->startSection('content'); ?>
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" style="line-height: 10%;" href="/">Akagari app</a>
                </div>
                <ul class="nav navbar-nav">
                  <li><a href="/topics">Topics</a></li>
                  <li class="active"><a href="/action_plans">Action plans</a></li>
                  <li><a href="/suggestions">Suggestions</a></li>
                  <li><a href="/services">Services</a></li>
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
        <div class="col-md-8 col-md-offset-2">
            <strong>Cells action plans</strong>
            <?php if(Auth::user()->user_type == 'admin'): ?>
                <span class="pull-right"><a href="/action_plans/create">Add action plan</a></span>
            <?php endif; ?>
            <?php if(count($action_plans) == 0): ?>
                <div class="col-md-12">No action plan found in this cell</div>
            <?php else: ?>
                <?php $__currentLoopData = $action_plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="panel panel-default">
                        <div class="panel-heading"><?php echo e(Akagari\Cell::cellName($plan->cell_id)); ?></div>
                        <div class="panel-body">
                            <div class="col-md-12" style="padding-bottom: 5px;">
                                <?php echo e($plan->year); ?> | <a href="/<?php echo e($plan->plan_url); ?>">Preview / Download</a>
                            </div>
                            <div class="col-md-12" style="margin-top:5px;">
                                <b>Added on:</b> <?php echo e($plan->created_at); ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>