<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students</title>
    <style>
        body{font-family:Arial,Helvetica,sans-serif;margin:24px}
        a.button, button{background:#2563eb;color:#fff;border:none;padding:8px 12px;border-radius:6px;text-decoration:none;cursor:pointer}
        a.button.secondary{background:#6b7280}
        table{width:100%;border-collapse:collapse;margin-top:16px}
        th,td{border:1px solid #e5e7eb;padding:8px;text-align:left}
        th{background:#f9fafb}
        .actions{display:flex;gap:8px}
    </style>
    </head>
<body>
    <h1>Students</h1>
    <a class="button" href="<?php echo site_url('students/create'); ?>">Add Student</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($students)): ?>
                <?php foreach($students as $s): ?>
                <tr>
                    <td><?php echo htmlspecialchars($s['id']); ?></td>
                    <td><?php echo htmlspecialchars($s['first_name']); ?></td>
                    <td><?php echo htmlspecialchars($s['last_name']); ?></td>
                    <td><?php echo htmlspecialchars($s['email']); ?></td>
                    <td>
                        <div class="actions">
                            <a class="button secondary" href="<?php echo site_url('students/' . $s['id'] . '/edit'); ?>">Edit</a>
                            <form method="post" action="<?php echo site_url('students/' . $s['id'] . '/delete'); ?>" style="display:inline">
                                <button type="submit" onclick="return confirm('Delete this student?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5">No records found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>

