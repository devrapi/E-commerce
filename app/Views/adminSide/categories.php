<?= $this->extend('adminSide/base') ?>

<?= $this->section('content'); ?>
            <div class="container align-items-center justify-content-center ">
                <form action="/admin/dashboard/categories/add" method="post">
                <?php if(!empty(session()->getFlashdata('error'))): ?>
                    <div class=" alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
                <?php if(!empty(session()->getFlashdata('success'))): ?>
                    <div class=" alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                        <input type="text" class="form-control"  placeholder="Add Category" name="categoryname" required>
                     </div>
                   <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <input class="form-control" placeholder="Add Description"  rows="2" name="description"></input>
               </div>
               <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
               </div>
               </form>

            </div>
<?= $this->endSection(); ?>
                