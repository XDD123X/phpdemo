<?php
require_once __DIR__ . '/user.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP SQL Demo</title>
</head>

<body>
    <h2>Danh sách users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php foreach ($users as $u): ?>
            <tr>
                <td><?= htmlspecialchars($u['id']) ?></td>
                <td><?= htmlspecialchars($u['NAME']) ?></td>
                <td><?= htmlspecialchars($u['email']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>