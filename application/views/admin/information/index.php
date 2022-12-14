
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Landing Page Info</h1>
                    </div>
                    <hr>
              
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                 
                        <div class="card-body">
                            <div>
                            <a href="<?php echo base_url() . "admin/information/create" ?>" class="btn btn-success mb-4" type="button">Tambah Data<i class="fa fa fa-plus ml-2"></i></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>title</th>
                                            <th>description</th>
                                            <th width="15%">Type</th>
                                            <th width="15%">Action</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                        <tr>
                                        <?php foreach ($informations as $key => $info) { ?>
                                        <tr>
                                        <td>
                                            <?php echo $key + 1 ?>
                                        </td>
                                        <td>
                                            <?php echo $info->title ?>
                                        </td>
                                        <td>
                                            <?php echo $info->description ?>
                                        </td>
                                        <td>
                                            <?php echo $info->type ?>
                                        </td>
                                      
                                        <td class="text-center">
                                        <a href="<?php echo base_url(). 'admin/information/edit/' . $info->id; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="<?php echo base_url() . 'admin/information/delete/' . $info->id; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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

   
