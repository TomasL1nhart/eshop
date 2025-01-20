<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Left Side: Social Icons (Facebook & Instagram) -->
            <div class="col-md-4 d-flex justify-content-start">
                <a href="https://www.facebook.com" target="_blank" class="text-white mr-3">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="text-white">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
            </div>
            
            <!-- Center: Logo -->
            <div class="col-md-4 text-center">
                <a href="<?php echo home_url(); ?>" class="text-white h2">Shopper</a>
            </div>
            
            <!-- Right Side: Address -->
            <div class="col-md-4 text-md-right text-center">
                <p>123 Shopping St, Suite 456<br>Cityville, 12345</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- Adding Bootstrap JS and Font Awesome icons -->
<!-- Font Awesome Icons -->
<?php wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', array(), null ); ?>

<!-- Bootstrap JS (CDN) -->
<?php wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), null, true ); ?>
<?php wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js', array('jquery'), null, true ); ?>
<?php wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery', 'popper'), null, true ); ?>

</body>
</html>
