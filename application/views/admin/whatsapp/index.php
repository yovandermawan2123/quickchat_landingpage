
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Whatsapp</h1>
                    </div>
                    <hr>
              
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                 
                        <div class="card-body">
                           
                        <div class="row">
                  <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                          <label  class="form-label">ID Device</label>
                          <input type="text" class="form-control id_device"readonly value="<?= $device_id; ?>"  >
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Nama Device</label>
                          <input type="text" class="form-control name_device"  required value="" >
                        </div>
                        <div class="mb-3">
                          <label class="form-label">No Whatsapp</label>
                          <input type="text" class="form-control no_device"  readonly>
                        </div>
                        <div class="mb-3">
                          <label class="form-label d-block">Token API</label>
                          
                          <input type="text" class="form-control d-inline token_api me-2" id="token_api"  readonly style="width: 100%;" value="<?= $token; ?>">
                          <!-- <button type="button" class="btn btn-secondary d-inline me-1 " ><i class="fa-regular fa-copy"></i></button>
                          <button type="button" class="btn btn-primary d-inline " ><i class="fa-solid fa-arrows-rotate"></i></button> -->
                        </div>
            
                        <button class="btn btn-success" style="float:right;" id="save_device">Save Device</button>
                    </form>
            
         
                  </div>
            
                  <div class="col-md-6">
              
                    <div class="box-qr text-center py-2 border " style="margin-top: 10px;
                    height: 285px;">
                        <img src="" style="width: 250px;" alt="" id="qr_image">


                        <div class="bg-success alert-connection"  style="padding: 15px; margin-top:80px; display:none; ">
                            <h4 class="text-white text-center"><strong>Connected</strong></h4>
                        </div>
                        <div class="bg-danger alert-disconnect"  style="padding: 15px; margin-top:80px; display:none;">
                            <h4 class="text-white text-center"><strong>Disconnected</strong></h4>
                        </div>


                    </div>
            
                    <div class="mt-5">
                        <button class="btn btn-primary" id="generateQR">Generate QR</button>
                    </div>
                    
                  
            
                  </div>
            
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

    <script src="<?php echo base_url('dashboard_assets/vendor/jquery/jquery.min.js')  ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
    var url_endpoint = '<?= $endpoint; ?>';
    var Device_id = $('.id_device').val();
    
    $(document).ready(function() {
        // $('.alert-connection').show();
        // $('.alert-disconnect').hide();
        

        //CHECK STATUS CONNECTED OR NOT
        $.ajax({
            url : url_endpoint + "/api/sessions/status/" + Device_id,
            type: "GET",
            success: function(data, textStatus, jqXHR)
            {
                console.log(data);
                if (data.success == true) {
                    $('.alert-connection').show();
                    $('.no_device').val(data.data.device_number);
                    // $('#generateQR').prop('disabled', true);
                } 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                

                $('.alert-disconnect').show();



            }
        });

        //Get Akun with token
        $.ajax({
            url : url_endpoint + "/api/devices/get-selected/" + Device_id,
            type: "GET",
            success: function(data, textStatus, jqXHR)
            {
                //Button Save Device
                $('#save_device').prop('disabled', true);

                // Input Form
                $('.name_device').val(data.name)
                // $('.no_device').val(data.no_telephone)
                $('.token_api').val(data.token_api)

                // if (data.status == 'Connected') {
                //     $('.alert-connection').show();
                //     $('#generateQR').prop('disabled', true);
        
                // } 
        

                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                

                $.ajax({
                    url : url_endpoint + "/api/devices/generatetoken/" + Device_id,
                    type: "GET",
                    success: function(data, textStatus, jqXHR)
                    {
                        // console.log(data)
                        // $('#qr_image').attr('src', data.data.qr);
                        $('.token_api').val(data)
                    
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                
                    }
                });



            }
        });
    });

    $('#save_device').click(function(){
        $.ajax({
            url : url_endpoint + "/api/devices/add",
            type: "POST",
            data : {
                id: $('.id_device').val(),
                parent_id: '',
                name: $('.name_device').val(),
                no_telephone: $('.no_device').val(),
                status: 'Connected',
                // id: $('.id_device').val(),
                active: 1,
                token_api: $('.token_api').val()
                
            },
            success: function(data, textStatus, jqXHR)
            {
                console.log(data)
                // $('#qr_image').attr('src', data.data.qr);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
        
            }
        });
    });
    
    //Button Generate QR
    $('#generateQR').click(function(){

        //Di cek status terlebih dahulu
        $.ajax({
            url : url_endpoint + "/api/sessions/status/" + Device_id,
            type: "GET",
            success: function(data, textStatus, jqXHR)
            {
                console.log(data);
                if (data.success == true) {
                   
                    swal("Gagal generate QR!", "session anda masih tertaut dalam Whatsapp Mobile, silahkan hapus tautan untuk melakukan scan terbaru", "error");
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                

                $.ajax({
                    url : url_endpoint + "/api/sessions/add",
                    type: "POST",
                    data : {
                        id: $('.id_device').val(),
                        isLegacy: false
                    },
                    success: function(data, textStatus, jqXHR)
                    {
                        // console.log(data.data.qr)
                        $('#qr_image').attr('src', data.data.qr);
                        $('.alert-disconnect').hide();
                        $('.alert-connection').hide();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        console.log(error);
                    }
                });





            }
        });
       
    });
    </script>