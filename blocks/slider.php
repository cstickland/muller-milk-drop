<section class="testimonials-section">
    <div class="testimonials-container">
        <div class="testimonials-title hide-mobile"><?php the_field('testimonial_title'); ?></div>
        <?php if(have_rows('testimonials')): ?>
            <?php $number_of_rows = count(get_field('testimonials')); ?>
            <ul class="testimonials">
                <button class="prev-btn slider-btn">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/md_arrow_back.svg'; ?>" />
                </button>
                <?php while(have_rows('testimonials')): the_row(); ?>
                    <li class="testimonial <?php if(get_row_index() == 1){ echo 'active'; } ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/shapes/md_shape_4.svg'; ?>" alt="" class="testimonial-img">
                        <div class="testimonial-content">
                            <div class="testimonial-rating">
                                <?php $number_of_stars = get_sub_field('rating'); ?>
                                <?php for($i = 0; $i < $number_of_stars; $i++) { ?>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/md_star.svg'; ?>" />
                                <?php } ?>
                            </div>
                            <div class="testimonial-quote">
                                <?php the_sub_field('quote'); ?>
                            </div>
                            <div>
                                <div class="testimonial-name">
                                    <?php the_sub_field('name'); ?>
                                </div>
                                <div class="testimonial-role">
                                    <?php the_sub_field('role'); ?>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
                <button class="next-btn slider-btn">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/md_arrow_forward.svg'; ?>" />
                </button>
            </ul>
        <?php endif; ?>
    </div>
    <img class="testimonial-shape shape-1" src="<?php echo get_template_directory_uri() . '/assets/shapes/md_shape_5.svg'; ?>" alt="">
    <img class="testimonial-shape shape-2" src="<?php echo get_template_directory_uri() . '/assets/shapes/md_shape_1.svg'; ?>" alt="">
    <img class="testimonial-shape shape-3" src="<?php echo get_template_directory_uri() . '/assets/shapes/md_shape_6.svg'; ?>" alt="">
    <img class="testimonial-shape shape-4" src="<?php echo get_template_directory_uri() . '/assets/shapes/md_shape_7.svg'; ?>" alt="">
</section>