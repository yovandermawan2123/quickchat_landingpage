            <div class="container-xxl bg-success hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-7 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown"><?= $jumbotron->title; ?></h1>
                            <p class="text-white pb-3 animated slideInDown"><?= $jumbotron->description; ?></p>
                            <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                            <button class="btn btn-secondary-gradient py-sm-3 px-4 px-sm-5 rounded-pill animated slideInRight" id="button_trial" data-bs-toggle="modal" data-bs-target="#exampleModal">Free Trial</button>
        
                        </div>
                        <div class="col-lg-5 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                            <!-- <div class="owl-carousel screenshot-carousel px-5 py-5"> -->
                            <div class="" style="height: 500px;">
                           
                            <img class="img-fluid" src="<?php echo base_url('assets/img/quickchat_logo.png')  ?>" alt="">
                            
                                <!-- <img class="img-fluid" src="img/screenshot-1.png" alt="">
                                <img class="img-fluid" src="img/screenshot-2.png" alt="">
                                <img class="img-fluid" src="img/screenshot-3.png" alt="">
                                <img class="img-fluid" src="img/screenshot-4.png" alt="">
                                <img class="img-fluid" src="img/screenshot-5.png" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl pb-5" id="about">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Tentang</h5>
                        <h1 class="mb-4"><?= $about->title; ?></h1>
                        <p class="mb-4"><?= $about->description; ?></p>
                     
                        <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="<?php echo base_url('assets/img/about_undraw.png')  ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Features Start -->
        <div class="container-xxl py-5" id="feature">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Features</h5>
                    <h1 class="mb-5">Fitur Pada QuickChat</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-laptop text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Multi Device</h5>
                            <p class="m-0">Mendukung beberapa perangkat, dan dapat dikelola secara cepat dan mudah</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-reply text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Auto Reply</h5>
                            <p class="m-0">Dapat digunakan untuk membuat pesan balasan otomatis</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-book-open text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Dokumentasi Lengkap</h5>
                            <p class="m-0">Dokumentasi di buat dengan lengkap dan mudah dipahami</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-image text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Support Pesan Media</h5>
                            <p class="m-0">Mendukung berbagai jenis pesan media seperti gambar, video, dan dokumen untuk kebutuhan send message</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-paper-plane text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Broadcasting</h5>
                            <p class="m-0">Dapat digunakan untuk mengirim pesan lebih dari 1 kontak (Broadcasting) tanpa terkena ban</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fas fa-clock text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Pesan Terjadwal</h5>
                            <p class="m-0">Dapat digunakan untuk membuat pesan terjadwal (Schedulling Message) untuk kebutuhan seperti reminder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Screenshot Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Example</h5>
                        <h2 class="mb-4">Penggunaan untuk melakukan pengiriman personal chat dan broadcasting</h2>
                      
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                        <div class="screenshot-carousel2 ">
                            <div class="px-2 py-2">
                                <div class="mt-4 px-2 ">
                                <input type="text" class="form-control d-inline telephone_number" style="width: 80%;" id="email" placeholder="No. Telephone">
                                <button type="button" class="btn btn-sm btn-success mt-1 d-inline" id="add-number" style="float: right;"><i class="fa fa-plus"></i></button>
                                </div>

                                <div class="mt-2 px-2 py-2" id="div-number-list"  style="overflow-x: auto; overflow-y:hidden;  white-space: nowrap;">
                                <!-- <div  class="btn btn-sm btn-dark d-inline">081320650059<span><i class="fa fa-times"></i></span></div> -->
                                <!-- <div  class="btn btn-sm btn-dark d-inline">081320650059  <span><i class="fa fa-times"></i></span></div> -->
                               
                                </div>

                                <div class="mt-2 px-2">
                                    <div class="border border-1 rounded"  id="message_box" style="height: 260px; "></div>
                                </div>

                                <div class="mt-2 px-2 ">
                                <input type="text" class="form-control d-inline" style="width: 80%;" id="message_text" placeholder="Pesan">
                                <button class="btn btn-sm btn-success mt-1 d-inline " id="send-button" style="float: right; "><i class="fa fa-paper-plane"></i></button>
                                </div>
                          
                            </div>
                            <!-- <img class="img-fluid" src="img/screenshot-1.png" alt="">
                            <img class="img-fluid" src="img/screenshot-2.png" alt="">
                            <img class="img-fluid" src="img/screenshot-3.png" alt="">
                            <img class="img-fluid" src="img/screenshot-4.png" alt="">
                            <img class="img-fluid" src="img/screenshot-5.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Screenshot End -->


    


        <!-- Download Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="<?php echo base_url('assets/img/chat_undraw.png')  ?>">

                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="text-primary-gradient fw-medium">Trial</h5>
                        <h1 class="mb-4"><?= $trial->title; ?></h1>
                        <p class="mb-4"><?= $trial->description; ?></p>
                        <div class="row g-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <button type="button" class="d-flex btn bg-primary-gradient rounded py-3 px-4" id="button_trial" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <div class="mx-auto">
                                        <h5 class="text-white mb-0">Free Trial</h5>
                                    </div>
                                </button>
                            </div>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Download End -->


        <!-- Pricing Start -->
        <div class="container-xxl py-5" id="pricing">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Pricing Plan</h5>
                    <h1 class="mb-5">Paket Lisensi</h1>
                </div>
                <div class="tab-class text-center pricing wow fadeInUp" data-wow-delay="0.1s">
              
                    <div class="tab-content text-start">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1 text-center"><?= $prices[0]->plan_name; ?></h4>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp. </small><?= rupiah($prices[0]->price); ?>
                                            </h1>

                                            <div class="d-flex justify-content-between mb-3"><span>1 Device</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>API Acccess for 7 day</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>50 Message/Days</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Lifetime</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-secondary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>

                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded border">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1 text-center"><?= $prices[1]->plan_name; ?></h4>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp. </small><?= rupiah($prices[1]->price); ?>
                                            </h1>
                                           

                                            <div class="d-flex justify-content-between mb-3"><span>3 Device</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>API Acccess for 6 Month</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>200 Message/Days</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Lifetime</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>

                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1 text-center "><?= $prices[2]->plan_name; ?></h4>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp. </small><?= rupiah($prices[2]->price); ?>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>10 Device</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>API Acccess for 12 Month</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>400 Message/Days</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Lifetime</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade p-0">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Starter Plan</h4>
                                            <span>Powerful & Awesome Features</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>114.99<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Yearly</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded border">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Advance Plan</h4>
                                            <span>Powerful & Awesome Features</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>124.99<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Yearly</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Premium Plan</h4>
                                            <span>Powerful & Awesome Features</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>134.99<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Yearly</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->


        <div class="container-xxl py-5" id="review">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Blogs</h5>
                    <h1 class="mb-5">Konten Blog</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php foreach ($blogs as $key => $blog) { ?>
                   
                    <div class="testimonial-item rounded p-4" style="overflow-y:hidden; height:300px;">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="<?= base_url() . "upload_files/" . $blog->image; ?>" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                            <a class="text-info" href="<?= base_url() . "post/show/" . $blog->id; ?>" ><h4 class="mb-1"><?= limit_title($blog->title); ?></h4></a>
                              
                            </div>
                        </div>
                        <p class="mb-0"><?= limit($blog->content); ?></p>
                        <a class="text-info" href="<?= base_url() . "post/show/" . $blog->id; ?>" >Read More</a>
                    </div>
                 
                    <?php } ?>
              
                 
                    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5" id="contact">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Contact Us</h5>
                    <h1 class="mb-5">Kirim pesan kepada kami!</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">Kami akan membalas pesan anda melalui nomor yang anda masukan</a>.</p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Nama anda</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="phone" placeholder="Your Email">
                                            <label for="email">No. Telephone anda</label>
                                        </div>
                                    </div>
                              
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control"  placeholder="Leave a message here" id="message2" style="height: 150px"></textarea>
                                            <label for="message">Pesan</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button id="button_send_message" class="btn btn-primary-gradient rounded-pill py-3 px-5" type="button">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Trial Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?php echo  base_url() . 'home/store' ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" id="name_customer" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" id="email_customer" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Number Phone</label>
                <input type="text" name="phone_number" id="phone_number_device" class="form-control">
            </div>
         
         
            <button type="submit" id="trial_register" class="btn btn-primary-gradient mb-2">Submit</button>
        </form>
      </div>
     
    </div>
  </div>
</div>
        
        


    <script src="<?php echo base_url('dashboard_assets/vendor/jquery/jquery.min.js')  ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  


    <script type="text/javascript">
            var url_endpoint = '<?= $endpoint; ?>';
            var Device_id = '<?= $device_id; ?>';
            let list_number = [];
//      

        $( document ).ready(function() {
            <?php if($this->session->flashdata('success')){ ?>
                swal("Register Trial Berhasil!", "kami akan mengirimkan token melalui whatsapp anda", "success");
            <?php } ?>
        });

        $("#trial_register").on('click', function (event) {
            let number = $("#phone_number_device").val();
            let number_sub = number.substring(1);
            let number_ind = '62' + number_sub;
            $.ajax({
                url : url_endpoint + "/api/chats/send?id=" + Device_id,
                type: "POST",
                data : {
                
                    "receiver" : number_ind,
                    "message": {
                        "text":
'#Trial_Register' + '\n' +
'--------------------------------------------' + '\n' +
'Nama: ' + $("#name_customer").val() + '\n' +
'Email : ' + $("#email_customer").val() + '\n' +
'Nomer Telephone : ' + number

                    }
   
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
        })


        $("#send-button").on('click', function (event) {
        const message = $("#message_text").val();
        $("#message_text").val("");
        

            for (let i = 0; i < list_number.length; i++) {
                let number = list_number[i];
                let number_sub = number.substring(1);
                let number_ind = '62' + number_sub;
                $.ajax({
                url : url_endpoint + "/api/chats/send?id=" + Device_id,
                type: "POST",
                data : {
                
                    "receiver" : number_ind,
                    "message": {
                        "text": message
                    }
   
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
                
            }
    



        $( "#message_box" ).append('<div class="bg-success px-2 py-2 mt-2 ms-auto me-2 text-white rounded" style="width:fit-content; display:block">' + message + '</div>');
    });

        $("#button_send_message").on('click', function (event) {
        
        const message = $("#message2").val();
        $("#message2").val("");
        const name = $("#name").val();
        const phone = $("#phone").val();
        

                $.ajax({
                url : url_endpoint + "/api/chats/send?id=" + Device_id,
                type: "POST",
                data : {
                
                    "receiver" : '6289630938205',
                    "message": {
                        "text": 
'Nama: ' + name + '\n' +
'Nomer Telephone : ' + phone + '\n' +
'Isi Pesan :' + '\n' +
message
                    }
   
                },
                success: function(data, textStatus, jqXHR)
                {
                    console.log(data)
                    swal("Kirim Pesan Berhasil!", "Terima kasih atas feedbacknya", "success");
                    // $('#qr_image').attr('src', data.data.qr);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
            
                }
            });
                
    



    });


    $("#add-number").on('click', function (event) {
        const telephone_number = $(".telephone_number").val();
        list_number.push(telephone_number);
        console.log(list_number);
        $(".telephone_number").val("");

        $( "#div-number-list" ).append('<div class="btn btn-sm btn-dark d-inline me-2">' + telephone_number + '<span><i class="fa fa-times"></i></span></div>');
    });
    </script>

 

