<?php

function tinytypo_insert_head_css($flux) {
	$flux .= '<link rel="stylesheet" href="'.find_in_path('css/tinytypo.css').'" type="text/css" media="all" />';
	$flux .= '<link rel="stylesheet" href="'.produire_fond_statique('css/tinytypo.css').'" type="text/css" media="all" />';
	return $flux;
}

?>