<title>Laporan Ticket</title>

<?php $__env->startSection("css"); ?>
<style>
  /* .btn{
    color: white;
  } */

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan Ticket</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Laporan Ticket</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <!-- Main content -->
     <section class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <h3> Print Laporan Ticket</h3>
        </div>

       
        <div class="card-body">
          <div class="input-group mb-1">
            <label for="label">Tanggal Awal</label>
          </div>
          <input type="date" name="tglawal" id="tglawal" class="form-control">
            <br>

          <div class="input-group mb-1">
            <label for="label">Tanggal Akhir</label>
          </div>
          <input type="date" name="tglakhir" id="tglakhir" class="form-control">
          <br>

          <div class="input-group mb-3">
            
            <a href="" onclick="this.href='/Print/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value " 
            target="_blank" class="btn btn-primary">Cetak Laporan <i class="fas fa-print"></i></a>
          </div> 
        </div>
       
      </div>
     </section>


                





















<?php $__env->stopSection(); ?>












<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\helpdesk1-main\resources\views/Report/index.blade.php ENDPATH**/ ?>