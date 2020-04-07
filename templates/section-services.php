<?
/**
 * Services Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       gur_1.0.0
 *
 */
 ?>
<section class="section section-services
<? if(get_sub_field('fond') == "Couleur"):?> bg-primary
  <? elseif(get_sub_field('fond') == "Gris"):?> bg-light<? endif;?>">

        <div class="container">
              <!-- Title -->
              <?php if(get_sub_field('title') ) : ?>
                    <h2 class="section__title"><?php echo get_sub_field('title'); ?></h2>
              <?php endif; ?>
              <!-- Title -->
              <div class="row">
                    <!-- Service -->
                    <?php if (have_rows('service') ) : ?>
                          <?php while( have_rows('service') ) : the_row(); ?>
                          <div class="col-sm-4 section-services__item">
                                <?php if ( get_sub_field('link') ) : ?>
                                      <a href="<?php echo get_sub_field('link'); ?>">
                                                                    <!-- Image -->
                                <?php if(get_sub_field('image') ) : $img = get_sub_field('image');?>
                                   <img class="section-service__image" src="<?= $img['sizes']['thumbnail'] ?>" alt="<?php echo $img['alt']; ?>">
                                <?php endif;?>
                                  <!-- Image -->
                                    </a>
                                <?php endif; ?>

                                <!-- Icon title -->
                                <?php if(get_sub_field('title') ) : ?>
                                      <h4 class="section-services__item__title">
                                      <?php if ( get_sub_field('link') ) : ?>
      <a href="<?php echo get_sub_field('link'); ?>">
      <?php echo get_sub_field('title'); ?>
</a>
<?php endif; ?>

                                          </h4>
                                <?php endif; ?>
                                <!-- Icon title -->
                                <!-- Texte -->
                                <?php if(get_sub_field('text') ) : ?>
                                      <p class="section-services__item__text"> <?php echo get_sub_field('text'); ?></p>
                                <?php endif; ?>
                                <!-- Texte -->
                          </div>
                          <? endwhile; ?>
                    <? endif;?>
                    <!-- Service -->
              </div>
        </div>
 </section>