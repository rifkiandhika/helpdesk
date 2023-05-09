<title>Tambah Ticket</title>
@extends("client")
@section("css")
<style>
  /* .btn{
    color: white;
  } */

</style>
@endsection
@section("content")
<!-- Content Header (Page header) -->

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ticket</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Karyawan">Home</a></li>
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

                    <!-- Modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" >
                      Tambah Ticket +
                    </button>

                     <!-- form tambah tiket -->
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
                         @csrf
                         <!-- keluhan -->
                         <div class="form-group">
                           <select id="keluhan" class="form-control" name="keluhan">
                         <option selected>Kategory Masalah</option>
                            <option>Jaringan</option>
                            <option>System</option>
                            <option>Perangkat</option>
                         </select>
                         </div>
                         <!-- keterangan -->
                         <div class="form-group">
                           <label for="message-text" class="col-form-label">Keterangan</label>
                           <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Masukan Keterangan"></textarea>
                         </div>
                         
                         
                         <!-- Tempat Lokasi -->
                         <select id="tempat" class="form-control mt-4" name="tempat">
                         <option selected>Masukan Lokasi</option>
                            <option>Pondok Kacang</option>
                            <option>Meruya</option>
                            <option>Cikande</option>
                            <option>Gudang Utama</option>
                            <option>Gudang KT</option>
                            <option>Gudang Cikande</option>
                            <option>Gudang Dadab</option>
                            <option>Pabrik Terakota</option>
                         </select>
                            
                         <!-- input gambar -->
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
<hr>
                  <form action="">
                      @csrf
                      <div class="row mb-3">
                        <br>
                      <!-- Filter Kategory -->
                        <div class="col-sm-3">
                          <label for="" class="form-label">Kategory</label>
                          <input type="keluhan" type="text" class="form-control" placeholder="Kategory" value="">
                        </div>

                        <!-- Filter Tempat -->
                        <div class="col-sm-3">
                          <label for="" class="form-label">Tempat</label>
                          <input type="tempat" type="text" class="form-control" placeholder="Tempat" value="">
                        </div>

                        <!-- Filter Departemen -->
                        <div class="col-sm-3">
                          <label for="" class="form-label">Departemen</label>
                          <input type="departemen" type="text" class="form-control" placeholder="departemen" value="">
                        </div>

                        <!-- Tombol Search -->
                        <div>
                        <button type="submit" class="btn btn-primary mt-lg-4 ml-2">Cari <i class="fas fa-search"></i></button>
                        </div>

                      </div>
                    </form>

                    <br>
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
                        <th>Tindakan Technical</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tickets as $Ticket)
                      <tr>
                        <td>{{$Ticket->id}}</td>
                        <td>{{$Ticket->keluhan}}</td>
                        <td>{{$Ticket->keterangan}}</td>
                        <td>{{$Ticket->tingkat_kesulitan}}</td>
                        <td>{{$Ticket->tempat}}</td>

                        @if ($Ticket->status_ticket == "Menunggu")
                        <td><strong class="btn btn-warning">{{$Ticket->status_ticket}}</strong></td>

                        @endif
                        @if ($Ticket->status_ticket == "Direspon")
                        <td><strong class="btn btn-primary">{{$Ticket->status_ticket}}</strong></td>

                        @endif
                        @if ($Ticket->status_ticket == "Selesai")
                        <td><a class="btn btn-success">{{$Ticket->status_ticket}}</a></td>

                        @endif
                        <!-- <td>{{$Ticket->konfirmasi}}</td> -->
                        <td>{{$Ticket->created_at}}</td>



                        <td>
                          <ul class="table-action">
                            
                          </ul>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
      </div>
    </section>
    @endsection