<!DOCTYPE html>
<html lang="en">
            <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Register</title>

              <!-- Google Font: Source Sans Pro -->
              <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
              <!-- Font Awesome -->
              <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
              <!-- icheck bootstrap -->
              <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
              <!-- Theme style -->
              <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
            </head>
            <body class="hold-transition login-page">
            <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
              <div class="card-header text-center">
                <a href="/" class="h1"> IT Help<b>Desk</b> </a>
              </div>
              <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>
                @if(session('error'))
                <p class="alert alert-danger">{{session("error")}}</p>
                @endif
                <form action="/register_data" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}

                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nama lengkap" name="nama">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user-alt"></span>
                      </div>
                    </div>
                  </div>

                  <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>

                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Jabatan" name="divisi">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user-alt"></span>
                      </div>
                    </div>
                  </div>
                  
                  <br>
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                  <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                      
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.login-box -->

          <!-- jQuery -->
          <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
          <!-- Bootstrap 4 -->
          <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
          <!-- AdminLTE App -->
          <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
          </body>
          </html>