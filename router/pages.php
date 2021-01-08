<?php
class pages{
	var $load;
	var $defaulthome;
	var $domain;
	function __construct(){

		//Name of the Domain carefull for the HTTP or HTTPS
		$this->domain = 'http://juliasowens.com';

		//Define your pages in here for each language
		$this->load = array(
			'index.html' => array('home'),
			'about.html' => array('about'),
			'careshare.html' => array('careshare'),
			'draftslam.html' => array('draftslam'),
			'art.html' => array('art'),
			'sideprojects.html' => array('sideprojects'),
			'webdesign.html' => array('webdesign'),
		);

		//Define your default home page name for each language here
		$this->defaulthome = array(
			'en' => 'home'
		);

	}
}
?>
