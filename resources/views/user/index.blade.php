<title>Users</title>
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
                      @foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->nama}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->divisi}}</td>
                        <td>{{$user->status}}</td>
                        <td>
                          <ul class="table-action">
                            <li><a href="/user/edit/{{$user->id}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a></li>
                            <li><a href="{{ url('destroy/'.$user->id)}}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i> Delete</a></li>
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
  </tbody>  
@endsection