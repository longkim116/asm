<?php if($user): ?>
<h1>User cần tìm: </h1>
<ul>
    <li>ID: <?= $user->id ?></li>
    <li>Name: <?= $user->name ?></li>
    <li>Age: <?= $user->age ?></li>
    <li>Address: <?= $user->address ?></li>
</ul>
<?php endif; ?>