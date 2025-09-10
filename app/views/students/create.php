<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>
    <style>
        body{font-family:Arial,Helvetica,sans-serif;margin:24px}
        form{max-width:520px}
        label{display:block;margin-top:12px}
        input{width:100%;padding:8px;margin-top:6px;border:1px solid #d1d5db;border-radius:6px}
        .row{margin-top:12px}
        a.button, button{background:#2563eb;color:#fff;border:none;padding:8px 12px;border-radius:6px;text-decoration:none;cursor:pointer}
        a.button.secondary{background:#6b7280}
        .actions{display:flex;gap:8px;margin-top:16px}
    </style>
</head>
<body>
    <h1>Add Student</h1>
    <form method="post" action="<?php echo site_url('students'); ?>">
        <label>First Name
            <input type="text" name="first_name" required>
        </label>
        <label>Last Name
            <input type="text" name="last_name" required>
        </label>
        <label>Email
            <input type="email" name="email" required>
        </label>
        <div class="actions">
            <button type="submit">Save</button>
            <a class="button secondary" href="<?php echo site_url('students'); ?>">Cancel</a>
        </div>
    </form>
</body>
</html>

