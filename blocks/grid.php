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

            <?php if(have_rows('grid_images')): ?>
                <ul class="grid grid-desktop">
                    <?php while(have_rows('grid_images')): the_row(); ?>
                    <?php $image = get_sub_field('grid_image'); ?>
                    <li>
                        <img class="grid-image"   
                            src="<?php echo $image['sizes']['medium']; ?>"
                            alt="<?php echo $image['alt'] ?>" 
                        />
                    </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
</section>

<style>
    .grid-section {
        padding: 6.5rem 1.25rem;
        max-width: 120rem;
        margin: 0 auto;

    }

    .grid-mobile {
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
    }
    .grid-image {
        width: 100%;
        border-radius: 10px;
    }
    
    ul.grid-desktop {
        list-style: none;
        margin: 0;
        padding: 0;

        grid-template-columns: repeat(7, 1fr);
        grid-template-rows: auto;
        gap: 1rem;
        display: none;
    }

    @media only screen and (min-width: 62rem) {
        ul.grid-desktop {
            display: grid;
        }

        .grid-mobile {
            display: none;
        }
    }

</style>