<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="akagali-main">
            <div class="col-sm-12">
                <h4><strong style="font-family: 'Times New Roman', Times, serif;font-size: 110%; color: green"> HABONETSE  I<?php echo e(count($results) > 1 ? 'B':'G'); ?>ISUBIZO <b style="color: red"><?php echo e(count($results)); ?> </b><?php echo e(count($results) > 1 ? 'B':'K'); ?>IJYANYE NA  <b style=" color: red"><?php echo e($query); ?></b></strong></h4>
                <?php if(count($results) == 0): ?>
                    <h5>The search returned 0 responses</h5>
                <?php endif; ?>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <hr class="dotted">
                    <h2><a href="/topics/cell/<?php echo e($result->id); ?>"> <div style="width: 100%; font-family: 'Times New Roman', Times, serif;font-size: 110%; color: blue"><?php echo e($result->name); ?></div></a></h2>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>