<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<div class="contrainer">
    <div class="row">
        <h1><?php echo $__env->yieldContent('title'); ?></h1>
        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
            
        </div>
    </div>
</div>
</body>

</html>
<?php /**PATH C:\laragon\www\Lab4_php3\Lab4\resources\views/layoutadmin.blade.php ENDPATH**/ ?>