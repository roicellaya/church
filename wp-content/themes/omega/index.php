<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Omega
 */

get_header(); ?>
<main class="<?php echo omega_apply_atomic( 'main_class', 'content' );?>" <?php omega_attr( 'content' ); ?>>
	<div class="container">
		<div class="row">
		<h2>Actas de matrimonio</h2>
		<?php
	        $args = array(
	          'post_type' => 'post_actamatrimonio',
	          'post_status' => 'publish',
	          'orderby' => 'ID',
	          'order' => 'ASC',
	          'posts_per_page' => '4',
	        );

	        query_posts($args);

	        if (have_posts()) :  while (have_posts()) : the_post();
	        	$title = get_the_title($post->ID);
				$permalink = get_permalink($post->ID);

	        	echo "<div class='col-xs-12'>";
	        	echo '<a href="' . $permalink . '">';
              	echo  '<span>' . $title . '</span>';
              	echo  '</a>';
              	echo '</div>';
	        endwhile; else:
	        	echo "<p class='trv-message'>No hay actas cargadas.</p>";
	        endif;
		?>
		</div>
		<br/>

		<div class="row">
		<h2>Actas de bautizo</h2>
		<?php
	        $args = array(
	          'post_type' => 'post_actabautizo',
	          'post_status' => 'publish',
	          'orderby' => 'ID',
	          'order' => 'ASC',
	          'posts_per_page' => '4',
	        );

	        query_posts($args);

	        if (have_posts()) :  while (have_posts()) : the_post();
	        	$title = get_the_title($post->ID);
				$permalink = get_permalink($post->ID);

	        	echo "<div class='col-xs-12'>";
	        	echo '<a href="' . $permalink . '">';
              	echo  '<span>' . $title . '</span>';
              	echo  '</a>';
              	echo '</div>';
	        endwhile; else:
	        	echo "<p class='trv-message'>No hay actas cargadas.</p>";
	        endif;
		?>
		</div>
		<br/>

		<div class="row">
		<h2>Actas de comunión</h2>
		<?php
	        $args = array(
	          'post_type' => 'post_actacomunion',
	          'post_status' => 'publish',
	          'orderby' => 'ID',
	          'order' => 'ASC',
	          'posts_per_page' => '4',
	        );

	        query_posts($args);

	        if (have_posts()) :  while (have_posts()) : the_post();
	        	$title = get_the_title($post->ID);
				$permalink = get_permalink($post->ID);

	        	echo "<div class='col-xs-12'>";
	        	echo '<a href="' . $permalink . '">';
              	echo  '<span>' . $title . '</span>';
              	echo  '</a>';
              	echo '</div>';
	        endwhile; else:
	        	echo "<p class='trv-message'>No hay actas cargadas.</p>";
	        endif;
		?>
		</div>
		<br/>

		<div class="row">
		<h2>Actas de confirmación</h2>
		<?php
	        $args = array(
	          'post_type' => 'post_actaconfirmacion',
	          'post_status' => 'publish',
	          'orderby' => 'ID',
	          'order' => 'ASC',
	          'posts_per_page' => '4',
	        );

	        query_posts($args);

	        if (have_posts()) :  while (have_posts()) : the_post();
	        	$title = get_the_title($post->ID);
				$permalink = get_permalink($post->ID);

	        	echo "<div class='col-xs-12'>";
	        	echo '<a href="' . $permalink . '">';
              	echo  '<span>' . $title . '</span>';
              	echo  '</a>';
              	echo '</div>';
	        endwhile; else:
	        	echo "<p class='trv-message'>No hay actas cargadas.</p>";
	        endif;
		?>
		</div>
		<br/>
	</div>
</main><!-- .content -->
<?php get_footer(); ?>