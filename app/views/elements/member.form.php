<fieldset>
    <legend>Membership</legend>

    <div class="form-group">
        <label for="membership_type" class="control-label col-sm-2">Membership:</label>
        <div class="col-sm-10">
            <select class="form-control" name="membership_type" id="">
                <option value="1" <?php echo $member['membership_type'] == 1 ? "selected":""; ?>>Normal</option>
                <option value="2" <?php echo $member['membership_type'] == 2 ? "selected":""; ?>>Student</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="registration_date">Registration date:</label>
        <div class="col-sm-10">
            <input class="form-control" type="date" name="registration_date" placeholder="mm/dd/yyyy" value="<?php echo $member['registration_date']; ?>">
        </div>
    </div>
</fieldset>

<fieldset>
    <legend>Member</legend>

    <div class="form-group">
        <label class="control-label col-sm-2" for="first_name">Full name:</label>
        <div class="col-sm-5">
            <input class="form-control" type="text" name="first_name" value="<?php echo $member['first_name']; ?>" placeholder="First name">
        </div>
        <div class="col-sm-5">
            <input class="form-control" type="text" name="last_name" value="<?php echo $member['last_name']; ?>" placeholder="Last name">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="email">Email:</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="email" value="<?php echo $member['email']; ?>" placeholder="member@email.com">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="phone">Phone:</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="phone" placeholder="123-456-789">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="ife">ID number (ife):</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="ife" placeholder="ife">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="student_id">student ID:</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="student_id" placeholder="proof of studies">
        </div>
    </div>
</fieldset>