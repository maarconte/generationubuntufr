<?

/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       gur_1.0.0
 */
?>
</div><!-- #content -->
<footer class="footer">
	<div class="container">
		<div class="row footer__inner">
			<?php if (have_rows('rs', 'options')) : ?>
				<div class="col-md-3 col-sm-12 text-center">
					<div class="footer__logo">
						<img src="<?= get_template_directory_uri() ?>/assets/images/logo-footer.png" alt="logo footer">
					</div>
					<p class="footer__follow-us">Suivez nous !</p>
					<?php while (have_rows('rs', 'options')) : the_row(); ?>
						<ul class="footer__rs">
							<?php if (get_sub_field('facebook')) : ?>
								<li class="footer__rs__item">
									<a href="<?php the_sub_field('facebook'); ?>">
										<i class="fab fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
							<?php endif; ?>
							<?php if (get_sub_field('twitter')) : ?>
								<li class="footer__rs__item">
									<a href="<?php the_sub_field('twitter'); ?>">
										<i class="fab fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
							<?php endif; ?>
							<?php if (get_sub_field('linkedin')) : ?>
								<li class="footer__rs__item">
									<a href="<?php the_sub_field('linkedin'); ?>">
										<i class="fab fa-linkedin" aria-hidden="true"></i>
									</a>
								</li>
							<?php endif; ?>
							<?php if (get_sub_field('instagram')) : ?>
								<li class="footer__rs__item">
									<a href="<?php the_sub_field('instagram'); ?>">
										<i class="fab fa-instagram" aria-hidden="true"></i>
									</a>
								</li>
							<?php endif; ?>
						</ul>
					<? endwhile; ?>
				</div>
			<? endif; ?>

			<? if (is_active_sidebar('footer-1')) {
				dynamic_sidebar('footer-1');
			} ?>

			<div class="col-md-3 col-sm-12 footer__infos">
						<p><?= get_bloginfo('name'); ?></p>
					<?php if (get_field('adress', 'option')) : ?>
							<p><?= get_field('adress', 'option'); ?></p>
					<?php endif; ?>
					<?php if (get_field('contact_mail', 'option')) : ?>
							<p><?= get_field('contact_mail', 'option'); ?></p>
					<?php endif; ?>
					<?php if (get_field('phone', 'option')) : ?>
							<p><?= get_field('phone', 'option'); ?></p>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer__credits">
		<div class="container">
			<div class="footer__inner">
				© Copyright 2019, Tous droits réservés Génération Ubuntu France
			</div>
			<a class="footer__credits__thatmuch" href="https://thatmuch.fr" target="_blank" rel="noopener noreferrer">
				<img src="<?= get_template_directory_uri() ?>/assets/images/thatmuch-logo.png" alt="logo that much">
			</a>
		</div>
	</div>
</footer>
<? wp_footer() ?>
</body>

</html>