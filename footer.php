
<div class="footer-wave-container"><?php echo get_template_part('/assets/shapes/md_footer_wave_mobile.svg'); ?></div>
<footer class="footer-section">
    <div>
        <div class="footer-heading-container">
            <h3 class="footer-heading"><?php the_field('footer_heading', 'option'); ?></h3>
            <img src="<?php echo get_template_directory_uri() . '/assets/icons/md_sketch_arrow.svg'; ?>" />
        </div>
        <form action="" class="postcode">
            <input class="postcode-check-input" type="text" placeholder="Enter Your Postcode">
            <button class="btn">
                <div class="hide-mobile">SEARCH</div>
                <img class="hide-desktop" src="<?php echo get_template_directory_uri() . '/assets/icons/md_search.svg'; ?>" alt ="" />
            </button>
        </form>
        <div class="footer-socials hide-mobile">
            <?php if(get_field('facebook', 'options') != null): ?>
                <a href="<?php the_field('facebook', 'options'); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/md_facebook.svg'; ?>" />
                </a>
            <?php endif; ?>
            <?php if(get_field('instagram', 'options') != null): ?>
                <a href="<?php the_field('instagram', 'options'); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/md_instagram.svg'; ?>" />
                </a>
            <?php endif; ?>
            <?php if(get_field('twitter', 'options') != null): ?>
                <a href="<?php the_field('twitter', 'options'); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/md_twitter.svg'; ?>" />
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div>
        <img src="<?php echo get_template_directory_uri() . '/assets/logos/muller_milk_ingredients_logo.png'; ?>" />
        <div class="footer-socials hide-desktop">
            <?php if(get_field('facebook', 'options') != null): ?>
                <a href="<?php the_field('facebook', 'options'); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/md_facebook.svg'; ?>" />
                </a>
            <?php endif; ?>
            <?php if(get_field('instagram', 'options') != null): ?>
                <a href="<?php the_field('instagram', 'options'); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/md_instagram.svg'; ?>" />
                </a>
            <?php endif; ?>
            <?php if(get_field('twitter', 'options') != null): ?>
                <a href="<?php the_field('twitter', 'options'); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/md_twitter.svg'; ?>" />
                </a>
            <?php endif; ?>
        </div>
        <p><?php the_field('footer_copyright_text', 'option'); ?></p>
    </div>

    <div><?php the_field('made_by_text', 'option'); ?></div>
</footer>
<?php wp_footer(); ?>



</body>
</html>