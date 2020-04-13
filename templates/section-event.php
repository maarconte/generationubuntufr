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
<? /*  include('../inc/php-graph-sdk-5.x/src/Facebook/autoload.php'); */  // change path as needed	$path = $_SERVER['DOCUMENT_ROOT'];
	$path = get_template_directory()."/inc/php-graph-sdk-5.x/src/Facebook/autoload.php";
	require_once $path;
	$appId = get_sub_field('app_id');
	$accessToken = get_sub_field('access_token');
	$appSecret = get_sub_field('app_secret');
	$fb = new \Facebook\Facebook([
		'app_id' =>  $appId,
		'app_secret' => $appSecret,
		'default_graph_version' => 'v2.10',
		//'default_access_token' => '{access-token}', // optional
	]);

 	try {
		// Returns a `FacebookFacebookResponse` object
		$response = $fb->get(
		"/".$appId.'/events',
		$accessToken
		);
	} catch(FacebookExceptionsFacebookResponseException $e) {
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} catch(FacebookExceptionsFacebookSDKException $e) {
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}
	$events = $response->getGraphEdge();
?>

 <section class="section section-event">
 <div class="section__background bg-primary"></div>
	<div class="container">
	<!-- Title -->
	<?php if (get_sub_field('title')) : ?>
      <h2 class="section__title">
		  <?php echo get_sub_field('title'); ?>
		</h2>
	<?php endif; ?>
	<!-- Title -->
		<div class="row">
		<? for ($i=0; $i < count($events) ; $i++) { ?>
		<? $dateEvent = $events[$i]['start_time'] ; ?>
			<div class="col-sm-4">
				<div class="section-event_item card">
					<img class="card-img-top" src="/wp-content/uploads/2020/04/Page.png" alt="Card image cap">
					<div class="card-body">
						<div class="row">
							<div class="col-2 section-event_date">
								<p class="section-event_date_month"><?= $dateEvent-> format('M') ?></p>
								<p class="section-event_date_day"><?= $dateEvent-> format('d') ?></p>
							</div>
							<div class="col-10">
							<h5 class="card-title"><a href="https://facebook.com/events/<?= $events[$i]['id']?>"><?= $events[$i]['name'] ?></a> </h5>
							<p class="card-text"><?= shorten($events[$i]['description'], 60) ?></p>
							</div>
						</div>
					</div>
				</div>
		<? } ?>
			</div>
		</div>
	</div>
 </section>