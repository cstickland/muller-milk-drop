<section class="hero">
<a class="hide-desktop mobile-logo" href="/"><img src="<?php echo get_template_directory_uri() . '/assets/logos/muller_milk_drop_logo_white.svg'; ?>" /></a>
    <div class="hero-image">
        <?php $image = get_field('hero_image'); ?>
        <img    
        src="<?php echo $image['url']; ?>"
        alt="<?php echo $image['alt'] ?>" 
        />
    </div>
    <div class="hero-text-content">
        <a class="hide-mobile desktop-logo" href="/"><img src="<?php echo get_template_directory_uri() . '/assets/logos/muller_milk_drop_logo.svg'; ?>" /></a>
        <div class="hero-text-content__text">
            <h1><?php the_field('hero_title'); ?></h1>
            <div class="hero-text"><?php the_field('hero_text'); ?></div>
            <form action="" class="postcode">
                <input class="postcode-check-input" type="text" placeholder="Enter Your Postcode">
                <button class="btn">
                    <div class="hide-mobile">SEARCH</div>
                    <img class="hide-desktop" src="<?php echo get_template_directory_uri() . '/assets/icons/md_search.svg'; ?>" alt ="" />
                </button>
            </form>
        </div>
    </div>
    <img class="hero-shape" src="<?php echo get_template_directory_uri() . '/assets/shapes/md_shape_2.svg'; ?>" alt ="" />
</section>
