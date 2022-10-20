<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="akagali-content-right">
            <div class="col-sm-12">
                <h4><strong>IBIRI KUGANIRWAHO</strong> <span class="pull-right"><a href="/suggestions/suggest/<?php echo e($cell_id); ?>">Kanda Hano Uduhe Igitekerezo</a></h4></span>
                <?php if(count($topics) == 0): ?>
                    <h5>There are no posts yet in this cell. <a href="/suggestions/suggest/<?php echo e($cell_id); ?>">Suggest</a> one.</h5>
                <?php endif; ?>
                <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <hr class="dotted">
                    <h2><?php echo e($topic->title); ?></h2>
                    <h5>
                        <span class="glyphicon glyphicon-time"></span>
                        Post by <?php echo e(Akagari\User::userNames($topic->user_id)); ?>, Executive Secretary of <?php echo e(Akagari\Cell::cellName($topic->cell_id)); ?>. 
                    </h5>
                    <h5>
                        <span class="label label-primary"><?php echo e(date("D", strtotime($topic->created_at))); ?></span>
                        <span class="label label-primary"><?php echo e(date("F d, Y", strtotime($topic->created_at))); ?></span>
                    </h5>
                    <br>
                    <p>
                        <?php echo e($topic->description); ?>

                    </p>
                    <p>
                        <hr class="dashed">
                        <a href="/comments/<?php echo e($topic->id); ?>" class="btn btn-default btn-sm">
                            <i class="fa fa-enveloppe"></i> Comments
                        </a>
                        <!-- <a href="/comments/<?php echo e($topic->id); ?>" class="btn btn-default btn-sm color-primary"> Read More >>> </a> -->
                    </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>