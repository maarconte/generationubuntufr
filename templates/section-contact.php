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
<section class="section section-contact <? echo $fond == "Couleur" ? "bg-primary" : $fond == "Gris" ? "bg-light" : "" ?>">
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
			<?php

			$images = get_sub_field('gallerie');
			$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

			if ($images) : ?>
				<div class="section-contact__gallery col-sm-6">
					<div class="grid">
						<?php foreach ($images as $image) : ?>

							<a href="<?= $image['url']; ?>" target="_blank">
								<img src="<?= $image['sizes']['medium']; ?>" alt="<?= $image['alt']; ?>" />
							</a>

						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>

			<div class="section-contact__form col-sm-12 col-lg-6">
				<!-- Title -->
				<?php if (get_sub_field('title')) : ?>
					<h2 class="section__title primary"><?= get_sub_field('title'); ?></h2>
				<?php endif; ?>
				<!-- Title -->
				<?php if (get_sub_field('texte')) : ?>
					<p class="section__text"><?= get_sub_field('texte'); ?></p>
				<?php endif; ?>

				<!-- Contact form -->
				<?php $form = get_sub_field('contact_form'); ?>
				<?php if ($form) : ?>
					<?= $form; ?>
				<?php endif; ?>
				<!-- Contact form -->
			</div>
		</div>
	</div>
</section>