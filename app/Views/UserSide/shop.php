<?= $this->extend('UserSide/base'); ?>

<?= $this->section('content'); ?>
    <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <!-- SHOP SIDEBAR-->
              <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">Categories</h5>
                <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase fw-bold">Fashion &amp; Acc</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                  <li class="mb-2"><a class="reset-anchor" href="#!">Women's T-Shirts</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Men's T-Shirts</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Dresses</a></li>
        
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">Health &amp; Beauty</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                  <li class="mb-2"><a class="reset-anchor" href="#!">Shavers</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">bags</a></li>
         
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">Electronics</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                  <li class="mb-2"><a class="reset-anchor" href="#!">Electronics</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">USB Flash drives</a></li>
           
                </ul>
              </div>
         <!-- SHOP LISTING-->
         <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                  <div class="col-lg-6">
                    <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                    </ul>
                  </div>
                </div> 
                <div class="row">
                  <!-- PRODUCT-->
                  
                  <?php foreach ($products as $product) : ?>
                    <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg- "></div><a class="d-block" href="/UserSide/details/<?= $product['id']; ?>"><img class="img-fluid w-100 " src="/public/uploads/<?= $product['image'] ?>" alt="..."></a>
                        <div class="product-overlay">
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="/UserSide/details/<?= $product['id']; ?>"><?= $product['product_name'] ?></a></h6>
                      <p class="small text-muted">$<?= $product['price'] ?></p>
                    </div>
                  </div>
                  <?php endforeach; ?>
                  <!-- PRODUCT-->
                  
                <!-- PAGINATION-->
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                    <li class="page-item mx-1"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item mx-1 active"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item ms-1"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
      </div>
      
      <?= $this->endSection(); ?>
