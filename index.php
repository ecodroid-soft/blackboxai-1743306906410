<?php
require_once 'functions.php';
include 'header.php';
?>

<div class="hero-section text-center">
    <div class="container">
        <h1>Welcome to <?php echo SITE_NAME; ?></h1>
        <p class="lead">Connect with trusted service providers or offer your services to others.</p>
        <?php if (!is_logged_in()): ?>
            <div class="mt-4">
                <a href="register.php" class="btn btn-primary btn-lg me-3">Get Started</a>
                <a href="login.php" class="btn btn-outline-light btn-lg">Login</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="container">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card feature-card h-100">
                <div class="card-body text-center">
                    <i class="fas fa-user-shield fa-3x mb-3 feature-icon"></i>
                    <h3 class="card-title h4">Trusted Providers</h3>
                    <p class="card-text">Connect with verified and trusted service providers in your area.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card feature-card h-100">
                <div class="card-body text-center">
                    <i class="fas fa-hand-holding-usd fa-3x mb-3 feature-icon"></i>
                    <h3 class="card-title h4">Best Value</h3>
                    <p class="card-text">Get competitive prices and quality service from our providers.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card feature-card h-100">
                <div class="card-body text-center">
                    <i class="fas fa-clock fa-3x mb-3 feature-icon"></i>
                    <h3 class="card-title h4">Quick & Easy</h3>
                    <p class="card-text">Book services quickly and easily through our platform.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h2 class="mb-4">Why Choose Us?</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-check-circle fa-2x mb-3 feature-icon"></i>
                        <h4 class="card-title h5">Verified Providers</h4>
                        <p class="card-text">All our service providers are thoroughly vetted.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-star fa-2x mb-3 feature-icon"></i>
                        <h4 class="card-title h5">Quality Service</h4>
                        <p class="card-text">Guaranteed satisfaction with every service.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-lock fa-2x mb-3 feature-icon"></i>
                        <h4 class="card-title h5">Secure Platform</h4>
                        <p class="card-text">Your data and transactions are always protected.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-headset fa-2x mb-3 feature-icon"></i>
                        <h4 class="card-title h5">24/7 Support</h4>
                        <p class="card-text">Our support team is always here to help.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>