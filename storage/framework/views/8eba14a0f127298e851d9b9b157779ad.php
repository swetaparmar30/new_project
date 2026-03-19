<!DOCTYPE html>
<html>
<head>
    <title>Clark and Sons Garage Doors</title>
</head>
<body>
    Hello <?php echo e($details['name']); ?>,
    <p>Your user account has been successfully created.</p>
    <p>You can log in using the link below:</p>
    <p>Login URL: <a href="<?php echo e(url('/admin/login')); ?>"><?php echo e(url('/admin/login')); ?></a></p>
    <p>Username: <?php echo e($details['email']); ?></p>
    <p>Password: <?php echo e($pass['password']); ?></p>
</body>
</html><?php /**PATH /home/customer/www/nateb61.sg-host.com/public_html/resources/views/notifymail/notifymail.blade.php ENDPATH**/ ?>