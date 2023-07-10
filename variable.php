<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form method="get">
        <input type="text" name="username">
        <button type = "submit">Submit</button>
    </form>

    <!-- Can't use in here. because username variable is declared below this code segment. -->
     <!-- <h1> 
        <?php echo $username ?>  
    </h1>  -->
    
<?php

    //$myname = "Hansani"; //initialize a variable
    //echo $myname; //acceess that variable

    $username = $_GET['username'];
    echo $username." is my name";

?>

    <h1>
        <?php echo $username ?>
    </h1>

    <p>
        <?php echo $username ?>
    </p>

    <a href="#">
        <?php echo $username ?>
    </a>


</body>
</html>