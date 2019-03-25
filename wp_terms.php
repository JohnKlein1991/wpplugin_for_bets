<?php
 //добавляем нужные термины
//add_action('init', 'add_my_term');
function add_my_term(){
	wp_insert_term( 'Ординар', 'type_of_bets',
        array(
            'description' => __('Одиночное событие','translating_for_bets_plugin'),
            'slug'        => 'ordinar',
        ));
	wp_insert_term( 'Экспресс', 'type_of_bets', array(
        'description' => __('Несколько событий','translating_for_bets_plugin'),
        'slug'        => 'express',
    ));
	wp_insert_term( 'выигрыш', 'status_of_bets', array(
        'description' => __('Выигрыш','translating_for_bets_plugin'),
        'slug'        => 'win',
    ));
	wp_insert_term( 'проигрыш', 'status_of_bets', array(
        'description' => __('Проигрыш','translating_for_bets_plugin'),
        'slug'        => 'lose',
    ));
	wp_insert_term( 'возврат', 'status_of_bets', array(
        'description' => __('Возврат','translating_for_bets_plugin'),
        'slug'        => 'Возврат',
    ));
	wp_insert_term( 'активная', 'status_of_bets', array(
        'description' => __('Активная','translating_for_bets_plugin'),
        'slug'        => 'active',
    ));
}

