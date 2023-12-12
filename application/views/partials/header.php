<header class="wrapper">
        <div id="navbar" class="navbar">
            <img src="<?php echo base_url();?>assets/img/logo.png" id="logo" alt="logo_association">
            <nav>
                <a href="<?php echo base_url();?>a-propos">A Propos</a>
                <a href="<?php echo base_url();?>contact">Contact</a>
                <a href="<?php echo base_url();?>inscription">Inscription</a>
                <!--le bouton qui est dans le menu-->
                <button class="donate" id="don" type="" name="">DONATE NOW!</button>
            </nav>
        </div>

        <section class="slide_ngo">
            <!--la div diapo qui contient le slide elle a plusieurs div enfants qui comprennent chaque image et texte associé-->
            <div class="diapo" >
                <!--la div qui comprend touutes les div des images sans les fleches de navigation-->
                <div class="elements">
                    <!--a ce niveau l'explication se fera une seule fois car les autres div des slide 
                    ont la meme disposition elle est comprise de l'image et d'une div de class captio qui comprend 
                    le texte afferant a chque image et un bouton -->
                    <div class="element">
                        <img src="<?php echo base_url();?>assets/slides/s1.jpg" alt="stade ado ">
                        <div class="caption" id="fondu">
                            <h1>lorem ipsummmmmmmmmmmmm</h1>
                            <br>
                            <h2>association</h2>
                            <br>
                            <button type="" name="">become parent</button>
                        </div>
                    </div>
                    <div class="element">
                        <img src="<?php echo base_url();?>assets/slides/s2.jpg" alt="stade bouake ">
                        <div class="caption" id="fondu">
                            <h1>lorem ipsummmmmmmmmmmmm</h1>
                            <br>
                            <h2>association</h2>
                            <br>
                            <button type="" name="">become parent</button>
                        </div>
                    </div>
                    <div class="element">
                        <img src="<?php echo base_url();?>assets/slides/s3.jpg" alt="stade korhogo ">
                        <div class="caption" id="fondu">
                            <h1>lorem ipsummmmmmmmmmmmm</h1>
                            <br>
                            <h2>association</h2>
                            <br>
                            <button type="" name="">become parent</button>
                        </div>
                    </div>
                    <div class="element">
                        <img src="<?php echo base_url();?>assets/slides/s4.jpg"  height="" alt="stade sp ">
                        <div class="caption" id="fondu">
                            <h1>lorem ipsummmmmmmmmmmmm</h1>
                            <br>
                            <h2>association</h2>
                            <br>
                            <button type="" name="">become parent</button>
                        </div>
                    </div> 
                </div>
                <!--fleches pour changer les images-->
                <i id="nav-gauche" class="las la-chevron-left"></i>
                <i id="nav-droite" class="las la-chevron-right"></i>
            </div>
            <!--cette div contient les icones cliquable positionée sur le slide-->
            <div class="don_categorie">
                <a href="">
                    <div class="don" style="background-color: rgba(128, 0, 128, 0.6);">
                        <div><i class="fa fa-user fz-32"></i></div>
                        <h3 class="pt-3">Titre Encart</h3>
                    </div>
                </a>
                <a href="">
                    <div class="volontaire" style=" background-color: rgba(255, 192, 203, 0.6);">
                        <div><i class="fa fa-user fz-32"></i></div>
                        <h3 class="pt-3">Titre Encart</h3>
                    </div>
                </a>
                <a href="">
                    <div class="sponsor" style="background-color: rgba(255, 165, 0, 0.6);">
                        <div><i class="fa fa-user fz-32"></i></div>
                        <h3 class="pt-3">Titre Encart</h3>
                    </div>
                </a>
                <a href="">
                    <div class="foster" style="background-color: rgba(255, 255, 0, 0.6);">
                        <div><i class="fa fa-user fz-32"></i></div>
                        <h3 class="pt-3">Titre Encart</h3>
                    </div>
                </a>
            </div>
        </section>

        <!--  STRUCTURE AFFAIRANT AU <?php echo base_url();?>assets/SLIDESHOW -->
        <div id="landing-slider" class="carousel slide" data-ride="carousel">
            <!-- INDICATEURS -->
            <ol class="carousel-indicators">
                <li class="active" data-target="#landing-slider" data-slide-to="0" aria-current="location"></li>
                <li data-target="#landing-slider" data-slide-to="1"></li>
            </ol>
            <!-- DIFFERENTS ELEMENTS DU SLIDE -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Title</h5>
                        <p>Text</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Title</h5>
                        <p>Text</p>
                    </div>
                </div>
            </div>

            <!-- COMMANDES DU SLIDE -->
            <a class="carousel-control-prev" href="#landing-slider" data-slide="prev" role="button">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#landing-slider" data-slide="next" role="button">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>