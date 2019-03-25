<?php
//создаем новый тип постов
add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type('bets_my_type', array(
		'label'  => null,
		'labels' => array(
			'name'               => __('Ставки','translating_for_bets_plugin'),
			'singular_name'      => __('Cтавка','translating_for_bets_plugin'),
			'add_new'            => __('Добавь ставку','translating_for_bets_plugin'),
			'add_new_item'       => __('Добавить новую Ставку','translating_for_bets_plugin'),
			'edit_item'          => __('Редактирование Ставки','translating_for_bets_plugin'),
			'new_item'           => __('Новая Ставка','translating_for_bets_plugin'),
			'view_item'          => __('Смотреть Ставку','translating_for_bets_plugin'),
			'search_items'       => __('Искать Ставку','translating_for_bets_plugin'),
			'not_found'          => __('Ставка не найдена','translating_for_bets_plugin'),
			'not_found_in_trash' => __('Ставка не найдена в корзине','translating_for_bets_plugin'),
			'parent_item_colon'  => '',
			'menu_name'          => __('Меню ставок','translating_for_bets_plugin'),
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'bets_post',
		'capabilities' => array(
			'edit_post'		 => "edit_bets_post",
			'read_post'		 => "read_bets_posts",
			'delete_post'	 => "delete_bets_post",
			'create_posts' => 'create_bets_post',
			'delete_private_posts' => 'delete_private_posts',
			'edit_private_posts' => 'edit_private_bets_posts',

            'publish_posts' => 'publish_bets_posts',
            'edit_posts' => 'edit_bets_posts',
            'edit_others_posts' => 'edit_others_bets_posts',
            'delete_posts' => 'delete_bets_posts',
            'delete_others_posts' => 'delete_others_bets_posts',
            'read_private_posts' => 'read_private_bets_posts',

		),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
		'taxonomies'          => array('type_of_bets', 'status_of_bets')
	) );
}