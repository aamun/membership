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

        <script src="<?php echo Path; ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo Path; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <?php //echo $this->html->includeJs('jquery-ui-1.10.4.custom.min'); ?>
        <style>
            body { padding-top: 70px; }
        </style>
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo $this->html->linkTo("Dashboard", 'dashboard', 'class="navbar-brand"'); ?>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><?php echo $this->html->linkTo("Logout", "login/logout"); ?></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?php echo $activeDashboardMenu[0]; ?> dropdown">
                            <?php echo $this->html->linkTo("Members <b class=\"caret\"></b>", "members", 'class="dropdown-toggle" data-toggle="dropdown"'); ?>
                            <ul class="dropdown-menu">
                                <li>
                                    <?php echo $this->html->linkTo("Create member", "members/create"); ?>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <?php echo $this->html->linkTo('View All', 'members/'); ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div class="container">
            <?php echo $content_for_layout ?>
        </div>
    </body>
</html>
