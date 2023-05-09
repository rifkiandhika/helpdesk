<?php $__env->startSection("content"); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  

    <!-- Main content -->
    <tbody>

    <div class="alert alert-info alert-dismissible fade show" role="alert">
      Hallo..<strong><?php echo e(Auth::user()->nama); ?></strong> Selamat Datang...
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>

      <img src="" alt="">
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box  bg-info bg-warning">
              <div class="inner ">
                <h3>
               <?php echo e($data); ?>

                </h3>
                

                <p>Menunggu Respon..</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-clock"></i>
              </div>
              <a href="/Respon" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                <?php echo e($proses); ?>

                <sup style="font-size: 20px"></sup></h3>

                <p>Proses Pengerjaan</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-clock"></i>
              </div>
              <a href="/Proses" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo e($success); ?></h3>

                <p>Ticket Sukses</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-ticket-alt"></i>
              </div>
              <a href="/Sukses" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo e($user); ?></h3>

                <p>Karyawan</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-users"></i>
              </div>
              <a href="/Karyawan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <img src="../views/layouts/user.png" alt="">
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  </tbody>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\helpdesk1-main\resources\views//dashboard.blade.php ENDPATH**/ ?>