<h1>Members</h1>

<?php $this->renderElement("messages"); ?>

<p>
    <?php echo $this->html->linkTo("Register new member", "members/create", 'class="btn btn-primary"'); ?>
</p>

<div class="row">
    <div class="col-sm-12">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2">Full name</th>
                    <th>Email</th>
                    <th>
                        Member since <br>
                        mm/dd/yyyy
                    </th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($members as $key => $member): ?>
                <tr>
                    <td><?php echo $member['first_name'] ?></td>
                    <td><?php echo $member['last_name'] ?></td>
                    <td><?php echo $member['email']; ?></td>
                    <td><?php echo date("M d, Y", strtotime($member['registration_date'])); ?></td>
                    <td>
                        <div class="btn-group">
                            <?php echo $this->html->linkTo("<span class='glyphicon glyphicon-pencil'></span> Edit", "members/update/{$member['idMember']}", 'class="btn btn-primary"'); ?>
                            <?php echo $this->html->linkToConfirm("<span class='glyphicon glyphicon-trash'></span> Delete", "members/delete/{$member['idMember']}", 'class="btn btn-danger"'); ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>

        <?php echo $pagination; ?>
    </div>
</div>