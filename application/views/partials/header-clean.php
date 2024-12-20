<header id="header" class="wrapper">
<!-- style="position: absolute;width: 100%;" -->
    <div class="container-fluid">
        <?php $this->load->view('partials/menu',["page"=>""]);?>
    </div>
</header>

<div id="landing-carousel" class="carousel slide mb-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#landing-carousel" data-slide-to="0" aria-current="location"></li>
        <li data-target="#landing-carousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100"  src="<?php echo base_url();?>assets/img/education/education-1.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Title</h5>
                <p>Text</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url();?>assets/img/hydraulique/hydraulique-2.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Title</h5>
                <p>Text</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url();?>assets/img/sante/sante-1.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Title</h5>
                <p>Text</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100"  src="<?php echo base_url();?>assets/img/commerce/commerce-1.jpg" alt="">
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

<div id="activity-resume" class="wrapper d-none d-lg-block">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-2 bg-vert pt-2 px-2 text-white opacity-05">
                <a href="#article" class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-leaf fz-32"></i></div>
                        <h3 class="pt-3">Environnement</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-2  bg-rouge pt-2 px-2 text-white opacity-05">
                <a href="#article" class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-heartbeat fz-32"></i></div>
                        <h3 class="pt-2">Sante</h3>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-2 bg-orange pt-2 px-2 text-white opacity-05">
                <a href="#article" class="d-flex justify-content-center text-decoration-none">
                    <div class="opacity-1 text-center">
                        <div class="text-center"><i class="fa fa-dollar fz-32"></i></div>
                        <h3 class="">Commerce & Artisanat</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-2 bg-jaune pt-2 px-2 text-white opacity-05">
                <a href="#article" class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-graduation-cap fz-32"></i></div>
                        <h3 class="pt-2">Education</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-2 bg-bleu pt-2 px-2 text-white opacity-05">
                <a href="#article" class="d-flex justify-content-center text-decoration-none">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-droplet fz-32"></i></div>
                        <h3 class="pt-2">Hydraulique</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


