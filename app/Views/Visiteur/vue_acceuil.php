<div class="accueil-section">
    <h1 class="text-center">Cuisine Marais Creation</h1>

    <div id="carouselExample" class="carousel slide d-block w-50 mx-auto mb-5">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/images/cuisineAcceuil3.jpg') ?>"
                     class="d-block w-100 carousel-img">
            </div>

            <div class="carousel-item">
                <img src="<?= base_url('assets/images/cuisineAcceuil2.jpg') ?>"
                     class="d-block w-100 carousel-img">
            </div>

            <div class="carousel-item">
                <img src="<?= base_url('assets/images/cuisineAcceuil.jpg') ?>"
                     class="d-block w-100 carousel-img">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row">
        <div class="col-2"></div>
        <div class="text-center col-8">
            <h2 class="mb-4">De l'authenticité grâce à des aménagements sur mesure</h2>
            <b>Cuisines Marais Création c'est le savoir faire à la Française grâce à notre distributeur vendéen qui conçoit et fabrique nos meubles sur mesure. Nous avons à cœur de personnalisé chacun de vos projets en collaboration avec nos artisans pour faire de votre aménagement un lieu unique.</b>
            <h2 class="mt-5 mb-4">Découvrez nos collections...</h2>    
        </div>
        <div class="col-2"></div>
    </div>

    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="text-center col-4">
            <div class="collection-card">
                <a href="<?php echo site_url('nos-cuisine') ?>">
                    <img src="<?= base_url('assets/images/cuisineAcceuil4.jpg') ?>" class="d-block w-100 carousel-img" alt="Nos cuisines">
                </a>
            </div>
            <div class="collection-label">nos cuisines</div>
        </div>
        <div class="text-center col-4">
            <div class="collection-card">
                <a href="<?php echo site_url('nos-salles-de-bains') ?>">
                    <img src="<?= base_url('assets/images/sallesDeBainsAcceuil.jpg') ?>" class="d-block w-100 carousel-img" alt="Nos salles de bains">
                </a>
            </div>
            <div class="collection-label">nos salles de bains</div>
        </div>
        <div class="col-2"></div>
    </div>

    <div class="mt-5 pt-4">
        <div id="avisCarousel" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $active = true; ?>
                <?php foreach ($reviews as $review): ?>
                    <div class="carousel-item <?= $active ? 'active' : '' ?>">
                        <div class="avis-card">
                            <div class="card-body text-center p-4">
                                <h5 class="card-title">
                                    <?= esc($review['author_name']) ?>
                                </h5>

                                <p class="text-warning fs-5">
                                    <?= str_repeat('★', $review['rating']) ?>
                                </p>

                                <p class="card-text">
                                    <?= esc($review['text']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php $active = false; ?>
                <?php endforeach; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#avisCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#avisCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
            </button>
        </div>
    </div>
</div>
