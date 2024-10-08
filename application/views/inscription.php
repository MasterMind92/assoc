<?php $this->load->view('partials/head')?>
<?php $this->load->view('partials/header-2');?>

<main>
    <div class="container">
        <div class="row justify-content-center align-items-center" >
            <div class="col-12 col-md-10 pt-5">
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
    <!--section avec map et les div enfants-->
    <section class="maps_contacts">
    <h5 style="color: #f3901b;">Ouvrez votre coeur</h5>
        <br>
        <h1>Notre Siège Social</h1>
        <br>
        <div class="maps">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15891.45579217797!2d-3.9736114!3d5.2839152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ef1915a60cb1%3A0x34b965602153577a!2sDes%20Assiettes%20et%20du%20Vin!5e0!3m2!1sfr!2sci!4v1702207405906!5m2!1sfr!2sci"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="info_contacts">
            <div class="faire_un_don" style="background-color: rgba(128, 0, 128, 0.7)">
                <span class="fz-24 text-white"><i class="fa fa-heart"></i></span>
                <div>
                    <a href="" class="text-white text-center">Faites un don</a>
                </div>
                <!-- <a class="donate" id="don" href="#" role="button">Faites un don</a> -->
            </div>
            <div class="envoi_mail bg-bleu" >
                
                <span class="fz-24 text-white"><i class="fa fa-phone"></i></span>
                <div>
                    <a href="#" class="text-white text-center">+225 07 50 50 05 04</a>
                </div>
            </div>
            <div class="lieu bg-rouge" >
                <span class="fz-24 text-white"><i class="fa fa-envelope"></i></span>
                <div>
                    <a href="mailto:" class="text-white text-center">contact@assoadse.org</a>
                </div>
            </div>
            <div class="contact bg-jaune" >
                <span class="fz-24 text-white"><i class="fa fa-map-marker"></i></span>
                <div>
                    <a href="mailto:" class="text-white text-center">Abidjan, Riviera 3</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('partials/footer')?>
<?php $this->load->view('partials/foot')?>