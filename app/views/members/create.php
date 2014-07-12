<h2>Members Register</h2>

<?php $this->renderElement("messages"); ?>

<?php echo $this->html->form("members/create", "POST", 'class="form-horizontal"'); ?>
    <?php $this->renderElement("member.form"); ?>
    
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input type="submit" value="Save" class="btn btn-primary">
            <?php echo $this->html->linkTo("Cancel", "members", 'class="btn btn-default"'); ?>
        </div>
    </div>
</form>