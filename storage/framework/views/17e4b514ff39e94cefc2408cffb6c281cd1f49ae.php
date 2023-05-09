<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>
</head>
<style>

</style>
<body>
    <div class="form-group">
        <p align="center" ><b>Data Laporan Ticket</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No.</th>
                <th>Keluhan</th>
                <th>Keterangan</th>
                <th>Tingkat Kesulitan</th>
                <th>Status Ticket</th>
                <th>Tanggal</th>
            </tr>
            <?php $__currentLoopData = $cetak_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="text-align: center;"><?php echo e($Ticket->id); ?></td>
                <td><?php echo e($Ticket->keluhan); ?></td>
                <td><?php echo e($Ticket->keterangan); ?></td>
                <td style="text-align: center;"><?php echo e($Ticket->tingkat_kesulitan); ?></td>
                <td style="text-align: center;"><?php echo e($Ticket->status_ticket); ?></td>
                <td style="text-align: center;"><?php echo e($Ticket->created_at); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\Helpdesk\resources\views/Report/cetak_data.blade.php ENDPATH**/ ?>