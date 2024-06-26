<?= $this->extend('UserSide/base'); ?>

<?= $this->section('content'); ?>


<?php if(session()->has('success')): ?>
        <div class="alert alert-danger container" role="alert">
          <?= session()->getFlashdata('success'); ?>
      </div>
    <?php endif; ?>


<div class="px-4 px-lg-0">
  <!-- For demo purpose -->
  <!-- <div class="container text-dark py-5 text-center">
    <h1 class="display-4">Bootstrap 4 shopping cart</h1>
    <p class="lead mb-0">Build a fully structred shopping cart page using Bootstrap 4. </p>
    <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white font-italic">
            <u>Bootstrapious</u></a>
    </p>
  </div> -->
  <!-- End -->


  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
    
     
          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>
           
              <tbody>
                
        <?php if(session()->get('loggedUser') ): ?>
        <?php $user = session()->get('loggedUser'); ?>
        
              
              <?php if(!empty($cartItems)): ?>
                <?php foreach($cartItems as $item): ?>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="<?= base_url('public/uploads/'.$item['image']); ?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?= $item['name']; ?></a></h5>
                        <span class="text-muted font-weight-normal font-italic d-block">category</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>$<?= $item['price']; ?></strong></td>
                  <td class="border-0 align-middle"><strong><?= $item['qty']; ?></strong></td>
                  <td class="border-0 align-middle"><a href="<?= '/UserSide/delete/cart/'.$item['id'] ?>" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="5" class="text-center">Cart is empty</td>
                  </tr>
            <?php endif; ?>
            <?php else: ?>
              <tr>
                <td colspan="5" class="text-center">You need to login first</td>
              </tr>
            <?php endif; ?>
              </tbody>
            </table>
            
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <!-- <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
          <div class="p-4">
            <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
            <div class="input-group mb-4 border rounded-pill p-2">
              <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
              <div class="input-group-append border-0">
                <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
              </div>
            </div>
          </div>
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
          <div class="p-4">
            <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
            <textarea name="" cols="30" rows="2" class="form-control"></textarea>
          </div>
        </div> -->
          <?php if(session()->get('loggedUser') ): ?>
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$<?= $total; ?></strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total items </strong><strong><?= $totalItems; ?></strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">$<?= $total - 10; ?></h5>
              </li>
            </ul><a href="/UserSide/payment" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>



<?= $this->endSection(); ?>