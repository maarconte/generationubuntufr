<?

/**
 * Contact Block
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
<section class="section section-contact <?php echo $fond == "Couleur" ? "bg-primary" : $fond == "Gris" ? "bg-light" : "" ?>">
	<!-- Section background: image -->
	<?php if (get_sub_field('fond') == "Image") : ?>
		<div class="section__background-image" style="
            <?php if (get_sub_field('image')) : ?>
            background-image:url(<?php echo the_sub_field('image') ?>);
            <?php endif; ?>"></div>
	<?php endif; ?>
	<!-- Section background: image -->
	<div class="container">
		<div class="row">
			<?php

			$images = get_sub_field('gallerie');
			$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

			if ($images) : ?>
				<div class="section-contact__gallery col-sm-12 col-lg-6">
					<div class="grid">
						<?php foreach ($images as $image) : ?>

							<a href="<?php echo  $image['url']; ?>" target="_blank">
								<img src="<?php echo  $image['sizes']['medium']; ?>" alt="<?php echo  $image['alt']; ?>" />
							</a>

						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>

			<div class="section-contact__form col-sm-12 col-lg-6">
				<!-- Title -->
				<?php if (get_sub_field('title')) : ?>
					<h2 class="section__title primary"><?php echo  get_sub_field('title'); ?></h2>
				<?php endif; ?>
				<!-- Title -->
				<?php if (get_sub_field('texte')) : ?>
					<p class="section__text"><?php echo  get_sub_field('texte'); ?></p>
				<?php endif; ?>

				<!-- Contact form -->
				<?php $form = get_sub_field('contact_form'); ?>
				<?php if ($form) : ?>
					<?php echo  $form; ?>
				<?php endif; ?>
				<!-- Contact form -->
			</div>
		</div>
	</div>
</section>