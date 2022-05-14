<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="logout.php">Log out</a>
<h1>Your account:</h1>
<p><strong>Name:</strong> <?php echo $_SESSION['name']?></p>
<p><strong>Name:</strong>  <?php echo $_SESSION['last_name']?></p>
<p><strong>Email:</strong> <?php echo $_SESSION['email']?></p>
<p><strong>Username:</strong> <?php echo $_SESSION['username']?></p>
<p></p>

</body>
</html>