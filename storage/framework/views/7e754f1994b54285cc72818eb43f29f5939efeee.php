<?php $__empty_1 = true; $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <a href="<?php echo e(route('mail.show',$row->id)); ?>">
        <div class="media">
            <div class="media-body">
                <h6><?php echo e($row->name); ?></h6>
                <p><?php echo Str::limit($row->message,'45','...'); ?></p>
                <span title="<?php echo e($row->created_at->diffForHumans()); ?>"><?php echo e($row->created_at->format('H:i a')); ?></span>
            </div>
        </div>
    </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="alert alert-secondary">
        <?php echo e(__('admin/home.alert_no_data')); ?>

    </div>
<?php endif; ?>
<?php /**PATH D:\laragon\www\events\resources\views/dashboard/email/media-body.blade.php ENDPATH**/ ?>