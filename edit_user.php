<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="styles.css">

    <style>
 
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        form {
            width: 100%;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .update-btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }

        .update-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="update_user.php" method="post">
        <input type="hidden" name="user_id" value="<?php echo $userData['id']; ?>">

        <label for="edit_name">Name:</label>
        <input type="text" id="edit_name" name="edit_name" value="<?php echo $userData['name']; ?>" required>

        <label for="edit_email">Email:</label>
        <input type="email" id="edit_email" name="edit_email" value="<?php echo $userData['email']; ?>" required>

        <label for="edit_password">Password:</label>
        <input type="text" id="edit_password" name="edit_password" value="<?php echo $userData['password']; ?>" required>

        <label for="edit_user_type">User Type:</label>
        <select id="edit_user_type" name="edit_user_type" required>
            <option value="admin" <?php echo ($userData['user_type'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
            <option value="user" <?php echo ($userData['user_type'] == 'user') ? 'selected' : ''; ?>>User</option>
        </select>

        <label for="edit_agree_terms">Agree Terms:</label>
        <input type="text" id="edit_agree_terms" name="edit_agree_terms" value="<?php echo $userData['agree_terms']; ?>" required>

        <input type="submit" name="update_user" class="update-btn" value="Update User">
    </form>
</div>

</body>
</html>
