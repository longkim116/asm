<a href="<?= BASE_URL ?>?act=themuser">Thêm mới</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list_user as $value): ?>
        <tr>
            <td><?= $value->id ?></td>
            <td><?= $value->name ?></td>
            <td><?= $value->age ?></td>
            <td><?= $value->address ?></td>
            <td>
                <a href="<?= BASE_URL ?>?act=chitietuser&userid=<?= $value->id ?>">Chi tiết</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>