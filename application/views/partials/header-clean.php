<header id="header" class="wrapper">
<!-- style="position: absolute;width: 100%;" -->
    <div class="container-fluid">
        <?php $this->load->view('partials/menu');?>
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
            <div class="col-12 col-md-6 col-lg-3 bg-rouge py-5 text-white opacity-05">
                <a href="<?php echo base_url();?>faites-un-don" class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-heart fz-32"></i></div>
                        <h3 class="pt-3">Faites un don</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 bg-bleu py-5 text-white opacity-05">
                <a href="#" class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-home fz-32"></i></div>
                        <h3 class="pt-3">L'Orphelinat</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 bg-jaune py-5 text-white opacity-05">
                <a href="<?php echo base_url();?>nous-rejoindre" class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-pen fz-32"></i></div>
                        <h3 class="pt-3">Inscrivez-vous</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 bg-rouge py-5 text-white opacity-05">
                <a href="<?php echo base_url();?>contact" class="d-flex justify-content-center text-decoration-none">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-envelope fz-32"></i></div>
                        <h3 class="pt-3">Contactez-nous</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


