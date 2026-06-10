<div class="contact-section">
    <img src="<?= base_url('assets/images/imgContact.jpg') ?>" class="contact-image" alt="Contact">
</div>

<div class="contact-section">
    <div class="container">
        <h1 class="text-center mb-2">Nous contacter</h1>
        <p class="text-center contact-subtitle mb-5">Une question ? Une demande de rendez-vous ?<br>N'hésitez pas, nous sommes à votre écoute !</p>
        
        <?php if (isset($success)): ?>
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                <strong>✓ Succès!</strong> <?= $success ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                <strong>✗ Erreur!</strong> <?= $error ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        
        <div class="row mb-5">
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

        <!-- Information Cards Section -->
<div class="row mb-5 justify-content-center text-center">
    
    <div class="col-12">
        <h2 class="mb-4">Nos coordonnées</h2>
    </div>

    <div class="col-md-6 col-lg-3 mb-4">
        <div class="info-card">
            <div class="info-icon">
                <i class="fas fa-phone"></i>
            </div>
            <h5 class="info-title">Téléphone</h5>
            <p class="info-text">06 70 26 35 08</p>
        </div>
    </div>

    <div class="col-md-6 col-lg-3 mb-4">
        <div class="info-card">
            <div class="info-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <h5 class="info-title">Email</h5>
            <p class="info-text">cmc@22590pordic.com</p>
        </div>
    </div>

    <div class="col-md-6 col-lg-3 mb-4">
        <div class="info-card">
            <div class="info-icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <h5 class="info-title">Adresse</h5>
            <p class="info-text">
                1 bis rue Pierre et Marie Curie, 22590 Pordic
            </p>
        </div>
    </div>

</div>

        <!-- Social Media Section -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="text-center social-title mb-4">Nous suivre</h2>
                <div class="social-icons">
                    <a href="https://www.facebook.com/CuisinesMaraisCreation/" target="_blank" class="social-icon facebook" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/cuisinesmaraiscreation?igshid=YmMyMTA2M2Y%3D" target="_blank" class="social-icon instagram" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Hours Section -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center mb-4">Horaires d'ouverture du showroom</h2>
                <div class="hours-container">
                    <div class="hours-grid">
                        <div class="hours-item">
                            <span class="day">Lundi</span>
                            <span class="hours">14h - 18h</span>
                        </div>
                        <div class="hours-item">
                            <span class="day">Mardi</span>
                            <span class="hours">9h30 - 12h30 | 14h - 18h</span>
                        </div>
                        <div class="hours-item">
                            <span class="day">Mercredi</span>
                            <span class="hours">9h30 - 12h30 | 14h - 18h</span>
                        </div>
                        <div class="hours-item">
                            <span class="day">Jeudi</span>
                            <span class="hours">9h30 - 12h30 | 14h - 18h</span>
                        </div>
                        <div class="hours-item">
                            <span class="day">Vendredi</span>
                            <span class="hours">9h30 - 12h30 | 14h - 18h</span>
                        </div>
                        <div class="hours-item">
                            <span class="day">Samedi</span>
                            <span class="hours">9h - 12h</span>
                        </div>
                        <div class="hours-item closed">
                            <span class="day">Dimanche</span>
                            <span class="hours">Fermé</span>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Map Section -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <h2 class="text-center mb-4">Localiser notre showroom</h2>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.134567890123!2d-3.0988!3d48.5488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480d1d1b3c4d5e6f%3A0x1a2b3c4d5e6f7g8h!2s1%20bis%20rue%20Pierre%20et%20Marie%20Curie%2C%2022590%20Pordic!5e0!3m2!1sfr!2sfr!4v1700000000000" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
