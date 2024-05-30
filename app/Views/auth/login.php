<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>

    <link rel="stylesheet" href="<?= base_url('/vendor/fontawesome-free/css/all.min.css'); ?>">
   <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css'); ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= base_url('/assets/css/sb-admin-2.min.css'); ?>">
  
</head>
<body>

<section class="vh-100" style="background-color: #EEF7FF;">

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="<?= base_url('/assets/img/carousel3.jpg') ?>"
                alt="login form" class="img-fluid h-100 " style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form action="/check" method="post" autocomplete="off">
              <?php if(session()->has('error')): ?>
                <div class="alert alert-danger alert-dismissible container" role="alert">
                  <?= session()->getFlashdata('error'); ?>
              </div>
            <?php endif; ?>
              <?php if(!empty(session()->getFlashdata('fail'))): ?>
                  <div class=" alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
               <?php endif; ?>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0"><img src="<?= base_url('/assets/img/elogo.png') ?>" alt="logo" width="300px" height="100px"></span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" name="email"  class="form-control" placeholder="Enter Email" value="<?= set_value('email') ?>" >
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                    <label class="form-label" for="form2Example17"></label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" name="password"  class="form-control" placeholder="Enter Password" value="<?= set_value('password') ?>">
                       <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                    <label class="form-label" for="form2Example27"></label>
                  </div>

                  <div class="pt-1 mb-4">
                  <button class="btn btn-primary btn-block" type="submit">Sign In <i class="fa fa-sign-in"></i></button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/register"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>