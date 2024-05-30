
<?= $this->extend('adminSide/base') ?>
<?= $this->section('content') ?>

                <form action="/admin/dashboard/product/save" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="container">
                    <div class="mb-3"><h1>Add Product</h1></div>
                    <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>
                    <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example" name="category" required>
                        <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['category_id']   ?>" data-category-name="<?= $category['name'] ?>">
                            <?= $category['name'] ?>
                        <?php endforeach; ?>
                        </select>

                        <label for="category" class="form-label">Sub Category</label>
                    <select class="form-select" aria-label="Default select example" name="categoryName" required>
                        <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['name']   ?>" data-category-name="<?= $category['name'] ?>">
                            <?= $category['name'] ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                            

                    <div class="mb-3">
                    <label for="productname" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="productname" placeholder="Add Product Name" required>
                   
                    </div>
                    <div class="mb-3">
                    <label for="price" class="form-label">Price </label>
                    <input type="number" class="form-control" name="price" placeholder="Product Price" required>
                  
                    </div>

                    <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Product Description" required>
                   
                    </div>
                    <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity" placeholder="Product Quantity" required>
                 
                    </div>
                    <div class="mb-3">
                    <label for="image" class="form-label">Add Image Product</label><br>
                    <input type="file" class="form control" name="image" placeholder="Product Image" required>
                  
                    </div>
                    

                        <div class="mb-3"><button type="submit" class="btn btn-primary">Add Product</button></div>
                        <a href="/admin/dashboard/product"><button class="btn btn-danger" type="button">back</button></a>
                        
                </div>
                </form>

                <?= $this->endSection() ?>