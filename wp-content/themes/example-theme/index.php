<?php
get_header();
?>
    <section class="hero">
        <div class="hero-text">
            <h1>Welcome to our website</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/map.svg" alt="Hero">
    </section>
<main>
    <section class="products">
        <h2>Featured Products</h2>
        <article class="product">
            <img src="//place-hold.it/200x200?text=Product" alt="Product">
            <h3>Product 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
            <a href="#">Read More</a>
        </article>
        <article class="product">
            <img src="//place-hold.it/200x200?text=Product" alt="Product">
            <h3>Product 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
            <a href="#">Read More</a>
        </article>
        <article class="product">
            <img src="//place-hold.it/200x200?text=Product" alt="Product">
            <h3>Product 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
            <a href="#">Read More</a>
        </article>
    </section>
</main>
<?php
get_sidebar();
get_footer();
