/**
 * This script adds the jquery effects to the Altitude Pro Theme.
 *
 * @package Altitude\JS
 * @author StudioPress
 * @license GPL-2.0+
 */

jQuery(function( $ ){

	if( $( document ).scrollTop() > 0 ){
		$( '.site-header' ).addClass( 'dark' );
	}

	// Add opacity class to site header.
	$( document ).on('scroll', function(){

		if ( $( document ).scrollTop() > 0 ){
			$( '.site-header' ).addClass( 'dark' );

		} else {
			$( '.site-header' ).removeClass( 'dark' );
		}

	});
	
});

jQuery(document).ready(function($){
	setTimeout(function() {
		//$("#yellow-pencil").remove("style");
	}, 500);
	
	$('.customer-service').on('click',function(){
		$('.customer-service-pop').addClass('open');
	});
	
	$('.graphic-artists').on('click',function(){
		$('.graphic-artists-pop').addClass('open');
	});
	
	$('.order-management').on('click',function(){
		$('.order-management-pop').addClass('open');
	});
	
	$('.accounting').on('click',function(){
		$('.accounting-pop').addClass('open');
	});
	
	$('.video-editing').on('click',function(){
		$('.video-editing-pop').addClass('open');
	});
	
	$('.lead-generation').on('click',function(){
		$('.lead-generation-pop').addClass('open');
	});
	
	

	$('.close-button > a').on('click',function(){
		$('.modal-main').removeClass('open');
	});
	
});