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

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

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
                                  @csrf
                                  <input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">
                                  <div class="form-group">
                                    <label for="keluhan" class="col-form-label">Kategory</label>
                                    <select id="keluhan" class="form-control" name="keluhan">
                                    <option selected>Masukan Kategory</option>
                                        <option >Jaringan</option>
                                        <option >Perangkat</option>
                                        <option >System</option>
                                    </select> 
                                              </div>
                                              <div class="form-group">
                                                <label for="message-text" class="col-form-label">Deskripsi</label>
                                                <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Masukan Deskripsi"></textarea>
                                              </div>

                                    <select id="divisi" class="form-control" name="divisi">
                                    <option selected>Divisi</option>
                                        <option >HRD</option>
                                        <option >Accounting</option>
                                        <option >Marketing</option>
                                    </select> 

                                    <select id="tempat" class="form-control mt-4" name="tempat">
                                    <option selected>Masukan Lokasi </option>
                                        <option value="Pondok Kacang">Pondok Kacang</option>
                                        <option value="Meruya">Meruya</option>
                                        <option value="Cikande">Cikande</option>
                                    </select> 

                                  <div class="form-group mt-4">
                                    <label for="exampleFormControlFile1">Masukan Gambar(Optional)</label>
                                    <input type="file" name="image" class="form-control-file" id="image">
                                  </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                              </div>       
                          </div>
                      </div>
                    </form>
                   </div>
                </div>
                <table class="display" id="myTable">
                  <thead>
                      <tr>
                        <th>#</th>
                        <th>Kategory</th>
                        <th>Deskripsi</th>
                        <th>Divisi</th>
                        <th>Tempat</th>
                        <th>Status</th>
                        <th>Tingkat Kesulitan</th>
                        <th>Tanggal</th>
                        <th style="width: 150px;">Action</th>
                      </tr>
                    </thead>
                      <tbody>
                      @foreach($tickets as $Ticket)
                      <tr>
                        <td>{{$Ticket->id}}</td>
                        <td>{{$Ticket->keluhan}}</td>
                        <td>{{$Ticket->keterangan}}</td>
                        <td>{{$Ticket->divisi}}</td>
                        <td>{{$Ticket->tempat}}</td>

                        @if ($Ticket->status_ticket == "Menunggu")
                        <td><a  class="btn btn-warning" >{{$Ticket->status_ticket}}</a></td>

                        @endif
                        @if ($Ticket->status_ticket == "Direspon")
                        <td><a  class="btn btn-primary" >{{$Ticket->status_ticket}}</a></td>

                        @endif
                        @if ($Ticket->status_ticket == "Selesai")
                        <td><a class="btn btn-success">{{$Ticket->status_ticket}}</a></td>

                        @endif
                        <td>{{$Ticket->tingkat_kesulitan}}</td>
                        <td>{{$Ticket->created_at}}</td>
                        <td>
                          <ul class="table-action">
                            <!-- <li><a href="/tickets/edit/{{$Ticket->id}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a></li> -->
                            <!-- <li><a href="{{ url('delete/'.$Ticket->id)}}" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus ticket?')"><i class="fa fa-trash" ></i> Delete</a></li> -->
                            <li><a href="/MenuClient/DetailC/{{$Ticket->id}}" class="btn btn-success"><i class="fa fa-eye"></i> Detail</a></li>
                            @if ($Ticket->image !== null)
                            <!-- <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $Ticket->id }}">
                              <i class="fa fa-image"></i> Picture
                            </button></li>   -->
                            @endif
                            
                          </ul>
                        </td>
                      </tr>
                      <!-- Button trigger modal -->


                      



                      @endforeach
                      </tbody>
                </table>
                </div>
            </div>
      </div>
    </section>
    <script></script>
    <script src="
https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js
"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> 
<script>
  let table = new DataTable('#myTable', {
    // options
});
</script>

    @endsection