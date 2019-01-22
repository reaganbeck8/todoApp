<?php require('conn/conn.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <h1>Input Your Name </h1>

        <input type="text" name="name" placeholder="enter your name here">

    <h1>Task</h1>

        <textarea name="task" placeholder="enter your task that needs to be completed here"></textarea>
    <br>
    <input type="submit" value="submit" name="submit">

    </form>
    <h1 class = "name"><?php  ?></h1>
</body>
</html>