<?php 

/*PRODUTO*/

function produto_add_metabox() {
    add_meta_box( 'preco-id', __( 'Preço do Produto', 'preco_prod' ), 'preco_build', 'produto' );
}
add_action( 'add_meta_boxes', 'produto_add_metabox' );
 

function preco_build( $post ) {
	$current_price = get_post_meta( $post->ID, '_current_price', true );
    
    ?>
	<h3><?php _e( 'Preço do Produto', 'preco_prod' ); ?></h3>
		<input type="text" name="preco_definido" value="<?php echo $current_price; ?>" /> 
	<?php
}
 
function preco_save( $post_id ) {
   if ( isset( $_REQUEST['preco_definido'] ) ) {
		update_post_meta( $post_id, '_current_price', sanitize_text_field( $_POST['preco_definido'] ) );
	}
}
add_action( 'save_post_produto', 'preco_save' );



// CLIENTE


function cliente_add_metabox() {
	add_meta_box('client-info', __('Informações do Cliente', 'client_box'), 'cliente_build', 'cliente');
}
add_action('add_meta_boxes', 'cliente_add_metabox');

function cliente_build($post) {
	$current_email = get_post_meta($post->ID, '_current_email', true);
	$current_phone = get_post_meta($post->ID, '_current_phone', true);

?>
	<h3> <?php _e('Informações do Cliente', 'client_box') ?></h3>

	<label for="email">Email:</label>
	<input type="email" name="email_definido" value="<?php echo $current_email; ?>" /> 

	<label for="email">Telefone:</label>
	<input type="text" name="telefone_definido" value="<?php echo $current_phone; ?>" /> 


<?php
}

function cliente_save($post_id) {

	if ( isset( $_REQUEST['email_definido'] ) ) {
			update_post_meta( $post_id, '_current_email', sanitize_text_field( $_POST['email_definido'] ) );
	}
	

	if ( isset( $_REQUEST['telefone_definido'] ) ) {
			update_post_meta( $post_id, '_current_phone', sanitize_text_field( $_POST['telefone_definido'] ) );
		}
	}	

add_action( 'save_post_cliente', 'cliente_save' );



// PEDIDO

function pedido_add_metabox() {
	add_meta_box('pedido-info', __('Informações do Pedido', 'pedido_box'), 'pedido_build', 'pedido');
}
add_action('add_meta_boxes', 'pedido_add_metabox');

function pedido_build($post) {

	$current_product = get_post_meta($post->ID, '_current_product', true);
	$current_client	 = get_post_meta($post->ID, '_current_client', true);

	global $post;
    $todos_produtos = get_posts( array(
        'post_type' => 'produto',
        'numberposts' => -1,
        'orderby' => 'post_title',
        'order' => 'ASC'
    ) );

    $todos_clientes = get_posts( array(
        'post_type' => 'cliente',
        'numberposts' => -1,
        'orderby' => 'post_title',
        'order' => 'ASC'
    ) );

?>

	<h3> <?php _e('Informações do Pedido', 'pedido_box') ?></h3>

	<?php $produto_escolhido = get_post($current_product) ?>
	<?php $comprador_escolhido = get_post($current_client) ?>

	<hr>
	<p><strong>Produto comprado: </strong><?=$current_product ? $produto_escolhido->post_title.' (ID ='.$current_product.')' : ''?></p>
	<p><strong>Comprador: </strong> <?=$current_client ? $comprador_escolhido->post_title.' (ID ='.$current_client.')' : ''?></p>
	
	<hr>

	<label for="email">Atualizar produto comprado:</label> <br>
	<select name="produto_definido">
		<?php foreach ($todos_produtos as $produto) : ?>
		<option value="<?php echo $produto->ID; ?>"> <?php echo $produto->post_title; ?> </option>
	<?php endforeach ?>
	</select>

	<label for="email">Nome do Cliente:</label>
	<select name="cliente_definido">
		<?php foreach ($todos_clientes as $cliente) : ?>
		<option value="<?php echo $cliente->ID; ?>"> <?php echo $cliente->post_title; ?> </option>
	<?php endforeach ?>
	</select>


<?php
}

function pedido_save($post_id) {

	if ( isset( $_REQUEST['produto_definido'] ) ) {
			update_post_meta( $post_id, '_current_product', sanitize_text_field( $_POST['produto_definido'] ) );
	}
	

	if ( isset( $_REQUEST['cliente_definido'] ) ) {
			update_post_meta( $post_id, '_current_client', sanitize_text_field( $_POST['cliente_definido'] ) );
		}
	}	

add_action( 'save_post_pedido', 'pedido_save' );

?>