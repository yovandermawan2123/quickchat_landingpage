
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Customers</h1>
                    </div>
                    <hr>
              
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                 
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th width="20%">Phone Number</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                        <tr>
                                        <?php foreach ($customers as $key => $cs) { ?>
                                        <tr>
                                        <td>
                                            <?php echo $key + 1 ?>
                                        </td>
                                        <td>
                                            <?php echo $cs->name ?>
                                        </td>
                                        <td>
                                            <?php echo $cs->email ?>
                                        </td>
                                        <td>
                                            <?php echo $cs->phone_number ?>
                                        </td>
                                      
                                        <td class="text-center">
                                        <a href="<?php echo base_url() . 'admin/customer/delete/' . $cs->id; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                        </tr>
                                        <?php } ?>
                                      
                                          
                                        </tr>
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

   
