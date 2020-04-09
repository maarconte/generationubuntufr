<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       gur_1.0.0
 */
?>

<? get_header(); ?>
<main id="page">
<? if (has_post_thumbnail()) : ?>
    <section class="page__header">
    <h1 class="page__header__title text-center"><? the_title(); ?></h1>
        <? the_post_thumbnail('large'); ?>
    </section>
  <? endif?>

      <section class="container">
    <? while (have_posts()) : the_post(); ?>
        <h1><? the_title(); ?></h1>
        <? the_content(); ?>
    <? endwhile; ?>
      </section>


</main>



<? get_footer(); ?>
