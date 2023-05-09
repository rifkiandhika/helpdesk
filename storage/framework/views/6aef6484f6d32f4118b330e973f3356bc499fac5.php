<title>Ticket</title>

<?php $__env->startSection("css"); ?>
<style>
  /* .btn{
    color: white;
  } */

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<!-- Content Header (Page header) -->

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Menunggu Respon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Menunggu Respon</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>

                    
                    <br>
                      <tr>
                        <th>#</th>
                        <th>Keluhan</th>
                        <th>Keterangan</th>
                        <th>Tingkat Kesulitan</th>
                        <th>Tempat</th>
                        <th>Status</th>
                        <!-- <th>Konfirmasi</th> -->
                        <th>Tanggal</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($Ticket->id); ?></td>
                        <td><?php echo e($Ticket->keluhan); ?></td>
                        <td><?php echo e($Ticket->keterangan); ?></td>
                        <td><?php echo e($Ticket->tingkat_kesulitan); ?></td>
                        <td><?php echo e($Ticket->tempat); ?></td>

                        
                        <?php if($Ticket->status_ticket == "Menunggu"): ?>
                        <td><a href="/tickets/status/<?php echo e($Ticket->id); ?>/Proses" class="btn btn-warning" onclick="return confirm('Respon laporan?')"><?php echo e($Ticket->status_ticket); ?></a></td>

                        <?php endif; ?>
                        <?php if($Ticket->status_ticket == "Direspon"): ?>
                        <td><a href="/tickets/status/<?php echo e($Ticket->id); ?>/Selesai" class="btn btn-primary" onclick="return confirm('Selesaikan laporan?')"><?php echo e($Ticket->status_ticket); ?></a></td>

                        <?php endif; ?>
                        <?php if($Ticket->status_ticket == "Selesai"): ?>
                        <td><a class="btn btn-success"><?php echo e($Ticket->status_ticket); ?></a></td>

                        <?php endif; ?>
                        <!-- <td><?php echo e($Ticket->konfirmasi); ?></td> -->
                        <td><?php echo e($Ticket->created_at); ?></td>
                        
                          
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
            </div>
      </div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Helpdesk\resources\views//Menu/Respon.blade.php ENDPATH**/ ?>