<?php
class lkCustomPostTypes {

	public function __construct() {
		add_action( 'cmb2_init', array($this,'ck_custom_meta'));
	}


	public function ck_custom_meta() {

	    // Start with an underscore to hide fields from custom fields list
	    $prefix = '_ck_';

	}


}
global $cpt; 
$cpt = new lkCustomPostTypes(); 
