<h1><i class="icon-flag-alt"></i> <?php echo _e($this->lang->lang()); ?>: All <?php echo $module; ?> options</h1>
    
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID: </th>
            <th>Key: </th>
            <th>Value: </th>
            <th>Control: </th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($all->result() as $object) { ?>
        <tr>
            <td><?php echo $object->id; ?></td>
            <td><?php echo $object->key; ?></td>
            <td><?php echo $object->value; ?></td>
            <td class="control_panel">
                <ul class="icons-ul">
                    <li>
                        <a href="<?php echo site_url("admin/{$module}/edit/{$object->id}"); ?>" title="Edit"><i class="icon-li icon-pencil"></i> Edit</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("admin/{$module}/delete/{$object->id}"); ?>" title="Delete"><i class="icon-li icon-trash"></i> Delete</a>
                    </li>
                </ul>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>