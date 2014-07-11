<!DOCTYPE html>
<html lang="en" xml:lang="en">
	<head>
    	<title><?php echo $title_for_layout; ?></title>
		<meta name="generator" content="flavorPHP" />
        <?php echo $this->html->charsetTag("UTF-8"); ?>		
	</head>
    <body>
        <div>
            <?php echo $content_for_layout ?>
        </div>
    </body>
</html>
