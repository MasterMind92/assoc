<?php $this->load->view('partials/head')?>
<main>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row" style="height:100vh;">
                <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center">
                    <!-- TEXT COMING SOON -->
                    <div class="text-center ">
                        <h1>Site en Construction</h1>
                        <h3>Ouvrez votre coeur <i class="fa fa-heart txt-jaune"></i></h3>
                        <div><img src="<?php echo base_url();?>assets/img/adse_logo.png" id="logo" alt="logo_association"></div>
                    </div>

                    <div class="d-flex align-self-end">
                        <div><a href="" class="nav-item">Qui sommes-nous ?</a></div>
                        <div>
                            <i class="fa fa-facebook"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center bg-bleu text-white">
                    <!-- FORMULAIRE DE CONTACT -->
                    <div class="row justify-content-center my-5 w-100">
                        <div class="col-12 col-md-10">
                            <?php if( $this->session->flashdata('msg')):?>
                            <div class="alert alert-info text-center" role="alert">
                                <?php echo $this->session->flashdata('msg'); ?>
                            </div>
                            <?php endif;?>
    
                            <?php if(!empty(validation_errors())):?>
                            <div class="alert alert-warning text-center" role="alert">
                                <?php echo validation_errors(); ?>
                            </div>
                            <?php endif;?>
    
                            <!-- DEBUT DU FORMULAIRE -->
                            <form method="post" action="<?php echo site_url('Welcome/contact');?>">
    
                                <legend class="text-center py-3">
                                    <h5 style="color: #f3901b;">Ouvrez vos coeurs</h5>
                                    <h1>Contactez-nous</h1>
                                    <!-- <h2 class=" py-3">Contactez-nous</h2> -->
                                </legend>
    
                                <!-- SECTION NOM ET PRENOMS -->
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="input-nom">Nom</label>
                                        <input id="input-nom" class="form-control" type="text" required name="nom" value="">
                                    </div>
                                    
                                    <div class="col">
                                        <label for="input-prenoms">Prénoms</label>
                                        <input id="input-prenoms" class="form-control" type="text" required name="prenoms" value="">
                                    </div>
                                </div>
    
                                <!-- SECTION NUMERO DE TELEPHONE -->
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="input-phone">Téléphone</label>
                                        <input id="input-phone" class="form-control" type="text" required name="phone" value="">
                                    </div>
                                    
                                    <div class="col">
                                        <label for="input-mail">Email</label>
                                        <input id="input-mail" class="form-control" type="email" required name="email" value="">
                                    </div>
                                </div>
    
                                <!-- SECTION MESSAGE -->
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" class="form-control" name="message" rows="3"></textarea>
                                </div>
    
                                <!-- SECTION BOUTON DE VALIDATION -->
                                <div class="form-group row">
                                    <div class="col">
                                        <button class="btn btn-success btn-block btn-radius" type="reset">Réinitialiser</button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary btn-block btn-radius" type="submit">Valider</button>
                                    </div>
                                </div>
                            </form>  
                            <!-- FIN DU FORMULAIRE -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('partials/foot')?>
