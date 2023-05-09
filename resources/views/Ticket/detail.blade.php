<title>Detail</title>
@extends("layouts.master")
@section("css")
<style>
  /* .btn{
    color: white;
  } */

</style>
@endsection
@section("content")
<!-- Content Header (Page header) -->

                
    <br>
    <br>
        
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                              <!-- title row -->
                              <div class="row">
                                <div class="col-12">
                                  <h4>
                                    <i class="fas fa-ticket-alt"></i> IT HELPDESK
                                    <small class="float-right"></small>
                                  </h4>
                                </div>
                                <!-- /.col -->
                              </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                      <div class="col-sm-4 invoice-col">
                        From
                        <address>
                          <strong>{{Auth::user()->nama}}</strong><br>
                          Divisi : <br>
                          Jabatan : <br>
                          Email : 
                        </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        To
                        <address>
                          <strong>John Doe</strong><br>
                          795 Folsom Ave, Suite 600<br>
                          San Francisco, CA 94107<br>
                          Phone: (555) 539-1037<br>
                          Email: john.doe@example.com
                        </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        <b>Invoice #007612</b><br>
                        <br>
                        <b>Order ID:</b> 4F3S8J<br>
                        <b>Payment Due:</b> 2/22/2014<br>
                        <b>Account:</b> 968-34567
                      </div>

                        <!-- Keluhan -->
                      <div class="form-group">
                        <strong>Keluhan User/Karyawan</strong><br>
                        <label for="recipient-name" class="col-form-label"></label>
                        <input  class="form-control" readonly value="{{$data->keluhan}}" name="keluhan" id="recipient-name">
                      </div>

                      <br>
                      <br>
                      

                      <div >
                        <strong>Keterangan Lengkap</strong><br>
                        <label for="recipient-name" class="col-form-label"></label>
                        <textarea  class="form-control" readonly value="{{$data->keluhan}}" name="keluhan" id="recipient-name"></textarea>
                      </div>
                      <!-- /.col -->
                    </div>
          </div>
    




@endsection