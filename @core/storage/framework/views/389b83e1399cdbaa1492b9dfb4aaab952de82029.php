$(document).on('click','#update,button[type="submit"],input[type="submit"]',function () {
    $(this).addClass("disabled")
    $(this).html('<i class="fas fa-spinner fa-spin mr-1"></i> <?php echo e(__("Updating")); ?>');
});<?php /**PATH /home/smshaju/public_html/for_FTP/@core/resources/views/components/btn/update.blade.php ENDPATH**/ ?>