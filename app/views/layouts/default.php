<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title_for_layout; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="author" content="Aarón Munguía">
        <meta name="generator" content="flavorPHP" />
        <?php echo $this->html->charsetTag("UTF-8"); ?>
        <link rel="stylesheet" href="<?php echo Path; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <?php echo $this->html->includeCSS('skin'); ?>

        <script src="<?php echo Path; ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo Path; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php echo $content_for_layout ?>
    </body>
</html>
