<?php
session_start();

if(isset($_SESSION['user_name']))
{
   header("Location: FrontPage.php?error=User Name is required");

        exit();
}
else{
    header("Location: index.php");
    exit();
}
?>