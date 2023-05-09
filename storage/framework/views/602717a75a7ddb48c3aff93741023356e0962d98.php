<title>Create</title>

<?php $__env->startSection("css"); ?>
<style>
  /* .btn{
    color: white;
  } */

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
        
    <br>
    <form method="<?php echo e(url('Ticket')); ?>" action="post">
        <?php echo csrf_field(); ?>


        <button type="submit">SIMPAN</button>
    </form>    







    <?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Helpdesk\resources\views//Ticket/create.blade.php ENDPATH**/ ?>