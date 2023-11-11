<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form  method="post">
        
        <?php
        foreach($update_user_data as $update){?>
        <label>UserName:</label><input type="text" name="username" value=<?=$update["username"]?>><br>
        <label>Password:</label><input type="text" name="password" value=<?=$update["password"]?>><br>
        <input type="submit" name="update" value="update">
        <?php } ?>
    </form>

    
</body>
</html>