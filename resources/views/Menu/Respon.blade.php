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
            <h1 class="m-0">Menunggu Respon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Menunggu Respon</li>
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
                  <table class="table table-bordered table-striped">
                    <thead>

                    
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
                        <td><a href="/tickets/status/{{$Ticket->id}}/Proses" class="btn btn-warning" onclick="return confirm('Respon laporan?')">{{$Ticket->status_ticket}}</a></td>


                        @endif
                        @if ($Ticket->status_ticket == "Direspon")
                        <td><a href="/tickets/status/{{$Ticket->id}}/Selesai" class="btn btn-primary" onclick="return confirm('Selesaikan laporan?')">{{$Ticket->status_ticket}}</a></td>

                        @endif
                        @if ($Ticket->status_ticket == "Selesai")
                        <td><a class="btn btn-success">{{$Ticket->status_ticket}}</a></td>

                        @endif
                        <!-- <td>{{$Ticket->konfirmasi}}</td> -->
                        <td>{{$Ticket->created_at}}</td>
                        
                          
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
      </div>
    </section>
    @endsection