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

<div id="image-secondary" class="wrapper" style="background: url('/assets/img/subscribe.jpg') scroll center center/cover; height:60vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- <img src="<?php #echo base_url();?>assets/img/subscribe.jpg"  alt="" srcset=""> -->
            </div>
        </div>
    </div>
</div>

<!-- ajouter une image d'accueil sans slide -->