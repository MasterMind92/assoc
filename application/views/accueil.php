<?php $this->load->view('partials/head')?>
<?php $this->load->view('partials/header-clean')?>

<main id="main-content">

    <div class="wrapper">
        <div class="container">
            <!-- ENCART TEXTE UNIQUE -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div>
                        <h3 class="sub-heading text-center txt-bleu py-3">Créateurs de valeur depuis 2010</h3>
                        <!-- <p class="txt txt-mauve text-center fz-24">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, nostrum!
                        </p> -->
                    </div>
                </div>
            </div>

            <!-- ENCART GRAPHIQUE DOUBLE -->
            <div class="row justify-content-between  mt-5  mb-5">
                <div class="col-12 col-md-6 d-flex pb-3 pb-lg-0">
                    <div class="align-self-center">
                        <h3 class="sub-heading  txt-bleu py-3">Des projets sur-mesure</h3>
                        <p class="txt fnt-roboto fnt-w-300 fz-16">
                            Une approche inclusive qui consiste, avec l’aide des populations concernées, à définir leurs besoins et les aider à mettre
                            en place les projets qui les aideront dans leurs développement.
                        </p>
                        <a href="https://assoadse.org/realisations"><button class="btn button-theme fnt-montserrat bg-vert trans-bg-rouge" type="button" >Nos réalisations</button></a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="assets/img/enseignant.jpg" alt="" width="100%">
                </div>
            </div>

            <div class="row justify-content-between mb-5">
                <div class="col-12 col-md-6 pb-3 pb-lg-0">
                    <img src="assets/img/puit.webp" alt="" width="100%">
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <div class="align-self-center">
                        <h3 class="sub-heading  txt-jaune py-3">Aider: Notre mission</h3>
                        <p class="txt fnt-roboto fnt-w-300 fz-16">
                            Vous aussi, contribuez à rendre des vies meilleures. Devenez membre!
                        </p>
                        <a href="<?php echo base_url();?>nous-rejoindre" class="btn button-theme fnt-montserrat bg-rouge trans-bg-bleu" type="button"> Nous rejoindre</a>
                    </div>
                </div>
                
            </div>            
        </div>

    </div>
    <!-- ENCART GRAPHIQUE DONATION -->

    <div class="wrapper d-none">
        <div class="container">
            <!-- ENCART TEXTE UNIQUE -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 pb-3 pb-lg-0">
                    <div>
                        <h3 class="sub-heading text-center txt-rouge py-3">Sub Heading</h3>
                        <p class="txt txt-mauve text-center fz-24">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, nostrum!
                        </p>
                    </div>
                </div>
            </div>
            <!-- ENCART IMAGE TRANSPARENTE -->
            <div class="row">
                <div class="col-12">
                    <div id="children"></div>
                </div>
            </div>
            
            <!-- ENCART DONS -->
            <div class="row">
                <div class="col-12 px-0 pb-3 pb-lg-0">
                    <div class="d-flex bg-bleu">
                        <div id="donation-img-1" class="col-12 col-md-6 col-lg-3 px-0">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 d-flex p-4">
                            <div>
                                <h3 class="sub-heading text-white text-left py-3">Sub Heading</h3>
                                <p class="txt text-white text-left fz-18">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, nostrum!
                                </p>
                                <button class="btn button-theme fnt-montserrat bg-rouge trans-bg-bleu" type="button"> Faire un don</button>
                            </div>
                            <div id="counter" class="d-md-none">
                                <p>counter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-wrapper">
                <!-- <i id="left" class="fa fa-angle-left"></i> -->
                <ul class="custom-carousel">
                    <li class="custom-card">
                        <div class="theme-hover">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation-2.jpg" alt="">
                        </div>
                        <div class="bg-bleu p-3 w-100">
                            <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
                            <div class="d-flex justify-content-between text-white pb-3">
                                <span class="text-white">Donation</span><span class="text-white">8%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-rouge text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="pt-3 text-white">
                                <span class="text-white"> 1.500.000 FCFA restant</span>
                            </div>
                        </div>
                    </li>
                    <li class="custom-card">
                        <div class="theme-hover">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation-3.jpg" alt="">
                        </div>
                        <div class="bg-rouge p-3 w-100">
                            <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
                            <div class="d-flex justify-content-between text-white pb-3">
                                <span class="text-white">Donation</span><span class="text-white">8%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-rouge text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="pt-3 text-white">
                                <span class="text-white"> 1.500.000 FCFA restant</span>
                            </div>
                        </div>
                    </li>
                    <li class="custom-card">
                        <div class="theme-hover">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation-4.jpg" alt="">
                        </div>
                        <div class="bg-jaune p-3 w-100">
                            <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
                            <div class="d-flex justify-content-between text-white pb-3">
                                <span class="text-white">Donation</span><span class="text-white">8%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-bleu text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="pt-3 text-white">
                                <span class="text-white"> 1.500.000 FCFA restant</span>
                            </div>
                        </div>
                    </li>
                    <li class="custom-card">
                        <div class="theme-hover">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation-5.jpg" alt="">
                        </div>
                        <div class="bg-bleu p-3 w-100">
                            <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
                            <div class="d-flex justify-content-between text-white pb-3">
                                <span class="text-white">Donation</span><span class="text-white">8%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-rouge text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="pt-3 text-white">
                                <span class="text-white"> 1.500.000 FCFA restant</span>
                            </div>
                        </div>
                    </li>
                    <li class="custom-card">
                        <div class="theme-hover">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation-2.jpg" alt="">
                        </div>
                        <div class="bg-rouge p-3 w-100">
                            <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
                            <div class="d-flex justify-content-between text-white pb-3">
                                <span class="text-white">Donation</span><span class="text-white">8%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-rouge text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="pt-3 text-white">
                                <span class="text-white"> 1.500.000 FCFA restant</span>
                            </div>
                        </div>
                    </li>
                    <li class="custom-card">
                        <div class="theme-hover">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation-3.jpg" alt="">
                        </div>
                        <div class="bg-jaune p-3 w-100">
                            <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
                            <div class="d-flex justify-content-between text-white pb-3">
                                <span class="text-white">Donation</span><span class="text-white">8%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-rouge text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="pt-3 text-white">
                                <span class="text-white"> 1.500.000 FCFA restant</span>
                            </div>
                        </div>
                    </li>
                    <li class="custom-card">
                        <div class="theme-hover">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation-4.jpg" alt="">
                        </div>
                        <div class="bg-bleu p-3 w-100">
                            <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
                            <div class="d-flex justify-content-between text-white pb-3">
                                <span class="text-white">Donation</span><span class="text-white">8%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-rouge text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="pt-3 text-white">
                                <span class="text-white"> 1.500.000 FCFA restant</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- <i id="right" class="fa fa-angle-right"></i> -->
            </div>
        </div>
    </div>

    <!-- ENCART GRAPHIQUE FULL -->
    <div class="wrapper top-margin d-none">
        <div class="container-fluid bg-rouge">
            <div id="temoignage" class="row">
                <div class="col-12 d-md-none col-lg-6">

                </div>
                <div id="hero-image" class="col-12 col-lg-6">

                </div>
            </div>
            <!-- ENCART TEXTE UNIQUE -->
            <div id="impact" class="row justify-content-center">
                <div class="col-12 col-md-6 py-5">
                    <div>
                        <h3 class="sub-heading text-center text-white py-3">Sub Heading</h3>
                        <p class="txt text-white text-center fz-24">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, nostrum!
                        </p>
                    </div>
                </div>
                <div class="col-12 row justify-content-center pb-5">
                    <div class="col-12 col-md-6 col-lg-2 text-center">
                        <h2 class="text-white"><i class="fa fa-check"></i></h2>
                        <div class="text-white">Notre impact</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 text-center">
                        <h2 class="text-white"><i class="fa fa-check"></i></h2>
                        <div class="text-white">Notre impact</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 text-center">
                        <h2 class="text-white"><i class="fa fa-check"></i></h2>
                        <div class="text-white">Notre impact</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 text-center">
                        <h2 class="text-white"><i class="fa fa-check"></i></h2>
                        <div class="text-white">Notre impact</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ENCART RESUME ARTICLES -->
    <div class="wrapper" id="article">
        <div class="container">
            <!-- ENCART TEXTE UNIQUE -->
            <div class="row top-padding-1 pb-5 justify-content-center">
                <div class="col-12">
                    <div>
                        <h3 class="sub-heading text-center txt-bleu">En savoir plus</h3>
                        <!-- <p class="txt txt-mauve text-center fz-24">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, nostrum! -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/environnement/environnement-2.jpeg" alt="">
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 p-lg-0">
                            <h3 class="heading txt-vert">Environnement</h3>
                            <h4 class="sub-heading-1">Action menée</h4>
                            <p class="fz-14 fnt-roboto">
                                Participer activement à la protection de notre environnement au travers d’actions terrain (reboisement, assainissement, etc…) mais
                                aussi de formations et d’éducation civique.
                            </p>
                            <a href="<?php echo base_url();?>qui-sommes-nous#environnement">En Savoir Plus</a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/sante/sante-1.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 p-lg-0">
                            <h3 class="heading txt-rouge">Santé</h3>
                            <h4 class="sub-heading-1">Action menée</h4>
                            <p class="fz-14 fnt-roboto">
                                Faciliter l’accès à des soins de qualité
                                spécialement des les zones rurales et sensibiliser les populations sur les bonnes pratiques et
                                habitudes mais également celles à changer ou proscrire
                            </p>
                            <a href="<?php echo base_url();?>qui-sommes-nous#sante">En Savoir Plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/education/education-1.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 p-lg-0">
                            <h3 class="heading txt-jaune">Education</h3>
                            <h4 class="sub-heading-1">Action menée</h4>
                            <p class="fz-14 fnt-roboto">
                                Permettre l’accès à l ‘éducation même dans
                                les zones les plus reculées, organiser des campagnes d’alphabétisation pour la réinsertion
                                des jeunes 
                            </p>
                            <a href="<?php echo base_url();?>qui-sommes-nous#education">En Savoir Plus</a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/hydraulique/hydraulique-2.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 p-lg-0">
                            <h3 class="heading txt-bleu">Hydraulique</h3>
                            <h4 class="sub-heading-1">Action menée</h4>
                            <p class="fz-14 fnt-roboto">
                                Aider les zones enclavées ou non encore
                                desservies en eau potable via l’installation de pompes, éduquer les populations à une
                                utilisation responsable des ressources en eau potable et à la protection des nappes
                                phréatiques 
                            </p>
                            <a href="<?php echo base_url();?>qui-sommes-nous#hydraulique">En Savoir Plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 bottom-padding">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/commerce/artisanat-1.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 p-lg-0">
                            <h3 class="heading txt-orange">Commerce et Artisanat</h3>
                            <h4 class="sub-heading-1">Action menée</h4>
                            <p class="fz-14 fnt-roboto">
                                Agir en faveur de l’autonomisation des femmes, éduquer et accompagner les jeunes en autoentrepreneunariat, aider à la promotion des artisans locaux.
                            </p>
                            <a href="<?php echo base_url();?>qui-sommes-nous#artisanat">En Savoir Plus</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="newsletter" class="wrapper d-none d-md-block">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-12">3
                    <div class="form-group row justify-content-center">
                        <div class="col-auto">
                            <h1 class="text-center text-white">Souscrivez a notre newsletter</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <form class="form-inline" method="get" action="">
                        <div class="form-group row justify-content-center w-100">
                            <div class="col-12">
                                <div id="custom-input">
                                    <input class="input-background" type="text" name="" placeholder="Recipient's text" aria-label="Recipient's text" aria-describedby="my-addon">
                                    <button class="btn btn-primary" type="button">Souscrire</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('partials/footer')?>
<?php $this->load->view('partials/foot')?>