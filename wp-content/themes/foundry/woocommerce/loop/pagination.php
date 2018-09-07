<?php
	/**
	 * @package Foundry
	 * @author TommusRhodus
	 * @version 9.9.9
	 */
	global $wp_query;
	
	if ( $wp_query->max_num_pages <= 1 )
		return;
	
	echo ebor_pagination($wp_query->max_num_pages);