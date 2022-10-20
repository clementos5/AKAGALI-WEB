<?php $__env->startSection('content'); ?>
 <div class="panel-body">
              <div class="tab-content">

                <!-- Home -->
                        <div class="akagali-content-right">
                        <div class="col-sm-12">
                            <h2><?php echo e($topic_info->title); ?></h2>
                            <hr class="dotted">
                            <h5><span class="glyphicon glyphicon-time"></span> Post by <?php echo e(Akagari\User::userNames($topic_info->user_id)); ?>, Executive Secretary of <?php echo e(Akagari\User::userCell($topic_info->user_id)); ?>. </h5>
                            <h5>From <span class="label label-primary"><?php echo e($topic_info->start_date); ?></span> to <span class="label label-primary"><?php echo e($topic_info->end_date); ?></span></h5><br>
                            <p><?php echo e($topic_info->description); ?></p>
                            <p><hr class="dashed">
                        </div>
                        <div class="col-sm-12">
                            <p><span class="badge"><?php echo e(count($comments)); ?></span> comments:</p><br>
                            <?php if(count($comments) == 0): ?>
                                <div class="col-md-12">No comment found on this topic</div>
                            <?php else: ?>
                                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row">
                                        <div class="col-sm-2 text-center">
                                            <img src="/images/avatar.png" class="img-circle" height="65" width="65" alt="<?php echo e(Akagari\User::userNames($comment->user_id)); ?> ">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4> <?php echo e(Akagari\User::userNames($comment->user_id)); ?> <small><b>said on:</b> <?php echo e($comment->created_at); ?></small></h4>
                                            <p><?php echo e($comment->comment_text); ?></p>
                                        </div>
                                    </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php endif; ?>
                            <h4>Leave a Comment:</h4>
                            <form method="POST" action="/comments/store">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="topic_id" value="<?php echo e($topic); ?>" />
                                <div class="form-group">
                                <textarea class="form-control" name="comment_text" rows="3" required></textarea>
                              </div>
                              <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                            <br><br>
                                
                        </div>
                  </div>
             
          </div></p></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>