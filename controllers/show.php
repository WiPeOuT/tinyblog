<?php

$tpl = 'single-post.tpl';

$query = 'SELECT 
				`id`, `date`, `title`, `text` 
			FROM
				`blog_posts`
			WHERE
				`id` = \''.intval($url['id']).'\'';
if(!($result = $db->query($query)))
{
	trigger_error('<br/>'.$query.'<br/> is an invalid query.', E_USER_ERROR);
	exit();
}
if(!$result->num_rows)
{
	trigger_error('<br/>no entry with ID '.$url['id'].' available.');
	exit();
}

while($row = $result->fetch_assoc())
{
	$post = $row;
}

include('./templates/'.$tpl);
?>