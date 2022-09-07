<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <section class="pt-60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                        Contact Us
                        </div>
                        <div class="card-body">
                            <?php if(Session::has('message_sent')): ?>
                                <div class="alert alert-success" role="alert">
                                <?php echo e(Session::get('message_sent')); ?>

                                </div>
                            <?php endif; ?>
                            <form method="POST" action="<?php echo e(route('contact.send')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="col-md-6 col-12 section-space--bottom--20">
                                    <input type="text" name="fullnames" required placeholder="Fullnames" id="form_name" />
                                </div>
                                <div class="col-md-6 col-12 section-space--bottom--20">
                                    <input type="email" name="email" required placeholder="Email" id="form_email" />
                                </div>
                                <div class="col-md-6 col-12 section-space--bottom--20">
                                    <input type="tel" name="phone" required placeholder="Phone" id="form_phone" />
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="from-control" placeholder="Message" id="form_message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">SEND</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\wamp\www\Contact-app\resources\views/contact-us.blade.php ENDPATH**/ ?>