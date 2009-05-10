<?php
function printHTML($string, $linebreaks = false)
{
	$string = htmlentities($string);
	if($linebreaks)
	{
		$string = nl2br($string);
	}
	
	return $string;
}
function formatUrl($string)
{
	$search = array('ä', 'ö', 'ü', 'ß');
	$replace = array('ae', 'oe', 'ue', 'ss');
	$string = str_replace($search, $replace, $string);
	$string = mb_strtolower($string);
	return urlencode($string);
}

function buildLink($controller, $id, $title = false)
{
	$link = APP_BOOTSTRAP;
	$link .= '/'.$controller;
	$link .= '/'.$id;
	$link .= ( $title ? '/'.formatUrl($title) : '' );
	$link .= '/';
	
	return $link;
}

?>