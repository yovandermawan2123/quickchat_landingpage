                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Setting Price - Edit</h1>
                    </div>
                    <hr>
              
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                 
                        <div class="card-body">
                        <form method="POST" action="<?php echo base_url(); ?>admin/SettingPrice/update/<?= $price_get->id; ?>">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Plan name</label>
                            <input type="text" class="form-control" name="plan_name" value="<?= $price_get->plan_name; ?>" placeholder="Plan name">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Price</label>
                            <input type="number" class="form-control" name="price" value="<?= $price_get->price; ?>" placeholder="Price">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Discount</label>
                            <input type="number" class="form-control" name="discount" value="<?= $price_get->discount; ?>" placeholder="Discount">
                            </div>
                           
                        </div>
                        
                        
                        <button type="submit" class="btn btn-success">Edit</button>
                        </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   
