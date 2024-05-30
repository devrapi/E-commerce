<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jorgao</title>
    <link rel="stylesheet" href="<?= base_url('/vendor/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/vendor/fontawesome-free/css/all.min'); ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style1.css'); ?>">

   
</head>

<header class="p-3 bg-white" >
    <div class="container ">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="<?= base_url('/UserSide/index'); ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="<?= base_url('/assets/img/elogo.png'); ?>" alt="logo" width="150">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center  mb-md-0   ">
          <li><a href="<?= base_url('/UserSide/index'); ?>" class="nav-link px-2 text-dark"  style=" font-weight: bold;">Home</a></li>
          <li><a href="<?= base_url('/UserSide/shop'); ?>" class="nav-link px-2 text-dark"  style=" font-weight: bold;">Shop</a></li>
          <li><a href="#" class="nav-link px-2 text-dark"  style=" font-weight: bold;">About</a></li>
        </ul>

      
        <div class="text-end">
        <a href="<?= base_url('/UserSide/cart/items'); session()->get('loggedUser'); ?>" class="btn btn-outline-dark me-2"><i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal"></small> </a>

        
        <?php if(session()->get('loggedUser') ): ?>
          
          <a href="<?= base_url('/UserSide/profile'); ?>" class="btn btn-outline-dark me-2"><i class="fas fa-user me-1 text-gray fw-normal"></i>Account</a></li></a>
          <a href="/logout" class="btn btn-outline-danger me-2"><i class=" fas fa-sign-out-alt  text-gray"></i></i></a></li></a>
         
          <?php else: ?>  
              <a href="<?= base_url('/login'); ?>" class="btn btn-outline-dark me-2"><i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li></a> 
          <?php endif; ?>
        </div>
        
      </div>
    </div>

    </header>

            <?= $this->renderSection('content') ?>

    <footer class="bg-dark text-white  ">
        <div class="container py-4">
          <div class="row py-5">
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Customer services</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">Help &amp; Contact Us</a></li>
                <li><a class="footer-link" href="#!">Returns &amp; Refunds</a></li>
                <li><a class="footer-link" href="#!">Online Stores</a></li>
                <li><a class="footer-link" href="#!">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Company</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">What We Do</a></li>
                <li><a class="footer-link" href="#!">Available Services</a></li>
                <li><a class="footer-link" href="#!">Latest Posts</a></li>
                <li><a class="footer-link" href="#!">FAQs</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h6 class="text-uppercase mb-3">Social media</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">Twitter</a></li>
                <li><a class="footer-link" href="#!">Instagram</a></li>
                <li><a class="footer-link" href="#!">Tumblr</a></li>
                <li><a class="footer-link" href="#!">Pinterest</a></li>
              </ul>
            </div>
          </div>
          <div class="border-top pt-4 texet-center " style="border-color: #1d1d1d !important">
            <div class="row">
              <div class="col-md-6 text-center text-md-start">
                <p class="small text-white mb-0">&copy; 2024 All rights reserved.</p>
              </div>
             
            </div>
          </div>
        </div>
      </footer>

  <!-- jssssss-->
  <script src="<?= base_url('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

</body>
</html>