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
            <img class="d-block w-100" src="<?php echo base_url();?>assets/img/pompe_a_eau.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Title</h5>
                <p>Text</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url();?>assets/img/mere_eft.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Title</h5>
                <p>Text</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url();?>assets/img/enseignant.jpg" alt="">
            <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Title</h5>
                <p>Text</p> -->
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url();?>assets/img/ramassage.jpg" alt="">
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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-2 bg-rouge pt-5 px-2 text-white opacity-05">
                <a href="#article" class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-heart fz-32"></i></div>
                        <h3 class="pt-3">Environement</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-2 bg-vert pt-5 px-2 text-white opacity-05">
                <a href="#article" class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-home fz-32"></i></div>
                        <h3 class="pt-3">Sante</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-2 bg-jaune pt-5 px-2 text-white opacity-05">
                <a href="#article" class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-pen fz-32"></i></div>
                        <h3 class="pt-3">Education</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-2 bg-rouge pt-5 px-2 text-white opacity-05">
                <a href="#article" class="d-flex justify-content-center text-decoration-none">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-water fz-32"></i></div>
                        <h3 class="pt-3">Hydraulique</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-2 bg-bleu pt-5 px-2 text-white opacity-05">
                <a href="#article" class="d-flex justify-content-center text-decoration-none">
                    <div class="opacity-1 text-center">
                        <div class="text-center"><i class="fa fa-dollar fz-32"></i></div>
                        <h3 class="">Commerce & Artisanat</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


