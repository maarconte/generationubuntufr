<?
/**
 * Header Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      Marconte
 * @version     0.1.0
 * @since       myPrestige_1.0.0
 *
 */
 ?>
      <? $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'medium' ); ?>

  <section class="section section-header <? echo $fond == "Couleur" ? "bg-primary": $fond == "Gris" ? "bg-light" : "" ?>">
    <!-- Section background: image -->
    <? if(get_sub_field('fond') == "Image"):?>
        <div class="section-background-image"  style="
        <? if(get_sub_field('image')):?>
        background-image:url(<? echo the_sub_field('image') ?>);
        <? endif;?>"></div>
    <? endif;?>
    <!-- Section background: image -->
    <div class="container">
           <!-- Title -->
        <?php if(get_sub_field('title') ) : ?>
            <h2 class="section__title"><?php echo get_sub_field('title'); ?></h2>
        <?php endif; ?>
        <!-- Title -->

        <!-- Lead -->
        <?php if(get_sub_field('lead') ) : ?>
            <p> <?php echo get_sub_field('lead'); ?></p>
        <?php endif; ?>
        <!-- Lead -->
        <!-- Button -->
        <?php if (have_rows('button')) : ?>
            <?php while ( have_rows('button') ) : the_row(); ?>
                <?php if (get_sub_field('link') == 'Externe' && get_sub_field('label') && get_sub_field('url') ) : ?>
                    <a href="<?php the_sub_field('url'); ?>" class="btn btn-grey"><?php the_sub_field('label'); ?></a>
                <?php endif; ?>
                <?php if (get_sub_field('link') == 'Interne' && get_sub_field('label') && get_sub_field('int_url') ) : ?>
                    <a href="<?php the_sub_field('int_url'); ?>" class="btn btn-grey">
                        <?php the_sub_field('label'); ?>
                    </a>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- Button -->
      </div>
 </section>