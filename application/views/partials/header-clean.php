<header id="header" class="wrapper">
<!-- style="position: absolute;width: 100%;" -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-xl navbar-light">
            <a href="<?php echo base_url();?>" class="navbar-brand">
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
                        <a class="nav-link" href="<?php echo base_url();?>">Accueil</a>
                    </li>
                    <li class="nav-item text-center">
                        <div class="dropdown">
                            <a  id="dropdown-1" class="nav-link dropdown-toggle" href="<?php echo base_url();?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Qui sommes-nous ?</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-1">
                                <a class="dropdown-item" href="<?php echo base_url();?>mot-du-president">Mot du Président</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>bureau-executif">Le bureau exécutif</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>membres-d-honneur">Les membres d'honneur</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="<?php echo base_url();?>que-faisons-nous">Que faisons nous?</a>
                    </li>
                    <li class="nav-item text-center">
                        <div class="dropdown">
                            <a  id="dropdown-2" class="nav-link dropdown-toggle" href="<?php echo base_url();?>nos-projets" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Nos Projets</a>
                            <!-- <button  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Text</button> -->
                            <div class="dropdown-menu" aria-labelledby="dropdown-2">
                                <a class="dropdown-item" href="<?php echo base_url();?>realisations">Réalisations</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>calendrier">Calendrier</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="<?php echo base_url();?>nous-rejoindre">Nous rejoindre</a>
                    </li>
                    
                    <li class="nav-item text-center">
                        <a class="nav-link" href="<?php echo base_url();?>contact">Contact</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="donate d-block d-lg-none d-xl-block" id="don" href="<?php echo base_url();?>faites-un-don" role="button">Faites un don</a>
                    <!-- <button class="donate" id="don" type="" name=""></button> -->
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
                <a href="<?php echo base_url();?>faites-un-don" class="d-flex justify-content-center">
                    <div class="opacity-1">
                        <div class="text-center"><i class="fa fa-heart fz-32"></i></div>
                        <h3 class="pt-3">Faites un don</h3>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3 bg-mauve py-5 text-white opacity-05">
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

            <div class="col-12 col-md-6 col-lg-3 bg-fuschia py-5 text-white opacity-05">
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


