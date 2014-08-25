<h1><i class="icon-flag-alt"></i> <?php echo $languages[$this->lang->lang()]; ?>: All Examples</h1>
    
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID: </th>
            <th>Slug: </th>
            <th>Name: </th>
            <th>Age: </th>
            <th>Control: </th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($all->result() as $object) { ?>
        <tr>
            <td><?php echo $object->id; ?></td>
            <td><?php echo $object->slug; ?></td>
            <td><?php echo $object->name; ?></td>
            <td><?php echo $object->age; ?></td>
            <td class="control_panel">
                <ul class="icons-ul">
                    <li>
                        <a href="<?php echo site_url('admin/example/edit/'. $object->id); ?>" title="Edit"><i class="icon-li icon-pencil"></i> Edit</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/example/delete/'. $object->id); ?>" title="Delete"><i class="icon-li icon-trash"></i> Delete</a>
                    </li>
                </ul>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>