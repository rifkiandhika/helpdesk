<title>Edit User</title>

<?php $__env->startSection("css"); ?>
<style>
  /* .btn{
    color: white;
  } */

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
      <section>
        <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Edit User</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="/users">Home</a></li>
                      <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>

            <form action="/user/update/<?php echo e($data->id); ?>" method="post">
              
              <div class="modal-fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Users</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Nama</label>
                          <input type="text" class="form-control" value="<?php echo e($data->nama); ?>" id="nama" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                          <label for="email" class="col-form-label">email</label>
                          <input type="email" class="form-control" value="<?php echo e($data->email); ?>" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="status" class="col-form-label">Status</label>
                          <input type="text" class="form-control" value="<?php echo e($data->status); ?>" id="status" name="status" placeholder="Status">
                        </div>
                    <div class="form-group">
                    <label for="divisi" class="col-form-label">Divisi</label>
                    <input type="text" class="form-control" value="<?php echo e($data->divisi); ?>" id="divisi" name="divisi" placeholder="Divisi">
                    </div>
                    <div class="modal-footer">
                      <a href="/users"><button type="submit" class="btn btn-primary">Save</button></a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>   
      </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Helpdesk\resources\views//user/edit.blade.php ENDPATH**/ ?>