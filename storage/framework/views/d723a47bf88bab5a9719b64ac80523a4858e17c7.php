<title>Users</title>

<?php $__env->startSection("css"); ?>
<style>
  /* .btn{
    color: white;
  } */

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<!-- Content Header (Page header) -->
<tbody>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                  <table class="table table-bordered table-striped">

                  <div>
                  <a class="btn btn-success" href="/Register">Buat Akun</a>
                </div>
                <hr>
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Divisi</th>
                        <th>Status</th>
                        <th style="width: 150px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->nama); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->divisi); ?></td>
                        <td><?php echo e($user->status); ?></td>
                        <td>
                          <ul class="table-action">
                            <li><a href="/user/edit/<?php echo e($user->id); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a></li>
                            <li><a href="<?php echo e(url('destroy/'.$user->id)); ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i> Delete</a></li>
                          </ul>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
            </div>
      </div>
    </section>
  </tbody>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Helpdesk\resources\views//user/index.blade.php ENDPATH**/ ?>