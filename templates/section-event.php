<?
/**
 * Text Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       gur_1.0.0
 *
 */
 ?>

 <section class="section section-event>
	<div class="container">
	<!-- Title -->
	<?php if (get_sub_field('title')) : ?>
      <h2 class="section__title">
		  <?php echo get_sub_field('title'); ?>
		</h2>
	<?php endif; ?>
	<!-- Title -->
		<div class="row">
			<div class="col-sm-4">
				<div class="section-event_item card">
					<img class="card-img-top" src="http://localhost:10000/wp-content/uploads/2020/04/Page.png" alt="Card image cap">
					<div class="card-body">
						<div class="row">
							<div class="col-2 section-event_date">
								<p class="section-event_date_month">MAR</p>
								<p class="section-event_date_day">16</p>
							</div>
							<div class="col-10">
							<h5 class="card-title"><a href="">Card title</a> </h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
 </section>