<?php require_once 'controllers/inscriptionController.php' ?>
<?php require_once 'assets/Template/Header.php'?>

<section class="mb-4 mx-auto">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Contactez-nous</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">
Avez-vous des questions? N'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous dans les heures qui suivent pour vous aider.</p>

    <div class="row">

        <div class="col-md-8 mb-5 mx-auto">
            <form action="contact.php" name="joinUs" onsubmit="return contact()" method="POST">

                <div class="row">

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Nom</label>
                            <input type="text" id="name" name="name" class="form-control <?= isset($formErrors['name']) ? 'is-invalid' : '' ?>" value="<?= @$_POST['name']?>">
                            <?php if (isset($formErrors['name'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['name'] ?></p>
                    <?php } ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="email" class="">Adresse email</label>
                            <input type="text" id="email" name="email" class="form-control <?= isset($formErrors['email']) ? 'is-invalid' : '' ?>" value="<?= @$_POST['email']?>">
                            <?php if (isset($formErrors['email'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['email'] ?></p>
                    <?php } ?>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        <label for="subject" class="">Sujet</label>
                            <input type="text" id="subject" name="subject" class="form-control <?= isset($formErrors['name']) ? 'is-invalid' : '' ?>" value="<?= @$_POST['subject']?>">
                            <?php if (isset($formErrors['name'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['name'] ?></p>
                    <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="md-form">
                        <label for="message">Message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <div class="text-center text-md-left mt-4 text-success">
            <input type="submit" value="Envoyer" id="btn" class="mt-3 btn">
        </div>

            </form>

    </div>

</section>



<?php require_once 'assets/Template/footer.php'?>
