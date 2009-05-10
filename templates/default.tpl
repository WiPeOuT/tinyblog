<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>A tiny Blog</title>
</head>
<body>

<div id="blog">

<?php
foreach($posts as $post):
?>
<div class="blog-post">
	<h1><a href="<?php echo buildLink('show', $post['id'], $post['title']); ?>"><?php echo printHTML($post['title']); ?></a></h1><?php echo date('d.m.Y H:i', $post['date']); ?><br/>
	<p><?php echo printHTML($post['text'], true); ?></p>
</div>
<?php
endforeach;
?>

</div>

</body>
</html>