<title>Detail</title>

<?php $__env->startSection("css"); ?>
<style>
  /* .btn{
    color: white;
  } */


</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<!-- Content Header (Page header) -->
<form class="/Ticket/details/<?php echo e($data->id); ?>">
                      
                       <br>
                       <br>

                        <div class="invoice p-3 mb-3">
                          <div class="col-12">
                            <h4>
                              <i class="fas fa-ticket-alt"></i> IT HELPDESK
                              <small class="float-right">Date : <?php echo e($data->created_at); ?></small>
                            </h4>
                          </div>

                          <div class="row invoice-info">
                          <div class="col-sm-4 invoice-col">
                            
                          From 
                          <address>
                          <strong><?php echo e($data->users->nama); ?></strong> <br>
                          Divisi : <?php echo e($data->users->divisi); ?> <br>
                          
                        </address>
                          </div>

                          <!-- Status_ticket -->
                          <div class="col-sm-4 invoice-col">
                          <address>
                            <strong>Status Ticket : 
                              
                            <?php if($data->status_ticket == "Menunggu"): ?>
                        <td><a  class="btn btn-warning" ><?php echo e($data->status_ticket); ?></a></td>

                        <?php endif; ?>
                        <?php if($data->status_ticket == "Direspon"): ?>
                        <td><a  class="btn btn-primary" ><?php echo e($data->status_ticket); ?></a></td>

                        <?php endif; ?>
                        <?php if($data->status_ticket == "Selesai"): ?>
                        <td><a class="btn btn-success"><?php echo e($data->status_ticket); ?></a></td>

                        <?php endif; ?>
                          
                          </strong><br>
                          </address>

                          <strong> No Ticket :</strong> <br>
                        </div>

                       
                        </div>

                        <div class="row">
                        <div class="col-6">
                          <label for=""> Keluhan</label>
                          <input type="text" value="<?php echo e($data->keluhan); ?>" readonly class="form-control"> <br>
                          
                          <label for="" > Keterangan Lengkap </label>
                         <textarea readonly class="form-control" rows="6"><?php echo e($data->keterangan); ?></textarea> <br> 

                        </div>


                        <form action="/tickets/update/{$data->id}" method="post">
                        <div class="col-6">
                        <label for="">Tanggapan Dept IT</label> <br>
                        <textarea  id="" cols="80" rows="10"></textarea> <br> <br>

                        <select id="tingkat_kesulitan" class="form-control" name="tingkat_kesulitan">
                                    <option selected>Tingkat Kesulitan</option>
                                        <option value="Tinggi">Tinggi</option>
                                        <option value="Menengah">Menengah</option>
                                        <option value="Rendah">Rendah</option>
                                    </select>
                        </div>
                        </div>

                        <br>
                        <br>
                        <hr>
                        <td>
                          <ul class="table-action ml-2">
                            
                            <?php if($data->image !== null): ?>
                            <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo e($data->id); ?>">
                              <i class="fa fa-image"></i> Gambar
                            </button></li>
                            
                            <li style="margin-left: 82%;">  
                        <div>
                          <a href="/Ticket"><button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button></a>
                        </div>
                            </li>
                            <?php endif; ?>
                            
                          </ul>
                        </td>
                        </form>


                        </div>
                        
                      


                        
                      </tr>
                      <!-- Button trigger modal -->


                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal<?php echo e($data->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog" style="overflow: hidden;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5 w-100" id="exampleModalLabel">Gambar Ticket</h1>
                            </div>
                            <div class="modal-body col-lg-2">
                              <img src="<?php echo e(asset('gambarticket/'.$data->image)); ?>" style="object-fit: cover;width: 750px;height: 500px">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>


</form>





<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\helpdeskup-main\resources\views/Ticket/detail.blade.php ENDPATH**/ ?>