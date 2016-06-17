<?php 

// Produto
function produto() {

	$labels = array(
		'name'                  => _x( 'Produtos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Produto', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Produtos', 'text_domain' ),
		'name_admin_bar'        => __( 'Produto', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Item Pai', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Novo', 'text_domain' ),
		'add_new'               => __( 'Novo', 'text_domain' ),
		'new_item'              => __( 'Novo', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Atualizar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Imagem Destaque', 'text_domain' ),
		'set_featured_image'    => __( 'Escolher imagem destaque', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagem destaque', 'text_domain' ),
		'use_featured_image'    => __( 'Usar imagem destaque', 'text_domain' ),
		'insert_into_item'      => __( 'Inserir no item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Upload neste item', 'text_domain' ),
		'items_list'            => __( 'Lista', 'text_domain' ),
		'items_list_navigation' => __( 'Navegação dos itens', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Produto', 'text_domain' ),
		'description'           => __( 'Cadastro de Produtos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','editor'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'produto', $args );

}
add_action( 'init', 'produto', 0 );



// Cliente
function cliente() {

	$labels = array(
		'name'                  => _x( 'Cliente', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Clientes', 'text_domain' ),
		'name_admin_bar'        => __( 'Cliente', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Item Pai', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Novo', 'text_domain' ),
		'add_new'               => __( 'Novo', 'text_domain' ),
		'new_item'              => __( 'Novo', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Atualizar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Imagem Destaque', 'text_domain' ),
		'set_featured_image'    => __( 'Escolher imagem destaque', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagem destaque', 'text_domain' ),
		'use_featured_image'    => __( 'Usar imagem destaque', 'text_domain' ),
		'insert_into_item'      => __( 'Inserir no item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Upload neste item', 'text_domain' ),
		'items_list'            => __( 'Lista', 'text_domain' ),
		'items_list_navigation' => __( 'Navegação dos itens', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Cliente', 'text_domain' ),
		'description'           => __( 'Cadastro de Cliente', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'cliente', $args );

}
add_action( 'init', 'cliente', 0 );


// Cliente
function pedido() {

	$labels = array(
		'name'                  => _x( 'Pedido', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Pedido', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Pedidos', 'text_domain' ),
		'name_admin_bar'        => __( 'Pedido', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Item Pai', 'text_domain' ),
		'all_items'             => __( 'Todos', 'text_domain' ),
		'add_new_item'          => __( 'Novo', 'text_domain' ),
		'add_new'               => __( 'Novo', 'text_domain' ),
		'new_item'              => __( 'Novo', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'Atualizar', 'text_domain' ),
		'view_item'             => __( 'Ver', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Imagem Destaque', 'text_domain' ),
		'set_featured_image'    => __( 'Escolher imagem destaque', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagem destaque', 'text_domain' ),
		'use_featured_image'    => __( 'Usar imagem destaque', 'text_domain' ),
		'insert_into_item'      => __( 'Inserir no item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Upload neste item', 'text_domain' ),
		'items_list'            => __( 'Lista', 'text_domain' ),
		'items_list_navigation' => __( 'Navegação dos itens', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Pedido', 'text_domain' ),
		'description'           => __( 'Cadastro de Pedido', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'pedido', $args );

}
add_action( 'init', 'pedido', 0 );



 ?>