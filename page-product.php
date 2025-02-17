<?php
/**
 * Template Name: Product Page
 */
get_header(); ?>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-light py-2">
        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
    </ol>
</nav>

<!-- Product Section -->
<section class="product py-5">
    <div class="container">
        <div class="row">
            <!-- Left Column - Product Image -->
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.jpg" class="img-fluid rounded shadow" alt="Product Image">
            </div>
            
            <!-- Right Column - Product Info -->
            <div class="col-md-6">
                <h1 class="display-5 font-weight-bold"><?php the_title(); ?></h1>
                <p class="lead text-muted">This is a sample description of the product. Add more details here.</p>
                <a href="#" class="btn btn-primary btn-lg mt-3">Buy Now</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
