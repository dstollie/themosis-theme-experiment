<?php
/*
Plugin Name: Impres
Description: Some default impres credits.
Author: Impres
Author URI: http:/www.impres.nl
*/

class impres_Plugin {

	/**
	 * Generic add hooks function
	 */
	public function add_hooks() {
		add_action( 'wp_head', array( $this, 'add_to_source' ), 0 );
		add_action( 'wp_head', array( $this, 'add_head_credits' ), 0 );
	}

	/**
	 * Add the meta author
	 */
	public function add_head_credits() {
		echo '<meta name="author" content="Impres - http://www.impres.nl">', "\n";
	}

	/**
	 * We want some credit for our work, so we add a generator with our company as content.
	 * This way there is no annoying visual thing on the website but we are still getting the credit.
	 */
	public function add_to_source() {
		$impres = <<<IMPRESCOPYRIGHT
<!--
        ____
       /  _/___ ___  ____  ________  _____
       / // __ `__ \/ __ \/ ___/ _ \/ ___/
     _/ // / / / / / /_/ / /  /  __(__  )
    /___/_/ /_/ /_/ .___/_/   \___/____/
                 /_/

    Deze website is met veel plezier en trots ontworpen en ontwikkeld door Impres.

    Wil jij ook zo'n kekke website die er én mooi uit ziet en ook nog eens doet wat hij moet doen?
    Neem dan contact met ons op! Wij zorgen voor lekkere koffie (of iets anders).

    Wij blinken uit in creatieve technische oplossingen en hebben een enorm sterke drive om dingen écht beter te maken.

    Liever zelf bouwen aan fancy websites en toffe maatwerkprojecten? Wij zijn altijd op zoek naar talent.
    Wordt je blij van woorden als Laravel, Meteor en Comic Sans, NerfGuns en Smoothies? Misschien kunnen wij dan
    wel een bureau-tje voor je vrijmaken :-)

    - xoxo

    Impres B.V.

    [ W: http://impres.nl ] [ E: info@impres.nl ] [ T: 038 - 386 91 81 ]

-->
IMPRESCOPYRIGHT;

		echo $impres;

	}
}

$impresPlugin = new impres_Plugin();
$impresPlugin->add_hooks();