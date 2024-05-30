<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
   
    <link rel="stylesheet" href="<?= base_url('/vendor/fontawesome-free/css/all.min.css'); ?>">
   <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css'); ?>">
   <link href="<?= base_url(''); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= base_url('/assets/css/sb-admin-2.min.css'); ?>">

</head>
<body>
    

    <!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start"  style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            The best offer <br />
            <span class="text-primary">for your business</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
            quibusdam tempora at cupiditate quis eum maiores libero
            veritatis? Dicta facilis sint aliquid ipsum atque?
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          
          <div class="card">
            
            <div class="card-body py-5 px-md-5">
            <form action="/register/save" method="post">
            <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0"><img src="<?= base_url('/assets/img/elogo.png') ?>" alt="logo" width="300px" height="100px"></span>
                  </div>
            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                <?php if(!empty(session()->getFlashdata('errors'))): ?>
                    <div class=" alert alert-danger"><?= session()->getFlashdata('errors') ?></div>
                <?php endif; ?>
                <?php if(!empty(session()->getFlashdata('success'))): ?>
                    <div class=" alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                    <input type="text" name="fname"  class="form-control" placeholder="Enter First Name" value="<?= set_value('fname') ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'fname') : '' ?></span>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                    <input type="text" name="lname"  class="form-control" placeholder="Enter Last Name" value="<?= set_value('lname') ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'lname') : '' ?></span>
                    </div>
                  </div>
                </div>

                 <!-- UserName input -->
                 <div data-mdb-input-init class="form-outline mb-4">
                 <input type="text" name="username"  class="form-control" placeholder="Enter Username"  value="<?= set_value('username') ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" name="email"  class="form-control" placeholder="Enter Email"  value="<?= set_value('email') ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                </div>

                  <!-- Address input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" name="address"  class="form-control" placeholder="Enter Address" value="<?= set_value('address') ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'address') : '' ?></span>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="password"  class="form-control" placeholder="Enter Password" value="<?= set_value('password') ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                </div>

                   <!-- Confirm Password input -->
                   <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" name="cpassword"  class="form-control" placeholder="Enter Confirm Password" value="<?= set_value('cpassword') ?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
                </div>


                <!-- Submit button -->
                <button class="btn btn-primary btn-block" type="submit">Sign up<i class="fa fa-sign-in"></i></button>
                
                  <div class="mt-4 mb-4"><a href="/login">I already have an account, login now</a></div>
                

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

</body>
</html>