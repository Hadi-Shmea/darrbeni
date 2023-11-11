<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </form method="post" >
    <h2>Add User</h2>
    <form method="post" >
        <label>UserName:</label><input type="text" name="username" placeholder="Username" required>
        <label>Password:</label><input type="password" name="password" placeholder="password" required>
        <br>
        <label>user type:</label>
            <select id="type" name="type" required>
                <option value="normal">Normal</option>
                <option value="admin">Admin</option>
            </select>
        <br>
        <button type="submit" name="add">Add User</button>
    </form>
</body>
</html>