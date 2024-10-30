<?php
/*
Plugin Name: Listic Listicle Creator
Plugin URI: http://elliottbernstein.com/downloads/listic-listicle-creator/
Description: Use the [listic] shortcode to quickly and easily create awesome multi-page listicles.
Version: 0.1
Author: Elliott Bernstein
Author URI: http://elliottbernstein.com
Author email: elliott@elliottbernstein.com
License: GPLv2 or later

/*	Copyright 2015 Elliott Bernstein
*/


//load jquery
wp_register_script( 'listic_js', plugins_url('/listicle.js', __FILE__), array('jquery'));

wp_enqueue_script( 'listic_js' );

//load css
wp_register_style( 'listic_css', plugins_url('/listic.css', __FILE__), array(), '20120208', 'all');

wp_enqueue_style( 'listic_css' );



//add our "item" query string to WP public query variables
function add_query_vars_filter( $vars ){
  $vars[] = "item";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );


//add the shortcode
add_shortcode( 'listic', 'listicle_func' );


//create the shortcode function with item defining item number and content containing item text
function listicle_func( $atts, $content = null ) {
	    $a = shortcode_atts( array(
        'item' => '',
    ), $atts );

	//turn shorcode att into $item variable
	extract($a);
	//get the current url
	$url = $_SERVER['REQUEST_URI'];
	$url = str_replace('%20', ' ', $url);

	//set the query string term
	$query = 'item';


	
	//get the query string value
	$selected = get_query_var($query);

	//check if the current URL is a a single post
	if (is_single()) {
		//check if current URL contains our "item" query string
		if (strpos($url, $selected) !== false){
					//if query string value is equal to the selected item
					if (strpos($item, $selected) !== false){
						//change css to display the div of the matching item & highlight current item number
						$display = "block";
						$current = "listic-current-item-number";

					}else {
						//change css to hide the divs of the non-matching items & do not highlight the item number
						$display = "none";
						$current = "listic-non-current-item-number";
			}
			//if the current URL doesn't contain our "s" query string
		} else {
			//find the starting slide
			if (strpos($item, "start") !== false){
						//change css to display the div of the starting slide & highlight current item number
						$display = "block";
						$current = "listic-current-item-number";

					} else {
						//change css to hide the divs of the others lides & do not highlight the item number
						$display = "none";
						$current = "listic-non-current-item-number";
					}
		}

		//build the html and css for the list item divs, then dump the content into it 
		$content_out = '<div style="display:'.$display.';" class="listic-content-box listic-content-box-'.$item.'">'.$content.'</div>';
		
		//build the html for the list numbers
		$list_out .='<a class="listic-item-number '.$current.' listic-item-number-'.$item.'" style="list-style: none; display: inline-block; padding: 3px; margin-right: 5px; border: 1px solid #ccc; border-radius: 3px" href="'.add_query_arg( $query, $item ).'">'.$item.'</a>';
		//put it all on the page, blammo
		return $content_out.' '.$list_out;

		//if the post is dispalyed on a non-single page post, show the starting slide only, and no item numbers
	} else {
		//find the starting slide
		if (strpos($item, "start") !== false){
						//change css to display the div of the starting slide
						$display = "block";

					} else {
						//change css to hide the divs of the other slides
						$display = "none";
					}
		//build the html and css for the list item divs, then dump the content into it 
		$content_out = '<div style="display:'.$display.';" class="listic-list-preview">'.$content.'</div>';
		//put it all on the page, blammo
		return $content_out;
	}
}



?>
