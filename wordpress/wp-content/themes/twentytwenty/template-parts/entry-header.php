<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$entry_header_classes = '';

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">

	<div class="entry-header-inner section-inner medium">

		<?php
				 
		print("<br><br>");
		echo "<b>El servidor es:</b> {$_SERVER['SERVER_NAME']}<br>"; 
		echo "<b>El valor de USER AGENT es:</b> {$_SERVER['HTTP_USER_AGENT']}<br>";
		echo "<b>Número de puerto del servidor:</b> {$_SERVER['SERVER_PORT']}<br>";
		echo "<b>Servidor web usado:</b> {$_SERVER['SERVER_SOFTWARE']}<br>";
		echo "<b>hTTP de referencia|:</b> {$_SERVER['SERVER_NAME']}{$_SERVER['REQUEST_URI']}<br>";
		echo "<b>El codigo de la petición realizada es:</b> "; 

		var_dump(http_response_code());
		print("<br>");

		$user_agent = $_SERVER['HTTP_USER_AGENT'];


		function getPlatform($user_agent) {
		   $plataformas = array(
			  'Windows 10' => 'Windows NT 10.0+',
			  'Windows 8.1' => 'Windows NT 6.3+',
			  'Windows 8' => 'Windows NT 6.2+',
			  'Windows 7' => 'Windows NT 6.1+',
			  'Windows Vista' => 'Windows NT 6.0+',
			  'Windows XP' => 'Windows NT 5.1+',
			  'Windows 2003' => 'Windows NT 5.2+',
			  'Windows' => 'Windows otros',
			  'iPhone' => 'iPhone',
			  'iPad' => 'iPad',
			  'Mac OS X' => '(Mac OS X+)|(CFNetwork+)',
			  'Mac otros' => 'Macintosh',
			  'Android' => 'Android',
			  'BlackBerry' => 'BlackBerry',
			  'Linux' => 'Linux',
		   );
		   foreach($plataformas as $plataforma=>$pattern){
			  if (preg_match('/(?i)'.$pattern.'/', $user_agent))
				 return $plataforma;
		   }
		   return 'Otras';
		}
		$SO = getPlatform($user_agent);
		echo "<b>La plataforma con la que estás visitando esta web es: </b>".$SO;
		print("<br>");
		

		/*$codigo = apache_request_headers(http_response_code);
		*print( $codigo);
	*/
		$useragent = $_SERVER['HTTP_USER_AGENT'];

		$otros = '';
		
		if (preg_match("/Edg/i", $useragent)){
			echo "<b>Estás navegando desde </b>EDGE";
		  }elseif (preg_match("/KHTML like Gecko/i", $useragent) || preg_match("/Safari/i", $useragent)){
			echo "<b>Estás navegando desde </b>CHROME";
		}else if (preg_match("/20100101/i", $useragent)) {
			echo "<b>Estás navegando desde </b>FIREFOX";
		  }elseif (preg_match("/OPR/i", $useragent)) {
			echo "<b>Estás navegando desde </b>OPERA";
		  }elseif (preg_match("/Mobile/i", $useragent)) {
			echo "<b>Estás navegando desde </b>SAFARI";
		  }else {
			echo "<b>Estás navegando desde </b> OTRO NAVEGADOR</b>";
		  }
	
	

		  /**
		   * TABLA DE USUARIOS
		   * 
		   */
 
			  print("<h2 align='center'>Listado de Estudiantes DSwAC</h2>");
			  echo('<table align="center" border=1>');
			  echo '<tr>';   
			  echo '<th>Cedula</th>';
			  echo '<th>Nombre</th>';
			  echo '<th>Apellido</th>';
			  echo '<th>Celular</th>';
			  echo '<th>Asignatura</th>';
			  echo '<th>Prog_maestria</th>';
			  echo '<th>Fecha</th>';
			  echo '<th>Titulo</th>';
			  echo '</tr>'; 
	  
			  if (file_exists('Estudiantes.xml')) {
				  $xml = simplexml_load_file('Estudiantes.xml');
				 	  
			  } else {
				  exit('No se puede abrir XML');
			  }
			
				  //cargar en la tabla
				  foreach ($xml -> estudiante as $key => $estud) {
					  echo '<tr>';   
					  echo '<td>'.$estud->cedula.'</td>';
					  echo '<td>'.$estud->nombre.'</td>';
					  echo '<td>'.$estud->apellido.'</td>';
					  echo '<td>'.$estud->celular.'</td>';
					  echo '<td>'.$estud->asignatura.'</td>';
					  echo '<td>'.$estud->prog_maestria.'</td>';
					  echo '<td>'.$estud->fecha.'</td>';
					  echo '<td>'.$estud->titulo.'</td>';
					  echo '</tr>';
				  }
				  echo '</table>';  
	  




		/**
		 * Allow child themes and plugins to filter the display of the categories in the entry header.
		 *
		 * @since Twenty Twenty 1.0
		 *
		 * @param bool Whether to show the categories in header. Default true.
		 */
		$show_categories = apply_filters( 'twentytwenty_show_categories_in_entry_header', true );

		if ( true === $show_categories && has_category() ) {
			?>

			<div class="entry-categories">
				<span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
				<div class="entry-categories-inner">
					<?php the_category( ' ' ); ?>
				</div><!-- .entry-categories-inner -->
			</div><!-- .entry-categories -->

			<?php
		}

		if ( is_singular() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		}

		$intro_text_width = '';

		if ( is_singular() ) {
			$intro_text_width = ' small';
		} else {
			$intro_text_width = ' thin';
		}

		if ( has_excerpt() && is_singular() ) {
			?>

			<div class="intro-text section-inner max-percentage<?php echo $intro_text_width; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
				<?php the_excerpt(); ?>
			</div>

			<?php
		}

		// Default to displaying the post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-top' );
		?>

	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
