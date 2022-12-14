<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-success" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0 " id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 sticky-top shadow-sm" id="blog_navbar">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">QuickChat</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="<?= base_url() ?>" class="nav-item nav-link ">Home</a>
                        <a href="<?= base_url() ?>" class="nav-item nav-link">About</a>
                        <a href="<?= base_url() ?>" class="nav-item nav-link">Feature</a>
                        <a href="<?= base_url() ?>" class="nav-item nav-link">Pricing</a>
                        <a href="#home" class="nav-item nav-link active">Blogs</a>
                        <a href="<?= base_url() ?>" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="<?= base_url() ?>" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Start Free Trial</a>
                </div>
            </nav>


<div class="container">

    <div class="row justify-content-center"  >

        <div class="col-md-8 " style="margin-top:100px;">
           
                <h2><?= $post_get->title; ?></h2>

              
                <img src="<?= base_url() . 'upload_files/' . $post_get->image; ?>"  class="img-fluid mt-2" >
             
                <article class="my-3 fs-5">
                    <?= $post_get->content; ?>
                </article>
         
            
            <a href="<?= base_url() ?>" class="d-block mt-3">Back to Home</a>
            
         

          
        </div>

    </div>

</div>

        </div>