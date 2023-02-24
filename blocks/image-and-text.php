

<?php 
if(have_rows('blocks')):
    while(have_rows('blocks')): the_row();?>
        <section class="image-and-text-section 
        <?php if(get_sub_field('block_image_left_desktop') == false){ echo 'row-reverse';} ?>">
            <div class="image-and-text__text-container">
                <div class="block-subtitle">
                    <div class="block-subtitle-horizontal"></div>
                    <?php the_sub_field('block_subtitle'); ?>
                </div>
                <h2 class="block-title">
                    <?php the_sub_field('block_title'); ?>
                </h2>
                <div class="block-text">
                    <?php the_sub_field('block_text'); ?>
                </div>
                <?php if(have_rows('block_bullet_points')): ?>
                <ul class="block-bullet-points">
                    <?php while(have_rows('block_bullet_points')): the_row(); ?>
                        <li>
                            <img src="<?php echo get_template_directory_uri() . '/assets/icons/md_tick.svg'; ?>" alt="green tick"/>
                            <?php the_sub_field('bullet_point'); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
            <div class="image-and-text__image-container">
                <?php $image = get_sub_field('block_image'); ?>
                <img    
                    src="<?php echo $image['url']; ?>"
                    alt="<?php echo $image['alt'] ?>" 
                />
            </div>
        </section>
    <?php endwhile; 
endif; ?>


