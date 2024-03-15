<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   

    $name = htmlspecialchars(($_POST["username"]));
    $pass = htmlspecialchars(($_POST["password"]));
    $color = htmlspecialchars(($_POST["selectcar"]));

   if (empty($name) && empty($pass)){
    echo "<script>alert(`Invalid Password`) </script>";
   }else {
    header("Location: ../process/signin.php");
   }
}
