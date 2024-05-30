<?= $this->extend('adminSide/base') ?>


<?= $this->section('content'); ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Product Management</h1>
                    <br>
                    <a href="/admin/dashboard/product/add" class="btn btn-primary ">Add Product</i></a>
                   <Br></Br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Client Tables</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Image</th>
                                            <th>Category name</th>
                                            <th>Edit User</th>
                                            <th>Delete User</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Product Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Image</th>
                                            <th>Category name</th>
                                            <th>Edit User</th>
                                            <th>Delete User</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($products as $product) : ?>
                                        <tr>
                                            <td><?= $product['product_name'] ?></td>
                                            <td><?= $product['description'] ?></td>
                                            <td><?= $product['price'] ?></td>
                                            <td><?= $product['stock'] ?></td>
                                            <td><img src="/public/uploads/<?= $product['image'] ?>" alt="" width="100px"></td>
                                            <td><?= $product['category_name'] ?></td>
                                            <td><a href="#" class="btn btn-primary ">Edit</i></a></td>
                                            <td><a href="#" class="btn btn-danger ">Delete</i></a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
    

<?= $this->endSection(); ?>