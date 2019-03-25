<?php
//для типа постов "Ставки" создаем новый таксы
add_action( 'init', 'create_bets_taxonomies' );
function create_bets_taxonomies(){

	register_taxonomy('type_of_bets', 'bets_my_type', array(
		'hierarchical'  => false,
		'labels'        => array(
			'name'              => __( 'Типы ставок', 'translating_for_bets_plugin' ),
			'singular_name'     => __( 'Тип ставки', 'translating_for_bets_plugin' ),
			'search_items'      =>  __('Искать тип ставки', 'translating_for_bets_plugin'),
			'all_items'         => __( 'Все типы', 'translating_for_bets_plugin'),
			'parent_item'       => __( 'Parent Genre', 'translating_for_bets_plugin'),
			'parent_item_colon' => __( 'Parent Genre:', 'translating_for_bets_plugin'),
			'edit_item'         => __( 'Редактировать тип', 'translating_for_bets_plugin'),
			'update_item'       => __( 'Изменить тип', 'translating_for_bets_plugin'),
			'add_new_item'      => __( 'Добавить новый тип', 'translating_for_bets_plugin'),
			'new_item_name'     => __( 'Новое имя типа', 'translating_for_bets_plugin'),
			'menu_name'         => __( 'Тип ставки', 'translating_for_bets_plugin'),
		),

        'capabilities' => array(
            'manage_terms' => 'manage_type_of_bets',
            'edit_terms' => 'edit_type_of_bets',
            'delete_terms' => 'delete_type_of_bets',
            'assign_terms' => 'assign_type_of_bets',
        ),

		'show_ui'       => true,
		'query_var'     => true,
        'meta_box_cb' => 'post_categories_meta_box'
	));

	register_taxonomy('status_of_bets', 'bets_my_type',array(
		'hierarchical'  => false,
		'labels'        => array(
			'name'                        => __( 'Статусы ставок', 'translating_for_bets_plugin'),
			'singular_name'               => __( 'Статус ставки', 'translating_for_bets_plugin'),
			'search_items'                =>  __( 'Искать статус ставки', 'translating_for_bets_plugin'),
			'popular_items'               => __( 'Popular Writers', 'translating_for_bets_plugin'),
			'all_items'                   => __( 'Все статусы', 'translating_for_bets_plugin'),
			'edit_item'                   => __( 'Редактировать статус', 'translating_for_bets_plugin'),
			'update_item'                 => __( 'Изменить статус', 'translating_for_bets_plugin'),
			'add_new_item'                => __( 'Добавить новый статус', 'translating_for_bets_plugin'),
			'new_item_name'               => __( 'Новое имя статуса', 'translating_for_bets_plugin'),
			'separate_items_with_commas'  => __( 'Separate writers with commas', 'translating_for_bets_plugin'),
			'add_or_remove_items'         => __( 'Добавить или удалить статус', 'translating_for_bets_plugin'),
			'choose_from_most_used'       => __( 'Choose from the most used writers', 'translating_for_bets_plugin'),
			'menu_name'                   => __( 'Статусы ставок', 'translating_for_bets_plugin'),
		),

        'capabilities' => array(
            'manage_terms' => 'manage_status_of_bets',
            'edit_terms' => 'edit_status_of_bets',
            'delete_terms' => 'delete_status_of_bets',
            'assign_terms' => 'assign_status_of_bets',
        ),

        'show_in_nav_menus' => true,
		'show_ui'       => true,
		'query_var'     => true,
		'meta_box_cb' => 'post_categories_meta_box'
	));
    add_my_term();
}