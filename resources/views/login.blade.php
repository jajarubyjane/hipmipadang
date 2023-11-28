<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="/../assets/images/favicon2.png">
  <title>HIPMI Padang | Login</title>
  <link href="/../assets3/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/../assets3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/../assets3/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm mx-5" style="margin-top: 8rem; width: 30rem;">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                    <div class="text-center mb-4">
                        <h2 class="h4 text-dark font-weight-bold">HIPMI Padang | Login</h2>
                        <p class="text-muted">Silakan masuk ke akun Anda</p>
                    </div>
                  <form class="user" action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                      <div class="input-group">
                        <input type="email" class="form-control" name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                          placeholder="Masukkan Email" required>
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="background-color: black;"><i class="fas fa-envelope"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Masukkan Password"
                          required>
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="background-color: black;"><i class="fas fa-lock"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-dark btn-block">
                        <i class="fas fa-sign-in-alt"></i> Login
                      </button>
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="register.html">Buat Akun Baru</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="/../assets3/vendor/jquery/jquery.min.js"></script>
  <script src="/../assets3/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/../assets3/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="/../assets3/js/ruang-admin.min.js"></script>
</body>

</html>
