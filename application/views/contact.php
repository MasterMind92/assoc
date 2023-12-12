<?php $this->load->view('partials/head')?>
<?php $this->load->view('partials/header-2')?>

<main>
    <!--section avec map et les div enfants-->
    <section class="maps_contacts">
        <h5 style="color: #f3901b;">OPEN YOUR HEART & HOME</h5>
        <br>
        <h1>Our Location and Filial Agency!</h1>
        <br>
        <div class="maps">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15891.45579217797!2d-3.9736114!3d5.2839152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ef1915a60cb1%3A0x34b965602153577a!2sDes%20Assiettes%20et%20du%20Vin!5e0!3m2!1sfr!2sci!4v1702207405906!5m2!1sfr!2sci"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="info_contacts">
            <div class="faire_un_don" style="background-color: rgba(128, 0, 128, 0.6);">
                <h5 style="color: white;">Donate</h5>
                <br>
                <h6 style="color: azure;">Lorem ipsum is pseudo-Latin text used in web design</h6>

                <button class="" id="" type="" name="">DONATE NOW!</button>
            </div>
            <div class="envoi_mail" style=" background-color: rgba(255, 192, 203, 0.6);"></div>
            <div class="lieu" style="background-color: rgba(255, 165, 0, 0.6);"></div>
            <div class="contact" style="background-color: rgba(255, 255, 0, 0.6);"></div>
        </div>
        <!-- BLOC FORMULAIRE DE CONTACT -->
        <div class="wrapper container">
            <div class="row justify-content-center my-5">
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
                                <input id="input-nom" class="form-control" type="text" required name="nom" value="<?php echo set_value('nom'); ?>">
                            </div>
                            
                            <div class="col">
                                <label for="input-prenoms">Prénoms</label>
                                <input id="input-prenoms" class="form-control" type="text" required name="prenoms" value="<?php echo set_value('prenoms'); ?>">
                            </div>
                        </div>

                        <!-- SECTION NUMERO DE TELEPHONE -->
                        <div class="form-group row">
                            <div class="col">
                                <label for="input-phone">Téléphone</label>
                                <input id="input-phone" class="form-control" type="text" required name="phone" value="<?php echo set_value('phone'); ?>">
                            </div>
                            
                            <div class="col">
                                <label for="input-mail">Email</label>
                                <input id="input-mail" class="form-control" type="email" required name="email" value="<?php echo set_value('email'); ?>">
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
                                <button class="btn btn-success btn-block" type="reset">Réinitialiser</button>
                            </div>
                            <div class="col">
                                <button class="btn btn-primary btn-block" type="submit">Valider</button>
                            </div>
                        </div>
                    </form>  
                    <!-- FIN DU FORMULAIRE -->
                </div>
            </div>
        </div>

        <!-- <form>
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" required>
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" required>
            </div>
            <div>
                <label for="commentaire">Commentaire :</label>
                <textarea id="commentaire"></textarea>
            </div>
            <button class="colab_btn_send" type="submit">send message</button>
        </form> -->
    </section>
</main>

<?php $this->load->view('partials/footer')?>
<?php $this->load->view('partials/foot')?>