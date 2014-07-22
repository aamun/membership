<h2>Dashboard Makers Space</h2>

<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Members</h4>
            </div>
            <div class="panel-body">
                <div class="pull-right">
                    <?php echo $this->html->linkTo("View all", "members"); ?>
                </div>

                Members: <?php echo $totalMembers; ?>
            </div>
        </div>
    </div>
</div>