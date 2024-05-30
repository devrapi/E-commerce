<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Register</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="<?= base_url('/vendor/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css'); ?>">

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= base_url('/assets/css/sb-admin-2.min.css'); ?>">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="/admin/register/save" method="post">
                            <?php if(!empty(session()->getFlashdata('errors'))): ?>
                    <div class=" alert alert-danger"><?= session()->getFlashdata('errors') ?></div>
                <?php endif; ?>
                <?php if(!empty(session()->getFlashdata('success'))): ?>
                    <div class=" alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="fname"
                                            placeholder="First Name">
                                            <span class="text-danger"><?= isset($validation) ? display_error ($validation, 'fname') : '' ?></span>
                                    </div> 
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="lname"
                                            placeholder="Last Name">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'lname') : '' ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email"
                                        placeholder="Email Address">
                                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" placeholder="Password">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            name="cpassword" placeholder="Repeat Password">
                                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block"   type="submit">
                                    Register Account
                                </button>
                                <hr>
                                
                        
                            <div class="text-center">
                                <a class="small" href="/admin/login">Already have an account? Login!</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(''); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(''); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(''); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(''); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>