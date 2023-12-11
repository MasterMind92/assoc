<?php $this->load->view('partials/head')?>
<?php $this->load->view('partials/header')?>

<main id="main-content">

<div class="wrapper">
        <div class="container">
            <!-- ENCART TEXTE UNIQUE -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div>
                        <h3 class="sub-heading text-center txt-fuschia py-3">Sub Heading</h3>
                        <p class="txt txt-mauve text-center fz-24">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, nostrum!
                        </p>
                    </div>
                </div>
            </div>

            <!-- ENCART GRAPHIQUE DOUBLE -->
            <div class="row justify-content-between">
                <div class="col-12 col-md-6 d-flex">
                    <div class="align-self-center">
                        <h3 class="sub-heading  txt-fuschia py-3">Sub Heading</h3>
                        <p class="txt fnt-roboto fnt-w-300 fz-16">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A amet voluptas quia aliquid sapiente, illo saepe ipsam cumque, perferendis cum labore officiis dicta beatae.
                        </p>
                        <button class="btn button-theme fnt-montserrat bg-mauve trans-bg-fuschia" type="button"> Explore</button>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div style="padding-bottom: 650px; background: url('assets/img/children1-1.jpg') no-repeat center center/contain;"></div>
                </div>
            </div>

            <div class="row justify-content-between" style="position: relative;top: -200px;">
                <div class="col-12 col-md-6">
                    <div style="padding-bottom: 650px; background: url('assets/img/children-2.jpg') no-repeat center center/contain;"></div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <div class="align-self-center">
                        <h3 class="sub-heading  txt-fuschia py-3">Sub Heading</h3>
                        <p class="txt fnt-roboto fnt-w-300 fz-16">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A amet voluptas quia aliquid sapiente, illo saepe ipsam cumque, perferendis cum labore officiis dicta beatae.
                        </p>
                        <button class="btn button-theme fnt-montserrat bg-fuschia trans-bg-mauve" type="button"> Explore</button>
                    </div>
                </div>
                
            </div>            
        </div>

    </div>
    <!-- ENCART GRAPHIQUE DONATION -->

    <div class="wrapper">
        <div class="container">
            <!-- ENCART TEXTE UNIQUE -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div>
                        <h3 class="sub-heading text-center txt-fuschia py-3">Sub Heading</h3>
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
                <div class="col-12">
                    <div class="d-flex bg-mauve">
                        <div id="donation-img-1" class="col-12 col-md-3 px-0">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-9 d-flex p-4">
                            <div>
                                <h3 class="sub-heading text-white text-left py-3">Sub Heading</h3>
                                <p class="txt text-white text-left fz-18">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, nostrum!
                                </p>
                                <button class="btn button-theme fnt-montserrat bg-fuschia trans-bg-mauve" type="button"> Faire un don</button>
                            </div>
                            <div id="counter">
                                <p>counter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="col-12 col-md-3 px-0">
                    <div>
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation-2.jpg" alt="">
                    </div>
                    <div class="bg-mauve p-3">
                        <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
                        <div class="d-flex justify-content-between text-white pb-3">
                            <span>Donation</span><span>8%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-fuschia text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="pt-3 text-white">
                            <span> 1.500.000 FCFA restant</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 px-0">
                    <div>
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation-3.jpg" alt="">
                    </div>
                    <div class="bg-fuschia p-3">
                        <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
                        <div class="d-flex justify-content-between text-white pb-3">
                            <span>Donation</span><span>8%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-jaune text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="pt-3 text-white">
                            <span> 1.500.000 FCFA restant</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 px-0">
                    <div>
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation-4.jpg" alt="">
                    </div>
                    <div class="bg-jaune p-3">
                        <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
                        <div class="d-flex justify-content-between text-white pb-3">
                            <span>Donation</span><span>8%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-mauve text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="pt-3 text-white">
                            <span> 1.500.000 FCFA restant</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 px-0">
                    <div>
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/donation-5.jpg" alt="">
                    </div>
                    <div class="bg-mauve p-3">
                        <h3 class="mb-3"> <a href="" class="text-white"> Card Title </a> </h3>
                        <div class="d-flex justify-content-between text-white pb-3">
                            <span>Donation</span><span>8%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-fuschia text-white" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="pt-3 text-white">
                            <span> 1.500.000 FCFA restant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ENCART GRAPHIQUE FULL -->
    <div class="wrapper top-margin">
        <div class="container-fluid bg-fuschia">
            <div id="temoignage" class="row">
                <div class="col-12 col-md-6">

                </div>
                <div id="hero-image" class="col-12 col-md-6">

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
                <div class="col-12 d-flex justify-content-center pb-5">
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
    <div class="wrapper">
        <div class="container">
            <!-- ENCART TEXTE UNIQUE -->
            <div class="row top-padding pb-5 justify-content-center">
                <div class="col-12">
                    <div>
                        <h3 class="sub-heading text-center txt-fuschia py-3">Sub Heading</h3>
                        <p class="txt txt-mauve text-center fz-24">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, nostrum!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 col-md-6 d-flex">
                    <div class="col">
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/blog-1.jpg" alt="">
                    </div>
                    <div class="col-12 col-lg-8 p-0">
                        <h3 class="heading">heading</h3>
                        <h4 class="sub-heading-1">subheading</h4>
                        <p class="fz-14 fnt-roboto">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <div class="col">
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/blog-1.jpg" alt="">
                    </div>
                    <div class="col-12 col-lg-8 p-0">
                        <h3 class="heading">heading</h3>
                        <h4 class="sub-heading-1">subheading</h4>
                        <p class="fz-14 fnt-roboto">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row pt-5 bottom-padding">
                <div class="col-12 col-md-6 d-flex">
                    <div class="col">
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/blog-1.jpg" alt="">
                    </div>
                    <div class="col-12 col-lg-8 p-0">
                        <h3 class="heading">heading</h3>
                        <h4 class="sub-heading-1">subheading</h4>
                        <p class="fz-14 fnt-roboto">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <div class="col">
                        <img class="img-fluid" src="<?php echo base_url();?>assets/img/blog-1.jpg" alt="">
                    </div>
                    <div class="col-12 col-lg-8 p-0">
                        <h3 class="heading">heading</h3>
                        <h4 class="sub-heading-1">subheading</h4>
                        <p class="fz-14 fnt-roboto">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="newsletter" class="wrapper">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-12">
                    <div class="form-group row justify-content-center">
                        <div class="col-auto">
                            <h1>Subscribe to our Newsletter</h1>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <form class="form-inline" method="get" action="">
                        
                        <div class="form-group row justify-content-center">
                            
                            <div class="col-auto">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="" placeholder="Recipient's text" aria-label="Recipient's text" aria-describedby="my-addon">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">Text</button>
                                        <!-- <span class="input-group-text" id="my-addon">Text</span> -->
                                    </div>
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