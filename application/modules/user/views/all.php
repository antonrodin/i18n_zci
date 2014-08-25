<h1>Todos los usuarios</h1>
    
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID: </th>
            <th>Nombre: </th>
            <th>Contraseña (md5 encryption): </th>
            <th>Correo electronico: </th>
            <th>Control: </th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($all->result() as $object) { ?>
        <tr>
            <td><?php echo $object->id; ?></td>
            <td><?php echo $object->username; ?></td>
            <td><?php echo $object->password; ?></td>
            <td><?php echo $object->email_address; ?></td>
            <td class="control_panel">
                <ul class="icons-ul">
                    <li>
                        <a href="<?php echo site_url('admin/user/edit/'. $object->id); ?>" title="Edit"><i class="icon-li icon-pencil"></i> Edit</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/user/delete/'. $object->id); ?>" title="Delete"><i class="icon-li icon-trash"></i> Delete</a>
                    </li>
                </ul>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>