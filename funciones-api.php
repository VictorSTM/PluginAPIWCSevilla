<?php

//CallBacks
//Listado de noticias con solo la información que necistamos para generar la "Carta"
function listar_noticias(){

  $listado_noticias = array();

  $args = array(
    			'numberposts' => 10
  );
  $posts_array = get_posts( $args );

//Recorremos los ultimos 10 post y generamos unos objetos con la información que necesitamos
  foreach ($posts_array as $entrada){
		array_push($listado_noticias,[
    	'ID'		     		     => $entrada -> ID,
    	'fechaEntrada'       => $entrada ->post_date,
    	'tituloEntrada'      => $entrada ->post_title,
    	'ExtractoEntrada'    => $entrada ->post_excerpt,
    	'nombreAutor'        => get_author_name( $entrada -> post_author),
      'urlImagenDestacada' => get_the_post_thumbnail_url($entrada -> ID),
    ]);
  }
 	return $listado_noticias;

}

//Noticia en concreto que ha sido seleccionada en la APP
function noticia_por_id($data){

	$datosNoticia=array();
	$noticia=get_post($data['id']);

//Generamos la noticia con la información que necesitamos concretamente
  $datosNoticia=[
		'fechaEntrada'        => $noticia ->post_date,
    'tituloEntrada'       => $noticia ->post_title,
	  'contenidoEntrada'    => $noticia ->post_content,
	  'nombreAutor'         => get_author_name( $noticia -> post_author),
		'avatarURL'	          => get_avatar_url( $noticia -> post_author ),
    'urlImagenDestacada'  => get_the_post_thumbnail_url($noticia -> ID),
  ];

	return $datosNoticia;
}



// Creamos los custom endpoints
add_action( 'rest_api_init', function () {
  register_rest_route( 'wordapp/v1', '/noticias', array(
    'methods' => 'GET',
    'callback' => 'listar_noticias',
  ) );
  register_rest_route( 'wordapp/v1', '/noticia/(?P<id>\d+)', array(
     'methods' => 'GET',
     'callback' => 'noticia_por_id',
   ) );

} );

?>
