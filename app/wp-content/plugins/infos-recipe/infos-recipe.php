<?php 
/**
 * Plugin Name: Infos Shortcode
 * Description: Add a shortcode for displaying infos on recipe.
 * Version: 1.0
 * Author: marmichlingue 
 * Text Domain: infos-shortcode
 * 
 * @package Infos Shortcode
 */


function init_shortcode(){
    function shortcode_infos($atts){
        $a = shortcode_atts(
            array(
                'time' => 10,
                'difficulty' => 2,
                'price' => 15
        ), $atts);

        switch ($a['difficulty']) {
            case 1:
                $difficulty = 'Très Facile';
                break;
            case 2:
                $difficulty = 'Moyennement dur';
                break;
            case 3:
                $difficulty = 'Très dur';
                break;
            default:
                $difficulty = 'Phillipe Etchebest';
                break;
        }
        
        if($a['price'] < 10){
            $price = 'Pas cher';
        } else if ($a['price'] < 30){
            $price = 'Bon marché';
        } else {
            $price = 'Très cher';
        }
        
        
        $par = '<div style="display: flex; width: 100%; justify-content: center;" class="container" >';
        $par .= '<div class="block">'.$a['time'].' minutes</div>';
        $par .= '<div style="margin-left: 20px;" class="dot">.</div>';
        $par .= '<div style="margin-left: 20px;" class="block">'.$difficulty.'</div>';
        $par .= '<div style="margin-left: 20px;" class="dot">.</div>';
        $par .= '<div style="margin-left: 20px;" class="block">'.$price.'</div>';
        $par .= '</div>';

        return $par;
    }
}


add_shortcode('infos-recette', 'shortcode_infos');

add_action('init', 'init_shortcode');
