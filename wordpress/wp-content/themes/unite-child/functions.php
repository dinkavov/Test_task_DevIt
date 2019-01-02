<?php
add_theme_support( 'post-thumbnails', array( 'movie' ) );
add_action( 'init', 'register_customer_post_type');

function register_customer_post_type() {
    register_post_type( 'movie', [
        'label' => null,
        'labels' => [
            'name' => 'Фильмы',
            'singular_name' => 'movie',
            'add_new' => 'Добавить фильм',
            'add_new_item' => 'Добавление фильма',
            'edit_item' => 'Редактирование фильма',
            'view_item' => 'Смотреть фильм',
            'search_item' => 'Искать фильм',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'menu_name' => 'Фильмы'
        ],
        'description' => 'Лучшие фильмы всех жанров 2018 года.',
        'public' => true,
        'public_queryable' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_icon' => 'dashicons-video-alt2',
        'menu_position' => 9.1,
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => ['countries', 'genres', 'years', 'actors', 'post-formats']
    ]);
}

add_action( 'init', 'create_movie_taxonomy' );
function create_movie_taxonomy(){
    register_taxonomy( 'countries', array( 'movie' ), [
        'label'                 => '',
        'labels'                => [
            'name'              => 'Страны',
            'singular_name'     => 'Страна',
            'search_items'      => 'Найти  страну',
            'all_items'         => 'Все страны',
            'view_item '        => 'Смотреть страну',
            'edit_item'         => 'Редактировать страну',
            'update_item'       => 'Обновить страну',
            'add_new_item'      => 'Добавить страну',
        ],
        'description'           => '',
        'public'                => true,
        'publicly_queryable'    => null,
        'show_in_nav_menus'     => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_tagcloud'         => true,
        'show_in_rest'          => null,
        'rest_base'             => null,
        'hierarchical'          => false,
        'update_count_callback' => '',
        'rewrite'               => true,
        'capabilities'          => array(),
        'meta_box_cb'           => null,
        'show_admin_column'     => false,
        '_builtin'              => false,
        'show_in_quick_edit'    => null,
    ]);

    register_taxonomy( 'genres', array( 'movie' ), [
        'label'                 => '',
        'labels'                => [
            'name'              => 'Жанры',
            'singular_name'     => 'Жанр',
            'search_items'      => 'Найти жанр',
            'all_items'         => 'Все жанры',
            'view_item '        => 'Смотреть жанр',
            'edit_item'         => 'Редактировать жанр',
            'update_item'       => 'Обновить жанр',
            'add_new_item'      => 'Добавить жанр',
        ],
        'description'           => '',
        'public'                => true,
        'publicly_queryable'    => null,
        'show_in_nav_menus'     => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_tagcloud'         => true,
        'show_in_rest'          => null,
        'rest_base'             => null,
        'hierarchical'          => false,
        'update_count_callback' => '',
        'rewrite'               => true,
        'capabilities'          => array(),
        'meta_box_cb'           => null,
        'show_admin_column'     => false,
        '_builtin'              => false,
        'show_in_quick_edit'    => null,
    ]);
    register_taxonomy( 'years', array( 'movie' ), [
        'label'                 => '',
        'labels'                => [
            'name'              => 'Годы',
            'singular_name'     => 'Год',
            'search_items'      => 'Найти год',
            'all_items'         => 'Все годы',
            'view_item '        => 'Смотреть год',
            'edit_item'         => 'Редактировать год',
            'update_item'       => 'Обновить год',
            'add_new_item'      => 'Добавить год',
        ],
        'description'           => '',
        'public'                => true,
        'publicly_queryable'    => null,
        'show_in_nav_menus'     => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_tagcloud'         => true,
        'show_in_rest'          => null,
        'rest_base'             => null,
        'hierarchical'          => false,
        'update_count_callback' => '',
        'rewrite'               => true,
        'capabilities'          => array(),
        'meta_box_cb'           => null,
        'show_admin_column'     => false,
        '_builtin'              => false,
        'show_in_quick_edit'    => null,
    ]);
    register_taxonomy( 'actors', array( 'movie' ), [
        'label'                 => '',
        'labels'                => [
            'name'              => 'Актеры',
            'singular_name'     => 'Актер',
            'search_items'      => 'Найти актера',
            'all_items'         => 'Все актеры',
            'view_item '        => 'Смотреть актера',
            'edit_item'         => 'Редактировать актера',
            'update_item'       => 'Обновить актера',
            'add_new_item'      => 'Добавить актера',
        ],
        'description'           => '',
        'public'                => true,
        'publicly_queryable'    => null,
        'show_in_nav_menus'     => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_tagcloud'         => true,
        'show_in_rest'          => null,
        'rest_base'             => null,
        'hierarchical'          => false,
        'update_count_callback' => '',
        'rewrite'               => true,
        'capabilities'          => array(),
        'meta_box_cb'           => null,
        'show_admin_column'     => false,
        '_builtin'              => false,
        'show_in_quick_edit'    => null,
    ]);
}

add_action( 'add_meta_boxes', 'movie_meta_box_fields', 1 );
function movie_meta_box_fields() {
    add_meta_box( 'movie_meta_box', 'Стоимосить сеанса и дата выхода', 'display_movie_meta_box', 'movie' );

    function display_movie_meta_box($post){
        wp_nonce_field( plugin_basename( __FILE__ ), 'movie_post' );
        echo '
            <table class="form-table">
                <tbody>
                    <tr>
                        <td><label for="movie_price">Стоимость сеанса</label></td>
                        <td><input type="text" name="movie_price" id="movie_price"  value="'.get_post_meta( $post->ID,'movie_price', 1 ).'" size="20"></td>
                    </tr>
                    <tr>
                        <td><label for="date_realize">Дата выхода</label></td>
                        <td><input type="text" name="date_realize" id="date_realize"  value="'.get_post_meta( $post->ID,'date_realize', 1 ).'" size="20"></td>
                    </tr>
                    <input type="hidden" name="movie_post" value="'.wp_create_nonce( __FILE__ ).'">
                </tbody>
            </table>';
    }
}

add_action( 'save_post', 'movie_save_postdata' );
function movie_save_postdata($post_id){
    if ( ! isset( $_POST['movie_post'] ) || !wp_verify_nonce( $_POST['movie_post'], __FILE__) ) return false;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return false;

    if ( ! current_user_can( 'edit_post', $post_id) )
        return false;

    $move_price = sanitize_text_field ( $_POST['movie_price'] );
    update_post_meta( $post_id, 'movie_price', $move_price );
    
    $date_realize = sanitize_text_field( $_POST['date_realize'] );
    update_post_meta( $post_id, 'date_realize', $date_realize );
}

function last_movie() {
    $posts = get_posts( 'post_type=movie' );    
    if ( $posts ) {
        // Output List
        echo '<ul>';        
        foreach( $posts as $post ) { 
            setup_postdata( $post );
            // Output Link
            echo '<li><a href="' . get_the_permalink( $post ). '">' . $post->post_title . '</a></li>';
        }
        echo '</ul>';
    }
    wp_reset_postdata();
} 
add_shortcode( 'lastmovie', 'last_movie' );