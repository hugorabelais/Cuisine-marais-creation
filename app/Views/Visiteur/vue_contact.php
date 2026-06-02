<div class="contact-section">
    <img src="<?= base_url('assets/images/imgContact.jpg') ?>" class="contact-image" alt="Contact">
</div>

<div class="contact-section">
    <div class="container">
        <h1 class="text-center mb-5">Nous contacter</h1>
        
        <?php if (isset($success)): ?>
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                <strong>Succès!</strong> <?= $success ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                <strong>Erreur!</strong> <?= $error ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="contact-form-container">
                    <form action="<?= site_url('contact') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="mb-4">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" required>
                        </div>
                        <div class="mb-4">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Votre prénom" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Adresse mail</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="votre.email@exemple.com" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" rows="6" class="form-control" placeholder="Votre message..." required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-contact btn-lg">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
