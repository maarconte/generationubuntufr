<?

/**
 * Link Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       gur_1.0.0
 *
 */
?>

<?php $fond = get_sub_field('fond'); ?>
<section class="section section-link text-center <? echo $fond == "Couleur" ? "bg-primary" : "" ?>">
    <!-- Section background: image -->
    <? if (get_sub_field('fond') == "Image") : ?>
        <div class="section__background-image" style="
        <? if (get_sub_field('image')) : ?>
        background-image:url(<? echo the_sub_field('image') ?>);
        <? endif; ?>"></div>
    <? endif; ?>
    <!-- Section background: image -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0">
                <!-- Title -->
                <!-- <?php if (get_sub_field('title')) : ?>
            <h2 class="section__title"><?php echo get_sub_field('title'); ?></h2>
        <?php endif; ?> -->
                <!-- Title -->

                <!-- Text -->
                <?php if (get_sub_field('text')) : ?>
                    <p class="mb-4"> <?php echo get_sub_field('text'); ?></p>
                <?php endif; ?>
                <!-- Text -->

                <!-- Button -->
                <?php if (have_rows('button')) : ?>
                    <?php while (have_rows('button')) : the_row(); ?>
                        <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url')) : ?>
                            <a href="<?php the_sub_field('url'); ?>" class="btn <?php echo $fond == "Couleur" ? "btn-dark" : "btn-primary" ?>"><?php the_sub_field('label'); ?></a>

                        <?php endif; ?>
                        <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url')) : ?>

                            <a href="<?php the_sub_field('int_url'); ?>" class="btn <?php echo $fond == "Couleur" ? "btn-dark" : "btn-primary" ?>">
                                <?php the_sub_field('label'); ?>
                            </a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- Button -->
                <!-- Button -->
                <?php if (have_rows('button_secondary')) : ?>
                    <?php while (have_rows('button_secondary')) : the_row(); ?>
                        <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url')) : ?>
                            <a href="<?php the_sub_field('url'); ?>" class="btn btn-dark"><?php the_sub_field('label'); ?></a>
                        <?php endif; ?>
                        <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url')) : ?>
                            <a href="<?php the_sub_field('int_url'); ?>" class="btn btn-dark">
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