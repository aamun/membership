<?php echo $this->html->form("login", 'POST', 'role="form" class="form-signin"'); ?>
    <h2 class="form-signin-heading">Please sign in</h2>
    <?php $this->renderElement('messages'); ?>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" class="form-control" placeholder="Email">
    <input type="password" name="password" class="form-control" placeholder="Password">
    <input type="submit" name="login" value="Sign in" class="btn btn-lg btn-primary btn-maker btn-block">
</form>