<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
<meta charset="utf-8">
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
<?php print $styles; ?>
<?php print $scripts; ?>
<!-- HTML5 element support for IE6-8 -->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<?php print $page_top; ?>
<?php print idpo_clean($page); ?>
<?php print $page_bottom; ?>
</body>
</html>