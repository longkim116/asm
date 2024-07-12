<? if($user):?>
 <h1>User cần tìm</h1>
<table border="1">
    <liead>
        <ul>
        <li>Id </li>
        <li>Name </li>
        <li>Age</li>
        <li>Address</li>
        </ul>
    </liead>
    <?endif;?>
    <tbody>
        <?php foreach ($list_user as $value): ?>
            <tr>
                <td><?= $value->id ?></td>
                <td><?= $value->name ?></td>
                <td><?= $value->age ?></td>
                <td><?= $value->address ?></td>
            </tr>
        <?php endforeach; ?>
  
</table>