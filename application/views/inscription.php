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
        <!-- <h5 style="color: #f3901b;">OPEN YOUR HEART & HOME</h5>
        <br>
        <h1>Let`s Talk for Cooperation!</h1>
        <br> -->
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center" style="height:50vh">
                <div class="col-12 col-md-10 col-lg-8">
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
                    <!-- <div class="d-flex justify-content-between">
                        <a href="<?php #echo site_url('userctrl/')?> " class="btn btn-primary" type="button">Revenir aux utilisateurs</a>
                        <a href="<?php #echo site_url('userctrl/import')?> " class="btn btn-info" type="button">Importer des utilisateurs</a>
                        <a href="#" class="btn btn-primary" type="button">Text</a>
                    </div> -->

                    <?php echo form_open('welcome/inscription'); ?>
                        <legend class="text-center py-3">
                            <h5 style="color: #f3901b;">Ouvrez vos coeurs</h5>
                            <h1>Inscrivez-vous</h1>
                            <!-- <h2 class=" py-3">Contactez-nous</h2> -->
                        </legend>
                        <div class="form-group row">
                            <div class="col">
                                <label for="nom-input">Nom</label>
                                <input type="text" name="nom" id="nom-input" class="form-control"  value="" placeholder="Entrez votre nom" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                            <div class="col">
                                <label for="prenoms-input">Prénoms</label>
                                <input type="text" name="prenoms" id="prenoms-input" class="form-control" value=""  placeholder="Entrez vos prénoms" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="adresse-input">Adresse</label>
                                <input type="text" name="adresse" id="adresse-input" class="form-control" value=""  placeholder="Entrez votre adresse" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>

                            <div class="col">
                                <label for="date_nais-input">Date de naissance</label>
                                <input type="date" name="date_nais" id="date_nais-input" class="form-control" value="" max="2005-12-01"  placeholder="Date de naissance" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email-input" class="form-control" value=""  placeholder="Entrez votre e-mail" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>

                            <div class="col">
                                <label for="phone">Téléphone</label>
                                <input type="text" name="phone" id="phone-input" class="form-control" value=""  placeholder="Entrez votre téléphone" required>
                                <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-12 col-md-6">
                                <button class="btn btn-success btn-block" type="reset">Reinitialiser</button>
                            </div>
                            <div class="col-12 col-md-6">
                                <button class="btn btn-primary btn-block" type="submit">Valider</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        
    </section>
</main>

<?php $this->load->view('partials/footer')?>
<?php $this->load->view('partials/foot')?>