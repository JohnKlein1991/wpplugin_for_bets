<?php
//создаем роли модератора и каппера и даем им нужные права. Также делегируем администратору
// все права связанные со ставками
function createCustomRoles(){
    $subscriberCapabilities = get_role('subscriber')->capabilities;
	$capperCapabilities = array_merge(
	    $subscriberCapabilities,
        [

            "edit_bets_post" => true,

            //'delete_bets_post' => true,
            'create_bets_post'=> true,
            //'delete_private_posts' => true,
            'edit_private_bets_posts' => true,
            'publish_bets_posts' => true,
            'edit_bets_posts' => true,
            //'edit_others_bets_posts' => true,
            //'delete_bets_posts' => true,
            //'delete_others_bets_posts' => true,
            "read_bets_posts"=> true,
            'read_private_bets_posts' => true,

            //'manage_status_of_bets' => true,
            //'edit_status_of_bets' => true,
            //'delete_status_of_bets' => true,
            //'assign_status_of_bets' => true,
            //'manage_type_of_bets' => true,
            //'edit_type_of_bets' => true,
            //'delete_type_of_bets' => true,
            //'assign_type_of_bets' => true
		]
    );
	add_role('capper', __('Каппер','translating_for_bets_plugin'), $capperCapabilities);
	
	$moderatorCapabilities = array_merge(
        $subscriberCapabilities,
        [
        "edit_bets_post" => true,
        "read_bets_posts"=> true,
        //'delete_bets_post' => true,
        'create_bets_post'=> true,
        //'delete_private_posts' => true,
        //'edit_private_bets_posts' => true,
        'publish_bets_posts' => true,
        'edit_bets_posts' => true,
        'edit_others_bets_posts' => true,
        //'delete_bets_posts' => true,
        //'delete_others_bets_posts' => true,
        //'read_private_bets_posts' => true,

        //'manage_status_of_bets' => true,
        //'edit_status_of_bets' => true,
        //'delete_status_of_bets' => true,
        //'assign_status_of_bets' => true,
        //'manage_type_of_bets' => true,
        //'edit_type_of_bets' => true,
        //'delete_type_of_bets' => true,
        //'assign_type_of_bets' => true

	]);
	add_role('moderator', __('Модератор','translating_for_bets_plugin'), $moderatorCapabilities);
	
}

function addBetsCapsToAdmin(){
    $role = get_role( 'administrator' );
    $caps = [

        "edit_bets_post",

        'delete_bets_post',
        'create_bets_post',
        'delete_private_posts',
        'edit_private_bets_posts',
        'publish_bets_posts',
        'edit_bets_posts',
        'edit_others_bets_posts',
        'delete_bets_posts',
        'delete_others_bets_posts',
        "read_bets_posts",
        'read_private_bets_posts',

        'manage_status_of_bets',
        'edit_status_of_bets',
        'delete_status_of_bets',
        //'assign_status_of_bets',
        'manage_type_of_bets',
        'edit_type_of_bets',
        'delete_type_of_bets',
        //'assign_type_of_bets'
    ];
    foreach ($caps as $cap){
        $role->add_cap($cap);
    }
}

function removeBetsCapsFromAdmin(){
    $role = get_role( 'administrator' );
    $caps = [

        "edit_bets_post",

        'delete_bets_post',
        'create_bets_post',
        'delete_private_posts',
        'edit_private_bets_posts',
        'publish_bets_posts',
        'edit_bets_posts',
        'edit_others_bets_posts',
        'delete_bets_posts',
        'delete_others_bets_posts',
        "read_bets_posts",
        'read_private_bets_posts',

        'manage_status_of_bets',
        'edit_status_of_bets',
        'delete_status_of_bets',
        'assign_status_of_bets',
        'manage_type_of_bets',
        'edit_type_of_bets',
        'delete_type_of_bets',
        'assign_type_of_bets'
    ];
    foreach ($caps as $cap){
        $role->remove_cap($cap);
    }
}


function removeCustomRoles(){
	remove_role('capper');
    remove_role('moderator');
}