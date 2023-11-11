
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user list</title>
</head>
<body>

<h1>user list</h1>
    <u1>
        <?php
        foreach($users as $user){?>
        <li><?=         
        $user['username'];
        echo "<a href='update?id=".$user['id']." '><button>edit</button></a>";
        echo "<a href='deleteUser?id=".$user['id']." '><button>delete</button></a>";
        
        ?>
        </li>
        <?php } ?>
    </u1>
    <h2><center><a href="addUser"> add user </a></center></h2>

    
</body>
</html>