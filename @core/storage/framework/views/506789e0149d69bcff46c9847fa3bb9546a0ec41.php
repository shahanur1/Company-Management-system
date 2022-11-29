<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home/smshaju/public_html/for_FTP/@core/resources/views/components/flash-msg.blade.php ENDPATH**/ ?>