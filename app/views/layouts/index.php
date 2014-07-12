<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title_for_layout; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="author" content="Aarón Munguía">
        <meta name="generator" content="flavorPHP" />
        <?php echo $this->html->charsetTag("UTF-8"); ?>
        <link rel="stylesheet" href="<?php echo Path; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <?php echo $this->html->includeCSS('skin.index'); ?>

        <script src="<?php echo Path; ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo Path; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <ul class="nav nav-pills pull-right">
                    <li class="active"><?php echo $this->html->linkTo("Home","index/"); ?></li>
                    <!-- <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li> -->
                </ul>
                <h3 class="text-muted">Membership - Makers GDL</h3>
            </div>
            <?php echo $content_for_layout ?>
            <div class="footer">
                <p>&copy; Makers GDL 2014</p>
            </div>
        </div>
    </body>
</html>
