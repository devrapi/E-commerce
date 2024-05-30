<?= $this->extend('UserSide/base') ?>
<?= $this->section('content') ?>

<div class="container mt-5 mb-5">
        <h1 class="text-center  myh1 ">DISCOVER LIMITED SNEAKERS WITHOUT LIMITATION</h1>
    </div>
   

      <!-- CATEGORIES SECTION-->
      <section class="pt-5 container mb-5 mt-5">
          <header class="text-center">
            <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
            <h4 class="category-heading text-uppercase mb-4">Browse our categories</h4>
          </header>
          
          <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        <div class="col position-relative">
            <a href="#" class="d-block image-container">
                <img class="img-fluid custom-img" src="<?= base_url('/assets/img/adidas.jpg'); ?>" alt="Adidas">
                <img class="logo-overlay" src="<?= base_url('/assets/img/elogo.png'); ?>" alt="Logo">
            </a>
        </div>
        <div class="col position-relative">
            <a href="#" class="d-block image-container">
                <img class="img-fluid custom-img" src="<?= base_url('/assets/img/nike.jpg'); ?>" alt="Nike">
                <img class="logo-overlay" src="<?= base_url('/assets/img/elogo.png'); ?>" alt="Logo">
            </a>
        </div>
        <div class="col position-relative">
            <a href="#" class="d-block image-container">
                <img class="img-fluid custom-img" src="<?= base_url('/assets/img/vans.jpg'); ?>" alt="Vans">
                <img class="logo-overlay" src="<?= base_url('/assets/img/elogo.png'); ?>" alt="Logo">
            </a>
        </div>
        <div class="col position-relative">
            <a href="#" class="d-block image-container">
                <img class="img-fluid custom-img" src="<?= base_url('/assets/img/converse.jpg'); ?>" alt="Converse">
                <img class="logo-overlay" src="<?= base_url('/assets/img/elogo.png'); ?>" alt="Logo">
            </a>
        </div>
    </div>
</div>

        <section class="py-5 container mb-5 mt-5">
            <div class="cover-img" style="border-style: solid; border-color: black; border-width: 2px">
              <img class="img-fluid" src="<?= base_url('/assets/img/jorgaoCover.png'); ?>" alt="">
            </div>
        </section>

        </section>
        <!-- TRENDING PRODUCTS-->
        <section class="py-5 container mb-5">
          <header>
            <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
            <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
          </header>
          <div class="row">
        <!-- PRODUCT-->
        <?php foreach ($products as $product) : ?>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 main-card">
            <div class="product text-start">
              <div class="price-div p-2 text-end">
              <p class="mb-0">$<?= $product['price'] ?></p>
              </div>
                <div class="position-relative mb-0 product-card">
                    <a class="d-block" href="/UserSide/details/<?= $product['id']; ?>">
                        <img class="img-fluid product-image" src="/public/uploads/<?= $product['image'] ?>" alt="...">
                    </a>
                </div>
                <div class="description mt-0 p-2 ">
                <h6 class="text-uppercase text-decoration-none"> 
                    <a class="reset-anchor mt-0 text-dark text-decoration-none " href="/UserSide/details/<?= $product['id']; ?>">
                        <?= $product['product_name'] ?>
                    </a>
                </h6>
                <p class="small text-muted"> <?= $product['description'] ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

              </section>
      
        <!-- SERVICES-->
        <section class="py-3 bg-light container mb-5">
          <div class="container">
            <div class="row text-center gy-3">
              <div class="col-lg-4">
                <div class="d-inline-block">
                  <div class="d-flex align-items-end">
                    <div class="text-start ms-3">
                      <h6 class="text-uppercase mb-1">Free shipping</h6>
                      <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="d-inline-block">
                  <div class="d-flex align-items-end">
                    <div class="text-start ms-3">
                      <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                      <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="d-inline-block">
                  <div class="d-flex align-items-end">
                    </svg>
                    <div class="text-start ms-3">
                      <h6 class="text-uppercase mb-1">Festivaloffers</h6>
                      <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <?= $this->endSection() ?>
        