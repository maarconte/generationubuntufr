<?
/**
 * Template for ACF flexible elements
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       gur_1.0.0
 *
 *
 */
?>
<? /* Template Name: Sections */ ?>

<? get_header(); ?>

<main id="sections">
<? if (has_post_thumbnail()) : ?>
    <section class="page__header">
        <? the_post_thumbnail('large', ['class' => 'w-100']); ?>
    </section>
  <? endif?>
  <? if (have_posts()): while (have_posts()): the_post() ?>

    <? stanlee_sections() ?>
  <? endwhile; endif ?>

</main>

<? get_footer() ?>
