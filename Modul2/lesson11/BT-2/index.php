<?php
session_start();
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

<form action="index.php" method="post" >
    <input type="text" name="num" placeholder="input number">
    <button name="random">random</button>
    <button name="behon">Be hon</button>
    <button name="lonhon">Lon hon</button>
    <?php
    $numbers = range(1, 10, 1);
    if (isset($_POST['random'])) {
      game($numbers);

    }

    function game(array $numbers)
    {

        $num= $_POST['num'];
        var_dump($num);
        $low=0;
        $high= count($numbers)-1;
        while ($low<=$high  )
        {
            $mid= (int)(($low+$high)/2);
            if($numbers[$mid]> $num)
            {
                $high=$mid-1;
                return $numbers[$mid];
            }elseif ($numbers[$mid]<$num){
                $low=$mid+1;
                return $numbers[$mid];
            }else{
                return $numbers[$mid];
            }
        }
        return  false;

    }

    ?>
</form>
</body>
</html>
