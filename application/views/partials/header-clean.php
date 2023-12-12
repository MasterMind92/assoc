<header id="header" class="wrapper">
<!-- style="position: absolute;width: 100%;" -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand">
                <img src="<?php echo base_url();?>assets/img/logo.png" id="logo" alt="logo_association">
            </a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="#">Item 1 <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item text-center">
                        <a class="nav-link" href="<?php echo base_url();?>a-propos">A Propos</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="<?php echo base_url();?>inscription">Inscription</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="<?php echo base_url();?>contact">Contact</a>
                    </li>
                    <li class="nav-item text-center">
                    <button class="donate" id="don" type="" name="">Faire un don</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>



<div id="landing-carousel" class="carousel slide mb-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#landing-carousel" data-slide-to="0" aria-current="location"></li>
        <li data-target="#landing-carousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url();?>assets/slides/s1.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Title</h5>
                <p>Text</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url();?>assets/slides/s4.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Title</h5>
                <p>Text</p> -->
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#landing-carousel" data-slide="prev" role="button">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#landing-carousel" data-slide="next" role="button">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="activity-resume" class="wrapper d-md-none d-lg-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3 bg-fuschia py-5 text-white opacity-05">
                <a class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-user fz-32"></i></div>
                        <h3 class="pt-3">Titre Encart</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 bg-mauve py-5 text-white opacity-05">
                <a class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-user fz-32"></i></div>
                        <h3 class="pt-3">Titre Encart</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 bg-jaune py-5 text-white opacity-05">
                <a class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-user fz-32"></i></div>
                        <h3 class="pt-3">Titre Encart</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 bg-fuschia py-5 text-white opacity-05">
                <a class="d-flex justify-content-center text-decoration-none">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-user fz-32"></i></div>
                        <h3 class="pt-3">Titre Encart</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


