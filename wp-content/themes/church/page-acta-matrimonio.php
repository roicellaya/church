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
	<div class="container text-center features-container trv-text-prg">
		<?php
			$args = array( 'post_type' => 'post_actaMatrimonio', 'post_status' => 'publish', 'orderby' => 'ID', 'order' => 'ASC', 'posts_per_page' => '-1');

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post();

				$esposo = rwmb_meta('esposo' );
				$esposa = rwmb_meta('esposa' );
				$direccion = rwmb_meta('direccion' );
				$cedula_esposo = rwmb_meta('cedula_esposo' );
				$cedula_esposa = rwmb_meta('cedula_esposa' );

				echo '<section class="feature-container" id="'.$post->ID.'">';

	              	echo '<div class="text-center features-title">' . $esposo . '</div>';

	              	echo '<div class="text-center features-title">' . $esposa . '</div>';

	              	echo '<div class="text-center features-title">' . $direccion . '</div>';

	              	echo '<div class="text-center features-title">' . $cedula_esposo . '</div>';

	              	echo '<div class="text-center features-title">' . $cedula_esposa . '</div>';

				echo '</section>';
			endwhile;
		?>
	</div>
</div>

<?php get_footer();?>