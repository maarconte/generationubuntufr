<?

/**
 * Texte-Image Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       gur_1.0.0
 *
 */
?>

<section class="section section-text-image">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-text-image__title">
                <?php if (get_sub_field('title')) : ?>
                    <h2 class="inline"><?php echo get_sub_field('title'); ?></h2>
                <?php endif; ?>
            </div>
            <div class="col-md-8 col-sm-12 section-text-image__text">
                <div class="section-text-image__text__inner">
                    <!-- Title -->
                    <!-- Title -->
                    <!-- Text -->
                    <?php if (get_sub_field('text')) : ?>
                        <?php echo get_sub_field('text'); ?>
                    <?php endif; ?>
                    <!-- Text -->
                </div>
            </div>
            <div class="col-md-4 col-sm-12 section-text-image__image">
                <div class="block__image--bordered">
                    <div class="img-box">
                        <img src="<?php if (get_sub_field('image')) : $img = get_sub_field('image');
                                        echo $img['url'];
                                    endif; ?>)" class="img-fluid" />
                    </div>
                    <div class="bordered left-bottom"></div>
                </div>
                <!-- Button -->
                <?php if (have_rows('button')) : ?>
                    <?php while (have_rows('button')) : the_row(); ?>
                        <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url')) : ?>
                            <a href="<?php the_sub_field('url'); ?>" class="btn btn-primary"><?php the_sub_field('label'); ?></a>

                        <?php endif; ?>
                        <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url')) : ?>

                            <a href="<?php the_sub_field('int_url'); ?>" class="btn btn-primary">
                                <?php the_sub_field('label'); ?>
                            </a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- Button -->
            </div>
        </div>
    </div>
</section>