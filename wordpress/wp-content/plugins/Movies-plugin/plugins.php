<?php
/*
Plugin Name: Movies-Plugin
Plugin URI:
Description: Плагин для отображения списка фильмов.
Version: 1.0
Author: Demyankov
Author URI:
*/

add_filter('the_content', 'display_movies_content');
function display_movies_content($content){
    $countries = get_the_terms($post->ID, 'countries');
    $genres = get_the_terms($post->ID, 'genres');
    $years = get_the_terms($post->ID, 'years');
    $actors = get_the_terms($post->ID, 'actors');
    $content ='<div>
                    <span>Страна: '.$countries[0]->name. '</span>
                    <span>Жанр: '.$genres[0]->name. '</span>
                    <span>Год: '.$years[0]->name. '</span>
                    <span>Актеры: '.$actors[0]->name. '</span>
                </div>';
    $content .= $country;
   return $content;
}