<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Pengguna</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

  <!-- Lottie -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <style>
    body {
      position: relative;
      overflow: hidden;
      background-color: #121212;
      color: #ffffff;
    }
    .login-box {
      z-index: 1;
      position: relative;
    }
    .card {
      background-color: #1e1e2f;
      border: 1px solid #333;
    }
    .form-control {
      background-color: #2b2b3c;
      color: #fff;
      border: 1px solid #444;
    }
    .form-control:focus {
      background-color: #2b2b3c;
      color: #fff;
    }
    .input-group-text {
      background-color: #2b2b3c;
      border: 1px solid #444;
      color: #fff;
    }
    .btn-primary {
      background-color: #ff9900;
      border-color: #ff9900;
    }
    .btn-primary:hover {
      background-color: #e68a00;
      border-color: #e68a00;
    }
    .text-primary {
      color: #ffcc00 !important;
    }
  </style>
</head>

<body class="hold-transition login-page">

  <!-- Background Animation -->
  <lottie-player 
    src="https://assets10.lottiefiles.com/packages/lf20_49rdyysj.json"
    background="transparent"  
    speed="1"  
    style="position: fixed; width: 100%; height: 100%; z-index: 0;"  
    loop autoplay>
  </lottie-player>

  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="{{ url('/') }}" class="h1" style="color: #ffcc00;"><b>POS</b> UTS</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{ url('login') }}" method="post" id="form-login">
          @csrf
          <div class="input-group mb-3">
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <small id="error-username" class="error-text text-danger"></small>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <small id="error-password" class="error-text text-danger"></small>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">Remember Me</label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>                  
          </div>
          <div class="text-center mt-3">
            <a href="{{ url('register') }}" class="text-primary" style="text-decoration: underline;">Don't Have an Account ?</a>
          </div>          
        </form>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/jquery-validation/additional-methods.min.js') }}"></script>
  <script src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $(document).ready(function() {
      $("#form-login").validate({
        rules: {
          username: {
            required: true,
            minlength: 4,
            maxlength: 20
          },
          password: {
            required: true,
            minlength: 4,
            maxlength: 20
          }
        },
        submitHandler: function(form) { 
          $.ajax({
            url: form.action,
            type: form.method,
            data: $(form).serialize(),
            success: function(response) {
              if (response.status) { 
                Swal.fire({
                  icon: 'success',
                  title: 'Berhasil',
                  text: response.message
                }).then(function() {
                  window.location = response.redirect;
                });
              } else { 
                $('.error-text').text('');
                $.each(response.msgField, function(prefix, val) {
                  $('#error-' + prefix).text(val[0]);
                });
                Swal.fire({
                  icon: 'error',
                  title: 'Terjadi Kesalahan',
                  text: response.message
                });
              }
            }
          });
          return false; 
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.input-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
</body>
</html>
