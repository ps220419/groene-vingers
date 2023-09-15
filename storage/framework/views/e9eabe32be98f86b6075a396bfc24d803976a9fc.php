 <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <?php if($message = Session::get('error')): ?>
        <div class="alert alert-danger">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

  
<?php /**PATH C:\school\leerjaar 3\Project 6\Projact6\GV-site\resources\views/components/message.blade.php ENDPATH**/ ?>