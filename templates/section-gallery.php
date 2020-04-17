<?
/**
 * Gallery Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       gur_1.0.0
 *
 */
 ?>
  <section class="section section-gallery">
      <div class="container">
          <!-- Title -->
          <?php if(get_sub_field('title') ) : ?>
             <h2 class="section__title"><?= get_sub_field('title'); ?></h2>
      <?php endif; ?>
     <!-- Title -->
  <?php

$images = get_sub_field('images');
$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
  <div class="grid">
      <?php foreach( $images as $image ): ?>

          <a href="<?= $image['url']; ?>" target="_blank">
                   <img src="<?= $image['sizes']['medium']; ?>" alt="<?= $image['alt']; ?>" />
              </a>

      <?php endforeach; ?>
  </div>
<?php endif; ?>
      </div>
 </section>