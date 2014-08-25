<form action="<?php echo site_url("admin/{$module}/insert"); ?>" method="post">
    <fieldset>
        <legend><i class="icon-flag-alt"></i> <?php echo _e($this->lang->lang()); ?>: <?php echo ucwords($action); ?></legend>
    <div class="form-group">
        <label for="key">Key: </label>
            <input class="form-control" type="text" id="key" name="key" placeholder="Enter a nuique key value" value="<?php if (!isset($key)) { echo set_value('key'); } else { echo $key; } ?>" />
        <p class="help-block"><small>Should be unique key value, like "Phone" and 50 chars max.</small></p>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label for="value">Value: </label><textarea class="form-control" name="value" rows="5"><?php if (!isset($value)) { echo set_value('value'); } else { echo $value; } ?></textarea>
            <p class="help-block"><small>Enter a value for the key value, like 555 66 89 and 255 chars max.</small></p>
        </div>
    </div>
    <div class="form-group">
        <input type="hidden" name="action" value="<?php echo set_value('action', $action); ?>" />
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-default"><?php echo ucwords($action); ?></button>
    </div>
    </fieldset>
</form>