<?php  
include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $sql = "INSERT INTO `items` (`name`, `email`, `password`) VALUES ($name, $email, $password)";
    $stmt = $db -> query($sql);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input class="form-control"  type="text" name="name" placeholder="Type your name">
            <input class="form-control"  type="email" name="email" placeholder="Type your Email">
            <input class="form-control"  type="password" name="password" placeholder="Type your password">
            <input  type="submit" value="send">
        </form>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>



