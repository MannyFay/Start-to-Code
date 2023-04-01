<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <title>My Awesome Page | Home</title>
    </head>
    <body>
        <?php include_once "functions/greetUser.php"; ?>
        <h1>My Awesome Page</h1>
        <p>
            <? echo greetUser(); ?>
        </p>
    </body>
</html>

