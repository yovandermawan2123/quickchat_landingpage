                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Blog - Add</h1>
                    </div>
                    <hr>
              
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                 
                        <div class="card-body">
                        <form method="POST" action="<?php echo  base_url() . 'admin/blog/store' ?> " enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                          
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Image</label>
                            <input name="image" type="file" class="form-control" style="padding-top: -30px;">
                         
                            </div>
                         
                          

                            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Content</label>
                            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Simpan</button>
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

   
