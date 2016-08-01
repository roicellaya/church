<div id="section-printable">
	<?php
	if ( is_home() || is_archive() || is_search() ) {
	?>
		<h2 class="entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<?php		
	} else {
	?>
		<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
	<?php
		switch ($post->post_type) {
			case 'post_actamatrimonio':
				$esposo = rwmb_meta('esposo',$post->ID );
				$esposa = rwmb_meta('esposa',$post->ID );
				$direccion = rwmb_meta('direccion',$post->ID );
				$cedula_esposo = rwmb_meta('cedula_esposo',$post->ID );
				$cedula_esposa = rwmb_meta('cedula_esposa',$post->ID );

				echo "<h2>" . $esposo . "</h2>";
				echo "<h2>" . $esposa . "</h2>";
				echo "<h2>" . $direccion . "</h2>";
				echo "<h2>" . $cedula_esposo . "</h2>";
				echo "<h2>" . $cedula_esposa . "</h2>";
				break;

			case 'post_actabautizo':
				$padre = rwmb_meta('padre',$post->ID );
				$madre = rwmb_meta('madre',$post->ID );
				$direccion = rwmb_meta('direccion',$post->ID );
				$cedula_padre = rwmb_meta('cedula_padre',$post->ID );
				$cedula_madre = rwmb_meta('cedula_madre',$post->ID );

				echo "<h2>" . $padre . "</h2>";
				echo "<h2>" . $madre . "</h2>";
				echo "<h2>" . $direccion . "</h2>";
				echo "<h2>" . $cedula_padre . "</h2>";
				echo "<h2>" . $cedula_madre . "</h2>";
				break;

			case 'post_actacomunion':
				$titular = rwmb_meta('titular',$post->ID );
				$padre = rwmb_meta('padre',$post->ID );
				$madre = rwmb_meta('madre',$post->ID );
				$direccion = rwmb_meta('direccion',$post->ID );
				$cedula_padre = rwmb_meta('cedula_padre',$post->ID );
				$cedula_madre = rwmb_meta('cedula_madre',$post->ID );

				echo "<h2>" . $titular . "</h2>";
				echo "<h2>" . $padre . "</h2>";
				echo "<h2>" . $madre . "</h2>";
				echo "<h2>" . $direccion . "</h2>";
				echo "<h2>" . $cedula_padre . "</h2>";
				echo "<h2>" . $cedula_madre . "</h2>";
				break;

			case 'post_actaconfirmacion':
				$titular = rwmb_meta('titular',$post->ID );
				$padre = rwmb_meta('padre',$post->ID );
				$madre = rwmb_meta('madre',$post->ID );
				$direccion = rwmb_meta('direccion',$post->ID );
				$cedula_padre = rwmb_meta('cedula_padre',$post->ID );
				$cedula_madre = rwmb_meta('cedula_madre',$post->ID );

				echo "<h2>" . $titular . "</h2>";
				echo "<h2>" . $padre . "</h2>";
				echo "<h2>" . $madre . "</h2>";
				echo "<h2>" . $direccion . "</h2>";
				echo "<h2>" . $cedula_padre . "</h2>";
				echo "<h2>" . $cedula_madre . "</h2>";
				break;

			default:
				break;
		}
	}
	?>
</div>
<a id="printer"><span>Imprimir</span></a>

<script type="text/javascript">
	jQuery('#printer').on('click', function printer (e) {
		window.print();
	})
</script>