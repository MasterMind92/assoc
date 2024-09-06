<nav class="navbar navbar-expand-xl navbar-light">
    <a href="<?php echo base_url();?>" class="navbar-brand" style="background: #ffff;">
        <img src="<?php echo base_url();?>assets/img/adse_logo.png" id="logo" alt="logo_association">
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
                    <a  id="dropdown-1" class="nav-link dropdown-toggle" href="<?php echo base_url();?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Présentation</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-1">
                        <a class="dropdown-item <?php if($page == "qui-sommes-nous") echo "active";?> " href="<?php echo base_url();?>qui-sommes-nous">Qui sommes-nous ?</a>
                        <a class="dropdown-item <?php if($page == "mot-du-president") echo "active";?> " href="<?php echo base_url();?>mot-du-president">Mot du Président</a>
                        <a class="dropdown-item <?php if($page == "bureau-executif") echo "active";?> " href="<?php echo base_url();?>bureau-executif">Le bureau exécutif</a>
                        <a class="dropdown-item <?php if($page == "membres-d-honneur") echo "active";?> " href="<?php echo base_url();?>membres-d-honneur">Les membres d'honneur</a>
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
                <!-- <a class="nav-link" href="<?php #echo base_url();?>">Archives</a> -->
                <div class="dropdown">
                    <a  id="dropdown-3" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Archives</a>
                    <!-- <button  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Text</button> -->
                    <div class="dropdown-menu" aria-labelledby="dropdown-3">
                        <a class="dropdown-item" href="<?php echo base_url();?>assets/docs/adse-statuts.pdf" download title="Télécharger les statuts de l'association">Status</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>assets/docs/adse-reglement-interieur.pdf" download title="Télécharger le règlement intérieur" >Calendrier</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item text-center">
                <a class="nav-link" href="<?php echo base_url();?>contact">Contact</a>
            </li>
            <li class="nav-item text-center">
                <!-- <a class="donate d-block d-lg-none d-xl-block disabled"  id="don" href="<?php echo base_url();?>faites-un-don" role="button">Faites un don</a> -->
                <!-- <a class="donate d-block d-lg-none d-xl-block disabled"  id="don" href="#" role="button">Faites un don</a> -->

                <!-- <button class="donate" id="don" type="" name=""></button> -->
            </li>
        </ul>
    </div>
</nav>