<?php
/* WIDGETS */
 
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

// wp_nav_menu( array(
// 	‘menu’ => ‘meu_menu’,
// 	‘theme_location’ => ‘meu_menu’,
// 	‘container’ => ‘div’,
// 	‘container_class’ => ‘classe_do_container’,
// 	‘container_id’ => ‘id_do_container’,
// 	‘menu_class’ => ‘classe_do_menu’,
// 	‘echo’ => true,
// 	‘menu_id’ => ‘id_do_menu’,
// 	‘before’ => ”,
// 	‘after’ => ”,
// 	‘link_before’ => ”,
// 	‘link_after’ => ”,
// 	‘depth’ => 0,
// 	‘walker’ => ”,
// ) );

?>