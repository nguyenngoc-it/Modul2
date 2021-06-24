<?php
include "Validate.php";
include "User.php";
?>
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
<form method="post">
    <table>
        <input type="text" name="user"><br>
        <input type="password" name="pass"><br>

        <button name="signup">Sign Up</button>
    </table>

</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["user"];
    $pass=$_POST["pass"];

    $username= new User( $name, $pass);


}
?>
</body>
</html>