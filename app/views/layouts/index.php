<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title_for_layout; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="author" content="Aarón Munguía">
        <meta name="generator" content="flavorPHP" />
        <?php echo $this->html->charsetTag("UTF-8"); ?>
        <?php echo $this->html->includeFavicon(); ?>
        <link rel="stylesheet" href="<?php echo Path; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <?php echo $this->html->includeCSS('skin'); ?>
        <?php echo $this->html->includeCSS('skin.index'); ?>

        <script src="<?php echo Path; ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo Path; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="header">

                <ul class="nav nav-pills pull-right">
                    <li class="<?php echo $navPills[0]; ?>"><?php echo $this->html->linkTo("Home","index/"); ?></li>
                    <li class="<?php echo $navPills[1]; ?>"><?php echo $this->html->linkTo("Open door","door/"); ?></li>
                    <li class="<?php echo $navPills[2]; ?>"><?php echo $this->html->linkTo("Log in","login/"); ?></li>
                    <!-- <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li> -->
                </ul>
                
                <h3 class="text-muted">
                    <?php echo $this->html->linkTo($this->html->image("makers-logo.png", '', 'id="header-logo"'), ""); ?> 
                    Makers Space
                </h3>
            </div>
            <?php echo $content_for_layout ?>
            <div class="footer">
                <p>&copy; Makers GDL 2014</p>
            </div>
        </div>
    </body>
</html>
