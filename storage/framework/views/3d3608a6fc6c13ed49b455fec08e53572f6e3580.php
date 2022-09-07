<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h1> Contact Message </h1>
    <p>Name : <?php echo e($details['fullnames']); ?></p>
    <p>Email: <?php echo e($details['email']); ?></p>
    <p>Phone : <?php echo e($details['phone']); ?></p>
    <p>Message : <?php echo e($details['message']); ?></p>
</body>
</html><?php /**PATH C:\wamp\www\Contact-app\resources\views/emails/ContactMail.blade.php ENDPATH**/ ?>