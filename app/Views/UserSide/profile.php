<?= $this->extend('UserSide/base'); ?>

<?= $this->section('content'); ?>



<div class="container">
        <div class="row" style="margin-top: 100px;">
           
                <h1><?= $title; ?></h1>
 <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $userInfo['username'] ?></td>
      <td><?= $userInfo['first_name'] ?></td>
      <td><?= $userInfo['last_name'] ?></td>
      <td><?= $userInfo['shipping_address'] ?></td>
      <td><a href="/userSide/profile/edit" class="btn btn-primary">Edit</a></td>
    </tr>
  </tbody>
</table>
</div>
 </div>


 <div class="container">
        <div class="row" style="margin-top: 50px; margin-bottom: 100px;">
           
                <h1>Orders</h1>
 <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Order Date</th>
      <th scope="col">Total Price</th>
      <th scope="col">Order Status</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $userInfo['username'] ?></td>
      <td><?= $userInfo['first_name'] ?></td>
      <td><?= $userInfo['last_name'] ?></td>
   
     
    </tr>
  </tbody>
</table>
</div>
 </div>

<?= $this->endSection(); ?>

