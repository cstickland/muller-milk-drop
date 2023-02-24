<section class="grid-section">
    <?php if(have_rows('grid_images')): ?>
        <ul class="grid-mobile">
            <?php $i = 0; ?>
            <?php while(have_rows('grid_images')): the_row(); ?>
                <?php $i++; ?>
                <?php if( $i <= 3 ):  ?>
                    <?php $image = get_sub_field('grid_image'); ?>
                    <li>
                        <img class="grid-image"   
                            src="<?php echo $image['sizes']['medium']; ?>"
                            alt="<?php echo $image['alt'] ?>" 
                        />
                    </li>
                    
                <?php endif; ?>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    <?php $rows = get_field('grid-images'); ?>
    <?php $count = 0; ?>

 
    <?php if(have_rows('grid_images')): ?>
        <ul class="grid grid-desktop">
            <?php while(have_rows('grid_images')): the_row(); ?>
            <?php if($count > 0 && $count % 7 == 0): ?>
            </ul>
            <ul class="grid grid-desktop">
            <?php endif; ?>
            <?php $image = get_sub_field('grid_image'); ?>
            <li>
                <img class="grid-image"   
                    src="<?php echo $image['sizes']['medium']; ?>"
                    alt="<?php echo $image['alt'] ?>" 
                />
            </li>
             <?php $count++; ?>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</section>