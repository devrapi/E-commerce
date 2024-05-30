<?= $this->extend('UserSide/base'); ?>

<?= $this->section('content'); ?>

<?php if(session()->has('success')): ?>
        <div class="alert alert-success container" role="alert">
          <?= session()->getFlashdata('success'); ?>
      </div>
    <?php endif; ?>

    <section class="py-5">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-6">
              <!-- PRODUCT SLIDER-->
              <div class="row m-sm-0">
         
                <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0 px-xl-2">
                  <div class="swiper product-slider-thumbs">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="/public/uploads/<?= $product['image'] ?>" alt="..."></div>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="/public/uploads/<?= $product['image'] ?>" alt="..."></div>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="/public/uploads/<?= $product['image'] ?>" alt="..."></div>
                      <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="/public/uploads/<?= $product['image'] ?>" alt="..."></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-10 order-1 order-sm-2">
                  <div class="swiper product-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide h-auto"><a class="glightbox product-view" href="img/product-detail-1.023bc49d.jpg" data-gallery="gallery2" data-glightbox="Product item 1">
                        <img class="img-fluid" src="/public/uploads/<?= $product['image'] ?>" alt="..."></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- PRODUCT DETAILS-->
       
            <div class="col-lg-6 ">
              <ul class="list-inline mb-2 text-sm">
                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
              </ul>
              <h1><?php echo $product['product_name']; ?></h1>
              <p class="text-muted lead">$<?php echo $product['price']; ?></p>
              <p class="text-sm mb-4"><?php echo $product['description']; ?></p>
              <div class="row align-items-stretch mb-4">
                <div class="col-sm-6 pr-sm-0">
                  <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select"><b>Available Stock: </b><?php echo $product['stock']; ?></span>
                  </div>
                </div>
              
                <div class="col-sm-3 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="<?= base_url('UserSide/add/cart/'.$product['id']); ?>">Add to cart</a></div>
           
                 
              <ul class="list-unstyled small d-inline-block">
                <?php if($product['stock'] > 0): ?>
                <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">Quantity</strong><span class="ms-2 text-muted">1</span></li>
                <?php else: ?>
                <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">Quantity</strong><span class="ms-2 text-muted">Out of Stock</span></li>
                <?php endif; ?>
                <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ms-2" href="#!"><?php echo $product['category_name']; ?></a></li>
              </ul>
            </div>
          </div>
        </div>
       
            
     
          <!-- DETAILS TABS-->
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link text-uppercase active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
          </ul>
          <div class="tab-content mb-5" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="p-4 p-lg-5 bg-white">
                <h6 class="text-uppercase">Product description </h6>
                <p class="text-muted text-sm mb-0"><?php echo $product['description']; ?></p>
              </div>
            </div>
                    
          <!-- RELATED PRODUCTS-->
          <h2 class="h5 text-uppercase mb-4">Related products</h2>
          <div class="row">
            <!-- PRODUCT-->
     
            <div class="col-lg-3 col-sm-6">
              <div class="product text-center skel-loader">
                <div class="d-block mb-3 position-relative"><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/product-1.37a0a89c.jpg" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="#!">Add to cart</a></li>
                      <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.html">a</a></h6>
                <p class="small text-muted">$250</p>
              </div>
            </div>
      </section>

      <?= $this->endSection(); ?>
     
