<?php
/**
 * Template Name: Actas de matrimonio
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?>

<?php get_header();
?>

<div class="col-xs-12 trv-title-cyan arrow_box">
	<div class="container">
		<p class="col-xs-12 trv-title-white">Actas de matrimonio</p>
	</div>
</div>

<div class="col-xs-12" id="trv-feat-cont">
	<div class="container">
		<?php
			$args = array( 'post_type' => 'post_actaMatrimonio', 'post_status' => 'publish', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page' => '-1');

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post();
				$title = get_the_title($post->ID);
				$permalink = get_permalink($post->ID);

				echo '<div class="col-xs-12" id="'.$post->ID.'">';

              	echo '<div class="features-title">';
              	echo '<a href="' . $permalink . '">';
              	echo  '<span>' . $title . '</span>';
              	echo  '</a>';
              	echo '</div>';

				echo '</div>';
				echo '<br />';
			endwhile;
		?>
	</div>
</div>

<?php get_footer();?>