<?php 
function titulo_clientes( $title ) {
    $screen = get_current_screen();
    if( isset( $screen->post_type ) ) {
        if  ( 'cliente' == $screen->post_type ) {
          $title = 'Nome do novo cliente';
	     } else if ( 'produto' == $screen->post_type ) {
	     	 $title = 'Nome do novo Produto';
	     } else {
	     	$title = 'Nome título';
	     }
    }
    return $title;
}
add_filter( 'enter_title_here', 'titulo_clientes' );

function titulo_pedidos( $title ) {
    $screen = get_current_screen();
    if( isset( $screen->post_type ) ) {
        if  ( 'pedido' == $screen->post_type ) {
         if (isset($_GET["post"])) {
     	 $title = $_GET["post"];
	     }
	 
	     else {
	     	$title = 'Insira o número do pedido ou deixe em branco que o sistema o insere automaticamente';
	     }
     }
    }
    return $title;
}
add_filter( 'enter_title_here', 'titulo_pedidos' );

function pedidos_admin_title( $title ) {
	$post = get_post();
	$screen = get_current_screen();

	  if ('pedido'==$screen->post_type) {
	  	$title = __('Pedido nº '.$post->ID, 'pedido');
	  }
	return $title;
}

add_filter( 'the_title', 'pedidos_admin_title' );
?>