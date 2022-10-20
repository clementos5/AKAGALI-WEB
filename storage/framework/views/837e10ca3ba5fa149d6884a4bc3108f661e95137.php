<?php $__env->startSection('content'); ?>

<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" style="line-height: 10%;" href="/">Akagari</a>
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
        <div class="col-md-8 col-md-offset-2">
            <strong style="color: green;">Ibitekerezo biri kuganirwaho</strong>
            <?php if(Auth::user()->user_type == 'admin'): ?>
                <span class="pull-right"><a href="/topics/create" title="Gushyira igitekerezo mu ruganiriro">Gushyira igitekerezo mu ruganiriro</a></span>
            <?php endif; ?>
            <?php if(count($topics) == 0): ?>
                <div class="col-md-12">No topic found in this cell</div>
            <?php else: ?>
                <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $conclusion = Akagari\Conclusion::wheretopic_id($topic->id)->first(); ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="/comments/<?php echo e($topic->id); ?>"><?php echo e($topic->title); ?></a> 
                                <span class="pull-right"> 
                                    <a onclick="return confirm('Murashaka Gusiba iki kiganiro koko?');" href="/topics/destroy/<?php echo e($topic->id); ?>" class="btn btn-xs btn-danger" title="Gusiba Ikiganiro" style="background: green; ">
                                        <i class="fa fa-trash"></i> Gusiba Ikiganiro
                                        </a>
                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12" style="padding-bottom: 5px;">
                                <?php echo e($topic->description); ?> <br />
                                <div class="col-md-12" style="margin-top:5px;">
                                    <b>Yashyizweho:</b> <?php echo e($topic->start_date); ?> <br>
                                    <b>Izarangira:</b> <?php echo e($topic->end_date); ?>

                                </div>
                            </div>
                            <?php if(count($conclusion) != 0): ?>
                                <div class="col-md-12" style="border-top: 1px solid #bcbcbc; ">
                                    <h4>Conclusion</h4>
                                    <?php echo e($conclusion->conclusion_text); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>