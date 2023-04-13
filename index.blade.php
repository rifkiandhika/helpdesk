<title>Ticket</title>
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

                    <!-- Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah Ticket +</button>

                     
                       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                        <form action="/insert_data" method="POST" enctype="multipart/form-data">
                          @Csrf
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Ticket</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Keluhan</label>
                                    <input type="text" class="form-control" id="keluhan">
                                  </div>
                                  <div class="form-group">
                                    <label for="message-text" class="col-form-label">Keterangan</label>
                                    <textarea class="form-control" id="keterangan"></textarea>
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
                       
                    

                    <br>
                    <br>
                      <tr>
                        <th>No</th>
                        <th>Antrian</th>
                        <th>Keluhan</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Konfirmasi</th>
                        <th style="width: 150px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tickets as $Ticket)
                      <tr>
                        <td>{{$Ticket->id}}</td>
                        <td>{{$Ticket->no_ticket}}</td>
                        <td>{{$Ticket->keluhan}}</td>
                        <td>{{$Ticket->keterangan}}</td>
                        <td>{{$Ticket->status_ticket}}</td>
                        <td>{{$Ticket->konfirmasi}}</td>
                        <td>
                          <ul class="table-action">
                            <li><a href="/users/edit/{{$Ticket->id}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a></li>
                            <li><a href="/users/delete/{{$Ticket->id}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></li>
                            <li><a href="/users/detail/{{$Ticket->id}}" class="btn btn-success"><i class="fa fa-eye"></i> Detail</a></li>
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