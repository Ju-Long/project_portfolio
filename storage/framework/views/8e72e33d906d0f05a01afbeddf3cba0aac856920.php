<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class='overall'>
        <main>
            <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="content">
                
                <?php echo $__env->make('apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </main>
    </div>
    <script src="../js/index.js"></script>
</body>

</html><?php /**PATH /var/www/project_portfolio/resources/views/index.blade.php ENDPATH**/ ?>