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
            <h2 class="section__title"><?= get_sub_field('title'); ?></h2>
        <?php endif; ?> -->
                <!-- Title -->

                <!-- Text -->
                <?php if (get_sub_field('text')) : ?>
                    <p class="mb-4"> <?= get_sub_field('text'); ?></p>
                <?php endif; ?>
                <!-- Text -->
  <!-- Button -->
  <?php if ( get_sub_field('button') ) : $link = get_sub_field('button'); ?>
                <div class="section-text-image__btn d-none d-md-block">
                    <a class="btn <?= $fond == "Couleur" ? "btn-dark" : "btn-primary" ?>" href="<?= $link['url']; ?>">
                        <?= $link['title']; ?>
                    </a>
                </div>
                <?php endif; ?>
                <!-- Button -->
  <!-- Button -->
  <?php if ( get_sub_field('button_secondary') ) : $link = get_sub_field('button_secondary'); ?>
                <div class="section-text-image__btn d-none d-md-block">
                    <a class="btn btn-dark" href="<?= $link['url']; ?>">
                        <?= $link['title']; ?>
                    </a>
                </div>
                <?php endif; ?>
                <!-- Button -->
            </div>
        </div>
    </div>
</section>