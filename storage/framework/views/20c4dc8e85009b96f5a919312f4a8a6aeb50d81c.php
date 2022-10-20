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
                  <li class="active"><a href="/topics">Topics</a></li>
                  <li><a href="/action_plans">Action plans</a></li>
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
        <div class="col-md-8 col-xs-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add topic</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/topics/store">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>" required autofocus />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description"><?php echo e(old('description')); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="start_date" class="col-md-4 control-label">Start date</label>

                            <div class="col-md-6">
                                <input id="start_date" type="date" class="form-control" name="start_date" value="<?php echo e(old('start_date')); ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="end_date" class="col-md-4 control-label">End date</label>

                            <div class="col-md-6">
                                <input id="end_date" type="date" class="form-control" name="end_date" value="<?php echo e(old('end_date')); ?>" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add topic
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>