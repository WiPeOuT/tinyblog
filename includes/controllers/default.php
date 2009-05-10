<?php

$tpl = 'default.tpl';

$query = 'SELECT 
				`id`, `date`, `title`, `text` 
			FROM
				`blog_posts`
			ORDER BY
				`date` DESC
			LIMIT
				5';
if(!($result = $db->query($query)))
{
	trigger_error('<br/>'.$query.'<br/> is an invalid query.', E_USER_ERROR);
}

while($row = $result->fetch_assoc())
{
	$posts[] = $row;
}

include('./templates/'.$tpl);
?>