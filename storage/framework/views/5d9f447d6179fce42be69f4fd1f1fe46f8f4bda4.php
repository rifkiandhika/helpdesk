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
            <h1 class="m-0">Ticket</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Ticket</li>
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
                  <table class="table table-bordered">
                    <thead>

                   <div>
                          <!-- Modal -->
                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" >
                            Tambah Ticket +
                          </button>

                          <hr>

                          
                     
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Ticket</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                </button>
                              </div>
                              
                              <div class="modal-body">
                                <form action="/insert_data" method="post" enctype="multipart/form-data">
                                  <?php echo csrf_field(); ?>

                                  <!-- File Keluhan -->
                                  <div class="form-group">
                                    <select id="keluhan" class="form-control" name="keluhan">
                                    <option selected>Kategory</option>
                                        <option>System</option>
                                        <option>Jaringan</option>
                                        <option>Perangkat</option>
                                    </select> 
                                              </div>

                                              <!-- Keterangan -->
                                              <div class="form-group">
                                                <label for="message-text" class="col-form-label">Keterangan</label>
                                                <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Masukan Keterangan"></textarea>
                                              </div>

                                    
                                            <!-- Lokasi -->
                                    <select id="tempat" class="form-control mt-4" name="tempat">
                                    <option selected>Masukan Lokasi </option>
                                        <option>Pondok Kacang</option>
                                        <option>Meruya</option>
                                        <option>Cikande</option>
                                    </select> 

                                  <div class="form-group mt-4">
                                    <label for="exampleFormControlFile1">Masukan Gambar</label>
                                    <input type="file" name="image" class="form-control-file" id="image">
                                  </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save</button>
                              </div>       
                          </div>
                      </div>
                    </form>
                   </div>
                </div>

                      <div class="container col-sm-3 ml-lg-2">
                        <input class="form-control fas fa-search" id="myInput" type="text" placeholder="Search..">
                      </div>
                  <br>
                  <br>
                      <tr>
                        <th>#</th>
                        <th>Kategory</th>
                        <th>Keterangan</th>
                        <th>Tingkat Kesulitan</th>
                        <th>Tempat</th>
                        <th>Status</th>
                        <!-- <th>Konfirmasi</th> -->
                        <th>Tanggal</th>
                        <th style="width: 150px;">Action</th>
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

                        


                        <!-- <?php if($Ticket->status_ticket == "Direspon"): ?>
                        <td><a href="/tickets/status/<?php echo e($Ticket->id); ?>/Selesai" class="btn btn-primary" onclick="return confirm('Selesaikan laporan?')"><?php echo e($Ticket->status_ticket); ?></a></td>

                        <?php endif; ?>
                        <?php if($Ticket->status_ticket == "Selesai"): ?>
                        <td><a class="btn btn-success"><?php echo e($Ticket->status_ticket); ?></a></td>

                        <?php endif; ?>
                          -->
                        <!-- <td><?php echo e($Ticket->konfirmasi); ?></td> -->
                        <td><?php echo e($Ticket->created_at); ?></td>
                        <td>
                          <ul class="table-action">
                            <!-- <li><a href="/tickets/edit/<?php echo e($Ticket->id); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a></li> -->
                            <li><a href="<?php echo e(url('delete/'.$Ticket->id)); ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus ticket?')"><i class="fa fa-trash" ></i> Delete</a></li>
                            <li><a href="/tickets/detail/<?php echo e($Ticket->id); ?>" class="btn btn-success"><i class="fa fa-eye"></i> Detail</a></li>
                          </ul>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
            </div>
      </div>

      <script>
$(data).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Helpdesk\resources\views//Ticket/index.blade.php ENDPATH**/ ?>