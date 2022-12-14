
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Blogs</h1>
                    </div>
                    <hr>
              
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                 
                        <div class="card-body">
                        <div>
                            <a href="<?php echo base_url() . "admin/blog/create" ?>" class="btn btn-success mb-4" type="button">Tambah Data<i class="fa fa fa-plus ml-2"></i></a>
                            </div>
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th width="20%">Image</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                        <tr>
                                        <?php foreach ($blogs as $key => $blog) { ?>
                                        <tr>
                                        <td>
                                            <?php echo $key + 1 ?>
                                        </td>
                                        <td>
                                            <?php echo $blog->title ?>
                                        </td>
                                        <td>
                                            <?php echo $blog->content ?>
                                        </td>
                                        <td>
                                           <img src="<?= base_url() . "upload_files/" . $blog->image ?>" alt="" width="100px" > 
                                        </td>
                                      
                                        <td class="text-center">
                                        <a href="<?php echo base_url() . 'admin/blog/delete/' . $blog->id; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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

   
